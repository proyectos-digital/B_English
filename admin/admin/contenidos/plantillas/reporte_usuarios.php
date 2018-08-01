<!--  <div class="row PreloadAdmin" ng-hide="PreloadAdminReport">
	<i class="fa fa-spinner fa-pulse fa-3x fa-fw fs20 spinnerAdmin"></i>
</div> -->
<div class="progress" ng-hide="PreloadAdminReport">
	<div class="indeterminate"></div>
</div>

<div ng-show="rowPrincipalReporte">

	<!-- INFO USER - GENERAL INFORMATION - PORCENTAJE -->
	<div class="row" >
		<!-- -->
		<div class="col s12 m12 l12 xl4">
		<!-- <input type="hidden" id = "idDocente" value = " <?php echo $idDocente ?> "> -->
			<div class="card" ng-init="editarUsuarios()">
				<div class="card-content user-bg">
					<!-- user-photo -->
					<div class="user-photo">
	          			<img style="max-width: 100%; height: auto;" src="assets/img/avatar.jpg" ng-if="(img_report == '' || img_report == null) ? true : false"/>
	          			<img style="max-width: 100%; height: auto;" src="../../templates{{img_report}}" ng-if="(img_report == '' || img_report == null) ? false : true"/>
	          		</div> 

	          		<!-- -->
					<div class="user-info">
						<div class="user-info-item">
							<p class="personal-info">Name: </p>
							<p class="student-info">{{nombre}}</p>
						</div>

						<div class="user-info-item">
							<p class="personal-info">Last Name: </p>
							<p class="student-info">{{apellido}}</p>
						</div>

						<div class="user-info-item">
							<p class="personal-info">Last entry: </p>
							<p class="student-info">{{fecha_ingreso}} </p>
						</div>

						<div class="user-info-item">
							<p class="personal-info">Email: </p>
							<p class="student-info">{{email}}</p>
						</div>
					</div>
					<!-- -->
				</div>
			</div>
		</div>
		<!-- -->
		<div class="col s12 m12 l12 xl4">
			<div class="card">
				<div class="card-content general-information">

					<!-- -->
					<div class="card_title">
	          			<h2><i class="fa fa-bar-chart" aria-hidden="true"></i> General information </h2>
	        		</div>
	        		<!-- -->
					
					<!-- Table-information -->
			        <div class="table-information">
			          <table class="striped responsive-table bordered centered">
			            <thead>
			              <tr>
			                <th> <i class="fa fa-pencil-square-o"></i> Exercises </th>
			                <th> <i class="fa fa-comments-o"></i> Answered </th>
			                <th> <i class="fa fa-thumbs-o-up"></i> </i> Correctly </th>
			              </tr>
			            </thead>
			            <tbody>
			              <tr>
			                <td style="text-align: center">{{npreguntas}}</td>
			                <td style="text-align: center">{{ncontestadas}}</td>
			                <td style="text-align: center">{{ncorrectas}}</td>
			              </tr>
			            </tbody>
			          </table>
			        </div>
			      	<!-- -->

				</div>
			</div>
		</div>
		<!-- -->
		<div class="col s12 m12 l12 xl4">
			<div class="card">
				<div class="card-content chart-bg">
					<!-- -->
					<div class="card_title">
				 		<h2><i class="fa fa-bar-chart" aria-hidden="true"></i> Percentage </h2>
			 		</div>
			 		<!-- -->
					
					<div class="user-chart">
						<span class="chart" easypiechart ng-init="options = { animate:false, barColor:'#f4ad18', scaleColor:false, lineWidth:3, lineCap:'butt' }" percent="percent" options="options">
							<span class="percent" ng-bind="percent | number : 2"></span>
						</span>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- LIST MODULOS - FEEDBACK -->
	<!-- -->
	<div class="row">
		<div class="col s4 m4 l4 x4" ng-init="listarmodulos()">
			<div class="modulos_botones">
				<span ng-repeat="modulo in modulos">
					<button type="button" class="waves-effect waves-light btn-large blue-btn btn-modules {{modulo.id}}" ng-click="listarRespuestasActv(modulo.id);"> <i class="material-icons left"> view_module </i> {{modulo.titulo}} </button>
				</span>
			</div>
		</div>
		<div class="col s8 m8 l8 x8">

	        <div class="card">
	            <div class="card-content feed-content" ng-init="ListadoNotificacionesXEstudiante()">
	                <!-- -->
	                <div class="card_title">
	                    <h2>
	                        <svg class="svg-inline--fa fa-bar-chart fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="bar-chart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><g><path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path><circle fill="currentColor" cx="256" cy="364" r="17.18"><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate></circle><path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z"><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate></path><path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z"><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate></path></g></svg>
	                        <!-- <i class="fa fa-bar-chart" aria-hidden="true"></i> -->
							Feedback
							<div class="add add-feed">
								<i class="fa fa-plus-circle fa-w-16" aria-hidden="true" ></i>
							</div>
	                    </h2>
	                </div>
					<!-- -->
					<div ng-hide="(notificaciones == '') ? false : true " class="">Does not have notifications</div>
	                <div ng-show="(notificaciones == '') ? false : true " class="feed-cont ng-hide">
						<!--  -->
	                    <div class="feed-resume" ng-repeat="notif in notificaciones" ng-class="(notif.estado == 0) ? 'new' : '' " ng-click="VerNotificacion(notif.id)">
							<div class="feed-title">
								<i class="fa fa-location-arrow"></i>
	                            <span class="ml10">{{notif.tit_notif}}</span>
							</div>
	                        <div class="feed-asunto">
								{{notif.msg_notif}}
							</div>
							<div class="feed-date">
								<!-- <strong>01 enero. 18</strong> -->
								<strong>{{notif.fecha_notificacion}}</strong>
							</div>
						</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	<div class="progress" ng-hide="PreloadAdminMod">
      <div class="indeterminate"></div>
  	</div>
	
	<!-- -->
	<div class="row" ng-show="ViewAdminGeneral">
		<div class="col s12 m12 l12 x12" ng-init="listarRespuestasActv(1)">
			<div class="card">
				<div class="card-content">
					<div class="card_title">
						<h2> <i class="fa fa-book" aria-hidden="true"></i> {{nombreModulo}}</h2>
						<input type="hidden" id="idModulo" value="{{idModulo}}">
						<input type="hidden" value="" id="modenvioid">
					</div>

					<!-- -->
					<div class="modules-information">
						<ul class="collapsible" data-collapsible="accordion">
					      
					        <!-- ACTIVITIES -->
					      <li>
					        <div class="collapsible-header active report-titles"> 
					        	<i class="fa fa-puzzle-piece material-icons"></i> Activities </div>
					        
					        <div class="collapsible-body report-bg">

					          <!-- -->
					          <ul class="collapsible" data-collapsible="accordion">
					            <li>
					              <div class="collapsible-header activities-titles">
					              	<i class="material-icons"> content_paste </i> Exercises </div>
					              <div class="collapsible-body activities-bg">
									
					                <table id="unseen" class="table-report striped responsive-table bordered centered">

					                  <thead>
					                    <tr>
					                      <th> Activity </th>
					                      <th> Nº questions</th>
					                      <th> Good</th>
					                      <th> Result</th>
					                      <!-- <th> Difficulty </th> -->
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestas == '' || respuestas == null) ? true : false">
					                      <td colspan="5">The student has not generated answers for this module.</td>
					                    </tr>

					                    <tr ng-repeat="respuesta in respuestas">
					                      <td><span ng-bind-html="respuesta.titulo"></span></td>
					                      <td>{{respuesta.cantidad_pre}}</td>
					                      <td>{{respuesta.res_bien}}</td>  
					                      <td>
					                        <div ng-show="(respuesta.cantidad_pre == respuesta.res_bien)? true : false"> OK <img src="img/Ok.png" style="width: 18px"> </div>
					                        <div ng-show="(respuesta.cantidad_pre != respuesta.res_bien)? true : false"> FAILED <img src="img/Failed.png" style="width: 18px"> </div>
					                      </td>
					                    </tr>

					                  </tbody>

					                </table>
					                <!-- -->

					              </div>
					            </li>
					            <li>
					              <div class="collapsible-header activities-titles"> <i class="material-icons"> create </i> Writting </div>
					              <div class="collapsible-body activities-bg">
					                <!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> Id </th>
					                      <th> Activity </th>
					                      <th> Text </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestasWriting == '' || respuestasWriting == null) ? true : false">
					                      <td colspan="5">The student has not generated any text.</td>
					                    </tr>
					                    
					                    <tr ng-repeat="respuesta_w in respuestasWriting">
					                      <td>{{respuesta_w.id}}</td>
					                      <td><span ng-bind-html="respuesta_w.titulo"></span></td>
					                      <td>
					                        <textarea disabled class="form-control beauty_scroll" rows="3">{{respuesta_w.texto}}</textarea>
					                      </td>
					                      <td >{{respuesta_w.calificacion_txt}} %</td>
					                      <td>
					                        <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalWriting_{{respuesta_w.id}}"> <i class="material-icons"> description </i> </button>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->
					              </div>
					            </li>
					            <li>
					              <div class="collapsible-header activities-titles"><i class="material-icons"> mic </i> Speaking </div>
					              <div class="collapsible-body activities-bg">
									
									<!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> ID </th>
					                      <th> Activity </th>
					                      <th> Audio </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>
					                  <tbody>
					                    <tr ng-show="(respuestasSpAct == '' || respuestasSpAct == null) ? true : false">
					                      <td colspan="5">The student has not recorded any audio.</td>
					                    </tr>

					                    <tr ng-repeat="respuesta_sp_act in respuestasSpAct">
					                      <td>{{respuesta_sp_act.id}}</td>
					                      <td><span ng-bind-html="respuesta_sp_act.titulo"></span></td>
					                      <td><audio controls="" src="{{respuesta_sp_act.ruta_carpeta}}"></audio></td>
					                      <td>{{respuesta_sp_act.calificacion_aud}} %</td>
					                      <td>
					                        <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalSpeaking_{{respuesta_sp_act.id}}"> <i class="material-icons"> description </i> </button>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->

					              </div>
					            </li>
					          </ul>
					          
					          <!-- -->
					        </div>
					      </li>

							<!-- SELF - CHECK -->
					      <li>
					        <div class="collapsible-header report-titles"> 
					        	<i class="fa fa-check-square-o material-icon"></i> Self-Check </div>
					        <div class="collapsible-body"> 
					          <!-- -->
					          <ul class="collapsible" data-collapsible="accordion">
					            <li>
					              <div class="collapsible-header activities-titles"><i class="material-icons"> content_paste </i> Exercises </div>
					              <div class="collapsible-body activities-bg"> 

					              	<!-- -->
					              <!-- 	<div class="table-btn">
					              		<a class="waves-effect waves-light btn-large yellow-btn" ng-click="exportarExcel('unseen1',respuestasSelf,'Self-Check')" ng-show="(respuestasSelf == '' || respuestasSelf == null) ? false : true"> <i class="material-icons">  arrow_downward </i>  </a>
					              	</div> -->
					                <!-- -->
					                <table id="unseen1" class="table-report striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> Activity </th>
					                      <th> Nº questions</th>
					                      <th> Good</th>
					                      <th> Result</th>
					                    </tr>
					                  </thead>
									<!-- ACTIVITIES SELF -->
					                  <tbody>
					                    <tr ng-show="(respuestasSelf == '' || respuestasSelf == null) ? true : false">
					                      <td colspan="5">The student has not generated answers for this module. (Self - Check)</td>
					                    </tr>
					                    <tr ng-repeat="respuesta_s in respuestasSelf">
											<td>
												<span ng-bind-html="respuesta_s.titulo"></span>
											</td>
											<td>{{respuesta_s.cantidad_pre}}</td>
											<td>{{respuesta_s.res_bien}}</td>
											<td>
												<div ng-show="(respuesta_s.cantidad_pre == respuesta_s.res_bien)? true : false"> OK 
													<img src="img/Ok.png" style="width: 18px">
												</div>
												<div ng-show="(respuesta_s.cantidad_pre != respuesta_s.res_bien)? true : false"> FAILED 
													<img src="img/Failed.png" style="width: 18px"> 
												</div>
											</td>
					                      <!-- <td>
					                        <div ng-show="(respuesta_s.dificultad == 0)? true : false"> OK <img src="img/Ok.png" style="width: 18px"> </div>
					                        <div ng-show="(respuesta_s.dificultad != 0)? true : false"> FAILED <img src="img/Failed.png" style="width: 18px"> </div>
					                      </td> -->
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->
					              </div>
					            </li>
					            <li>
					            	<!-- WRITING - SELF -->
					              <div class="collapsible-header activities-titles"> <i class="material-icons"> create </i> Writting </div>
					              <div class="collapsible-body activities-bg">
					                <!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> ID </th>
					                      <th> Activity </th>
					                      <th> Audio </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestasWrSelf == '' || respuestasWrSelf == null) ? true : false">
					                      <td colspan="5">The student has not generated any text. (Self - Check)</td>
					                    </tr>

					                    <tr ng-repeat="respuesta_wr_s in respuestasWrSelf">
					                      <td>{{respuesta_wr_s.id}}</td>
					                      <td><span ng-bind-html="respuesta_wr_s.titulo"></span></td>
					                      <td><textarea disabled class="form-control beauty_scroll" rows="3">{{respuesta_wr_s.texto}}</textarea></td>
					                      <td>{{respuesta_wr_s.calificacion_txt}} %</td>
					                      <td>
					                        <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalWriting_{{respuesta_wr_s.id}}"> <i class="material-icons"> description </i> </button>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->
					              </div>
					            </li>
					            <li>
					            	<!-- SPEAKING - SELF -->
					              <div class="collapsible-header activities-titles"><i class="material-icons"> mic </i> Speaking </div>
					              <div class="collapsible-body activities-bg"> 
					                <!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> ID </th>
					                      <th> Activity </th>
					                      <th> Audio </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestasSpSelf == '' || respuestasSpSelf == null) ? true : false">
					                      <td colspan="5">The student has not recorded any audio. (Self - Check)</td>
					                    </tr>

					                    <tr ng-repeat="respuesta_sp_self in respuestasSpSelf">
					                      <td>{{respuesta_sp_self.id}}</td>
					                      <td><span ng-bind-html="respuesta_sp_self.titulo"></span></td>
					                      <td><audio controls="" src="{{respuesta_sp_self.ruta_carpeta}}"></audio></td>
					                      <td >{{respuesta_sp_self.calificacion_aud}} %</td>
					                      <td>
					                        <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalSpeaking_{{respuesta_sp_self.id}}"> <i class="material-icons"> description </i> </button>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->
					              </div>
					            </li>
					          </ul>
					          <!-- -->
					        </div>
					      </li>

					      <!-- TEST -->
					      <li ng-init="CambiarEstadoTest()">
					        <div class="collapsible-header report-titles"> <i class="fa fa-search"></i> Test </div>
					        <div class="collapsible-body report-bg"> 
					          <!-- -->
							  <div class="row">
							  	<input type="checkbox" name="checkStatustest_1" id="testStatus_1" testid="1" class="filled-in estadotest" ng-checked="(estadotest == 1) ? true : false">
								<label for="testStatus_1">Test active</label>
							  </div>
					          <ul class="collapsible" data-collapsible="accordion">
					            <li>
					              <div class="collapsible-header activities-titles"><i class="material-icons"> content_paste </i> Exercises </div>
					              <div class="collapsible-body activities-bg"> 
									
									<!-- -->
					              	<!-- <div class="table-btn">
					              		<a class="waves-effect waves-light btn-large yellow-btn" ng-click="exportarExcel('unseen2',respuestasTest,'Test')" ng-show="(respuestasTest == '' || respuestasTest == null) ? false : true"> 
					              			<i class="material-icons"> arrow_downward </i> </a>
					              	</div> -->
					                <!-- -->
					                <table id="unseen2" class="table-report wstriped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> Activity </th>
					                      <th> Nº questions</th>
					                      <th> Good</th>
					                      <th> Result</th>
					                      <!-- <th> Difficulty </th> -->
					                    </tr>
					                  </thead>
					                  <!-- Activities test -->
					                  <tbody>
					                    <tr ng-show="(respuestasTest == '' || respuestasTest == null) ? true : false">
					                      <td colspan="5">The student has not generated answers for this module. (Test)</td>
					                    </tr>

					                    <tr ng-repeat="respuesta_t in respuestasTest">
																<td><span ng-bind-html="respuesta_t.titulo"></span></td>
																<td>{{respuesta_t.cantidad_pre}}</td>
																<td>{{respuesta_t.res_bien}}</td>
					                      <td ng-show="(respuesta_t.cantidad_pre == respuesta_t.res_bien)? true : false"> OK <img src="img/Ok.png" style="width: 18px"> </td>
					                      <td ng-show="(respuesta_t.cantidad_pre != respuesta_t.res_bien)? true : false"> FAILED <img src="img/Failed.png" style="width: 18px"> </td>
					                      <!-- <td ng-show="(respuesta_t.dificultad == 0)? true : false"> OK <img src="img/Ok.png" style="width: 18px"> </td> -->
					                      <!-- <td ng-show="(respuesta_t.dificultad != 0)? true : false"> FAILED <img src="img/Failed.png" style="width: 18px"> </td> -->
					                    </tr>
					                  </tbody>

					                </table>
					                <!-- -->
					              </div>
					            </li>
					            <li>
					            	<!-- Writing - test -->
					              <div class="collapsible-header activities-titles"><i class="material-icons"> create </i> Writting </div>
					              <div class="collapsible-body activities-bg"> 
					                <!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> ID </th>
					                      <th> Activity </th>
					                      <th> Audio </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>
					                  
					                  <tbody>

					                    <tr ng-show="(respuestasWrTest == '' || respuestasWrTest == null) ? true : false">
					                      <td colspan="5"> The student has not generated any text. (Test)</td>
					                    </tr>


					                    <tr ng-repeat="respuesta_wr_t in respuestasWrTest">
					                      <td>{{respuesta_wr_t.id}}</td>
					                      <td><span ng-bind-html="respuesta_wr_t.titulo"></span></td>
					                      <td><textarea disabled class="form-control" rows="3">{{respuesta_wr_t.texto}}</textarea></td>
					                      <td>{{respuesta_wr_t.calificacion_txt}} %</td>
					                      <td> <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalWriting_{{respuesta_wr_t.id}}"> 
					                      	<i class="material-icons"> description </i>
					                      </button> </td>
					                    </tr>
					                  </tbody>

					                </table>
					                <!-- -->
					              </div>
					            </li>
					            <li>
					            	<!-- Speaking test -->
					              <div class="collapsible-header activities-titles"><i class="material-icons"> mic </i> Speaking </div>
					              <div class="collapsible-body activities-bg">
					                <!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> ID </th>
					                      <th> Activity </th>
					                      <th> Audio </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestasSpTest == '' || respuestasSpTest == null) ? true : false">
					                      <td colspan="5">The student has not recorded any audio. (Test)</td>
					                    </tr>

					                    <tr ng-repeat="respuesta_sp_test in respuestasSpTest">
					                      <td> {{respuesta_sp_test.id}} </td>
					                      <td><span ng-bind-html="respuesta_sp_test.titulo"></span></td>
					                      <td> <audio controls="" src="{{respuestasSpTest.ruta_carpeta}}"></audio> </td>
					                      <td> {{respuesta_sp_test.calificacion_aud}} % </td>
					                      <td> <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalSpeaking_{{respuesta_sp_test.id}}"></button> </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->
					              </div>
					            </li>
					          </ul>
					          <!-- -->
					        </div>
					      </li>

					      <!-- MY COLOMBIA -->
					      <li>
					        <div class="collapsible-header active report-titles"> 
					        	<i class="fa fa-puzzle-piece material-icons"></i> My Colombia </div>
					        
					        <div class="collapsible-body report-bg">

					          <!-- -->
					          <ul class="collapsible" data-collapsible="accordion">
					            <li>
					              <div class="collapsible-header activities-titles">
					              	<i class="material-icons"> content_paste </i> Exercises </div>
					              <div class="collapsible-body activities-bg">
									
					                <table id="unseen" class="table-report striped responsive-table bordered centered">

					                  <thead>
					                    <tr>
					                      <th> Activity </th>
					                      <th> Nº questions</th>
					                      <th> Good</th>
					                      <th> Result</th>
					                      <!-- <th> Difficulty </th> -->
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestasMycol == '' || respuestasMycol == null) ? true : false">
					                      <td colspan="5">The student has not generated answers for this module.</td>
					                    </tr>

					                    <tr ng-repeat="respuesta in respuestasMycol">
					                      <td><span ng-bind-html="respuesta.titulo"></span></td>
					                      <td>{{respuesta.cantidad_pre}}</td>
					                      <td>{{respuesta.res_bien}}</td>  
					                      <td>
					                        <div ng-show="(respuesta.cantidad_pre == respuesta.res_bien)? true : false"> OK <img src="img/Ok.png" style="width: 18px"> </div>
					                        <div ng-show="(respuesta.cantidad_pre != respuesta.res_bien)? true : false"> FAILED <img src="img/Failed.png" style="width: 18px"> </div>
					                      </td>
					                    </tr>

					                  </tbody>

					                </table>
					                <!-- -->

									<!-- Ejercicio de power point -->
									<div ng-init="ListPowerPointAct4MyCol()">
										<div ng-show="OkPoint" ng-repeat = "doc in powerpoint">
											<span>Activity 4.</span>
											<a href="{{doc.documento}}">
												<img src="../../admin/admin/img/power_point1.png" alt="" width="50px">
											</a>
										</div>
										<p ng-show="NoPoint">You have not done activity 4 (Power Point)</p>
									</div>
									<!-- End exercise power Point -->

									<!-- Videos de youtube -->

									<div ng-init="">
										<div ng-show="NoVideo">
											<p>Youtube videos</p>
											<p>No video has been uploaded</p>
										</div>
										<div ng-show="OkVideo">
											<span ng-bind-html="videosiframe | unsafe "></span>
										</div>
									</div>

					              </div>
					            </li>
					            <!-- Writing MyColombia -->
					            <li>
					              <div class="collapsible-header activities-titles"> <i class="material-icons"> create </i> Writting </div>
					              <div class="collapsible-body activities-bg">
					                <!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> Id </th>
					                      <th> Activity </th>
					                      <th> Text </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>

					                  <tbody>

					                    <tr ng-show="(respuestasWrMycol == '' || respuestasWrMycol == null) ? true : false">
					                      <td colspan="5">The student has not generated any text.</td>
					                    </tr>
					                    
					                    <tr ng-repeat="respuesta_w in respuestasWrMycol">
					                      <td>{{respuesta_w.id}}</td>
					                      <td><span ng-bind-html="respuesta_w.titulo"></span></td>
					                      <td>
					                        <textarea disabled class="form-control beauty_scroll" rows="3">{{respuesta_w.texto}}</textarea>
					                      </td>
					                      <td >{{respuesta_w.calificacion_txt}} %</td>
					                      <td>
					                        <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalWriting_{{respuesta_w.id}}"> <i class="material-icons"> description </i> </button>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->
					              </div>
					            </li>
					            <!-- Speaking My Colombia -->
					            <li>
					              <div class="collapsible-header activities-titles"><i class="material-icons"> mic </i> Speaking </div>
					              <div class="collapsible-body activities-bg">
									
									<!-- -->
					                <table class="striped responsive-table bordered centered">
					                  <thead>
					                    <tr>
					                      <th> ID </th>
					                      <th> Activity </th>
					                      <th> Audio </th>
					                      <th> % </th>
					                      <th> Grade </th>
					                    </tr>
					                  </thead>
					                  <tbody>
					                    <tr ng-show="(respuestasSpMyCol == '' || respuestasSpMyCol == null) ? true : false">
					                      <td colspan="5">The student has not recorded any audio.</td>
					                    </tr>

					                    <tr ng-repeat="respuesta_sp_my in respuestasSpMyCol">
					                      <td>{{respuesta_sp_my.id}}</td>
					                      <td><span ng-bind-html="respuesta_sp_my.titulo"></span></td>
					                      <td><audio controls="" src="{{respuesta_sp_my.ruta_carpeta}}"></audio></td>
					                      <td>{{respuesta_sp_my.calificacion_aud}} %</td>
					                      <td>
					                        <button class="waves-effect waves-light btn-large blue-btn" data-toggle="modal" data-target="#myModalSpeaking_{{respuesta_sp_my.id}}"> <i class="material-icons"> description </i> </button>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					                <!-- -->

					              </div>
					            </li>
					          </ul>
					          
					          <!-- -->
					        </div>
					      </li>

					    </ul>					    
					</div>

					<!-- -->
					<div class="back-btn"> <a href="#/Listar_usuarios" class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">keyboard_backspace</i></a> </div>

				</div>
			</div>
		</div>
	</div>


	<!-- Modal Actividades WRITING-->
	<div ng-repeat="respuesta_w in respuestasWriting" class="rubrica modal fade" id="myModalWriting_{{respuesta_w.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">

	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Writing Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>

	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Very Good (5)</th>
	                            <th>Good (4)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Could be better (2-1)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>Topic</td>
	                            <td>20%</td>
	                            <td class="seleccion" data="0" ng-class="{'selec': fila1 === 5}" ng-click="fila1 = 5">Directly relevant. </td>
	                            <td class="seleccion" data="0" ng-class="{'selec': fila1 === 4}" ng-click="fila1 = 4">Somewhat relevant. </td>
	                            <td class="seleccion" data="0" ng-class="{'selec': fila1 === 3}" ng-click="fila1 = 3">Remotely related. </td>
	                            <td class="seleccion" data="0" ng-class="{'selec': fila1 === 2}" ng-click="fila1 = 2">Totally unrelated. </td>
	                        </tr>
	                        <tr>
	                            <td>Organization</td>
	                            <td>20%</td>
	                            <td class="seleccion" data="1" ng-class="{'selec': fila2 === 5}" ng-click="fila2 = 5">Good organization; points are logically ordered; sharp sense of beginning and end. </td>
	                            <td class="seleccion" data="1" ng-class="{'selec': fila2 === 4}" ng-click="fila2 = 4">Organized; points are somewhat jumpy; sense of beginning and ending. </td>
	                            <td class="seleccion" data="1" ng-class="{'selec': fila2 === 3}" ng-click="fila2 = 3">Some organization; points jump around; beginning and ending are unclear. </td>
	                            <td class="seleccion" data="1" ng-class="{'selec': fila2 === 2}" ng-click="fila2 = 2">Poorly organized; no logical progression; beginning and ending are vague. </td>
	                        </tr>
	                        <tr>
	                            <td>Quality of Information</td>
	                            <td>25%</td>
	                            <td class="seleccion" data="2" ng-class="{'selec': fila3 === 5}" ng-click="fila3 = 5">Supporting details specific to subject. </td>
	                            <td class="seleccion" data="2" ng-class="{'selec': fila3 === 4}" ng-click="fila3 = 4">Some details are non-supporting to the subject. </td>
	                            <td class="seleccion" data="2" ng-class="{'selec': fila3 === 3}" ng-click="fila3 = 3">Details are somewhat sketchy. Do not support topic. </td>
	                            <td class="seleccion" data="2" ng-class="{'selec': fila3 === 2}" ng-click="fila3 = 2">Unable to find specific details. </td>
	                        </tr>
	                        <tr>
	                            <td>Grammar, Usage, Mechanics, Spelling</td>
	                            <td>25%</td>
	                            <td class="seleccion" data="3" ng-class="{'selec': fila4 === 5}" ng-click="fila4 = 5">No errors. </td>
	                            <td class="seleccion" data="3" ng-class="{'selec': fila4 === 4}" ng-click="fila4 = 4">Only one or two errors. </td>
	                            <td class="seleccion" data="3" ng-class="{'selec': fila4 === 3}" ng-click="fila4 = 3">More than two errors. </td>
	                            <td class="seleccion" data="3" ng-class="{'selec': fila4 === 2}" ng-click="fila4 = 2">Numerous errors distract from understanding. </td>
	                        </tr>
	                        <tr>
	                            <td>Interest Level</td>
	                            <td>10%</td>
	                            <td class="seleccion" data="4" ng-class="{'selec': fila5 === 5}" ng-click="fila5 = 5">Vocabulary is varied; supporting details vivid. </td>
	                            <td class="seleccion" data="4" ng-class="{'selec': fila5 === 4}" ng-click="fila5 = 4">Vocabulary is varied; supporting details useful. </td>
	                            <td class="seleccion" data="4" ng-class="{'selec': fila5 === 3}" ng-click="fila5 = 3">Vocabulary is unimaginative; details lack “color”. </td>
	                            <td class="seleccion" data="4" ng-class="{'selec': fila5 === 2}" ng-click="fila5 = 2">Basic vocabulary; needs descriptive words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>

	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="hidden" class="form-control" ng-model="Notafinal=fila1+fila2+fila3+fila4+fila5" value="{{Notafinal}}"/>
		                <button  class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_w.id,Notafinal,1)"> <i class="material-icons right"> save </i> Save</button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i> Close </button>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal Actividades SPEAKING-->
	<div ng-repeat="respuesta_sp_act in respuestasSpAct" class="rubrica modal fade" id="myModalSpeaking_{{respuesta_sp_act.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Speaking Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-center">

	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Could be better (2-1)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Good (4)</th>
	                            <th>Very Good (5)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <th>Pronunciation</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="5" ng-class="{'selec': fila6 === 2}" ng-click="fila6 = 2">Frequent errors in pronunciation would make what you are trying to say incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="5" ng-class="{'selec': fila6 === 3}" ng-click="fila6 = 3">Although your pronunciation does not interfere with the delivery of your message, it is very Americanized and may distract the listener from giving full attention to the message. </td>
	                            <td class="seleccion" data="5" ng-class="{'selec': fila6 === 4}" ng-click="fila6 = 4">While your pronunciation is marked by minor interference from English sounds, the errors are relatively insignificant and do not interfere with the communication of your message or your listener’s ability to give sustained attention to it. </td>
	                            <td class="seleccion" data="5" ng-class="{'selec': fila6 === 5}" ng-click="fila6 = 5">Your pronunciation is frequently so accurate and authentic that sometimes you even sound as though you were a native speaker! </td>
	                        </tr>
	                        <tr>
	                            <th>Fluency</th>
	                            <td>15%</td>
	                            <td class="seleccion" data="6" ng-class="{'selec': fila7 === 2}" ng-click="fila7 = 2">You pause so frequently while speaking that communication is almost halted. Consequently, it is difficult for the listener to remain interested. </td>
	                            <td class="seleccion" data="6" ng-class="{'selec': fila7 === 3}" ng-click="fila7 = 3">Your speech is quite broken and marked with hesitations that may indicate a lack of practice. The awkward silences and your tendency to use repetitions and fillers such as “um” and “uh” disrupt the flow of communication, creating irritation for the listener and causing his or her attention to wander. </td>
	                            <td class="seleccion" data="6" ng-class="{'selec': fila7 === 4}" ng-click="fila7 = 4">Although some minor hesitations are present in your speech, they do not really impede the flow of communication or interfere with your ability to maintain the attention of the listener. </td>
	                            <td class="seleccion" data="6" ng-class="{'selec': fila7 === 5}" ng-click="fila7 = 5">Your speech is fluid and natural, allowing you to maintain the flow of communication and the attention of the listener without difficulty. </td>
	                        </tr>
	                        <tr>
	                            <th>Vocabulary & Circumlocution</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="7" ng-class="{'selec': fila8 === 2}" ng-click="fila8 = 2">Your limited vocabulary makes both simple expression and circumlocution difficult for you.  Your resultant tendency to lapse into English (or to use Spanish words erroneously) may make parts of your message incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="7" ng-class="{'selec': fila8 === 3}" ng-click="fila8 = 3">Your vocabulary is adequate enough to allow you to communicate some of your thoughts, but your words are often imprecise and repetitious. When you get stuck on a word, you tend to lapse into English and do not generally circumlocute unless you are strongly encouraged to do so. </td>
	                            <td class="seleccion" data="7" ng-class="{'selec': fila8 === 4}" ng-click="fila8 = 4">Your speech reflects a broad vocabulary that allows you to communicate most of your thoughts pretty clearly and without resorting to the use of English.  However, there are still many high frequency words that you do not know and as a result, you are forced to rely heavily on circumlocution in order to communicate your ideas. </td>
	                            <td class="seleccion" data="7" ng-class="{'selec': fila8 === 5}" ng-click="fila8 = 5">Your speech reflects an extensive vocabulary that allows you to be expressive, precise, and to circumlocute with facility and style when necessary. </td>
	                        </tr>
	                        <tr>
	                            <th>Accuracy & Comprehensibility</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="8" ng-class="{'selec': fila9 === 2}" ng-click="fila9 = 2">The volume of serious errors present in your speech would make your message difficult (if not nearly impossible) for a native speaker to understand. </td>
	                            <td class="seleccion" data="8" ng-class="{'selec': fila9 === 3}" ng-click="fila9 = 3">The errors present in your speech would frequently create confusion in the mind of a native speaker. </td>
	                            <td class="seleccion" data="8" ng-class="{'selec': fila9 === 4}" ng-click="fila9 = 4">The errors present in your speech, although sometimes glaring, would not generally interfere with a native speaker’s ability to comprehend your message. </td>
	                            <td class="seleccion" data="8" ng-class="{'selec': fila9 === 5}" ng-click="fila9 = 5">The errors present in your speech are so minor that your message would be easily comprehended by a native speaker. </td>
	                        </tr>
	                        <tr>
	                            <th>Content</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="9" ng-class="{'selec': fila10 === 2}" ng-click="fila10 = 2">You repeat the same two or three ideas using short, incomplete, and often unrelated sentences.  There are so many basic elements missing that it is difficult to follow your message. </td>
	                            <td class="seleccion" data="9" ng-class="{'selec': fila10 === 3}" ng-click="fila10 = 3">Your speech is quite basic, repetitious, and really lacks details.  As a result, many of your thoughts seem incomplete and the ideas you express often seem very unrelated. </td>
	                            <td class="seleccion" data="9" ng-class="{'selec': fila10 === 4}" ng-click="fila10 = 4">Your speech is quite varied and contains some elaboration, but still needs more detail.  While you make some attempts to link your ideas together, the lack of transitional words makes some of your thoughts seem a little disconnected. </td>
	                            <td class="seleccion" data="9" ng-class="{'selec': fila10 === 5}" ng-click="fila10 = 5">Your expressive speech is filled with descriptive details that make it interesting and highly personalized.  You connect ideas very skillfully using transitional words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="hidden" class="form-control" ng-model="NotafinalSP=fila6+fila7+fila8+fila9+fila10" value="{{NotafinalSP}}"/>
		                <button type="button" class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_sp_act.id,NotafinalSP,2)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i>  Close </button>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal Self-Check WRITING-->
	<div ng-repeat="respuesta_wr_s in respuestasWrSelf" class="rubrica modal fade" id="myModalWriting_{{respuesta_wr_s.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Writing Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Very Good (5)</th>
	                            <th>Good (4)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Could be better (2-1)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>Topic</td>
	                            <td>20%</td>
	                            <td class="seleccion" data="10" ng-class="{'selec': fila11 === 5}" ng-click="fila11 = 5">Directly relevant. </td>
	                            <td class="seleccion" data="10" ng-class="{'selec': fila11 === 4}" ng-click="fila11 = 4">Somewhat relevant. </td>
	                            <td class="seleccion" data="10" ng-class="{'selec': fila11 === 3}" ng-click="fila11 = 3">Remotely related. </td>
	                            <td class="seleccion" data="10" ng-class="{'selec': fila11 === 2}" ng-click="fila11 = 2">Totally unrelated. </td>
	                        </tr>
	                        <tr>
	                            <td>Organization</td>
	                            <td>20%</td>
	                            <td class="seleccion" data="11" ng-class="{'selec': fila12 === 5}" ng-click="fila12 = 5">Good organization; points are logically ordered; sharp sense of beginning and end. </td>
	                            <td class="seleccion" data="11" ng-class="{'selec': fila12 === 4}" ng-click="fila12 = 4">Organized; points are somewhat jumpy; sense of beginning and ending. </td>
	                            <td class="seleccion" data="11" ng-class="{'selec': fila12 === 3}" ng-click="fila12 = 3">Some organization; points jump around; beginning and ending are unclear. </td>
	                            <td class="seleccion" data="11" ng-class="{'selec': fila12 === 2}" ng-click="fila12 = 2">Poorly organized; no logical progression; beginning and ending are vague. </td>
	                        </tr>
	                        <tr>
	                            <td>Quality of Information</td>
	                            <td>25%</td>
	                            <td class="seleccion" data="12" ng-class="{'selec': fila13 === 5}" ng-click="fila13 = 5">Supporting details specific to subject. </td>
	                            <td class="seleccion" data="12" ng-class="{'selec': fila13 === 4}" ng-click="fila13 = 4">Some details are non-supporting to the subject. </td>
	                            <td class="seleccion" data="12" ng-class="{'selec': fila13 === 3}" ng-click="fila13 = 3">Details are somewhat sketchy. Do not support topic. </td>
	                            <td class="seleccion" data="12" ng-class="{'selec': fila13 === 2}" ng-click="fila13 = 2">Unable to find specific details. </td>
	                        </tr>
	                        <tr>
	                            <td>Grammar, Usage, Mechanics, Spelling</td>
	                            <td>25%</td>
	                            <td class="seleccion" data="13" ng-class="{'selec': fila14 === 5}" ng-click="fila14 = 5">No errors. </td>
	                            <td class="seleccion" data="13" ng-class="{'selec': fila14 === 4}" ng-click="fila14 = 4">Only one or two errors. </td>
	                            <td class="seleccion" data="13" ng-class="{'selec': fila14 === 3}" ng-click="fila14 = 3">More than two errors. </td>
	                            <td class="seleccion" data="13" ng-class="{'selec': fila14 === 2}" ng-click="fila14 = 2">Numerous errors distract from understanding. </td>
	                        </tr>
	                        <tr>
	                            <td>Interest Level</td>
	                            <td>10%</td>
	                            <td class="seleccion" data="14" ng-class="{'selec': fila15 === 5}" ng-click="fila15 = 5">Vocabulary is varied; supporting details vivid. </td>
	                            <td class="seleccion" data="14" ng-class="{'selec': fila15 === 4}" ng-click="fila15 = 4">Vocabulary is varied; supporting details useful. </td>
	                            <td class="seleccion" data="14" ng-class="{'selec': fila15 === 3}" ng-click="fila15 = 3">Vocabulary is unimaginative; details lack “color”. </td>
	                            <td class="seleccion" data="14" ng-class="{'selec': fila15 === 2}" ng-click="fila15 = 2">Basic vocabulary; needs descriptive words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="hidden" class="form-control" ng-model="NotafinalWrSelf=fila11+fila12+fila13+fila14+fila15" value="{{NotafinalWrSelf}}"/>
		                <button  class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_wr_s.id,NotafinalWrSelf,1)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i> Close </button>
					</div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal Self-Check SPEAKING-->
	<div ng-repeat="respuesta_sp_self in respuestasSpSelf" class="rubrica modal fade" id="myModalSpeaking_{{respuesta_sp_self.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title" id="myModalLabel">Speaking Ribrics</h4>
	            </div>
	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Could be better (2-1)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Good (4)</th>
	                            <th>Very Good (5)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <th>Pronunciation</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="15" ng-class="{'selec': fila16 === 2}" ng-click="fila16 = 2">Frequent errors in pronunciation would make what you are trying to say incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="15" ng-class="{'selec': fila16 === 3}" ng-click="fila16 = 3">Although your pronunciation does not interfere with the delivery of your message, it is very Americanized and may distract the listener from giving full attention to the message. </td>
	                            <td class="seleccion" data="15" ng-class="{'selec': fila16 === 4}" ng-click="fila16 = 4">While your pronunciation is marked by minor interference from English sounds, the errors are relatively insignificant and do not interfere with the communication of your message or your listener’s ability to give sustained attention to it. </td>
	                            <td class="seleccion" data="15" ng-class="{'selec': fila16 === 5}" ng-click="fila16 = 5">Your pronunciation is frequently so accurate and authentic that sometimes you even sound as though you were a native speaker! </td>
	                        </tr>
	                        <tr>
	                            <th>Fluency</th>
	                            <td>15%</td>
	                            <td class="seleccion" data="16" ng-class="{'selec': fila17 === 2}" ng-click="fila17 = 2">You pause so frequently while speaking that communication is almost halted. Consequently, it is difficult for the listener to remain interested. </td>
	                            <td class="seleccion" data="16" ng-class="{'selec': fila17 === 3}" ng-click="fila17 = 3">Your speech is quite broken and marked with hesitations that may indicate a lack of practice. The awkward silences and your tendency to use repetitions and fillers such as “um” and “uh” disrupt the flow of communication, creating irritation for the listener and causing his or her attention to wander. </td>
	                            <td class="seleccion" data="16" ng-class="{'selec': fila17 === 4}" ng-click="fila17 = 4">Although some minor hesitations are present in your speech, they do not really impede the flow of communication or interfere with your ability to maintain the attention of the listener. </td>
	                            <td class="seleccion" data="16" ng-class="{'selec': fila17 === 5}" ng-click="fila17 = 5">Your speech is fluid and natural, allowing you to maintain the flow of communication and the attention of the listener without difficulty. </td>
	                        </tr>
	                        <tr>
	                            <th>Vocabulary & Circumlocution</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="17" ng-class="{'selec': fila18 === 2}" ng-click="fila18 = 2">Your limited vocabulary makes both simple expression and circumlocution difficult for you.  Your resultant tendency to lapse into English (or to use Spanish words erroneously) may make parts of your message incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="17" ng-class="{'selec': fila18 === 3}" ng-click="fila18 = 3">Your vocabulary is adequate enough to allow you to communicate some of your thoughts, but your words are often imprecise and repetitious. When you get stuck on a word, you tend to lapse into English and do not generally circumlocute unless you are strongly encouraged to do so. </td>
	                            <td class="seleccion" data="17" ng-class="{'selec': fila18 === 4}" ng-click="fila18 = 4">Your speech reflects a broad vocabulary that allows you to communicate most of your thoughts pretty clearly and without resorting to the use of English.  However, there are still many high frequency words that you do not know and as a result, you are forced to rely heavily on circumlocution in order to communicate your ideas. </td>
	                            <td class="seleccion" data="17" ng-class="{'selec': fila18 === 5}" ng-click="fila18 = 5">Your speech reflects an extensive vocabulary that allows you to be expressive, precise, and to circumlocute with facility and style when necessary. </td>
	                        </tr>
	                        <tr>
	                            <th>Accuracy & Comprehensibility</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="18" ng-class="{'selec': fila19 === 2}" ng-click="fila19 = 2">The volume of serious errors present in your speech would make your message difficult (if not nearly impossible) for a native speaker to understand. </td>
	                            <td class="seleccion" data="18" ng-class="{'selec': fila19 === 3}" ng-click="fila19 = 3">The errors present in your speech would frequently create confusion in the mind of a native speaker. </td>
	                            <td class="seleccion" data="18" ng-class="{'selec': fila19 === 4}" ng-click="fila19 = 4">The errors present in your speech, although sometimes glaring, would not generally interfere with a native speaker’s ability to comprehend your message. </td>
	                            <td class="seleccion" data="18" ng-class="{'selec': fila19 === 5}" ng-click="fila19 = 5">The errors present in your speech are so minor that your message would be easily comprehended by a native speaker. </td>
	                        </tr>
	                        <tr>
	                            <th>Content</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="19" ng-class="{'selec': fila20 === 2}" ng-click="fila20 = 2">You repeat the same two or three ideas using short, incomplete, and often unrelated sentences.  There are so many basic elements missing that it is difficult to follow your message. </td>
	                            <td class="seleccion" data="19" ng-class="{'selec': fila20 === 3}" ng-click="fila20 = 3">Your speech is quite basic, repetitious, and really lacks details.  As a result, many of your thoughts seem incomplete and the ideas you express often seem very unrelated. </td>
	                            <td class="seleccion" data="19" ng-class="{'selec': fila20 === 4}" ng-click="fila20 = 4">Your speech is quite varied and contains some elaboration, but still needs more detail.  While you make some attempts to link your ideas together, the lack of transitional words makes some of your thoughts seem a little disconnected. </td>
	                            <td class="seleccion" data="19" ng-class="{'selec': fila20 === 5}" ng-click="fila20 = 5">Your expressive speech is filled with descriptive details that make it interesting and highly personalized.  You connect ideas very skillfully using transitional words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="hidden" class="form-control" ng-model="NotafinalSPSelf=fila16+fila17+fila18+fila19+fila20" value="{{NotafinalSPSelf}}"/>
		                <button type="button" class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_sp_self.id,NotafinalSPSelf,2)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i>  Close</button>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal Test WRITING-->
	<div ng-repeat="respuesta_wr_t in respuestasWrTest" class="rubrica modal fade" id="myModalWriting_{{respuesta_wr_t.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Writing Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Very Good (5)</th>
	                            <th>Good (4)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Could be better (2-1)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <th>Topic</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 5}" ng-click="fila21 = 5">Directly relevant. </td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 4}" ng-click="fila21 = 4">Somewhat relevant. </td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 3}" ng-click="fila21 = 3">Remotely related. </td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 2}" ng-click="fila21 = 2">Totally unrelated. </td>
	                        </tr>
	                        <tr>
	                            <th>Organization</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 5}" ng-click="fila22 = 5">Good organization; points are logically ordered; sharp sense of beginning and end. </td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 4}" ng-click="fila22 = 4">Organized; points are somewhat jumpy; sense of beginning and ending. </td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 3}" ng-click="fila22 = 3">Some organization; points jump around; beginning and ending are unclear. </td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 2}" ng-click="fila22 = 2">Poorly organized; no logical progression; beginning and ending are vague. </td>
	                        </tr>
	                        <tr>
	                            <th>Quality of Information</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 5}" ng-click="fila23 = 5">Supporting details specific to subject. </td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 4}" ng-click="fila23 = 4">Some details are non-supporting to the subject. </td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 3}" ng-click="fila23 = 3">Details are somewhat sketchy. Do not support topic. </td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 2}" ng-click="fila23 = 2">Unable to find specific details. </td>
	                        </tr>
	                        <tr>
	                            <th>Grammar, Usage, Mechanics, Spelling</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 5}" ng-click="fila24 = 5">No errors. </td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 4}" ng-click="fila24 = 4">Only one or two errors. </td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 3}" ng-click="fila24 = 3">More than two errors. </td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 2}" ng-click="fila24 = 2">Numerous errors distract from understanding. </td>
	                        </tr>
	                        <tr>
	                            <th>Interest Level</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 5}" ng-click="fila25 = 5">Vocabulary is varied; supporting details vivid. </td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 4}" ng-click="fila25 = 4">Vocabulary is varied; supporting details useful. </td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 3}" ng-click="fila25 = 3">Vocabulary is unimaginative; details lack “color”. </td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 2}" ng-click="fila25 = 2">Basic vocabulary; needs descriptive words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="text" class="form-control" ng-model="NotafinalWrTest=fila21+fila22+fila23+fila24+fila25" value="{{NotafinalWrTest}}"/>
		                <button  class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_wr_t.id,NotafinalWrTest,1)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i>  Close</button>
					</div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal Test SPEAKING-->
	<div ng-repeat="respuesta_sp_test in respuestasSpTest" class="rubrica modal fade" id="myModalSpeaking_{{respuesta_sp_test.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Speaking Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Could be better (2-1)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Good (4)</th>
	                            <th>Very Good (5)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <th>Pronunciation</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 2}" ng-click="fila26 = 2">Frequent errors in pronunciation would make what you are trying to say incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 3}" ng-click="fila26 = 3">Although your pronunciation does not interfere with the delivery of your message, it is very Americanized and may distract the listener from giving full attention to the message. </td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 4}" ng-click="fila26 = 4">While your pronunciation is marked by minor interference from English sounds, the errors are relatively insignificant and do not interfere with the communication of your message or your listener’s ability to give sustained attention to it. </td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 5}" ng-click="fila26 = 5">Your pronunciation is frequently so accurate and authentic that sometimes you even sound as though you were a native speaker! </td>
	                        </tr>
	                        <tr>
	                            <th>Fluency</th>
	                            <td>15%</td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 2}" ng-click="fila27 = 2">You pause so frequently while speaking that communication is almost halted. Consequently, it is difficult for the listener to remain interested. </td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 3}" ng-click="fila27 = 3">Your speech is quite broken and marked with hesitations that may indicate a lack of practice. The awkward silences and your tendency to use repetitions and fillers such as “um” and “uh” disrupt the flow of communication, creating irritation for the listener and causing his or her attention to wander. </td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 4}" ng-click="fila27 = 4">Although some minor hesitations are present in your speech, they do not really impede the flow of communication or interfere with your ability to maintain the attention of the listener. </td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 5}" ng-click="fila27 = 5">Your speech is fluid and natural, allowing you to maintain the flow of communication and the attention of the listener without difficulty. </td>
	                        </tr>
	                        <tr>
	                            <th>Vocabulary & Circumlocution</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 2}" ng-click="fila28 = 2">Your limited vocabulary makes both simple expression and circumlocution difficult for you.  Your resultant tendency to lapse into English (or to use Spanish words erroneously) may make parts of your message incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 3}" ng-click="fila28 = 3">Your vocabulary is adequate enough to allow you to communicate some of your thoughts, but your words are often imprecise and repetitious. When you get stuck on a word, you tend to lapse into English and do not generally circumlocute unless you are strongly encouraged to do so. </td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 4}" ng-click="fila28 = 4">Your speech reflects a broad vocabulary that allows you to communicate most of your thoughts pretty clearly and without resorting to the use of English.  However, there are still many high frequency words that you do not know and as a result, you are forced to rely heavily on circumlocution in order to communicate your ideas. </td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 5}" ng-click="fila28 = 5">Your speech reflects an extensive vocabulary that allows you to be expressive, precise, and to circumlocute with facility and style when necessary. </td>
	                        </tr>
	                        <tr>
	                            <th>Accuracy & Comprehensibility</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 2}" ng-click="fila29 = 2">The volume of serious errors present in your speech would make your message difficult (if not nearly impossible) for a native speaker to understand. </td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 3}" ng-click="fila29 = 3">The errors present in your speech would frequently create confusion in the mind of a native speaker. </td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 4}" ng-click="fila29 = 4">The errors present in your speech, although sometimes glaring, would not generally interfere with a native speaker’s ability to comprehend your message. </td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 5}" ng-click="fila29 = 5">The errors present in your speech are so minor that your message would be easily comprehended by a native speaker. </td>
	                        </tr>
	                        <tr>
	                            <th>Content</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 2}" ng-click="fila30 = 2">You repeat the same two or three ideas using short, incomplete, and often unrelated sentences.  There are so many basic elements missing that it is difficult to follow your message. </td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 3}" ng-click="fila30 = 3">Your speech is quite basic, repetitious, and really lacks details.  As a result, many of your thoughts seem incomplete and the ideas you express often seem very unrelated. </td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 4}" ng-click="fila30 = 4">Your speech is quite varied and contains some elaboration, but still needs more detail.  While you make some attempts to link your ideas together, the lack of transitional words makes some of your thoughts seem a little disconnected. </td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 5}" ng-click="fila30 = 5">Your expressive speech is filled with descriptive details that make it interesting and highly personalized.  You connect ideas very skillfully using transitional words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="hidden" class="form-control" ng-model="NotafinalSPTest=fila26+fila27+fila28+fila29+fila30" value="{{NotafinalSPTest}}"/>
		                <button type="button" class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_sp_test.id,NotafinalSPTest,2)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i>  Close</button>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal MYCOLOMBIA WRITING-->
	<div ng-repeat="respuesta_wr_my in respuestasWrMycol" class="rubrica modal fade" id="myModalWriting_{{respuesta_wr_my.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Writing Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Very Good (5)</th>
	                            <th>Good (4)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Could be better (2-1)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <th>Topic</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 5}" ng-click="fila21 = 5">Directly relevant. </td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 4}" ng-click="fila21 = 4">Somewhat relevant. </td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 3}" ng-click="fila21 = 3">Remotely related. </td>
	                            <td class="seleccion" data="20" ng-class="{'selec': fila21 === 2}" ng-click="fila21 = 2">Totally unrelated. </td>
	                        </tr>
	                        <tr>
	                            <th>Organization</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 5}" ng-click="fila22 = 5">Good organization; points are logically ordered; sharp sense of beginning and end. </td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 4}" ng-click="fila22 = 4">Organized; points are somewhat jumpy; sense of beginning and ending. </td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 3}" ng-click="fila22 = 3">Some organization; points jump around; beginning and ending are unclear. </td>
	                            <td class="seleccion" data="21" ng-class="{'selec': fila22 === 2}" ng-click="fila22 = 2">Poorly organized; no logical progression; beginning and ending are vague. </td>
	                        </tr>
	                        <tr>
	                            <th>Quality of Information</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 5}" ng-click="fila23 = 5">Supporting details specific to subject. </td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 4}" ng-click="fila23 = 4">Some details are non-supporting to the subject. </td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 3}" ng-click="fila23 = 3">Details are somewhat sketchy. Do not support topic. </td>
	                            <td class="seleccion" data="22" ng-class="{'selec': fila23 === 2}" ng-click="fila23 = 2">Unable to find specific details. </td>
	                        </tr>
	                        <tr>
	                            <th>Grammar, Usage, Mechanics, Spelling</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 5}" ng-click="fila24 = 5">No errors. </td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 4}" ng-click="fila24 = 4">Only one or two errors. </td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 3}" ng-click="fila24 = 3">More than two errors. </td>
	                            <td class="seleccion" data="23" ng-class="{'selec': fila24 === 2}" ng-click="fila24 = 2">Numerous errors distract from understanding. </td>
	                        </tr>
	                        <tr>
	                            <th>Interest Level</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 5}" ng-click="fila25 = 5">Vocabulary is varied; supporting details vivid. </td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 4}" ng-click="fila25 = 4">Vocabulary is varied; supporting details useful. </td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 3}" ng-click="fila25 = 3">Vocabulary is unimaginative; details lack “color”. </td>
	                            <td class="seleccion" data="24" ng-class="{'selec': fila25 === 2}" ng-click="fila25 = 2">Basic vocabulary; needs descriptive words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="text" class="form-control" ng-model="NotafinalWrTest=fila21+fila22+fila23+fila24+fila25" value="{{NotafinalWrTest}}"/>
		                <button  class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_wr_my.id,NotafinalWrTest,1)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i>  Close</button>
					</div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal MYCOLOMBIA SPEAKING-->
	<div ng-repeat="respuesta_sp_my in respuestasSpMyCol" class="rubrica modal fade" id="myModalSpeaking_{{respuesta_sp_my.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div role="document">
	        <div class="modal-content">
	            <div class="modal-top">
	            	<h2 class="modal-title" id="myModalLabel">Speaking Ribrics</h2>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-center">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr class="info">
	                            <th>Criteria</th>
	                            <th>weight</th>
	                            <th>Could be better (2-1)</th>
	                            <th>Satisfactory (3)</th>
	                            <th>Good (4)</th>
	                            <th>Very Good (5)</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <th>Pronunciation</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 2}" ng-click="fila26 = 2">Frequent errors in pronunciation would make what you are trying to say incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 3}" ng-click="fila26 = 3">Although your pronunciation does not interfere with the delivery of your message, it is very Americanized and may distract the listener from giving full attention to the message. </td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 4}" ng-click="fila26 = 4">While your pronunciation is marked by minor interference from English sounds, the errors are relatively insignificant and do not interfere with the communication of your message or your listener’s ability to give sustained attention to it. </td>
	                            <td class="seleccion" data="25" ng-class="{'selec': fila26 === 5}" ng-click="fila26 = 5">Your pronunciation is frequently so accurate and authentic that sometimes you even sound as though you were a native speaker! </td>
	                        </tr>
	                        <tr>
	                            <th>Fluency</th>
	                            <td>15%</td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 2}" ng-click="fila27 = 2">You pause so frequently while speaking that communication is almost halted. Consequently, it is difficult for the listener to remain interested. </td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 3}" ng-click="fila27 = 3">Your speech is quite broken and marked with hesitations that may indicate a lack of practice. The awkward silences and your tendency to use repetitions and fillers such as “um” and “uh” disrupt the flow of communication, creating irritation for the listener and causing his or her attention to wander. </td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 4}" ng-click="fila27 = 4">Although some minor hesitations are present in your speech, they do not really impede the flow of communication or interfere with your ability to maintain the attention of the listener. </td>
	                            <td class="seleccion" data="26" ng-class="{'selec': fila27 === 5}" ng-click="fila27 = 5">Your speech is fluid and natural, allowing you to maintain the flow of communication and the attention of the listener without difficulty. </td>
	                        </tr>
	                        <tr>
	                            <th>Vocabulary & Circumlocution</th>
	                            <td>10%</td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 2}" ng-click="fila28 = 2">Your limited vocabulary makes both simple expression and circumlocution difficult for you.  Your resultant tendency to lapse into English (or to use Spanish words erroneously) may make parts of your message incomprehensible to a native speaker. </td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 3}" ng-click="fila28 = 3">Your vocabulary is adequate enough to allow you to communicate some of your thoughts, but your words are often imprecise and repetitious. When you get stuck on a word, you tend to lapse into English and do not generally circumlocute unless you are strongly encouraged to do so. </td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 4}" ng-click="fila28 = 4">Your speech reflects a broad vocabulary that allows you to communicate most of your thoughts pretty clearly and without resorting to the use of English.  However, there are still many high frequency words that you do not know and as a result, you are forced to rely heavily on circumlocution in order to communicate your ideas. </td>
	                            <td class="seleccion" data="27" ng-class="{'selec': fila28 === 5}" ng-click="fila28 = 5">Your speech reflects an extensive vocabulary that allows you to be expressive, precise, and to circumlocute with facility and style when necessary. </td>
	                        </tr>
	                        <tr>
	                            <th>Accuracy & Comprehensibility</th>
	                            <td>20%</td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 2}" ng-click="fila29 = 2">The volume of serious errors present in your speech would make your message difficult (if not nearly impossible) for a native speaker to understand. </td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 3}" ng-click="fila29 = 3">The errors present in your speech would frequently create confusion in the mind of a native speaker. </td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 4}" ng-click="fila29 = 4">The errors present in your speech, although sometimes glaring, would not generally interfere with a native speaker’s ability to comprehend your message. </td>
	                            <td class="seleccion" data="28" ng-class="{'selec': fila29 === 5}" ng-click="fila29 = 5">The errors present in your speech are so minor that your message would be easily comprehended by a native speaker. </td>
	                        </tr>
	                        <tr>
	                            <th>Content</th>
	                            <td>25%</td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 2}" ng-click="fila30 = 2">You repeat the same two or three ideas using short, incomplete, and often unrelated sentences.  There are so many basic elements missing that it is difficult to follow your message. </td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 3}" ng-click="fila30 = 3">Your speech is quite basic, repetitious, and really lacks details.  As a result, many of your thoughts seem incomplete and the ideas you express often seem very unrelated. </td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 4}" ng-click="fila30 = 4">Your speech is quite varied and contains some elaboration, but still needs more detail.  While you make some attempts to link your ideas together, the lack of transitional words makes some of your thoughts seem a little disconnected. </td>
	                            <td class="seleccion" data="29" ng-class="{'selec': fila30 === 5}" ng-click="fila30 = 5">Your expressive speech is filled with descriptive details that make it interesting and highly personalized.  You connect ideas very skillfully using transitional words. </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	            <div class="modal-end">
	            	<div class="modal-end-btns">
		                <input type="hidden" class="form-control" ng-model="NotafinalSPTest=fila26+fila27+fila28+fila29+fila30" value="{{NotafinalSPTest}}"/>
		                <button type="button" class="waves-effect waves-light btn-large yellow-btn" ng-click="GuardarPuntaje(respuesta_sp_my.id,NotafinalSPTest,2)"> <i class="material-icons right"> save </i> Save </button>
		                <button type="button" class="waves-effect waves-light btn-large blue-btn" data-dismiss="modal"> <i class="material-icons right"> close </i>  Close</button>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal Structure PARA ENVIAR NOTIFICACIONES-->
	<div id="modal1" class="modal feed-modal">
	    <div class="modal-content">
	        <h4>
	            Feedback
	            <small>
					for : {{nombre}} {{apellido}}
				</small>
	            <small>
					<!-- <span class="">
						date : 01/02/03
					</span> -->
				</small>
	        </h4>
	        <div class="row">
	            <div class="input-field col s6">
	                <input id="feed-mod_title" type="text" class="validate" ng-model="tit_notif_reg">
	                <label for="feed-mod_title">Title</label>
	            </div>
	            <div class="input-field col s12">
	                <textarea id="feed-mod_msj" class="materialize-textarea" ng-model="msg_notif_reg"></textarea>
	                <label for="feed-mod_msj">Message</label>
	            </div>
	        </div>
	        <button class="btn waves-effect waves-light" type="submit" name="action" ng-click="RegistrarNotificacionEst()">Send
				<i class="material-icons right">send</i>
			</button>
	    </div>
	    <div class="modal-footer">
	        <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	    </div>
	</div>

