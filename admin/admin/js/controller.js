// Controller Principal //*********************************************************************************************

appGeneral.controller('principalctrl',['$http', '$scope', '$routeParams', '$location', 'DTOptionsBuilder', 'DTColumnBuilder', '$q', 'ApiAdmin',
                            function($http, $scope, $routeParams, $location, DTOptionsBuilder, DTColumnBuilder, $q, ApiAdmin){

    $scope.rolUser = $('#rolUser').val();
    $scope.idUser = $('#idUser').val();

    var persona = $('#admsId').val();
    var rolId = $('#rolId').val();
    var grupoid = $routeParams.grupo_id;

    // ---- ↓↓ Collapse del Menú lateral ↓↓ ----
    $scope.prueba1 = function(){
        $(".sub-menu").click(function(){
            var dv_apa = $(this).find('.sub');

            if(!dv_apa.is(":visible")){
                dv_apa.slideDown();
                // console.log("Down");
                $(".sub").not(dv_apa).slideUp();
            } else {
                dv_apa.slideUp();
                // console.log("Up");
            }
        });
    }

    $scope.prueba1();

    //////////////////////listar docentes ///////////////////
    $scope.listarDocentes=function(){

        ApiAdmin.ListDocentes().then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.docentes = res;

        });

    }

    // PRINCIPAL CONTROLLER
    $scope.listarusuarios=function(){

        var parametros = {
            persona: persona,
            rolId: rolId
        };

        // console.log(parametros);
                
        ApiAdmin.ListUsuarios(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;

            $scope.usuarios = res;
            $scope.usuariosDos = res;
            $scope.PreloadAdmin = true;
            $scope.rowPrincipal = true;

        });

    }
   

    $scope.countusuario = function(){

        var parametros = {
            idUser: $scope.idUser,
            rolId: $scope.rolUser
        }

        ApiAdmin.ContUsuarios(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.cusuario = res[0].cusuario;

        });

    }

    $scope.countact = function(actT){

        var parametros = {
            actT: actT
        };

        ApiAdmin.CountActivit(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;

            if(actT == 1){
                $scope.cActiv1 = res[0]['act'];
            }
            if(actT == 2){
                $scope.cActiv2 = res[0]['act'];
            }
            if(actT == 3){
                $scope.cActiv4 = res[0]['act'];
            }

        });

    }


    

