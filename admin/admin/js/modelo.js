var appGeneral = angular.module("AdminGen",['ngRoute','easypiechart','datatables', 'ngResource','ngSanitize']);

appGeneral.config(function($routeProvider) {

    $routeProvider

    .when("/", {
        templateUrl : "contenidos/principal/principal.php",
        controller : "principalctrl"
    })
    .when("/inicio", {
        templateUrl : "inicio.php"
        // controller : "PrincipalCtrl"
    })
    .when("/home", {
        templateUrl : "contenidos/principal/principal.php"
        // controller : "principalctrl"
    })

    .when("/crear_usuarios", {
        templateUrl : "contenidos/plantillas/crear_usuarios.php",
        controller : "controlUsuarios"
    })

    .when("/Listar_usuarios", {
        templateUrl : "contenidos/plantillas/Listar_usuarios.php",
        // controller : "controlUsuarios"
    })
    .when("/Listar_preguntas", {
        templateUrl : "contenidos/plantillas/Listar_preguntas.php",
        controller : "controlUsuarios"
    })

    .when("/reporte_usuarios/:usu_id", {
        templateUrl : "contenidos/plantillas/reporte_usuarios.php",
        controller : "controlUsuarios"
    })
    .when("/editar_usuarios/:usu_id", {
        templateUrl : "contenidos/plantillas/editar_usuarios.php",
        controller : "controlUsuarios"
    })      
    .when("/editar_grupos/:grupo_id", {
        templateUrl : "contenidos/plantillas/editar_grupos.php",
        controller : "principalctrl"
    })
    .when("/crear_grupos", {
        templateUrl : "contenidos/plantillas/crear_grupos.php",
        controller : "principalctrl"
    })        
    .when("/lista_grupos", {
        templateUrl : "contenidos/plantillas/lista_grupos.php",
        controller : "principalctrl"
    })
    .when("/lista_modforos/:grupo_id", {
        templateUrl : "contenidos/plantillas/lista_modforos.php",
        controller : "principalctrl"
    })
    .when("/lista_user_groups/:grupo_id", {
        templateUrl : "contenidos/plantillas/listar_usuarios_grupos.php",
        controller : "principalctrl"
    })
    .otherwise({ reditrectTo : "/" });


});

// Factorias **************************************************************************
// ************************************************************************************

// ADMINISTRADOR

appGeneral.factory('ApiAdmin', function ($http) {

    var rest = 'https://bbdigitaldemo.com/request/b_english/';
    // var rest = '../../../back_request/b_english/';
    
    var ApiRequest = {

        // GENERALES
        ListModulos: function ListModulos() {

            return $http.post(rest + 'api/Admin/Generales/ListadoModulos').success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListRoles: function ListRoles() {

            return $http.post(rest + 'api/Admin/Generales/ListadoRoles').success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListUnidades: function ListUnidades() {

            return $http.post(rest + 'api/Admin/Generales/ListarUnidades').success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListModulUnit: function ListModulUnit(parametros) {

            return $http.post(rest + 'api/Admin/Generales/ListarModulosUnit', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },


        // USUARIOS
        ListUsuarios: function ListUsuarios(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ListadoUsuarios', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ContUsuarios: function ContUsuarios(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ContarUsuarios', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        CountActivit: function CountActivit(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ContarActividades', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        CrearUsuario: function CrearUsuario(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/CrearUsuario', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        CrearUsuarioEdit: function CrearUsuarioEdit(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/CrearUsuarioEdit', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ActivarDescActUser: function ActivarDescActUser(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ActDescUser', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        EditUser: function EditUser(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/EditUser', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        RegistroNotifEstud: function RegistroNotifEstud(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/RegistroNotifEstud', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListNotifEstudiante: function ListNotifEstudiante(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ListNotifEstudiante', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ViewNotif: function ViewNotif(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/VerNotificacionesAdmin', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ReiniciarUser: function ReiniciarUser(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ReiniciarUsuario', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ConversacionChat: function ConversacionChat(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/ConversacionChat', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        GuardaPuntaje: function GuardaPuntaje(parametros) {

            return $http.post(rest + 'api/Admin/Usuarios/GuardarPuntajeRubrica', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListDocentes: function ListDocentes() {

            return $http.post(rest + 'api/Admin/Usuarios/ListadoDocentes').success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },





        // PREGUNTAS
        ListRespActividades: function ListRespActividades(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListRespActividad', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListRespWriting: function ListRespWriting(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListRespWriting', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListSpeakingAct: function ListSpeakingAct(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListSpeakingAct', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListRespuestasSelf: function ListRespuestasSelf(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListRespuestasSelf', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListWritingSelf: function ListWritingSelf(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListWritingSelf', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListSpeakingSelf: function ListSpeakingSelf(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListSpeakingSelf', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListRespuestasTest: function ListRespuestasTest(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListRespuestasTest', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListRespuestasMycol: function ListRespuestasMycol(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListRespuestasMycol', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListWritingTest: function ListWritingTest(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListWritingTest', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListWritingMyCol: function ListWritingMyCol(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListWritingMyCol', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListSpeakingTest: function ListSpeakingTest(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListSpeakingTest', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListSpeakingMyCol: function ListSpeakingMyCol(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListSpeakingMyCol', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListPowerPoint: function ListPowerPoint(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/ListPowerPoint', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListVideoiframe: function (parametros) {
            return $http.post(rest + 'api/PerfilUser/ListarIframeUser', parametros).success(function (data) {
                return data;

            })
                .error(function (err) {
                    console.log(err)
                })
        },

        CantPreguntas: function CantPreguntas(parametros) {

            return $http.post(rest + 'api/Admin/Preguntas/CantPreguntas', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },


        // GRUPOS
        ListGrupos: function ListGrupos(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/ListadoGrupos', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListUserSinGrupo: function ListUserSinGrupo() {

            return $http.post(rest + 'api/Admin/Grupos/ListadoUsuarioSinGrupo').success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        CrearNuevoGrup: function CrearNuevoGrup(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/CrearGrupo', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListEditarGrupo: function ListEditarGrupo(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/ListadoEditarGrupo', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListEstuGrupoEdit: function ListEstuGrupoEdit(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/ListarEstudiantesGrEdit', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        RemoveUserGrupo: function RemoveUserGrupo(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/RemoveUsuarioGrupo', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListForoGroup: function ListForoGroup(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/ListForoGroup', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        UpdateEstadoForo: function UpdateEstadoForo(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/UpdateEstadoForo', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        ListEstadoTest: function ListEstadoTest(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/ListEstadoTest', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        UpdateEstadotest: function UpdateEstadotest(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/UpdateEstadotest', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        respuestasForo: function respuestasForo(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/respuestasForo', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        enviarForoAdmin: function enviarForoAdmin(parametros) {

            return $http.post(rest + 'api/Admin/Grupos/enviarForoAdmin', parametros).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },


    };

    return ApiRequest;
});

appGeneral.filter('unsafe', function ($sce) { return $sce.trustAsHtml; });