'use strict';

var app = angular.module('login_b_english', ['ui.router', 'ngAnimate']);
// ROute
app.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

	var format = '.php',
	    delayTemplate = function delayTemplate($q, $timeout) {
		var deferred = $q.defer();
		$timeout(function () {
			deferred.resolve('Hello!');
		}, 1000);
		return deferred.promise;
	};

	//-----------------
	$stateProvider.state('login', {
		url: '/login',
		views: {
			'': {
				templateUrl: './login/login' + format,
				controller: 'CtrlLogin'
			},
			'estilo': {
				template: ' <link rel="stylesheet", href="./login/css/app_login.css"></link> '
			}
		},
		resolve: { delay: delayTemplate },
		onEnter: function onEnter($state) {},
		onExit: function onExit() {}
	});

	$urlRouterProvider.otherwise('/login');

}]);

app.run(['$rootScope', '$state', '$stateParams', function ($rootScope, $state, $stateParams) {

	$rootScope.$state = $state;
	$rootScope.$stateParams = $stateParams;

}]);

//---------------------------------------------------------//
app.controller('CtrlLogin', ['$http', '$scope', 'ApiLogin', function ($http, $scope, ApiLogin) {
	// console.log(`CtrlLogin activo`);

	$scope.validaLogin = function (niveluser) {

		var usuario = $scope.username;
		var pass = $scope.password;

		var variables = {
			usuario: usuario,
			pass: pass,
			niveluser:niveluser
		};

		// console.log(variables);

		ApiLogin.LoginFact(variables).then(function(data){

			var respuesta = data.data;

			// SESIONES DEL APIREST User
			var id = respuesta[0];
			var nombre = respuesta[1];
			var apellido = respuesta[2];
			var email = respuesta[3];
			var rol_id = respuesta[4];
			var nivel_id = respuesta[5];

			var sesionuser = {
				id:id,
				nombre:nombre,
				apellido:apellido,
				email:email,
				rol_id:rol_id,
				nivel_id:nivel_id,
				niveluser:niveluser
			}

			// console.log(respuesta);

				ApiLogin.SessionUser(sesionuser).then(function(data){

					// console.log(data.data);
					var sesionesuser = data.data;

					// SESIONES LOCALES
					var idLoc = sesionesuser[0];
					var nombreLoc = sesionesuser[1];
					var apellidoLoc = sesionesuser[2];
					var emailLoc = sesionesuser[3];
					var rol_idLoc = sesionesuser[4];
					var nivel_idLoc = sesionesuser[5];

					if (respuesta == '') {
						alertify.alert('Error', 'This user or password is not valid');
						$scope.username = '';
						$scope.password = '';
					}

					if (rol_idLoc == 3) {
						window.location = "content/" + niveluser + "/#/units";
					}

					if (rol_idLoc == 1 || rol_idLoc == 2) {
						window.location = "admin/admin/inicio.php#/";
					}
				});

			// console.log(respuesta);

		});

	};

	$scope.nivelUsuario = function () {

		var usuario = $scope.username;
		var pass = $scope.password;

		if(usuario == undefined || pass == undefined){
			alertify.alert('Info', 'Empty fields');
		}else{

			var variables = {
				usuario: usuario,
				pass: pass
			};

			// console.log(variables);

			ApiLogin.LoginNivelUser(variables).then(function(data){
				// console.log(data.data);
				$scope.validaLogin(data.data);
			});
		}

	};


}]);



app.factory('ApiLogin', function($http){

	var rest = 'https://bbdigitaldemo.com/request/b_english/';
	// var rest = '../../back_request/b_english/';

	var ApiRequestLog = {

		LoginFact: function (variables) {
			return $http.post(rest + 'api/login', variables).success(function (data) {
				return data;
			}).error(function (err) {
				console.log(err);
			});
		},

		SessionUser: function (sesionuser) {
			return $http.post('./login/data/login.php', sesionuser).success(function (data) {
				return data;
			}).error(function (err) {
				console.log(err);
			});
		},

		LoginNivelUser: function (variables) {
			return $http.post(rest + 'api/loginNivel', variables).success(function (data) {
				return data;
			}).error(function (err) {
				console.log(err);
			});
		}

	};

    return ApiRequestLog

})