//****************************************************************************//
//////////////////// Modulo grupo //////////////////////////////////////////////

    // Lista grupos cesar
    $scope.listarGrupos = function(){

        var parametros = {
            idUser:$scope.idUser,
            rolId:$scope.rolUser
        }

        // console.log(parametros);

        ApiAdmin.ListGrupos(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;

            $scope.listagrupos = res;

            $scope.PreloadAdminGru = true;
            $scope.rowPrincipalGru = true;
            $scope.rowPrincipal = true;

        });

    }


    // Listar usuarios que no tienen grupo asignado en la creación de grupos cesar
    $scope.listarUsuariosGrupo = function(){

        ApiAdmin.ListUserSinGrupo().then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.listausergrupos = res;

        });

    }


    // Listar detalle del grupo seleccionado para editar - Estudiantes que estan asignados al grupo
    $scope.listarEditarGrupo = function(){

        var parametros = {
            grupoid:$routeParams.grupo_id
        }

        ApiAdmin.ListEditarGrupo(parametros).then(function (data) {

            $scope.ListarEstuGruposEdit();

            // console.log(data.data);
            var res = data.data;            

            angular.forEach(res,function(valor){

                $scope.nombreGrupo = valor.grupo_nombre;
                $scope.iddocente = valor.grupo_docente;
                var idusuariosel =valor.id_estudiante;
                var unidadesSel= valor.grupo_units.split(",")
                var modulosSel= valor.grupo_mod.split(",")

                unidadesSel.forEach(function(val,k){
                    $('#unit'+val).prop('checked',true); // chekeo las unidades seleccionadas cuando se creó el grupo
                });

                modulosSel.forEach(function(val,k){
                    $('#c-mod_'+val).prop('checked',true); // chekeo los modulos seleccionadas cuando se creó el grupo
                });

            })

        });

    }

    // Listar estudiantes del grupo seleccionado

    $scope.ListarEstuGruposEdit = function(){

        var parametros = {
            grupoid:$routeParams.grupo_id
        }

        ApiAdmin.ListEstuGrupoEdit(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;

            $scope.PreloadAdminGru = true;
            $scope.rowPrincipalGru = true;
            $scope.PreloadAdminUsu = true;
            $scope.rowPrincipalLusu = true;

            if (res == 'null' || res == ''){
                // console.log('No hay estudiantes en este grupo');
            }else{
                $scope.listausereditgrupos = res;
                $scope.grupo_nombre = res[0].grupo_nombre;
                console.log(data.data)
            }

        });

    }

    // Quitar los usuarios del grupo en editar grupós
    $scope.removerUsuarioGrupo = function(usuarioid){

        var parametros = {
            usuarioid:usuarioid
        }

        swal({
            title: "Are you sure?",
            text: "The student will be removed from this group",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, remove it!",
            cancelButtonText: "No, cancel",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {

            if (isConfirm) {

                ApiAdmin.RemoveUserGrupo(parametros).then(function (data) {

                    // console.log(data.data);
                    var res = data.data;
                    swal("Removed!", "The student has been removed from the group", "success");
                    $location.path('lista_grupos');


                });

            } else {
                swal("Cancelled", "Cancelled", "error");
              }

        });

    }

    // Nuevo crear grupo cesar
    $scope.CrearGrupo=function(accion){ // La accion es 1 para crearGrupos y 2 para actualizarGrupos
        var valorUnit;
        var valorModulo;
        var valorAlumno;
        var arrayUnit=[];
        var arrayAlumno=[];
        var arrayModulos=[];


        $('.units:checked').each(function(indice,campo){
            valorUnit = $(this).val()
            arrayUnit.push(valorUnit);
        })

        $('.chkAlumnos:checked').each(function(indice,campo){
            valorAlumno = $(this).val()
            arrayAlumno.push(valorAlumno);
        })
        $('.modulosel:checked').each(function(indice,campo){
            valorModulo = $(this).val()
            arrayModulos.push(valorModulo);
        })
      


        if(
            $scope.iddocente === undefined || 
            $scope.nombreGrupo === undefined || 
            $scope.nombreGrupo == ''|| 
            arrayUnit == ''|| 
            arrayAlumno == ''
           ){
            swal("Incomplete fields","Check again","warning");
        }else{

            var parametros = {
                nomGrupo:$scope.nombreGrupo,
                docenteid:$scope.iddocente,
                unidadesid:arrayUnit.toString(),
                usuariosid:arrayAlumno.toString(),
                usuariosarray:arrayAlumno,
                modulosid:arrayModulos.toString(),
                accion:accion,
                grupoid:$routeParams.grupo_id
            }

            // console.log(parametros);

            swal({
                title: "Confirmation",
                text: "Do you want to record the group information?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#F4AD33",
                confirmButtonText: "Save",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {

                if (isConfirm) {

                    ApiAdmin.CrearNuevoGrup(parametros).then(function (data) {

                        // console.log(data.data);
                        var res = data.data;

                        if(res == 1){
                            swal("error","There is already a group with that name","error")
                        }else{
                            swal("Saved","saved","success")
                            $location.path('lista_grupos');
                        }

                    });

                }

            }); //end swall            

        }

    }


    // SELECT TODOS LOS CHECKBOX

    var alumnosCurso = new Array();
    $scope.alumnoCursoLength =0;
    $scope.alumnosCursoId;

    $scope.selectAllCheckbox= function(){

      chkedAlumnos = document.getElementsByClassName("chkAlumnos");

      if(document.getElementById('chkAll').checked){
          for(var i=0; i<chkedAlumnos.length; i++) {
            var elemento = chkedAlumnos[i].id;
              if(!document.getElementById(elemento).checked) {
                  document.getElementById(elemento).checked = true;
                  if (alumnosCurso.indexOf(elemento) === -1) {
                        alumnosCurso.push(elemento);
                  }
              }
          }
          //console.log(alumnosCurso.length);
        }else{
          for(var i=0; i<chkedAlumnos.length; i++) {
          	var elemento = chkedAlumnos[i].id;
            if(document.getElementById(elemento).checked) {
                document.getElementById(elemento).checked = false;
                var alDel = alumnosCurso.indexOf(elemento);
                if (alDel !== -1) {
                    alumnosCurso.splice(alDel,1);
                    }
            }
          }
        }
        $scope.alumnoCursoLength = alumnosCurso.length;
        $scope.alumnosCursoId = alumnosCurso;

      $('.paginate_button ').click(function(){
      		var contCheck =0;
      		$('.chkAlumnos').each(function(){
      			if(!$(this).is(":checked")){
      				contCheck++;
      			}
      		});
      		if(contCheck !==0){
            	$('#chkAll').prop('checked', false);
        	}else{
        		$('#chkAll').prop('checked', true);
        	}
      });

    }

    
    // Listar modulos  - Controller principal
    $scope.listarmodulos = function(){
        ApiAdmin.ListModulos().then(function (data) {

            var res = data.data;
            $scope.modulos = res;

            // $scope.PreloadAdminReport = true;
            // $scope.rowPrincipalReporte = true;

        });
       
    }

    $scope.listarforosgrupo = function(moduloid){
        var parametros = {
            moduloid:moduloid,
            grupoid:$routeParams.grupo_id
        }

        $scope.modulonom = moduloid;

        $('#modconsulta').val(moduloid);

        ApiAdmin.ListForoGroup(parametros).then(function (data) {
            var res = data.data;
            $scope.forosgrupo = res;
            // console.log(data.data)

        });
       
    }

    $scope.CambiarEstadosForo = function(){
        var estadoforo;
        var estadocomentario;
        var foroid;

        // Actualizo el estado del foro para el grupo si se muestra o no en la plataforma
        $(document).on('click','.forosactiv', function() {
            foroid= $(this).attr('foroid');
            if( $(this).is(':checked') ){
                estadoforo=1;
            }else{
                estadoforo=0;
            }

            var parametros= {
                estadoforo:estadoforo,
                foroid:foroid,
                grupoid:$routeParams.grupo_id,
                accion:1
            }

            ApiAdmin.UpdateEstadoForo(parametros).then(function (data) {
                var res = data.data;
                console.log("Guardado!!")    
            });
            
            
        })

        // Actualizo el estado del comentario del foro para el grupo si se muestra o no en la plataforma
        $(document).on('click','.comentariosactiv', function() { 
            foroid= $(this).attr('foroid');
            if( $(this).is(':checked') ){
                estadocomentario=1;
            }else{
                estadocomentario=0;
            }

            var parametros= {
                estadocomentario:estadocomentario,
                foroid:foroid,
                grupoid:$routeParams.grupo_id,
                accion:2
            }

            ApiAdmin.UpdateEstadoForo(parametros).then(function (data) {
                var res = data.data;
                console.log("Guardado!!")     
            });
        })


        
    }


    $scope.respuestasForo = function(foroid){

        var parametros = {
            moduloid:$('#modconsulta').val(),
            foroid:foroid,
            docenteid:$('#admsId').val(),
            grupoid:$routeParams.grupo_id
        }

        $scope.foroid=foroid;
        // console.log(parametros)

        ApiAdmin.respuestasForo(parametros).then(function (data) {
            var res = data.data;
            $scope.respuestasForoAdmin = res;

        });

    }

    $scope.enviarForoAdmin = function(){
        
        var textoforo= $('.c-foro__text-box').val();

        var parametros = {
            textoforo:textoforo,
            usu_id:$('#admsId').val(),
            foroid:$scope.foroid,
            grupoid:$routeParams.grupo_id
        }

        if(textoforo == '' || textoforo == null || textoforo=='null'){

        }else{

            ApiAdmin.enviarForoAdmin(parametros).then(function(data){
                $scope.respuestasForo($scope.foroid);
                console.log(data.data)
            });
            $('.c-foro__text-box').val('');
        }
    }





self.clearInterval(myVar);

}]); // End Controller principalctrl

