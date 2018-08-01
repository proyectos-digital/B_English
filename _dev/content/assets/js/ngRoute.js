app.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

    let
        format = '.php',
        delayTemplate = function($q, $timeout){
                let deferred = $q.defer();
                $timeout(function() {
                        deferred.resolve('Hello!');
                }, 100);
                return deferred.promise;
        }
        , authorization = ['authorization',
            function (authorization) {
                return authorization.authorize_Level();
            }
        ]
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
                `)
        }
        , fun_onEnter = (state, stateParams) => {

            let activitie_RegExp = new RegExp('id+(\/)+activities+(\/)+(:)')
            let _activitie_RegExp = new RegExp('activities')
            let _thisURL = state.current.url
            let regExp_Result = _activitie_RegExp.exec(_thisURL)
            let state_ = state
            let state_current = state.current
            let state_name = state.current.name
            let state_abstract = state.current.abstract
            let state_targetState = state.transition._targetState

            let categoriaid
            let nombreHelloSection
            let nivelid = $('#nivel_usu_id').val();
            // console.log('onEnter')
            // console.log(stateParams)
            // console.log(state_targetState._identifier)
            // console.log(state_targetState._identifier.name)
            // console.log(state.transition._targetState._params.Activity_id)

            if (state_targetState._identifier == 'activities') {
                categoriaid = 2;
                nombreHelloSection = 'hello_activities'
            }
            if (state_targetState._identifier == 'selfcheck') {
                categoriaid = 2;
                nombreHelloSection = 'hello_self'
            }
            if (state_targetState._identifier == 'test') {
                categoriaid = 3;
                nombreHelloSection = 'hello_test'
            }
            if (state_targetState._identifier == 'grammar') {
                categoriaid = 4;
                nombreHelloSection = 'hello_grammar'
            }
            if (state_targetState._identifier == 'mycolombia') {
                categoriaid = 5;
                nombreHelloSection = 'hello_myColombia'
            }

            let variables = {
                unidadid: stateParams.Unidad_id,
                moduloid: stateParams.Module_id,
                categoriaid: categoriaid,
                nivelid: nivelid,
                control: "SI"
            }
            if (state_targetState._params.Activity_id == 1){
                let trigger_modalWelcome = () => {
                    setTimeout(function () {
                        modalWelcomeSection(nombreHelloSection)
                    }, 150);
                }
                if ((state_targetState._identifier || state_targetState._identifier.name) == 'activities') trigger_modalWelcome()
                if ((state_targetState._identifier || state_targetState._identifier.name) == 'selfcheck') trigger_modalWelcome()
                if ((state_targetState._identifier || state_targetState._identifier.name) == 'test') trigger_modalWelcome()
                if ((state_targetState._identifier || state_targetState._identifier.name) == 'grammar') trigger_modalWelcome()
                if ((state_targetState._identifier || state_targetState._identifier.name) == 'mycolombia') trigger_modalWelcome()
            }
        }
        , fun_onExit = (state, stateParams) => {
            let state_ = state
            let state_current = state.current
            let state_name = state.current.name
            let state_abstract = state.current.abstract
            // console.log('onExit')
            // console.log(state_)
            // console.log(stateParams)
            // if(state.current.abstract){ console.log('reload current state') }
            // else { console.log(`Last state is ${state.current.name}`) }
        }
    ;
    //-----------------
    $stateProvider

    .state('user', {
        url: '/user',
        views: {
            '': {
                templateUrl: '../ngMaster/user' + format
                , controller: 'CtrlUser'
            }
            , 'estilo': {
                template: `<link rel="stylesheet", href="./../assets/css/app_user.css"></link>`
            }
        },
        resolve: { delay: delayTemplate },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function ($state, $stateParams) {
            fun_onExit($state, $stateParams)
        }
    })

    .state('user.details', {
        url: '',
        views: {
            'detailModule': {
                templateUrl: '../ngMaster/user.details'+format
                , controller: 'CtrlUser'
            }
        },
        params : { Unidad_id: null, Module_id: null, Categoria_id: null  },
        resolve: { delay: delayTemplate },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function(){
        }
    })

    .state('units', {
        url: '/units',
        views: {
            '': {
                templateUrl: '../ngMaster/units'+format
                , controller: 'CtrlUnidades'
            }
            ,'estilo': {
                // template: ` <style> .template-wrapper{ padding-bottom: 0 !important } </style> `
                template: ` <style>
                                .o-nav--Menu, .o-nav--Data-item:nth-child(1), .o-nav--Data-item:nth-child(2) {
                                    /*display: none;*/
                                }
                                .o-nav--Data-item:last-child{
                                    border: none
                                }
                                .template-wrapper{ padding-bottom: 0 !important }
                            </style> `
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function(){
        }
    })

    .state('objectives', {
        url: '/unit/:Unidad_id/modules/:Module_id/objectives',
        views: {
            '': {
                templateUrl: function (stateParams) {
                    return '../ngMaster/objectives' + format
                }, controller: 'CtrlHeader'
            }
        },
        resolve: { delay: delayTemplate },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function () {
            // console.log('OnExit');
        }
    })

    .state('activities', {
        url: '/unit/:Unidad_id/modules/:Module_id/activities/:Activity_id',
        views: {
            '': {
                templateUrl: function(stateParams){
                    return './unit_'+stateParams.Unidad_id+'/module_'+stateParams.Module_id+'/activities/act_'+stateParams.Activity_id+format
                }, controller: 'CtrlActivities'
            }
            ,'estilo': {
                template: function(stateParams){
                    return `
                        <link rel="stylesheet", href="./unit_${stateParams.Unidad_id}/module_${stateParams.Module_id}/assets/css/module_${stateParams.Module_id}.css"></link>
                        <link rel="stylesheet", href="./../assets/css/wordFind.css"></link>
                        <link rel="stylesheet", href="./../assets/css/foro.css"></link>
                        <link rel="stylesheet", href="./../assets/css/game_hangman.css"></link>
                        <style>
                            .o-nav--Data-item:nth-child(1), .o-nav--Data-item:nth-child(2) {
                                display: none;
                            }
                            .o-nav--Data-item:last-child{
                                border: none
                            }
                        </style>
                    `
                }
            }
            , 'foro@activities': {
                templateUrl: function(stateParams){
                    return '../ngMaster/foro' + format
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: ($state, $stateParams) => {
            fun_onEnter($state, $stateParams)
        },
        onExit: function ($state, $stateParams) { fun_onExit($state, $stateParams) },
        params: {
            end: 'false'
        }
    })

    .state('selfcheck', {
        url: '/unit/:Unidad_id/modules/:Module_id/selfcheck/:Activity_id',
        views: {
            '': {
                templateUrl: function(stateParams){
                    return './unit_'+stateParams.Unidad_id+'/module_'+stateParams.Module_id+'/selfcheck/self_'+stateParams.Activity_id+format
                }, controller: 'CtrlActivities'
            }
            ,'estilo': {
                template: function(stateParams){
                    return `
                    <link rel="stylesheet", href="./unit_${stateParams.Unidad_id}/module_${stateParams.Module_id}/assets/css/module_${stateParams.Module_id}.css"></link>
                    <link rel="stylesheet", href="./../assets/css/wordFind.css"></link>
                    <link rel="stylesheet", href="./../assets/css/foro.css"></link>
                    `
                }
            }
            , 'foro@selfcheck': {
                templateUrl: function(stateParams){
                    return '../ngMaster/foro' + format
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function(){
            // console.log('OnExit');
        }
    })

    .state('test', {
        url: '/unit/:Unidad_id/modules/:Module_id/test/:Activity_id',
        views: {
            '': {
                templateUrl: function(stateParams){
                    return './unit_'+stateParams.Unidad_id+'/module_'+stateParams.Module_id+'/test/test_'+stateParams.Activity_id+format
                }, controller: 'CtrlActivities'
            }
            ,'estilo': {
                template: function(stateParams){
                    return `
                    <link rel="stylesheet", href="./unit_${stateParams.Unidad_id}/module_${stateParams.Module_id}/assets/css/module_${stateParams.Module_id}.css"></link>
                    <link rel="stylesheet", href="./../assets/css/foro.css"></link>
                    `
                }
            }
            , 'foro@test': {
                templateUrl: function(stateParams){
                    return '../ngMaster/foro' + format
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function(){
            // console.log('OnExit');
        }
    })

    .state('grammar', {
        url: '/unit/:Unidad_id/modules/:Module_id/grammar/:Activity_id',
        views: {
            '': {
                templateUrl: function(stateParams){
                    return './unit_'+stateParams.Unidad_id+'/module_'+stateParams.Module_id+'/grammar/grammar_'+stateParams.Activity_id+format
                }, controller: 'CtrlActivities'
            }
            ,'estilo': {
                template: function(stateParams){
                    return `
                    <link rel="stylesheet", href="./unit_${stateParams.Unidad_id}/module_${stateParams.Module_id}/assets/css/module_${stateParams.Module_id}.css"></link>
                    `
                }
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function(){
            // console.log('OnExit');
        }
    })

    .state('mycolombia', {
        url: '/unit/:Unidad_id/modules/:Module_id/myColombia/:Activity_id',
        views: {
            '': {
                templateUrl: function(stateParams){
                    return './unit_'+stateParams.Unidad_id+'/module_'+stateParams.Module_id+'/myColombia/mycolombia_'+stateParams.Activity_id+format
                }, controller: 'CtrlActivities'
            }
            ,'estilo': {
                template: function(stateParams){
                    return `
                    <link rel="stylesheet", href="./unit_${stateParams.Unidad_id}/module_${stateParams.Module_id}/assets/css/module_${stateParams.Module_id}.css"></link>
                    <link rel="stylesheet", href="./../assets/css/game_hangman.css"></link>
                    <link rel="stylesheet", href="./../assets/css/foro.css"></link>`
                    
                }
            }, 'foro@mycolombia': {
                templateUrl: function (stateParams) {
                    return '../ngMaster/foro' + format
                }, controller: 'CtrlActivities'
            }
        },
        resolve: {
            delay: delayTemplate,
            authorize: authorization
        },
        onEnter: function ($state, $stateParams) {
            fun_onEnter($state, $stateParams)
        },
        onExit: function(){
            // console.log('OnExit');
        }
    })

    $urlRouterProvider.otherwise('/units');
}])
