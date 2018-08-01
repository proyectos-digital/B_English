<div class="progress PreloadAdmin" ng-hide="PreloadAdminGru">
  <div class="indeterminate"></div>
</div>

  <div class="row listar" ng-show="rowPrincipalGru">
    <div class="col s12 m12 l12" ng-init="listarGrupos()">
      <div class="card">
        <div class="card-content">
            <div class="card_title">
              <h2> <i class="fa fa-user"></i> Group List </h2>
            </div>
              <table datatable="ng" class="striped responsive-table bordered centered">
                <thead class="thead-bg">
                  <tr>
                    <th> <i class="fa fa-users"></i>  Group </th>
                    <th> <i class="fa fa-id-card-o"></i> Teacher </th>
                    <th> <i class="fa fa-envelope-o"></i> E-mail </th>
                    <th> <i class="fa fa-graduation-cap"></i> Number of students </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr ng-repeat="gruposAct in listagrupos">
                    <td>{{gruposAct.grupo_nombre}}</td>
                    <td>{{gruposAct.nombre}} {{gruposAct.apellido}}</td>
                    <td>{{gruposAct.email}}</td>
                    <td ng-repeat="total in gruposAct.totalAlumnos">{{total.totalAlumnos}}</td>
                    <td>
                      <a  href="#/editar_grupos/{{gruposAct.grupo_id}}">
                        <button class="waves-effect waves-light btn-large blue-btn"> 
                          <i class="material-icons"> create </i>
                        </button>
                      </a>
                      <a  href="#/lista_modforos/{{gruposAct.grupo_id}}">
                        <button class="waves-effect waves-light btn-large blue-btn"> 
                          Forums
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

<script type="text/javascript">
	$(function(){
		// $('.editar').hide();
          $('.paginate_button').change(function(){
          console.log('hdhdfhj');
          //$('#chkAll').prop('checked', false);
      }); 
	});

</script>

<!-- done -->