var myVar;

///////////////////////////////////////////////////////


appGeneral.controller('controlUsuarios', controlUsuarios);

function controlUsuarios($http,$scope,$routeParams,$location,DTOptionsBuilder, DTColumnBuilder,$q, ApiAdmin){

    var vm = this;
    vm.dtInstance = {};

    var defer = $q.defer();

    // JH *********************************************************************************

    //  idUserEstudiante
    var usu_id = $routeParams.usu_id;
    //  idUserSesion
    var idDocente = $('#idUser').val();

    $scope.rolUser = $('#rolUser').val();
    var rolId = $('#rolId').val();

    // alert('Doc: ' + idDocente + ' Estu: ' + usu_id);

    // Jh *********************************************************************************
    // ************************************************************************************

    // Registrar Notificaciones para un estudiante por parte del docente

    $scope.RegistrarNotificacionEst = function () {

        var tit_notif = $scope.tit_notif_reg;
        var msg_notif = $scope.msg_notif_reg;

        if (tit_notif == null || msg_notif == null || tit_notif == '' || msg_notif == '') {
            swal("Alert!", "Empty fields", "warning");
        }
        else {

            var parametros = {
                idDocente: idDocente,
                idEstudiante: usu_id,
                tit_notif: tit_notif,
                msg_notif: msg_notif
            };

            // console.log(parametros);

            swal({
                title: "Confirmation",
                text: "Do you want to send the notification?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#F4AD33",
                confirmButtonText: "Send",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {

                if (isConfirm) {

                    ApiAdmin.RegistroNotifEstud(parametros).then(function (data) {

                        // console.log(data.data);
                        var res = data.data;

                        if (res == 1) {
                            swal("Right!", "Notification sent", "success");
                            $scope.ListadoNotificacionesXEstudiante();
                            $('#modal1').modal('close');
                            $scope.tit_notif_reg = '';
                            $scope.msg_notif_reg = '';
                        } else {
                            swal("Error!", "The notification could not be sent", "error")
                        }

                    });

                }

            }); //end swall

        }

    }

    // Listado de notificaciones registradas al estudiante - reporte usuario

    $scope.ListadoNotificacionesXEstudiante = function () {

        var parametros = {
            idDocente: idDocente,
            idEstudiante: usu_id
        };

        // console.log(parametros);

        ApiAdmin.ListNotifEstudiante(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.notificaciones = res;


        });

    }

    // Abrir el modal de la notif y ver info 
    $('.infoNotif').hide();
    $scope.VerNotificacion = function (idNotif) {
        
        $('#modal2').modal('open');
        $('.infoNotif').hide();
        $('.cargNotif').show();

        var parametros = {
            idNotif: idNotif
        }
        console.log(parametros);

        ApiAdmin.ViewNotif(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.notificacion = res;
            $scope.tit_notif = res[0].tit_notif;
            $scope.msg_notif = res[0].msg_notif;
            $scope.id_docente = res[0].id_docente;
            $scope.id_estudiante = res[0].id_estudiante;
            $scope.fecha_notificacion = res[0].fecha_notificacion;
            $scope.estado = res[0].estado;
            $scope.hora = res[0].hora_notif;
            $('.cargNotif').hide();
            $('.infoNotif').show();

        });

    }


    $scope.listaroles=function(){

        ApiAdmin.ListRoles().then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.roles = res;

        });
        
    }

    $scope.ListarUnidades=function(){

        ApiAdmin.ListUnidades().then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.unidades = res;

        });

    }

    $scope.ListarModuloUnit=function(idUnit){
        
        if(idUnit != undefined){

            $scope.spinnerResetUser = true;
            $scope.listModulos = false;
            
            var parametros = {
                idUnit:idUnit
            };

            // console.log(parametros);
            
            ApiAdmin.ListModulUnit(parametros).then(function (data) {

                // console.log(data.data);
                var res = data.data;

                $scope.modulosxunit = res;

                $scope.spinnerResetUser = false;
                $scope.listModulos = true;

            });
        }

    }


   // Controller USUARIOS - LISTAR MODULOS

    $scope.listarmodulos = function(){

        ApiAdmin.ListModulos().then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.modulos = res;

            // $scope.PreloadAdminReport = true;
            // $scope.rowPrincipalReporte = true;

        });
       
    }

    // $scope.listarmodulos();


