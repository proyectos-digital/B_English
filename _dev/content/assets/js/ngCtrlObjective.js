app.controller('CtrlObjectives', ['$scope', '$state', '$stateParams', '$http', function ($scope, $state, $stateParams, $http) {
    
    $scope.unidadid = $stateParams.Unidad_id;
    $scope.moduloid = $stateParams.Module_id;

}])