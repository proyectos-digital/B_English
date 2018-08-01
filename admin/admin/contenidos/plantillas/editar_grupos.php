<div class="progress PreloadAdmin" ng-hide="PreloadAdminGru">
  <div class="indeterminate"></div>
</div>

<div class="row" ng-init="listarEditarGrupo()" ng-show="rowPrincipalGru">
	<div class="col s12 m12 l12 xl12">
		<div class="card">
			<div class="card-content">
				
				<!-- Titulo -->
				<div class="card_title">
	            	<h2><i class="fa fa-user-plus" aria-hidden="true"></i> Edit Group </h2>
	        	</div>

				<!-- -->
				<div class="group-information">
					
				<!-- -->
					<ul class="collapsible" data-collapsible="accordion" ng-init="listarDocentes()">
						<li>
							<div class="collapsible-header report-titles active"> <i class="fa fa-users" aria-hidden="true"></i> name group and select the teacher </div>
							<div class="collapsible-body"> 
								<!-- -->
								<div class="row">
									<!-- Group name -->
									<div class="input-field col s6">
										<input placeholder="Group name" id="first_name" type="text" class="validate" ng-model="nombreGrupo">
										<!-- <label for="first_name">Group name</label> -->
									</div>
									<!-- Teacher -->
									<div class="input-field col s6">
										<select class="browser-default" ng-model="iddocente" id="docenteEncargado" material-select>
										<option value="" disabled selected>Choose your Teacher</option>
										<option ng-repeat="value in docentes" ng-model="docenteEncargado" value="{{value.id_doc}}">{{value.nombre_doc}}</option>
										</select>
									</div>
								</div>
								<!-- -->
							</div>
						</li>
						<li>
						<div class="collapsible-header report-titles"> <i class="material-icons"> library_books </i> Units and Modules </div>
						<div class="collapsible-body">
							<!-- -->
							<div class="row">
								<!-- Unit -->
								<div class="col s6">
									<p>
										<input type="checkbox" class="filled-in units" id="unit1" name="unid" value="1"/>
										<label for="unit1"> Unit 1</label>						      
									</p>
									<p>
										<input type="checkbox" class="filled-in units" id="unit2" name="unid" value="2"/>
										<label for="unit2"> Unit 2</label>	
									</p>
									<p>
										<input type="checkbox" class="filled-in units" id="unit3" name="unid" value="3"/>
										<label for="unit3"> Unit 3</label>	
									</p>

								</div>
								<!-- Module -->
								<div class="col s6" ng-init="listarmodulos()">
									<div ng-repeat="modules in modulos">
										<p class="chkModulo {{$index+1}}">
										<input type="checkbox" class="filled-in modulo modulosel {{$index+1}}" id="c-mod_{{modules.id}}" value="{{modules.id}}" />
										<label for="c-mod_{{modules.id}}">{{modules.titulo}}</label>
										</p>
									</div>
								</div>
							</div>
							<!-- -->
						</div>
						</li>
						<li>
						<div class="collapsible-header report-titles"> <i class="material-icons"> library_books </i> Admin forums </div>
						<div class="collapsible-body">
							<!-- -->
							<div class="row">
								<!-- Module -->
								<div class="col s6" ng-init="listarmodulos()">
									<div ng-repeat="modulesforo in modulos">
										<p class="checkmodforo">
										<input name="fororadio" ng-click="listarforosgrupo(modulesforo.id)" type="radio" class="filled-in modulosforo {{$index+1}}" id="c-modforo_{{modulesforo.id}}" value="{{modulesforo.id}}" />
										<label for="c-modforo_{{modulesforo.id}}">{{modulesforo.titulo}}</label>
										</p>
									</div>
								</div>

								<div class="col s6" ng-init="CambiarEstadosForo()">
									<div ng-repeat="foros in forosgrupo">
										<div class="row" ng-bind-html="foros.tema"></div>
										<!-- <div ng-bind-html="foros.estado_comentario"></div> -->
										<div class="row"> 
											<input type="checkbox" name="checkStatusforo_{{foros.id}}" id="foroStatus_{{foros.id}}" foroid="{{foros.foro_id}}" class="filled-in forosactiv" ng-checked="(foros.estado_visual == 1) ? true : false">
											<label for="foroStatus_{{foros.id}}">Foro active</label>
											<input type="checkbox" name="checkStatusforo_{{foros.id}}" id="foroComments_{{foros.id}}" foroid="{{foros.foro_id}}" class="filled-in comentariosactiv" ng-checked="(foros.estado_comentario == 1) ? true : false">
											<label for="foroComments_{{foros.id}}">Comments active</label>
										</div>
										<hr>
									</div>
								</div>

								
							</div>
							<!-- -->
						</div>
						</li>
						<li ng-init="listarUsuariosGrupo()">
							<div class="collapsible-header report-titles"> <i class="material-icons"> assignment </i> {{subtiAcordeon[1]}} students </div>
							<div class="collapsible-body">
								<!-- -->
								<input type="checkbox" id="chkAll" ng-click="selectAllCheckbox()"/>
								<label for="chkAll">Select all</label>
								<p>Students selected: {{alumnoCursoLength}}</p>

								<table datatable="ng" class="striped responsive-table bordered centered">
									<thead class="thead-bg">
										<tr>
											<th id="estate"> <i class="fa fa-id-card-o"></i>  Choose</th>
											<th> <i class="fa fa-id-card-o"></i>  Name </th>
											<th> <i class="fa fa-id-card-o"></i> Last name </th>
											<th> <i class="fa fa-envelope-o"></i> E-mail </th>
											<th> <i class="fa fa-envelope-o"></i> Remove </th>
										</tr>
									</thead>

									<tbody >
										<!-- Usuarios que pertenecen al grupo -->
										<tr ng-repeat="usu in listausereditgrupos | filter:buscador">		
											<td>
												<input type="checkbox" id="c-input--userList_{{usu.id}}" disabled checked="true" class="chkAlumnos" value="{{usu.id}}"/>
												<label for="c-input--userList_{{usu.id}}"></label>
											</td>
											<td>{{usu.nombre}}</td>
											<td class="hidden-phone">{{usu.apellido}}</td>
											<td>{{usu.email}}</td>
											<td><button class="waves-effect waves-light btn-large blue-btn btn-danger" ng-click="removerUsuarioGrupo(usu.id)"> <i class="material-icons"> close </i>  </button></td>
										</tr>

										<!-- Usuarios sin grupo asignado -->
										<tr ng-repeat="usuariosingrupo in listausergrupos | filter:buscador">		
											<td>
												<input type="checkbox" id="c-input--userList_{{usuariosingrupo.id}}" class="chkAlumnos" value="{{usuariosingrupo.id}}"/>
												<label for="c-input--userList_{{usuariosingrupo.id}}"></label>
											</td>
											<td>{{usuariosingrupo.nombre}}</td>
											<td class="hidden-phone">{{usuariosingrupo.apellido}}</td>
											<td>{{usuariosingrupo.email}}</td>
											<td></td>
										</tr>
									</tbody>
								</table>
								<!-- -->
							</div>
						</li>

					</ul>	
					<!-- -->
				</div>
				
				<div class="group-btns">
					<!-- <button class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarGrupo()"> <i class="material-icons right"> save </i> save </button> -->
					<button class="waves-effect waves-light btn-large yellow-btn" ng-click="CrearGrupo(2)"> <i class="material-icons right"> save </i> save </button>			    	
					<!-- <button  class="waves-effect waves-light btn-large blue-btn" ng-show="userDos == 1" ng-click="cancelEditGroup()"> <i class="material-icons right"> cancel </i> Cancel </button> -->
				</div>
				<!-- -->
			</div>
		</div>
	</div>