//////////////////fin listar Estudiantes ADMIN ////////////////// JH

    // CONTROL USUARIOS

    $scope.listarusuarios=function(){

        var parametros = {
            persona: idDocente,
            rolId: rolId
        };
              
        ApiAdmin.ListUsuarios(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;

            $scope.usuarios = res;
            $scope.usuariosDos = res;
            $scope.PreloadAdminUsu = true;
            $('.PreloadAdmin').hide();
            $scope.rowPrincipalLusu = true;

        });

    }

    //insertar usuarios
    $scope.crearusuarios=function(){

        var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if ( !expr.test($scope.email) ){
            swal("Info!", "Invalid email!", "warning");
        }else if(
                $scope.nombre == undefined || $scope.nombre == '' || $scope.nombre == null ||
                $scope.apellido == undefined || $scope.apellido == '' || $scope.apellido == null ||
                $scope.email == undefined || $scope.email == '' || $scope.email == null ||
                $scope.nivel_id == undefined || $scope.nivel_id == '' || $scope.nivel_id == null ||
                $scope.contrasena == undefined || $scope.contrasena == '' || $scope.contrasena == null ||
                $scope.conf_contrasena == undefined || $scope.conf_contrasena == '' || $scope.conf_contrasena == null ||
                $scope.tipo_usuario == undefined || $scope.tipo_usuario == '' || $scope.tipo_usuario == null
                )
            {
                swal("Info!", "empty fields!", "warning");
            }else if($scope.contrasena != $scope.conf_contrasena){

                swal("Info!", "different passwords!", "warning");
            }

        else{

            var parametros = {
                nombre:$scope.nombre,
                apellido:$scope.apellido,
                email:$scope.email,
                nivel_id:$scope.nivel_id,
                contrasena:$scope.contrasena,
                conf_contrasena:$scope.conf_contrasena,
                tipo_usuario:$scope.tipo_usuario
            };

            // console.log(parametros);

            swal({
                title: "Confirmation",
                text: "Are you sure to save this information?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#F4AD33",
                confirmButtonText: "Save",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm){

                if (isConfirm){

                    ApiAdmin.CrearUsuario(parametros).then(function (data) {

                        var res = data.data;
                        console.log(res);

                        if(res == 1){
                            swal("Very Good!", "Stored data" , "success");
                            $location.path("/Listar_usuarios");
                        }else{
                            swal("Error!", "I do not save" , "error");                            
                        }

                    });
                }

            });
        }  

    } //end funcion


    // Editar usuario
    $scope.crearusuariosEditar=function(){

        var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if ( !expr.test($scope.email) ){
            swal("Info!", "Invalid email!", "warning");
        }else if(
                $scope.nombre == undefined || $scope.nombre == '' || $scope.nombre == null ||
                $scope.apellido == undefined || $scope.apellido == '' || $scope.apellido == null ||
                $scope.email == undefined || $scope.email == '' || $scope.email == null ||
                // $scope.nivel_id == undefined || $scope.nivel_id == '' || $scope.nivel_id == null ||
                // $scope.contrasena == undefined || $scope.contrasena == '' || $scope.contrasena == null ||
                // $scope.conf_contrasena == undefined || $scope.conf_contrasena == '' || $scope.conf_contrasena == null ||
                $scope.tipo_usuario == undefined || $scope.tipo_usuario == '' || $scope.tipo_usuario == null
                )
            {
                swal("Info!", "empty fields!", "warning");
            }else if($scope.contrasena != $scope.conf_contrasena){

                swal("Info!", "different passwords!", "warning");
            }

        else{

            var parametros = {
                nombre:$scope.nombre,
                apellido:$scope.apellido,
                email:$scope.email,
                // nivel_id:$scope.nivel_id,
                // contrasena:$scope.contrasena,
                // conf_contrasena:$scope.conf_contrasena,
                tipo_usuario:$scope.tipo_usuario,
                usu_id:usu_id,
            };

            // console.log(parametros);

            swal({
                title: "Confirmation",
                text: "Are you sure to save this information?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#F4AD33",
                confirmButtonText: "Save",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm){

                if (isConfirm){

                    ApiAdmin.CrearUsuarioEdit(parametros).then(function (data) {

                        var res = data.data;
                        console.log(res);

                        if(res == 1){
                            swal("Very Good!", "Stored data" , "success");
                            $location.path("/Listar_usuarios");
                        }else{
                            swal("Error!", "I do not save" , "error");                            
                        }

                    });

                }

            });

        }  

    } //end funcion


    $scope.editarUsuarios = function (){

        var parametros = {
            usu_id:usu_id
        };

        ApiAdmin.EditUser(parametros).then(function (data) {

            var res = data.data;
            // console.log(res);

            $scope.nombre = res[0].nombre;
            $scope.apellido = res[0].apellido;
            $scope.email = res[0].email;
            $scope.fecha_ingreso = res[0].fecha_ingreso;
            $scope.tipo_usuario = res[0].rol_id;

            $scope.PreloadAdmin = true;
            $scope.rowPrincipal = true;
            $scope.editUser = true;

        });

    }

    $scope.activarUsuarios= function(usuid,estadousu){

        var estado;

        if(estadousu == 0){
            estado = 1
        }
         if(estadousu == 1){
            estado = 0
        }

        var parametros = {
            usu_id:usuid,
            estado:estado
        }

        // console.log(parametros)

         swal({
                title: "Confirmation",
                text: "Are you sure you will take this action?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#F4AD33",
                confirmButtonText: "Guardar",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm){

                if (isConfirm){

                    ApiAdmin.ActivarDescActUser(parametros).then(function (data) {

                        // console.log(data.data);
                        var res = data.data;

                        if(res == 1){
                            swal("Very Good!", "Modified state" , "success");
                            $scope.listarusuarios();
                        }else{
                            swal("Error!", "I do not save" , "error");                        
                        }

                    });

              }
        });

    }

