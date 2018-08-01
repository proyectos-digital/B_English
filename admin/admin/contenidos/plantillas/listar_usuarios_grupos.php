<!-- <div class="row PreloadAdmin" ng-hide="PreloadAdminUsu">
  <i class="fa fa-spinner fa-pulse fa-3x fa-fw fs20 spinnerAdmin"></i>
</div> -->
<div class="progress PreloadAdmin" ng-hide="PreloadAdminUsu">
  <div class="indeterminate"></div>
</div>

<div ng-controller="controlUsuarios as showCase" ng-show="rowPrincipalLusu">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-content"  ng-init="ListarEstuGruposEdit()">
          
          <!-- Titulo -->
          <div class="card_title">
            <h2> <i class="fa fa-user"></i> User List | <b>GROUP - {{grupo_nombre}}</b></h2>
          </div>

          <!-- Table -->
          <table class="striped responsive-table bordered centered" ng-table="tableusers" datatable="ng" dt-instance="dtInstance">
            <thead class="thead-bg">
              <tr>
                <th> <i class=""></i>  # </th>
                <th> <i class="fa fa-id-card-o"></i> Last name </th>
                <th> <i class="fa fa-id-card-o"></i> Name </th>
                <th> <i class="fa fa-envelope-o"></i> E-mail </th>
                <th> <i class="fa fa-users"></i> Group </th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="usuario in listausereditgrupos | filter:buscador">
                <td>{{$index+1}}</td>
                <td class="hidden-phone">{{usuario.apellido}}</td>
                <td>{{usuario.nombre}}</td>
                <td class="hidden-phone">{{usuario.email}}</td>
                <td ng-if="usuario.grupo_nombre">{{usuario.grupo_nombre}}</td>
                <td ng-if="!usuario.grupo_nombre">  It has no group </td>
                <td>
                  <a href="#/reporte_usuarios/{{usuario.id}}">
                    <button class="waves-effect waves-light btn-large blue-btn"> 
                      <i class="fa fa-list-ol"></i>
                    </button>
                  </a>

                  <a>
                    <button class="waves-effect waves-light btn-large blue-btn admin_iconChat header_iconChat--new chat-admin" data-newmsn="{{usuario.pendientes}}" ng-click="conversacion(usuario.id,usuario.nombre,usuario.img)"> 
                      <i class="fa fa-comment" aria-hidden="true"></i> 
                    </button>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- Table -->
        </div>
      </div>
    </div>
  </div>


  <!-- MODAL -->
  <div id="myModal" class="modal" role="dialog">

  <!-- MODAL CONTENT -->
  	<div class="modal-content">

  		<div class="modal-top">
  			<h4 class="modal-title"> Restart  answers </h4>
  			<button type="button" class="close" data-dismiss="modal">&times;</button>
  		</div>

      <input type="hidden" ng-model="idUser">

  	<!-- MODAL CENTER --> 
  	<div class="modal-center">
  	<!-- SELECT 1 -->
  		<div class="row" ng-init="ListarUnidades()" >
  			<div class="col s12 m12 l12">
  				<div class="form-group" ng-click="ListarModuloUnit(id)">
            Select Unit
  					<select class="selectpicker unidades form-control" ng-model="id">
  					<option ng-repeat="unit in unidades" value="{{unit.id}}">{{unit.titulo}}</option>
  					</select>
  				</div>
  			</div>
  		</div>
      
      <span ng-show="spinnerResetUser" class="fa fa-spinner fa-pulse fa-3x fa-fw fs20"></span>

  	<!-- SELECT 2 -->
  		<div class="row" ng-show="listModulos">
  			<div class="col s12 m12 l12">
  				<div class="form-group">
            Select Module
  					<select class="selectpicker modulos form-control" ng-model="idModu">
  						<option ng-repeat = "modulo in modulosxunit" value="{{modulo.id}}">{{modulo.titulo}} - Unit {{modulo.unidad_id}}</option>
  					</select>

  					<input type="hidden" value="" id="modsel">
 					
  				</div>
  			</div>
  		</div>
  		<!-- -->
  	</div>
  	<!-- MODAL CENTER -->
  	
  	<div class="modal-end">
  		<div class="modal-end-btns">
  			<button type="button" class="waves-effect waves-light btn-large blue-btn" ng-click="ReiniciarActUser()" data-dismiss="modal"> 
          <i class="material-icons right"> redo </i> Restar
        </button>
  		</div>
  	</div>

   </div>
  </div>
  <!-- -->

  <!-- CHAT -->
  <div class="chat__card" style="visibility: hidden;">
    <div class="chat__header"> 
      <div class="chat__header--userData">
        <span class="userData-img">
          <img class="imgPersonaChat" src="{{imgChat}}" alt="" />
        </span>
        <span class="userData-name">
          {{amistad}}
        </span>
      </div>
      <i class="chat__header--closeChat">x</i>
    </div>
    <ul class="chat__history">
    <div ng-repeat="conversacion in conversaciones">
      <li class="chat__item chat__item--me" ng-if="conversacion.nombre != amistad">
        <div class="chat__message">
          <span class="chat__message--user-name">{{conversacion.nombre}}</span>
          <time class="chat__message--time">
            <i class="fa fa-clock-o"></i>
            {{conversacion.fecha}}
          </time>
          <p class="chat__message--text">{{conversacion.mensaje}}</p>
        </div>
      </li>
      <li class="chat__item chat__item--other" ng-if="conversacion.nombre == amistad">
        <div class="chat__message">
          <span class="chat__message--user-name">{{conversacion.nombre}}</span>
          <time class="chat__message--time">
            <i class="fa fa-clock-o"></i>
            {{conversacion.fecha}}
          </time>
          <p class="chat__message--text">{{conversacion.mensaje}}</p>
        </div>
      </li>
      </div>
    </ul>
    <div class="chat__controls">
      <textarea class="chat-controls__textarea" placeholder="Type your message" ng-model="mensajeChat"></textarea>
      <a class="chat-controls__btn" ng-click="mensaje()">Send</a>
      <!--div class="btns-row">
        <a href="#" class="attach-file"><i class="fa fa-paperclip"></i></a>
      </div-->
    </div>
  </div>
</div>

<script type="text/javascript">


  // $('.unidades').change(function(){
  //    var valor = $(this).val();
  //    if(valor == 1){
  //     $('#listmod1').removeClass('ocultarlist');
  //     $('#listmod2').addClass('ocultarlist');
  //     $('#listmod3').addClass('ocultarlist');
  //    }
  //         if(valor == 2){
  //     $('#listmod2').removeClass('ocultarlist');
  //     $('#listmod1').addClass('ocultarlist');
  //     $('#listmod3').addClass('ocultarlist');
  //    }
  //         if(valor == 3){
  //     $('#listmod3').removeClass('ocultarlist');
  //     $('#listmod1').addClass('ocultarlist');
  //     $('#listmod2').addClass('ocultarlist');
  //    }
  // })

  // $('.modulos').change(function(){
  //   var valormod = $(this).val();
  //   $('#modsel').val(valormod)
  // })


</script>



     