</div>


<script>
	
	$(function(){

//function acordean
	 $('.button-collapse').sideNav();

 	$('.collapsible').collapsible();

//function select
    $('select').material_select();

//function form checkbox

    // $('.chkModulo').hide();

    $('.units').click(function(){
    	$('.chkModulo').hide();
    	$('.units').prop('disabled', false);
    	$('.modulo').prop('checked', false);
    	$('.units').each(function(){
    		if($(this).prop('checked')){
		    	if($(this).attr("id") === 'unit1'){
					$('.1').show();
			    	$('.2').show();
			    	$('.3').show();
			    	$('.4').show();						
			    	$('.1').prop('checked', true);
			    	$('.2').prop('checked', true);
			    	$('.3').prop('checked', true);
			    	$('.4').prop('checked', true);					

		    	}		    	
		    	if($(this).attr("id") ==='unit2'){

					$('.5').show();
			    	$('.6').show();
			    	$('.7').show();
			    	$('.8').show();						
			    	$('.5').prop('checked', true);
			    	$('.6').prop('checked', true);
			    	$('.7').prop('checked', true);
			    	$('.8').prop('checked', true);				

		    	}		    	
		    	if($(this).attr("id") ==='unit3'){

		     		$('.9').show();
    				$('.10').show();
			    	$('.11').show();
			    	$('.12').show();		
			    	$('.9').prop('checked', true);
    				$('.10').prop('checked', true);
			    	$('.11').prop('checked', true);
			    	$('.12').prop('checked', true);		     		

		    	}		    	
		    	if($(this).attr("id") === 'chkAllUnit'){
					$('#unit1').prop('disabled', true);
					$('#unit2').prop('disabled', true);
					$('#unit3').prop('disabled', true);
		    		$('.chkModulo').show();
		    		$('.modulo').prop('checked', true);
		    	}
			}

    	});
    });
});
</script>