$scope.verIdUser = function(idUserl){
    $scope.idUser = idUserl;
}

$scope.ReiniciarActUser = function(){

    var usu_id = $scope.idUser;
    var modid = $scope.idModu;

    // console.log(modid);

    if(modid == undefined){
        swal("Info!", "You must select unit and module" , "error");
    }else{

        var  parametros = {
            usu_id:usu_id,
            modid:modid
        }

        // console.log(parametros);

        swal({
            title: "Are you sure?",
            text: "Do you want to restart the user?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#F4AD33",
            confirmButtonText: "Save",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: true
            }, function(isConfirm){

                if (isConfirm){

                    ApiAdmin.ReiniciarUser(parametros).then(function (data) {

                        // console.log(data.data);
                        var res = data.data;

                        if(res == 1){
                            swal("Very Good!", "User - Module Reset" , "success");
                        }else{
                            swal("Error!", "I do not save" , "error");                        
                        }

                    });

              }

        });

    }

}

//////////// funciones para listar respuestas usuario //////////////////

    $scope.listarRespuestasActv= function(mod_id){

        $scope.ViewAdminGeneral = false;
        $scope.PreloadAdminMod = false; 

        $('#modenvioid').val(mod_id);

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListRespActividades(parametros).then(function (data) {

            var res = data.data;
            $scope.respuestas = res;          
            // console.log(res);

            $scope.cantidadPreguntas(mod_id);
            $scope.listarRespuestasSelf(mod_id);
            $scope.listarRespuestasTest(mod_id);
            $scope.listarRespuestasMycol(mod_id);

            $scope.listarWriting(mod_id);
            $scope.listarWritingSelf(mod_id);
            $scope.listarWritingTest(mod_id);
            $scope.listarWritingMyCol(mod_id);

            $scope.listarSpeakingAct(mod_id);
            $scope.listarSpeakingSelf(mod_id);
            $scope.listarSpeakingTest(mod_id);
            $scope.listarSpeakingMyCol(mod_id);

            $scope.ListPowerPointAct4MyCol(mod_id);
            $scope.listarVideoiframe(mod_id);

            $scope.listaEstadoTest(mod_id);

        });

    }

    $scope.listarRespuestasSelf = function(mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListRespuestasSelf(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasSelf = res;
            
        });

    }

    $scope.listarRespuestasTest = function(mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListRespuestasTest(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasTest = res;
            
        });

    }

    $scope.listarRespuestasMycol = function(mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListRespuestasMycol(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasMycol = res;
            
        });

    }

    ///////////// LISTAR WRITING ////////////////

    $scope.listarWriting= function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id
        };

        ApiAdmin.ListRespWriting(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasWriting = res;

        });

    }

    $scope.listarWritingSelf= function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListWritingSelf(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasWrSelf = res;

        });

    }

    $scope.listarWritingTest = function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListWritingTest(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasWrTest = res;

        });

    }

    $scope.listarWritingMyCol = function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id

        };

        ApiAdmin.ListWritingMyCol(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasWrMycol = res;

        });

    }

