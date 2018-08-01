<!-- <div class="row PreloadAdmin" ng-hide="PreloadAdmin">
	<i class="fa fa-spinner fa-pulse fa-3x fa-fw fs20 spinnerAdmin"></i>
</div> -->
<div class="progress" ng-hide="PreloadAdminGru">
	<div class="indeterminate"></div>
</div>

<div ng-show="rowPrincipal">

	<div class="row">

		<div class="col s12 m12 l6 xl3"> 
			<div class="card user_bg" ng-init="countusuario()"> 
				<div class="card-content info-card">
					<div class="icon-info"><i class="fa fa-user"></i></div>
					<div class="info-content">
						<div class="info-numbers">{{cusuario}}</div>
						<div class="info-text">Users</div>
					</div>
					<div class="bottom_card"></div>
				</div>
			</div> 
		</div>

	   
		<div class="col s12 m12 l6 xl3"> 
			<div class="card activities_bg" ng-init="countact(1)"> 
				<div class="card-content info-card">
					<div class="icon-info"><i class="fa fa-puzzle-piece"></i></div>
					<div class="info-content">
						<div class="info-numbers">{{cActiv1}}</div>
						<div class="info-text">Activities</div>
					</div>
					<div class="bottom_card"></div>
				</div>
			</div> 
		</div>
		<div class="col s12 m12 l6 xl3"> 
			<div class="card sel_check_bg" ng-init="countact(2)"> 
				<div class="card-content info-card">
					<div class="icon-info"><i class="fa fa-check-square-o"></i></div>
					<div class="info-content">
						<div class="info-numbers">{{cActiv2}}</div>
						<div class="info-text">Self-check</div>
					</div>
					<div class="bottom_card"></div>
				</div>
			</div>  
		</div>

		<div class="col s12 m12 l6 xl3"> 
			<div class="card test_bg" ng-init="countact(3)"> 
				<div class="card-content info-card">
					<div class="icon-info"><i class="fa fa-search"></i></div>
					<div class="info-content">
						<div class="info-numbers">{{cActiv4}}</div>
						<input type="hidden" id="cantidadTest">
						<div class="info-text">Test</div>
					</div>
					<div class="bottom_card"></div>
				</div>
			</div>  
		</div>

	</div>

	<!-- LISTADO DE GRUPOS -->

	<div class="row listar" ng-show="rowPrincipalGru">
  <div class="col s12 m12 l12" ng-init="listarGrupos()">
    <div class="card">
      <div class="card-content">
          <div class="card_title">
            <h2> <i class="fa fa-user"></i> My groups </h2>
          </div>
            <table datatable="ng" class="striped responsive-table bordered centered">
              <thead class="thead-bg">
                <tr>
                  <th> <i class="fa fa-users"></i>  Group </th>
                  <th> <i class="fa fa-id-card-o"></i> Teacher </th>
                  <th> <i class="fa fa-envelope-o"></i> E-mail </th>
                  <th> <i class="fa fa-graduation-cap"></i> Number of students </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="gruposAct in listagrupos">
                  <td>{{gruposAct.grupo_nombre}}</td>
                  <td>{{gruposAct.nombre}} {{gruposAct.apellido}}</td>
                  <td>{{gruposAct.email}}</td>
                  <td ng-repeat="total in gruposAct.totalAlumnos">{{total.totalAlumnos}}</td>
                  <td>
                    <a  href="#/lista_user_groups/{{gruposAct.grupo_id}}">
	                     <button class="waves-effect waves-light btn-large blue-btn"> 
	                      <i class="fa fa-file-text-o"></i> 
	                    </button>
                    </a>
                  </td>
                </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>


	<!-- <div class="col s12 m12 l12" ng-init="listarusuarios()">
		<div class="card">
			<div class="card-content">
				<div class="card_title">
					<h2> <i class="fa fa-user"></i> Registered Students </h2>
				</div>

				<table class="striped responsive-table bordered centered" datatable="ng">
					<thead>
						<tr>
							<th><i class="r"></i>#</th>
							<th><i class="fa fa-user"></i>Student</th>
							<th><i class="fa fa-id-card-o"></i>Name</th>
							<th><i class="fa fa-id-card-o"></i>Last Date</th>
							<th><i class="fa fa-envelope-o"></i>User</th>
							<th> <i class="fa fa-users"></i> Grupo </th>
						</tr>
					</thead>  

					<tbody>
						<tr ng-repeat="usuario in usuarios | filter:buscador">
							<td> {{$index+1}} </td>
							<td>
								<img class="user-photo circle responsive-img" src="img/avatar.png" ng-if="(usuario.img == '' || usuario.img == null) ? true : false">
								<img class="user-photo circle responsive-img" ng-if="(usuario.img == '' || usuario.img == null) ? false : true" src="../../templates/{{usuario.img}}">
							</td>

							<td> {{usuario.nombre}} </td>
							<td> {{usuario.fecha_ingreso}} </td>
							<td> {{usuario.email}} </td>
	              			<td ng-if="usuario.grupo_nombre">{{usuario.grupo_nombre}}</td>
	              			<td ng-if="!usuario.grupo_nombre">No Group</td>						
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div> -->

</div>


<!--  -->
