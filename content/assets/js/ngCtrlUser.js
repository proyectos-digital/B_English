'use strict';

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

// Controllador Grammar
app.controller('CtrlUser', ['$scope', '$state', '$stateParams', 'ngAudio', '$timeout', '$http', 'funcionesGeneral', 'ApiStatic', 'ApiUserPerfil', function ($scope, $state, $stateParams, ngAudio, $timeout, $http, funcionesGeneral, ApiStatic, ApiUserPerfil) {
    /**
     * Variables y $scope globales
     **
    */
    var
    // establece una conección con el gestor de rutas y captura la información del estado
    estadoRuta = $scope.state = $state.current
    // establece una conección con el gestor de rutas y captura los parametros parados en la ruta URL
    ,
        parametrosRuta = $scope.params = $stateParams,
        globalNotice = document.getElementById('notice'),
        closeNotice = [].concat(_toConsumableArray(document.querySelectorAll('.closeNotice'))),
        open_Notice = [].concat(_toConsumableArray(document.querySelectorAll('.openNotice'))),
        closeNoticeOverlay = document.querySelector('.c-noticeAside-overlay');

    $scope.estadoRuta = estadoRuta.name;
    $scope.ParamsRuta = parametrosRuta.idModule;

    /**
     * Funciones declaradas por maquetación
     * - Estas funciones estan fuera del controlador
     **
    */
    $scope.func_triggerNotice = func_Maqueta.func_triggerNotice(open_Notice);
    $scope.triggerNoticesAside = function (accion) {
        var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : undefined;
        triggerNoticesAside(accion, options = undefined);
    };

    /**
     * Funciones declaradas por Programación
     **
    */

    var usu_id = $('#usu_id').val();
    var nivelid = $('#nivel_usu_id').val();

    $scope.listarPorcentajesModulos = function (unidadid) {

        var variables = {
            unidadid: unidadid,
            usu_id: usu_id,
            nivelid: nivelid,
            control: 'SI'
        };

        ApiUserPerfil.ListPorcentajesMod(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            if (unidadid == 1) $scope.modulosUno = respuesta;
            if (unidadid == 2) $scope.modulosDos = respuesta;
            if (unidadid == 3) $scope.modulosTres = respuesta;
        });
    };

    $scope.estadisticasPerfil = function () {

        var variables = {
            usu_id: usu_id,
            nivelid: nivelid

            // console.log(variables);

        };ApiUserPerfil.EstadisticaPerf(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            angular.forEach(respuesta, function (valor) {

                $scope.correctas = valor.correctas, $scope.incorrectas = valor.incorrectas, $scope.totalPreg = valor.totalPreg;
            });

            $scope.ListadoNotificacionesXEstudiante();
        });
    };

    $scope.estadisticasPerfil();

    // Jh *********************************************************************************************
    // ****************************************************************************************

    // Listado de notificaciones registradas al estudiante - PERFIL DE USUARIO

    $scope.ListadoNotificacionesXEstudiante = function () {

        var variables = {
            idEstudiante: usu_id
        };

        // console.log(variables);

        ApiUserPerfil.ListNotifUser(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            $scope.notificaciones = respuesta;
            $scope.ViewNotifUserCant(usu_id);
        });
    };

    // Abrir el modal de la notif y ver info 

    $('.infoNotif').hide();

    $scope.VerNotificacion = function (idNotif) {

        $('#modalMessage').modal('open');
        $('.infoNotif').hide();
        $('.cargNotif').show();

        var variables = {
            idNotif: idNotif

            // console.log(variables);

        };ApiUserPerfil.VerNotifUser(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            $scope.notificacion = respuesta;
            $scope.tit_notif = respuesta[0].tit_notif;
            $scope.msg_notif = respuesta[0].msg_notif;
            $scope.id_docente = respuesta[0].id_docente;
            $scope.id_estudiante = respuesta[0].id_estudiante;
            $scope.fecha_notificacion = respuesta[0].fecha_notificacion;
            $scope.estado = respuesta[0].estado;
            $scope.hora = respuesta[0].hora_notif;
            $('.cargNotif').hide();
            $('.infoNotif').show();
            $scope.ListadoNotificacionesXEstudiante();
            $scope.ViewNotifUserCant(usu_id);
        });
    };

    $scope.ViewNotifUserCant = function (idUser) {

        var variables = {
            idEstudiante: idUser
        };
        // console.log(variables);

        ApiStatic.ViewNotifUser(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            $scope.cant_notif = respuesta;
            $scope.cant_noview = respuesta[0].cant_notif;

            if ($scope.cant_noview > 0) {
                $scope.ClasNotif = 'onMessage';
                $scope.ClasNotifUser = 'active';
            } else {
                $scope.ClasNotif = '';
                $scope.ClasNotifUser = '';
            }
        });
    };

    // End JH *************************


    if (parametrosRuta.Unidad_id != null && parametrosRuta.Module_id != null && parametrosRuta.Categoria_id != null) {

        $scope.moduloid = $stateParams.Module_id;
        $scope.categoriaid = $stateParams.Categoria_id;
        $scope.unidadid = $stateParams.Unidad_id;

        $scope.algoHaCambiado = {
            aInternal: 1,
            aListener: function aListener(val) {},
            set a(val) {
                this.aInternal = val;
                this.aListener(val);
            },
            get a() {
                return this.aInternal;
            },
            registerListener: function registerListener(listener) {
                this.aListener = listener;
            }
        };
        $scope.algoHaCambiado.registerListener(function (categoriaid) {
            // console.log("The value of x.a to " + categoriaid);
        });

        $scope.progresoActividades = function (categoriaid) {

            $scope.progresoActividadesWriting(categoriaid);
            $scope.progresoActividadesSpeaking(categoriaid);

            $scope.animationTab = false;
            $scope.animationLoading = true;

            var variables = {
                categoriaid: categoriaid,
                moduloid: $scope.moduloid,
                usu_id: usu_id,
                nivelid: nivelid,
                control: 'SI'
            };

            ApiUserPerfil.ProgressActividades(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;
                $scope.actividades = respuesta;
                $scope.animationTab = true;
                $scope.animationLoading = false;
                $scope.algoHaCambiado.a = categoriaid;
            });
        };

        $scope.progresoActividadesWriting = function (categoriaid) {

            var variables = {
                categoriaid: categoriaid,
                moduloid: $scope.moduloid,
                usu_id: usu_id,
                nivelid: nivelid,
                control: 'SI'
            };

            ApiUserPerfil.ProgressActividadesWr(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;
                $scope.writings = respuesta;
            });
        };

        $scope.progresoActividadesSpeaking = function (categoriaid) {

            var variables = {
                categoriaid: categoriaid,
                moduloid: $scope.moduloid,
                usu_id: usu_id,
                nivelid: nivelid,
                control: 'SI'
            };

            ApiUserPerfil.ProgressActividadesSp(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;
                $scope.speakings = respuesta;
            });
        };

        //Listar tabla modulo 1 actv 11 C1

        $scope.listarActividades = function (idejercicio) {

            var variables = {
                idejercicio: idejercicio,
                usu_id: usu_id,
                nivelid: nivelid,
                control: 'SI'
            };

            ApiUserPerfil.ListActividades(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                if (idejercicio == 2) $scope.palabras = respuesta;
                if (idejercicio == 3) $scope.palabrasdos = respuesta;
            });
        };

        //Listar tabla expressiones mycolombia mod1 actv 2 C1
        $scope.listarExpresiones = function (idejercicio) {

            var variables = {
                idejercicio: idejercicio,
                usu_id: usu_id,
                control: 'SI'
            };

            ApiUserPerfil.ListExpresiones(variables).then(function (data) {

                var respuesta = data.data;
                $scope.palabras = respuesta;
            });
        };

        $scope.listarJuegoRolesPerfil = function (idejercicio) {

            var variables = {
                idejercicio: idejercicio,
                usu_id: usu_id
            };

            ApiUserPerfil.listarJuegoRolesPerfil(variables).then(function (data) {

                var respuesta = data.data;
                $scope.respuestajuegoroles = respuesta;
                console.log(data.data);
            });
        };

        $scope.listarVideoiframe = function () {

            var parametros = {
                moduloid: $scope.moduloid,
                usu_id: usu_id
            };

            ApiUserPerfil.ListVideoiframe(parametros).then(function (data) {

                var respuesta = data.data;

                if (respuesta == '') {
                    $scope.videosiframe = '';
                } else {
                    $scope.videosiframe = respuesta[0].iframe_video;
                    $scope.tituloiframe = respuesta[0].titulo;
                    $scope.unidad = respuesta[0].unidad_id;
                    $scope.modulo = respuesta[0].modulo_id;
                    $scope.actividad = respuesta[0].orden;
                }
            });
        };

        // PWER POINT

        $scope.ListPowerPointAct4MyCol = function () {

            var mod_id = $scope.moduloid;

            if (mod_id == 4) {

                var variables = {
                    usu_id: usu_id
                };

                // console.log(parametros);      

                ApiUserPerfil.ListPowerPoint(variables).then(function (data) {

                    // console.log(data.data);
                    var res = data.data;

                    if (res == '') {
                        // console.log('No ha subido el power Point');
                        $scope.NoPoint = true;
                        $scope.OkPoint = false;
                    } else {
                        $scope.NoPoint = false;
                        $scope.OkPoint = true;
                        $scope.powerpoint = res;
                    }
                });
            } else {
                // console.log('Este MODULO No tiene esta actividad');
            }
        };
    }
}]);