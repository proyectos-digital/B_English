// app.controller

// Controllador global
app.controller('CtrlFooter', ['$scope', '$state', '$stateParams','$http','funcionesGeneral', 'ApiStatic', function($scope, $state, $stateParams,$http,funcionesGeneral, ApiStatic){

    $scope.unidadid = $stateParams.Unidad_id;
    $scope.moduloid = $stateParams.Module_id;
    $scope.activityid = $stateParams.Activity_id;
    $scope.sectionName = $state.current.name
    $scope.currentLevel = $('#nivel_usu_id').val();

    var usu_id = $('#usu_id').val();
    var nivelid = $('#nivel_usu_id').val();

    $scope.triggerNavigationMenu = (Elm, accion) => { triggerNavigationMenu(Elm, accion) };
    $scope.triggerModalHello = (accion, options) => { triggerModalHello(accion, options) };

    let
        estadoRuta = $scope.state = $state.current // Conocer el información en la ruta
        , parametrosRuta = $scope.params = $stateParams
        , selector_mainTemplate = document.querySelector('main.template')
        , selector_templateHeader = document.querySelector('template-header')
        , nombreHelloSection
        , modalWelcomeSection = (nombreHelloSection) => {
            return create_modal_welcomeSection(`
                    <div>
                        <section class="ed-modal-content--section">
                            <img class="u-responsive-img"
                                draggable="false"
                                src="./assets/multimedia/images/${nombreHelloSection}.png"
                                alt=""
                                style="pointer-events: none; user-select: none; position: relative; top: 0; right: 0; left: 0; bottom: 0; margin: auto;">
                        </section>
                    </div>
                `, "ed-modal-container", "ed-modal-content")
        }
        , ChatWindow = $('#componentChatGlobal')
        , chat__content = ChatWindow.find('.chat__content')
        , ishiden_ChatWindow = ChatWindow.hasClass('hide')
    ;

    $scope.listarFooter = function (){

        var variables = {
            unidadid: $scope.unidadid,
            moduloid: $scope.moduloid,
            categoriaid: $scope.categoriaid,
            nivelid:nivelid,
            control:"SI"
        }

        ApiStatic.ListFooter(variables).then(function(data){

            // console.log(data.data);
            var respuesta = data.data;
            $scope.listasf = respuesta;

        });

    }

    $scope.listarFooter();


    $scope.listarModulosFooter = function(){

        var variables = {
            unidadid: $scope.unidadid,
            moduloid: $scope.moduloid,
            categoriaid: $scope.categoriaid,
            usuid:usu_id,
            control:"SI"
        }

        ApiStatic.ListModulosFooter(variables).then(function(data){

            // console.log(data.data);
            var respuesta = data.data;
            $scope.modulosUser = respuesta;

        });

    }

    $scope.listarModulosFooter();

    $scope.listarChatUsuario = function(){

        var variables = {
            usuid:usu_id,
            control:"SI"
        }

        ApiStatic.ListChatUser(variables).then(function(data){

            // console.log(data.data);
            var respuesta = data.data;
            $scope.chatUser = respuesta;

        });

    }

    $scope.listarChatUsuario();

    setInterval(function(){
        $scope.listarChatUsuario();
    },5000)

    $scope.enviarChat = function(){
        let textochat = $('#text').val();
        if(textochat === '' || textochat === undefined){

        }else{

            var variables = {
                usuid:$('#usu_id').val(),
                mensaje:textochat,
                control:"SI"
            }

            ApiStatic.SendChat(variables).then(function(data){

                // console.log(data.data);
                var respuesta = data.data;

                let chat__content = document.getElementsByClassName('chat__content');
                $scope.listarChatUsuario();
                setTimeout(() => {
                    $(".chat__content").animate({ scrollTop: $(".chat__content")[0].scrollHeight });
                }, 900);

            });

            $('#text').val('');
        }

    }

    window.addEventListener('keyup', function (e) {
        let enter = e.key === 'Enter'
        if (!ishiden_ChatWindow) {
            if (enter) {
                let textochat = $('#text').val();
                if (textochat === '' || textochat === undefined) {}
                else if (textochat != ''){
                    $scope.enviarChat();
                }
                $('#text').val('');
            }
        }
    });
}]);