//////////////////////   FIN  /////////////////////////////////


///////////// LISTAR SPEAKING ////////////////

    $scope.listarSpeakingAct= function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id
        };

        ApiAdmin.ListSpeakingAct(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasSpAct = res;

        });

    }

    $scope.listarSpeakingSelf= function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id
        };

        ApiAdmin.ListSpeakingSelf(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasSpSelf = res;

            $scope.PreloadAdminReport = true;
            $scope.rowPrincipalReporte = true;

            $scope.ViewAdminGeneral = true;
            $scope.PreloadAdminMod = true; 

        });

    }

    $scope.listarSpeakingTest = function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id
        };

        ApiAdmin.ListSpeakingTest(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasSpTest = res;

        });

    }

    $scope.listarSpeakingMyCol = function (mod_id){

        var parametros = {

            usu_id:usu_id,
            mod_id:mod_id
        };

        ApiAdmin.ListSpeakingMyCol(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.respuestasSpMyCol = res;

        });

    }

//////////////////////   FIN  /////////////////////////////////

    $scope.ListPowerPointAct4MyCol = function (mod_id) {

        $scope.NoPoint = false;

        if(mod_id == 4){

            var parametros = {
                usu_id: usu_id           
            };
            
            // console.log(parametros);           
            
            ApiAdmin.ListPowerPoint(parametros).then(function (data) {
                
                // console.log(data.data);
                var res = data.data;
                
                if(res == ''){
                    // console.log('No ha subido el power Point');
                    $scope.NoPoint = true;
                    $scope.OkPoint = false;
                }else{
                    $scope.NoPoint = false;
                    $scope.OkPoint = true;
                    $scope.powerpoint = res;
                }
                
            });
            
        } else{
            // console.log('Este MODULO No tiene esta actividad');
        }

    }

    $scope.listarVideoiframe = function (mod_id) {

        let variables = {
            moduloid: mod_id,
            usu_id: usu_id
        }

        ApiAdmin.ListVideoiframe(variables).then(function (data) {

            console.log(data.data)
            var respuesta = data.data;

            if (respuesta == '') {
                $scope.videosiframe = '';
                $scope.OkVideo = false;
                $scope.NoVideo = true;
            } else {

                $scope.videosiframe = respuesta[0].iframe_video;
                $scope.tituloiframe = respuesta[0].titulo;
                $scope.NoVideo = false;
                $scope.OkVideo = true;

            }

        });

    }

