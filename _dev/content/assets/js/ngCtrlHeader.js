// app.controller

// Controllador global
app.controller('CtrlHeader', ['$scope', '$state', '$stateParams', '$http', 'ApiStatic', function($scope, $state, $stateParams, $http, ApiStatic){

    $scope.unidadid     =$stateParams.Unidad_id;
    $scope.moduloid     = $stateParams.Module_id;
    $scope.actividadid  = $stateParams.Activity_id;

    /**
     *  variables Controlador
     */
    let
        estadoRuta = $state.current // Información en Json de la ruta
        , parametrosRuta = $scope.params = $stateParams // parametros enviados por el state del uiRoute
        , selector_mainTemplate = document.getElementById('viewApp')
        , selector_templateHeader = document.querySelector('template-header')
        , arr_listObjectives = []
        , create_modalObjectives = (content, id_container, id_content) => {
            // crear contenedor interno
            const modalContentEl = createCustomElement(
                "div",
                {
                    id: id_content,
                    class: "ed-modal-content"
                },
                [content]
            ),
            // crear contenedor principal
            modalContainerEl = createCustomElement(
                "div",
                {
                    id: id_container,
                    class: "ed-modal-container c-modalObjective"
                },
                [modalContentEl]
            );
    
            let modalId = modalContainerEl.attributes.id.value;
            let FatherDOM = document.getElementById("viewApp");
    
            // Imprimir el modal
            if (FatherDOM) FatherDOM.appendChild(modalContainerEl);
            // Agregar clase para animar elemento
            setTimeout(function() {
                document.getElementById(modalId).classList.add("is-active");
            }, 10);
            setTimeout(function() {
                [...document.getElementById('ul_ObjetiveDescription').childNodes].map(el => {
                    if (el.nodeName == '#text'){
                        return el.textContent = ''
                    }
                })
            }, 100);
    
            // Remover el modal
            const removeModal = () => {
                // Remover Clase de animación el modal
                if(document.getElementById(modalId)) document.getElementById(modalId).classList.remove("is-active");
                if(document.getElementById(modalId)) document.getElementById(modalId).classList.add("is-remove");
    
                setTimeout(function() {
                    if (FatherDOM) {
                        FatherDOM.removeChild(modalContainerEl);
                        arr_listObjectives = []
                    }
                }, 330);
            };
    
            // setTimeout(function() { removeModal() }, 2500);
    
            modalContainerEl.addEventListener("click", e => {
                if (e.target === modalContainerEl) removeModal();
            });
        }
        , modalObjectives = (arrObjectives) => {
            // let w = [...arrObjectives[0].objectives], wer = w.map(el => el)
            // console.log( [...arrObjectives[0].objectives])
            // console.log(wer.map(el => el))
            // let w = arrObjectives[0].objectives          
            arrObjectives.forEach((objs, i) => {
                return [...objs.objectives].forEach((el, f) => {
                    arr_listObjectives.push(el.objectives)
                })
            })
            // console.log(arr_listObjectives.split(","))
            // console.log(arr_listObjectives );
            return create_modalObjectives(`
                    <style>
                    .c-modalObjective .ed-modal-content {
                        width: 100%;
                        max-width: 100vw;
                    }
                    .c-modalObjective{
                        background-color: rgba(255, 255, 255, 0.6);
                    }
                    .c-modalObjective::before {
                        content: 'x';
                        color: #0e0e0e;
                        position: absolute;
                        top: 2rem;
                        right: 3rem;
                        font-size: 1.8em;
                        opacity: .5;
                        width: 3rem;
                        text-align: center;
                    }
                    </style>
                    <div class="template-content">
                        <section class="ed-modal-content--section" style=" background-color: white; text-align: left; ">
                            <div class="row-flex c-moduleObjetive">
                                <div class="col-flex-md6 showTo-md">
                                <figure class="c-figure-Rombo">
                                    <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_${$scope.unidadid}/module_${$scope.moduloid}/assets/images/obj_1.png" alt=""></div>
                                </figure>
                                </div>
                                <div class="col-flex-md6 col-flex-xs12 col-flex-sm8 col-center">
                                    <div class="row">
                                        <div class="c-moduleObjetive-title"><img class="u-responsive-img c-moduleObjetive-img" src="../assets/multimedia/images/app/obj_title.png" alt=""></div>

                                        <ul class="c-moduleObjetive-description browser-default" id="ul_ObjetiveDescription">
                                            <li class="c-moduleObjetive-items">${arrObjectives[0].title}</li>
                                            `+arr_listObjectives.map(el => `<li class="c-moduleObjetive-items">${el}</li>`)+`
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                `, "c-modal_objectives", "c-modal_objectives-container")
        }
    ;

    var idUser = $('#usu_id').val();

    $scope.triggerNavigationMenu = (Elm, accion) => { triggerNavigationMenu(Elm, accion) };
    
    $scope.objectivesModulesini = function(){

        var variables = {
            usuid:idUser,
            moduloid:$scope.moduloid,
            nivelid: $('#nivel_usu_id').val()
        }


        ApiStatic.ObjectModules(variables).then(function(data){
    
            // console.log(data.data);
            var respuesta = data.data;
            $scope.objectivesModules=respuesta;
            $scope.callObjectiveModal = () => modalObjectives($scope.objectivesModules)
        })
    }

    $scope.objectivesModulesini();

                /**
     * Scope
     */
        // $scope.iconoActividad = 'u-bgActListening'; // Clase para agregar al contenedor principal
        $scope.state = estadoRuta
        $scope.numAct = parametrosRuta.Activity_id; // indicador actividad
        $scope.titulo = '' // título actividad

        $scope.classMainTemplate = 'u-bgTemplate';

        if (parametrosRuta.Activity_id == isNaN) {
            selector_mainTemplate.classList.remove('u-bgTemplate');
        }


        if(estadoRuta.name == 'activities'){$scope.categoriaid = 1; }
        if(estadoRuta.name == 'selfcheck'){ $scope.categoriaid = 2; }
        if(estadoRuta.name == 'test'){      $scope.categoriaid = 3; }
        if(estadoRuta.name == 'grammar'){   $scope.categoriaid = 4; }
        if(estadoRuta.name == 'mycolombia'){   $scope.categoriaid = 5; }


    /**
     * Títular de sección
     *  Definimos 1 scope para indicar al usuario el título de la vista actual según
     *  donde este se encuentre, las condiciones ayudan a determinar según la ruta que
     *  texto aparecerá y estan dadas por $state.current.name
     */

    $scope.validarUrl = function(){

        $scope.rol_id = $('#rol_id').val();

        var variables={
            unidadid:$scope.unidadid,
            moduloid:$scope.moduloid,
            actividadid:$scope.actividadid,
            categoriaid:$scope.categoriaid,
            usuid:$('#usu_id').val(),
            control:"SI"
        }

        ApiStatic.ValidUrl(variables).then(function(data){

            var respuesta = data.data;

            if(respuesta == 0 && respuesta !=''){
                window.location.href="#/unit/"+$scope.unidadid+"/modules/"+$scope.moduloid+"/activities/1";
            }

            $scope.ViewNotifUserCant(idUser);

        })

    }

    $scope.menuUsuario= function(){

        var variables = {
            usuid:$('#usu_id').val(),
            moduloid:$scope.moduloid,
            control:"SI"
        }

        ApiStatic.MenuUser(variables).then(function(data){

            // console.log(data.data);
            var respuesta = data.data;
            $scope.menuuser = respuesta;

        })

    }

    $scope.listarTitulo = function () {

        $scope.menuUsuario();

        var variables = {
            moduloid: $scope.moduloid,
            categoriaid: $scope.categoriaid,
            actividadid: $scope.actividadid,
            nivelid: $('#nivel_usu_id').val(),
            control: "SI"
        };

        ApiStatic.ListTitulo(variables).then(function(data){

            // console.log(data.data);
            var respuesta = data.data;

            angular.forEach(respuesta,function(valor){
                $scope.titulo = valor.titulo;
                $scope.titulo_2 = valor.titulo_dos;
                $scope.idPreg = valor.id;
                // console.log($scope.idPreg);
            })

        })

    };

    if (estadoRuta.name == 'units' || estadoRuta.name == 'user' || estadoRuta.name == 'objectives'){
        // console.log('Esta En units: ' + estadoRuta.name);
    }else{
        $scope.listarTitulo();
        $scope.validarUrl();
    }

    // ViewNotifUserCant

    $scope.ViewNotifUserCant = function (idUser) {

        var variables = {
            idEstudiante: idUser
        };

        // console.log(variables);

        ApiStatic.ViewNotifUser(variables).then(function(data){

            // console.log(data.data);
            var respuesta = data.data;

            $scope.cant_notif = respuesta;
            $scope.cant_noview = respuesta[0].cant_notif;

            if ($scope.cant_noview > 0){
                $scope.ClasNotif = 'onMessage';
                $scope.ClasNotifUser = 'active';
            }else{
                $scope.ClasNotif = '';
                $scope.ClasNotifUser = '';
            }

        });

    };

    setInterval(function () { $scope.ViewNotifUserCant(idUser); }, 10000);

}]);
