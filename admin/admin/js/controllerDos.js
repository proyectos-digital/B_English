appGeneral.controller('controlGrupos', controlGrupos);

function controlGrupos($http,$scope,$routeParams,$location,DTOptionsBuilder, DTColumnBuilder,$q){

	$scope.listarGrupos = function(){

        var defered = $q.defer();
        var promise = defered.promise;
		var variables = {
	        control:"SI",
	        metodo:2
	    };

	    $http({
	            method:'POST',
	            url:'sql/grupos/crud_grupo.php',
	            header:{
	                'Content-Type': undefined
	            },
	           data:variables
	        }).success(function(res){
	            //$scope.grupoActivos = res;
	            defered.resolve(res);
	        }).error(function(err){
	            console.log("Error: "+err);
	        });
	    return promise; 
	};
function datatableGrupo(){
  $scope.listarGrupos().then(function(resultado) {
  		$scope.grupoActivos = resultado;
  		// resultado.forEach(function(value, key){
  		// 	console.log(value.estudent);
  		// });
  }, function(error) {
      console.log("Error: "+error);
  });
};

datatableGrupo();

	$scope.editarGrupo = function(id){
		var grupos = $scope.grupoActivos;
		grupos.forEach(function(value, key){

  		if(value.grupo['grupo_id'] === id){
			// console.log(value.estudent);
			// console.log(value.grupo['estudiantes']);
			var estudiantes =value.estudent;
	  		$('.chkAlumnos').prop('checked', false);
	  		estudiantes.forEach(function(v,k){
	  			//console.log(v.id_estudiante);
	  			$('#'+v.id_estudiante).prop('checked',true);
	  		});
	  		//console.log(value.grupo['grupo_id']);
	  		// $scope.nombreCurso = value.grupo['grupo_nombre'];
	  		// $scope.docenteEncargado = value.grupo['grupo_docente'];
	  		$('#first_name').val(value.grupo['grupo_nombre']);
	  		$('#docenteEncargado').val(value.grupo['grupo_docente']);
	  		$('.units').prop('checked', false);
	  		var unidades =value.grupo['grupo_units'].split(",");
	  		unidades.forEach(function(val,k){
	  			$('#'+val).prop('checked',true);
	  		});
	  		var modulos =value.grupo['grupo_mod'].split(",");
	  		$('.modulo').prop('checked', false);
	  		$('.chkModulo').show();
	  		modulos.forEach(function(valu,ke){
	  			$('#'+valu).prop('checked',true);
	  		});
  		}
  		// console.log(value.estudent);
		});
		$('.editar').show();



	};	

};