//////////////////////

    $scope.cantidadPreguntas = function(mod_id){

         var parametros = {

            usu_id:usu_id,
            mod_id:mod_id
        };

        ApiAdmin.CantPreguntas(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;
            $scope.npreguntas = res[0].Npreguntas;
            $scope.ncontestadas= res[0].resContestadas;
            $scope.ncorrectas= res[0].resBien;
            $scope.nombreModulo= res[0].titulo;
            $scope.idModulo= res[0].id;

            var porcentaje = ($scope.ncorrectas * 100) / $scope.npreguntas;

            $scope.percent = porcentaje;

        });

    }

//////////////////////

$scope.GuardarPuntaje= function(preguntaid,notaFinal,categoria){

    var minota= notaFinal;
    var idpregunta= preguntaid;
    var categoriapre = categoria;
    var notafin = (minota * 100) / 25;
    var idModulo = $('#idModulo').val();

    if(minota == '' || minota == undefined || minota == null){
        swal("Error!", "You have not selected a note" , "error");
    }else{

        var parametros = {
            nota:notafin,
            idpregunta:idpregunta,
            categoriapre:categoriapre,
            usu_id:usu_id
        }

        // console.log(parametros);

        swal({
            title: "Are you sure?",
            text: "Do you want to send this rating?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#F4AD33",
            confirmButtonText: "Save",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: true
            }, function(isConfirm){

                if (isConfirm){

                    ApiAdmin.GuardaPuntaje(parametros).then(function (data) {

                        // console.log(data.data);
                        var res = data.data;

                        if(res == 1){

                            swal("Very Good!", "Registered note" , "success");

                            $scope.cantidadPreguntas(idModulo);
                            $scope.listarRespuestasSelf(idModulo);
                            $scope.listarRespuestasTest(idModulo);

                            $scope.listarWriting(idModulo);
                            $scope.listarWritingSelf(idModulo);
                            $scope.listarWritingTest(idModulo);
                            $scope.listarWritingMyCol(idModulo);

                            $scope.listarSpeakingAct(idModulo);
                            $scope.listarSpeakingSelf(idModulo);
                            $scope.listarSpeakingTest(idModulo);
                            $scope.listarSpeakingMyCol(idModulo);

                            $('.modal-backdrop').hide();
                            $('body').removeClass('modal-open');

                        }else{
                            swal("Error!", "I do not save" , "error");                        
                        }

                    });

                }

        });

    }
        
}

//exportar excel desde la vista reportes usuarios

