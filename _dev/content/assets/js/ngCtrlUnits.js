// app.controller

// Controllador global
app.controller('CtrlUnidades', ['$scope', '$state', '$stateParams', 'ApiUnidades', '$http', function($scope, $state, $stateParams, ApiUnidades, $http){

    $scope.chainableLayout = function(){
        // console.log('aaaaa');
		const
			$cont                 = document.querySelector('.chainable')
			, $elsArr               = [].slice.call(document.querySelectorAll('.chainableEl'))
			, $closeBtnsArr         = [].slice.call(document.querySelectorAll('.chainableEl__close-btn'))
			, $c                    = (a) => {console.log(a)}
		;

		setTimeout(function() {
			$cont.classList.remove('is-inactive');
		}, 200);

		$elsArr.forEach(function($el) {
            // console.log($el)
			$el.addEventListener('click', function(e) {
				if(this.classList.contains('is-locked')) return;
				if(this.classList.contains('is-disabled')) return;
				if (this.classList.contains('is-active')) return;
				$cont.classList.add('is-chainableEl-active');
				this.classList.add('is-active');
				bodyDOM.style.overflow = 'hidden'
			});
		});

		$closeBtnsArr.forEach(function($btn) {
			$btn.addEventListener('click', function(e) {
				e.stopPropagation();
				$cont.classList.remove('is-chainableEl-active');
				document.querySelector('.chainableEl.is-active').classList.remove('is-active');
				bodyDOM.style.overflow = 'initial'
			});
		});
    };

    $scope.listarUnidades = function () {

        $scope.usuid = $('#usu_id').val();
        $scope.nivelid = $('#nivel_usu_id').val();

        var variables = {
            usuid: $scope.usuid,
            nivelid: $scope.nivelid,
            control: "SI"
        };

        // console.log(variables);

        ApiUnidades.ListUnidades(variables).then(function (data) {
            // console.log(data.data);
            $scope.unidades = data.data;
        });
    };

    $scope.listarUnidades();


    $scope.listarModulos = function(unidadid){

        var variables = {
            usuid:$('#usu_id').val(),
            unidadid:unidadid,
            control:"SI"
        }

        // console.log(variables);

        ApiUnidades.ListModulos(variables).then(function(data){
            // console.log(data.data);
            $scope.modulos = data.data;
        })

    }

}]);
