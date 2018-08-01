'use strict';

app.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

    var format = '.php',
        delayTemplate = function delayTemplate($q, $timeout) {
        var deferred = $q.defer();
        $timeout(function () {
            deferred.resolve('Hello!');
        }, 100);
        return deferred.promise;
    },
        authorization = ['authorization', function (authorization) {
        return authorization.authorize_Level();
    }],
        modalWelcomeSection = function modalWelcomeSection(nombreHelloSection) {
        return create_modal_welcomeSection('\n                    <div>\n                        <section class="ed-modal-content--section">\n                            <img class="u-responsive-img"\n                                draggable="false"\n                                src="./assets/multimedia/images/' + nombreHelloSection + '.png"\n                                alt=""\n                                style="pointer-events: none; user-select: none; position: relative; top: 0; right: 0; left: 0; bottom: 0; margin: auto;">\n                        </section>\n                    </div>\n                ');
    },
        fun_onEnter = function fun_onEnter(state, stateParams) {

        var activitie_RegExp = new RegExp('id+(\/)+activities+(\/)+(:)');
        var _activitie_RegExp = new RegExp('activities');
        var _thisURL = state.current.url;
        var regExp_Result = _activitie_RegExp.exec(_thisURL);
        var state_ = state;
        var state_current = state.current;
        var state_name = state.current.name;
        var state_abstract = state.current.abstract;
        var state_targetState = state.transition._targetState;

        var categoriaid = void 0;
        var nombreHelloSection = void 0;
        var nivelid = $('#nivel_usu_id').val();
        // console.log('onEnter')
        // console.log(stateParams)
        // console.log(state_targetState._identifier)
        // console.log(state_targetState._identifier.name)
        // console.log(state.transition._targetState._params.Activity_id)

        if (state_targetState._identifier == 'activities') {
            categoriaid = 2;
            nombreHelloSection = 'hello_activities';
        }
        if (state_targetState._identifier == 'selfcheck') {
            categoriaid = 2;
            nombreHelloSection = 'hello_self';
        }
        if (state_targetState._identifier == 'test') {
            categoriaid = 3;
            nombreHelloSection = 'hello_test';
        }
        if (state_targetState._identifier == 'grammar') {
            categoriaid = 4;
            nombreHelloSection = 'hello_grammar';
        }
        if (state_targetState._identifier == 'mycolombia') {
            categoriaid = 5;
            nombreHelloSection = 'hello_myColombia';
        }

        var variables = {
            unidadid: stateParams.Unidad_id,
            moduloid: stateParams.Module_id,
            categoriaid: categoriaid,
            nivelid: nivelid,
            control: "SI"
        };
        if (state_targetState._params.Activity_id == 1) {
            var trigger_modalWelcome = function trigger_modalWelcome() {
                setTimeout(function () {
                    modalWelcomeSection(nombreHelloSection);
                }, 150);
            };
            if ((state_targetState._identifier || state_targetState._identifier.name) == 'activities') trigger_modalWelcome();
            if ((state_targetState._identifier || state_targetState._identifier.name) == 'selfcheck') trigger_modalWelcome();
            if ((state_targetState._identifier || state_targetState._identifier.name) == 'test') trigger_modalWelcome();
            if ((state_targetState._identifier || state_targetState._identifier.name) == 'grammar') trigger_modalWelcome();
            if ((state_targetState._identifier || state_targetState._identifier.name) == 'mycolombia') trigger_modalWelcome();
        }
    },
        fun_onExit = function fun_onExit(state, stateParams) {
        var state_ = state;
        var state_current = state.current;
        var state_name = state.current.name;
        var state_abstract = state.current.abstract;
        // console.log('onExit')
        // console.log(state_)
        // console.log(stateParams)
        // if(state.current.abstract){ console.log('reload current state') }
        // else { console.log(`Last state is ${state.current.name}`) }
    };
    //-----------------
    $stateProvider.state('user', {
        url: '/user',
        views: {
            '': {
                templateUrl: '../ngMaster/user' + format,
                controller: 'CtrlUser'
            },
            'estilo': {
                template: '<link rel="stylesheet", href="./../assets/css/app_user.css"></link>'
            }
        },
        resolve: { delay: delayTemplate },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit($state, $stateParams) {
            fun_onExit($state, $stateParams);
        }
    }).state('user.details', {
        url: '',
        views: {
            'detailModule': {
                templateUrl: '../ngMaster/user.details' + format,
                controller: 'CtrlUser'
            }
        },
        params: { Unidad_id: null, Module_id: null, Categoria_id: null },
        resolve: { delay: delayTemplate },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {}
    }).state('units', {
        url: '/units',
        views: {
            '': {
                templateUrl: '../ngMaster/units' + format,
                controller: 'CtrlUnidades'
            },
            'estilo': {
                // template: ` <style> .template-wrapper{ padding-bottom: 0 !important } </style> `
                template: ' <style>\n                                .o-nav--Menu, .o-nav--Data-item:nth-child(1), .o-nav--Data-item:nth-child(2) {\n                                    /*display: none;*/\n                                }\n                                .o-nav--Data-item:last-child{\n                                    border: none\n                                }\n                                .template-wrapper{ padding-bottom: 0 !important }\n                            </style> '
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {}
    }).state('objectives', {
        url: '/unit/:Unidad_id/modules/:Module_id/objectives',
        views: {
            '': {
                templateUrl: function templateUrl(stateParams) {
                    return '../ngMaster/objectives' + format;
                }, controller: 'CtrlHeader'
            }
        },
        resolve: { delay: delayTemplate },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {
            // console.log('OnExit');
        }
    }).state('activities', {
        url: '/unit/:Unidad_id/modules/:Module_id/activities/:Activity_id',
        views: {
            '': {
                templateUrl: function templateUrl(stateParams) {
                    return './unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/activities/act_' + stateParams.Activity_id + format;
                }, controller: 'CtrlActivities'
            },
            'estilo': {
                template: function template(stateParams) {
                    return '\n                        <link rel="stylesheet", href="./unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/assets/css/module_' + stateParams.Module_id + '.css"></link>\n                        <link rel="stylesheet", href="./../assets/css/wordFind.css"></link>\n                        <link rel="stylesheet", href="./../assets/css/foro.css"></link>\n                        <link rel="stylesheet", href="./../assets/css/game_hangman.css"></link>\n                        <style>\n                            .o-nav--Data-item:nth-child(1), .o-nav--Data-item:nth-child(2) {\n                                display: none;\n                            }\n                            .o-nav--Data-item:last-child{\n                                border: none\n                            }\n                        </style>\n                    ';
                }
            },
            'foro@activities': {
                templateUrl: function templateUrl(stateParams) {
                    return '../ngMaster/foro' + format;
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit($state, $stateParams) {
            fun_onExit($state, $stateParams);
        },
        params: {
            end: 'false'
        }
    }).state('selfcheck', {
        url: '/unit/:Unidad_id/modules/:Module_id/selfcheck/:Activity_id',
        views: {
            '': {
                templateUrl: function templateUrl(stateParams) {
                    return './unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/selfcheck/self_' + stateParams.Activity_id + format;
                }, controller: 'CtrlActivities'
            },
            'estilo': {
                template: function template(stateParams) {
                    return '\n                    <link rel="stylesheet", href="./unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/assets/css/module_' + stateParams.Module_id + '.css"></link>\n                    <link rel="stylesheet", href="./../assets/css/wordFind.css"></link>\n                    <link rel="stylesheet", href="./../assets/css/foro.css"></link>\n                    ';
                }
            },
            'foro@selfcheck': {
                templateUrl: function templateUrl(stateParams) {
                    return '../ngMaster/foro' + format;
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {
            // console.log('OnExit');
        }
    }).state('test', {
        url: '/unit/:Unidad_id/modules/:Module_id/test/:Activity_id',
        views: {
            '': {
                templateUrl: function templateUrl(stateParams) {
                    return './unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/test/test_' + stateParams.Activity_id + format;
                }, controller: 'CtrlActivities'
            },
            'estilo': {
                template: function template(stateParams) {
                    return '\n                    <link rel="stylesheet", href="./unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/assets/css/module_' + stateParams.Module_id + '.css"></link>\n                    <link rel="stylesheet", href="./../assets/css/foro.css"></link>\n                    ';
                }
            },
            'foro@test': {
                templateUrl: function templateUrl(stateParams) {
                    return '../ngMaster/foro' + format;
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {
            // console.log('OnExit');
        }
    }).state('grammar', {
        url: '/unit/:Unidad_id/modules/:Module_id/grammar/:Activity_id',
        views: {
            '': {
                templateUrl: function templateUrl(stateParams) {
                    return './unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/grammar/grammar_' + stateParams.Activity_id + format;
                }, controller: 'CtrlActivities'
            },
            'estilo': {
                template: function template(stateParams) {
                    return '\n                    <link rel="stylesheet", href="./unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/assets/css/module_' + stateParams.Module_id + '.css"></link>\n                    ';
                }
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {
            // console.log('OnExit');
        }
    }).state('mycolombia', {
        url: '/unit/:Unidad_id/modules/:Module_id/myColombia/:Activity_id',
        views: {
            '': {
                templateUrl: function templateUrl(stateParams) {
                    return './unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/myColombia/mycolombia_' + stateParams.Activity_id + format;
                }, controller: 'CtrlActivities'
            },
            'estilo': {
                template: function template(stateParams) {
                    return '\n                    <link rel="stylesheet", href="./unit_' + stateParams.Unidad_id + '/module_' + stateParams.Module_id + '/assets/css/module_' + stateParams.Module_id + '.css"></link>\n                    <link rel="stylesheet", href="./../assets/css/game_hangman.css"></link>\n                    <link rel="stylesheet", href="./../assets/css/foro.css"></link>';
                }
            }, 'foro@mycolombia': {
                templateUrl: function templateUrl(stateParams) {
                    return '../ngMaster/foro' + format;
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function onEnter($state, $stateParams) {
            fun_onEnter($state, $stateParams);
        },
        onExit: function onExit() {
            // console.log('OnExit');
        }
    });

    $urlRouterProvider.otherwise('/units');
}]);