$scope.exportarExcel= function (idtable,rta,titulo) {

	var tabla = idtable;
	var rta = rta;
	var titulo = titulo;
  //  var blob = new Blob([document.getElementById(tabla).innerHTML], {
  // type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=utf-8"
  //  });
    var mystyle = {
        sheetid: titulo,
        headers: true,
        caption: {
          title:'',
          style:'font-size: 50px; color:blue;' // Sorry, styles do not works
        },
        style:'background:transparent',
        column: {
          style:'font-size:30px'
        },
        columns: [
          {columnid:'pre_tit',title: 'Tittle', width:300},
          {columnid:'res_cantidad_pre', title: 'N questions',
          	cell: {
              value: function(value){return parseInt(value)}
            }
      	  },
          {columnid:'res_bien', title: 'Good',
            cell: {
              value: function(value){return parseInt(value)}
            }
      	  },
          {columnid:'res_val', title: 'Result',
            cell: {
              value: function(value){
                return parseInt(value)}
            }
      	  },
          {columnid:'dificultad', title: 'Diffit',
            cell: {
              value: function(value){return parseInt(value)}
            }
      	  },
        ],
        row: {
          style: function(sheet,row,rowidx){
            return 'background:'+(rowidx%2?'#f4f4f4':'');
          }
        }
    };
    //saveAs(blob, "Report.xls");
    alasql('SELECT * INTO XLS("'+titulo+'.xls",?) FROM ?',[mystyle,rta]);
}


//funciones para manejar el chat
    var refresh = function () {
        //console.log('recargo');
        $scope.conversacion($scope.historial, $scope.amistad, "recarga");
        // datatable();
    };


    var CountSecuencia = 0;

    $scope.conversacion = function (id, nombre, img) {

        var parametros = {
            case: "uno",
            receptor: id,
            transitor: $('#admsId').val()
        };

        // console.log(parametros);

        ApiAdmin.ConversacionChat(parametros).then(function (data) {

            // console.log(data.data);
            var res = data.data;

            $scope.conversaciones = res;
            $scope.historial = id;
            $scope.amistad = nombre;

            if(img !== "recarga"){

                $('.chat__card').removeAttr('style');
                $('.chat__card').show();
                $('.chat__header--closeChat').click(function(){
                    $('.chat__card').hide();
                 });
                if(img === null){
                    $scope.imgChat = 'img/avatar.png';

                } else {
                    $scope.imgChat = '../../templates/'+img
                }

            }

        });

        if(CountSecuencia === 0){
            myVar = self.setInterval(refresh, 60000);
            CountSecuencia++;
        }
    };



    $scope.mensaje = function () {

        if($scope.mensajeChat == '' || $scope.mensajeChat == undefined){

            // console.log('Mensaje vacio');

        }else{

            // console.log($scope.mensajeChat);

            var parametros = {
                case: "dos",
                mensajes: $scope.mensajeChat,
                receptor: $scope.historial,
                transitor: $('#admsId').val(),
            };

            // console.log(parametros);

            ApiAdmin.ConversacionChat(parametros).then(function (data) {

                // console.log(data.data);
                var res = data.data;

                $scope.mensajeChat = "";
                $scope.conversacion($scope.historial, $scope.amistad, "recarga");

            });

        }

    };


    $scope.listaEstadoTest = function(moduloid){
        var parametros = {
            moduloid:moduloid,
            usu_id:usu_id

        }
        // console.log(parametros)

        ApiAdmin.ListEstadoTest(parametros).then(function (data) {
            var res = data.data;
            $scope.estadotest=res[0].estado;
            console.log(res)

        });
    }
    

    

    $scope.CambiarEstadoTest = function(){
        var estadotest;
        var testid;
        // Actualizo el estado del test para el estudiante de ese modulo
        $(document).on('click','.estadotest', function() {

            var modenvioid= $('#modenvioid').val();
            testid= $(this).attr('testid');

            if( $(this).is(':checked') ){
                estadotest=1;
            }else{
                estadotest=0;
            }

            var parametros= {
                estadotest:estadotest,
                moduloid:modenvioid,
                usu_id:usu_id
            }

            ApiAdmin.UpdateEstadotest(parametros).then(function (data) {
                var res = data.data;
                swal("¡Saved!","Modified test status","success")    
            });
            
            
        })
        
    }



self.clearInterval(myVar);

}; // End Controller Usuarios
