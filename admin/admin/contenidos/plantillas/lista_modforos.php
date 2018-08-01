<!-- <div class="progress PreloadAdmin" ng-hide="PreloadAdminGru">
  <div class="indeterminate"></div>
</div> -->

  <div class="row listar">
    <div class="col s12 m12 12 x12" ng-init="listarmodulos()">
        <div class="modulos_botones">
          <span ng-repeat="modulo in modulos">
            <button type="button" class="waves-effect waves-light btn-large blue-btn btn-modules {{modulo.id}}" ng-click="listarforosgrupo(modulo.id);"> <i class="material-icons left"> view_module </i> {{modulo.titulo}} </button>
          </span>
        </div>
    </div>

    <input type="hidden" id="modconsulta" value="">
      <div class="col s12 m12 l12" ng-init="listarforosgrupo(1)">
        <div class="card">
          <div class="card-content">
              <div class="card_title">
                <h2> <i class="fa fa-user"></i> Forums List - <b> Module {{modulonom}}</b> </h2>
              </div>
                <table datatable="ng" class="striped responsive-table bordered centered">
                  <thead class="thead-bg">
                    <tr>
                      <th> <i class="fa fa-users"></i>  Module </th>
                      <!-- <th> <i class="fa fa-graduation-cap"></i> Number of forums </th> -->
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="foros in forosgrupo">
                      <td ng-bind-html="foros.tema" style="width: 83%;"></td>
                      <!-- <td>2</td> -->
                      <td>
                          <button class="waves-effect waves-light btn-large blue-btn" data-target="modal1" ng-click="respuestasForo(foros.foro_id)"> 
                            <i class="material-icons"> create </i>
                          </button>
                      </td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
  </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer" style="width: 70%;">
      <div class="modal-content">
        <div class="c-foro">
          <div class="c-foro__sec c-foro__users">
            <div class="c-foro__users--title">Group members</div>
            <div class="c-foro__users--people" ng-init="ListarEstuGruposEdit()">
              <div class="c-foro__users--person" ng-repeat="grupouser in listausereditgrupos">{{grupouser.nombre}} {{grupouser.apellido}}</div>
            </div>
          </div>
          
          <div class="c-foro__sec c-foro__topic">
            <div class="c-foro__top">
              <div class="c-foro__top--avatar"></div>
              <div class="c-foro__top--title">  FORUM</div>
            </div>
            
            <div class="c-foro__middle" ng-repeat="forosadmin in respuestasForoAdmin">
              <div class="c-foro__middle--main-msj">
                <p ng-bind-html="forosadmin.tema"></p>
              </div>
              <div class="c-foro__middle--msj-cont">
                <div class="c-foro__middle--msj" ng-repeat="respuesta in forosadmin.respuestasforo">
                  <p class="ta-r"><small>{{respuesta.nombre}} {{respuesta.apellido}}</small></p>
                  <p class="ta-r"><small>{{respuesta.fecha_env}}</small></p>
                  <p class="mt10">{{respuesta.respuesta}}</p>
                </div>
              </div>
            </div>
            
            <div class="c-foro__bottom">
              <div class="c-foro__bottom--text-box">
                <textarea class="c-foro__text-box" ng-model="textoforo" placeholder="Writing your answer here ..."></textarea>
              </div>
              <div class="c-foro__bottom--submit" ng-click="enviarForoAdmin()">
                <button class="c-btn-IconAction u-bgIconSendChat">Send</button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <a class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>

<script type="text/javascript">

	$(function(){
    $(document).ready(function(){
      $('.modal').modal();
    });

          $('.paginate_button').change(function(){
      }); 
	});

</script>

<!-- done -->