</div>

<!-- ================================================================================================== -->

	<!-- MODAL - MUESTRA LA INFO DE LA NOTIFICACION SELECCIONADA -->
	<div id="modal2" class="modal feed-modal">
	    <div class="modal-content">
	        <h4>
	            Feedback
	            <small>
					for : {{nombre}} {{apellido}} 
				</small>
	            <small>
					<span class="">
						Date : {{fecha_notificacion}} | Hour : {{hora}}
					</span>
				</small>
	        </h4>
	        <div class="cargNotif ta-c">
	            <span class="fa fa-spinner fa-spin fa-lg fa-4x"></span>
	        </div>
	        <div class="row infoNotif">
	            <div class="col s6">
	                <p>
	                    <strong>
							Title : 
						</strong>
	                    <span>
							{{tit_notif}}
						</span>
	                </p>
	            </div>
	            <div class="col s12 mt15">
	                <p>
	                    <strong>
							Message : 
						</strong>
	                </p>
	                <p>
	                    {{msg_notif}}
	                </p>
	            </div>
	        </div>
	    </div>
	    <div class="modal-footer">
	        <a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
	    </div>
	</div>





<script type="text/javascript">
	
	  $(document).ready(function(){
    $(".button").on( "click", function() {
    	$('.bien').show(); 
    });
	$('.feed-resume').click(function(){
		$('#modal2').modal('open');
	});
	$('.add-feed').click(function(){
		$('#modal1').modal('open');
		$('#feed-mod_title').text('');
		$('#feed-mod_msj').text('');
	});

	$('.new').click(function () {
		$(this).removeClass('new');
	});

  }); 
</script>


<!-- ACCORDION JS -->

<script type="text/javascript">
  $(function(){
    //function acordean
	$('.button-collapse').sideNav();

	$('.collapsible').collapsible();

  });
</script>

<!-- EXPORTAR EXCEL JS -->

<script type="text/javascript">
$(".seleccion").click(function(){
    var cont = $(this).attr("data");
    $(".seleccion[data="+cont+"]").removeClass("selec");
    $(this).addClass("selec");  
})

</script>

<script src="js/exportexcel.js" type="text/javascript"></script>
<script src="js/exportexcel1.js" type="text/javascript"></script>
<script src="js/exportexcel2.js" type="text/javascript"></script>

<!--script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.12/xlsx.core.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js" type="text/javascript"></script