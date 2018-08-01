<div ng-show="animationLoading" class="loading_template preloadTemplateAnimation"> <svg width="300px" height="200px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet" style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" class="loading_svg"> <path stroke="#ededed" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path> <path id="outline-bg" opacity="0.05" fill="none" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path> </svg> </div>

<div class="row">
  <div class="row-flex justify-between" ng-init="showPanel = 1; nameActivity = 'activities'">
    <div class="showTo-sm col-flex-sm2 row-flex justify-center align-items-center">
      <h4>Module {{ $stateParams.Module_id }}</h4>
    </div>
    <div class="col-flex-xs12 col-flex-sm10">
      <div class="row-flex c-tab__header">
        <div class="col-flex c-tab__header--tab" ng-class="(showPanel == 1) ? 'u-bgColor_3' : ''" ng-click=" showPanel = 1; nameActivity = 'activities'; progresoActividades(1)">Activities</div>
        <div class="col-flex c-tab__header--tab" ng-class="(showPanel == 2) ? 'u-bgColor_3' : ''" ng-click=" showPanel = 2; nameActivity = 'selfcheck'; progresoActividades(2)">SelfCheck</div>
        <div class="col-flex c-tab__header--tab" ng-class="(showPanel == 3) ? 'u-bgColor_3' : ''" ng-click=" showPanel = 3; nameActivity = 'test'; progresoActividades(3)">Test</div>
        <div class="col-flex c-tab__header--tab" ng-class="(showPanel == 4) ? 'u-bgColor_3' : ''" ng-click=" showPanel = 4; nameActivity = 'mycolombia'; progresoActividades(5)">My Colombia</div>
      </div>
    </div>
  </div>
  <div class="modal-content" ng-init="progresoActividades(1)">
    <div class="c-tab__body">
      <div class="c-tab__body--section u-animationFadeDown" ng-show="animationTab">
        <div class="row row-flex justify-end c-lista-detalles-datos--header"><small class="collection-button c-lista-detalle__estado">estado</small><small class="collection-button c-lista-detalle__preguntas"><span class="c-lista-detalle__preguntas--resultado">resultado</span></small><small class="collection-button c-lista-detalle__link">link</small></div>
        
        <ul class="collapsible c-accordion" data-collapsible="accordion">
          
          
          <li class="mt20">
            
            
            <div class="collapsible-header active">
              <h4>ACTIVITES<i class="material-icons f-r">expand_more</i></h4>
            </div>
            <div class="collapsible-body">
              <div class="collection">
                <div class="collection-item justify-between" ng-repeat="actividad in actividades">
                  <div class="collection-block c-lista-detalles-column">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title" ng-bind-html="actividad.titulo | uppercase"></span></div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end">
                      <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(actividad.estado == null) ? '' : (actividad.estado == 1)? 'is--visit' : (actividad.estado == 0) ? 'is--alert' : '' "></div>
                      <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                        <div class="row" ng-repeat="respuesta in actividad.respuestas"><span class="c-lista-detalle__preguntas--resultado">{{respuesta.res_bien}} <small>of </small></span><span class="c-lista-detalle__preguntas--total"> {{actividad.cantidad_pre}}</span></div>
                      </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="{{nameActivity}}({Unidad_id: actividad.unidad_id, Module_id: actividad.modulo_id, Activity_id: actividad.orden})"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collapsible-body">
              <div class="collection">
                <div class="collection-item justify-between" ng-init="listarVideoiframe()" ng-show="(showPanel == 4 &amp;&amp; videosiframe != '') ? true : false">
                  <div class="collection-block c-lista-detalles-column">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title" ng-bind-html="tituloiframe | uppercase"></span></div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end"><span class="collection-title" ng-bind-html="videosiframe | unsafe"></span><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="mycolombia({Unidad_id: unidad, Module_id:modulo, Activity_id: actividad})"></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collapsible-body">
              <div class="collection">
                <div ng-show="NoPoint">
                  <p>You have not done activity 4 (Power Point)</p>
                </div>
                <div class="collection-item justify-between" ng-init="ListPowerPointAct4MyCol()" ng-show="OkPoint"><span ng-show="OkPoint" ng-repeat="doc in powerpoint">Activity 4.<a href="{{doc.documento}}"><img src="../../admin/admin/img/power_point1.png" alt="" width="50px"/></a></span>
                  <div class="collection-block c-lista-detalles-column">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title" ng-bind-html="tituloiframe | uppercase"></span></div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end"><span class="collection-title" ng-bind-html="videosiframe | unsafe"></span><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="mycolombia({Unidad_id: unidad, Module_id:modulo, Activity_id: actividad})"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
          <li class="mt20">
            
            
            <div class="collapsible-header">
              <h4>WRITING<i class="material-icons f-r">expand_more</i></h4>
            </div>
            <div class="collapsible-body">
              <div class="collection">
                <div class="collection-item justify-between" ng-repeat="writing in writings">
                  <div class="collection-block c-lista-detalles-column">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title" ng-bind-html="writing.titulo | uppercase"></span>
                      <div class="row pt20">
                        <textarea disabled="disabled" style="width:100%;">{{writing.texto}},{{writing.textob}},{{writing.textoc}},{{writing.textod}},{{writing.textoe}},,{{writing.textof}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end">
                      <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(writing.estado == null) ? '' : (writing.estado == 1)? 'is--visit' : (writing.estado == 0) ? 'is--alert' : '' "></div>
                      <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                        <div class="row"></div>
                      </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="{{nameActivity}}({Unidad_id: writing.unidad_id, Module_id: writing.modulo_id, Activity_id: writing.orden})"></a>
                    </div>
                  </div>
                </div>
                <div class="collection-item justify-between" ng-show="(showPanel == 1 &amp;&amp; $stateParams.Module_id == 1) ? true : false">
                  <div class="collection-block c-lista-detalles-column" ng-init="listarActividades(2)">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title">FUNCTIONAL LANGUAGE - ACTIVITY 11 EXE 2</span>
                      <div class="row pt20">
                        <table class="c-table-estilo_tres row">
                          <thead>
                            <tr>
                              <th class="w15">Emotion</th>
                              <th class="w40">Song / Music</th>
                              <th class="w40">Explanation</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr ng-repeat="palabra in palabras">
                              <th>{{palabra.emotion}}</th>
                              <td>{{palabra.song_music}}</td>
                              <td>{{palabra.explanation}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end">
                      <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(writing.estado == null) ? '' : (writing.estado == 1)? 'is--visit' : (writing.estado == 0) ? 'is--alert' : '' "></div>
                      <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                        <div class="row"></div>
                      </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="{{nameActivity}}({Unidad_id: 1, Module_id: 1, Activity_id: 11})"></a>
                    </div>
                  </div>
                </div>
                <div class="collection-item justify-between" ng-show="(showPanel == 1 &amp;&amp; $stateParams.Module_id == 1) ? true : false">
                  <div class="collection-block c-lista-detalles-column" ng-init="listarActividades(3)">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title">FUNCTIONAL LANGUAGE - ACTIVITY 11 EXE 3</span>
                      <div class="row pt20">
                        <table class="c-table-estilo_tres row">
                          <thead>
                            <tr>
                              <th class="w15">Emotion</th>
                              <th class="w40">Song / Music</th>
                              <th class="w40">Explanation</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr ng-repeat="palabra in palabrasdos">
                              <th>{{palabra.emotion}}</th>
                              <td>{{palabra.song_music}}</td>
                              <td>{{palabra.explanation}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end">
                      <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(writing.estado == null) ? '' : (writing.estado == 1)? 'is--visit' : (writing.estado == 0) ? 'is--alert' : '' "></div>
                      <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                        <div class="row"></div>
                      </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="{{nameActivity}}({Unidad_id: 1, Module_id: 1, Activity_id: 11})"></a>
                    </div>
                  </div>
                </div>
                <div class="collection-item justify-between" ng-show="(showPanel == 4 &amp;&amp; $stateParams.Module_id == 1) ? true : false">
                  <div class="collection-block c-lista-detalles-column" ng-init="listarJuegoRolesPerfil()">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title">MYCOLOMBIA - ACTIVITY 1</span>
                      <div class="row pt20">
                        <table class="c-table-estilo_uno row">
                          <thead>
                            <tr>
                              <th class="w15">#</th>
                              <th class="w40">Names</th>
                              <th class="w40">Origin</th>
                              <th class="w40">Job or occupation</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr ng-repeat="respuestajuego in respuestajuegoroles">
                              <th>{{respuestajuego.habitacion}}</th>
                              <td>{{respuestajuego.names}}</td>
                              <td>{{respuestajuego.origin}}</td>
                              <td>{{respuestajuego.occupation}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end">
                      <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(writing.estado == null) ? '' : (writing.estado == 1)? 'is--visit' : (writing.estado == 0) ? 'is--alert' : '' "></div>
                      <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                        <div class="row"></div>
                      </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="{{nameActivity}}({Unidad_id: 1, Module_id: 1, Activity_id: 11})"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collection-item justify-between" ng-show="(showPanel == 4 &amp;&amp; $stateParams.Module_id == 1) ? true : false">
                <div class="collection-block c-lista-detalles-column" ng-init="listarExpresiones()">
                  <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                  <div class="row row-flex pl10"><span class="collection-title">MYCOLOMBIA - ACTIVITY 2 EXE 2</span>
                    <div class="row pt20">
                      <table class="c-table-estilo_dos row">
                        <thead>
                          <tr>
                            <th class="w15">Word</th>
                            <th class="w40">Mearning</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat="palabra in palabras">
                            <th>{{palabra.titulo}}</th>
                            <td>{{palabra.respuesta}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                  <div class="row row-flex justify-end">
                    <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(writing.estado == null) ? '' : (writing.estado == 1)? 'is--visit' : (writing.estado == 0) ? 'is--alert' : '' "></div>
                    <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                      <div class="row"></div>
                    </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="mycolombia({Unidad_id: 1, Module_id: 1, Activity_id: 2})"></a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
          <li class="mt20">
            
            
            <div class="collapsible-header">
              <h4>SPEAKING<i class="material-icons f-r">expand_more</i></h4>
            </div>
            <div class="collapsible-body">
              <div class="collection">
                <div class="collection-item justify-between" ng-repeat="speaking in speakings">
                  <div class="collection-block c-lista-detalles-column">
                    <div class="collection-button collection-button-icon u-bgIconActivities"></div>
                    <div class="row row-flex pl10"><span class="collection-title" ng-bind-html="speaking.titulo | uppercase"></span>
                      <div class="row pt20">
                        <audio controls="" src="{{speaking.ruta_carpeta}}"></audio>
                      </div>
                    </div>
                  </div>
                  <div class="collection-block c-lista-detalles-column c-lista-detalles-datos">
                    <div class="row row-flex justify-end">
                      <div class="collection-button c-lista-detalle__estado c-lista-detalle__estadoIcon" nombre-detalle="estado" ng-class="(speaking.estado == null) ? '' : (speaking.estado == 1)? 'is--visit' : (speaking.estado == 0) ? 'is--alert' : '' "></div>
                      <div class="collection-button c-lista-detalle__preguntas" nombre-detalle="resultado">
                        <div class="row"><span class="c-lista-detalle__preguntas--resultado">{{respuesta.res_bien}} <small>of </small></span><span class="c-lista-detalle__preguntas--total"> {{speaking.cantidad_pre}}</span></div>
                      </div><a class="collection-button c-lista-detalle__link c-lista-detalle__linkIcon " nombre-detalle="link" ui-sref="{{nameActivity}}({Unidad_id: speaking.unidad_id, Module_id: speaking.modulo_id, Activity_id: speaking.orden})"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
   $(document).ready(function(){
      $('.collapsible').collapsible();
  });
</script>