
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="DragandDropImg()">
    <section class="template-content">
      <article class=" u-animationFadeDown" ng-show="s_actividad == 1">
        <h5>Watch the following video:</h5>
        <div class="row-flex justify-center mb20">
          <div class="col xs12 md9 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_2/assets/videos/col_1_1.mp4" type="video/mp4"/>Your browser does not support the audio element.
              </video>
            </div>
          </div>
        </div>
      </article>
      <article class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
        <h5>Look at the pictures below then match the name of the dishes and regions to the dishes.</h5>
        <div class="row row-flex justify-center"><span class="dragCont"><span class="drag" rescon="1"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_1.png" alt="myColombia"/></span></span><span class="dragCont"><span class="drag" rescon="2"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_2.png" alt="myColombia"/></span></span><span class="dragCont"><span class="drag" rescon="3"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_3.png" alt="myColombia"/></span></span><span class="dragCont"><span class="drag" rescon="4"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_4.png" alt="myColombia"/></span></span><span class="dragCont"><span class="drag" rescon="5"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_5.png" alt="myColombia"/></span></span><span class="dragCont"><span class="drag" rescon="6"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_6.png" alt="myColombia"/></span></span><span class="dragCont"><span class="drag" rescon="7"><img class="u-responsive-img padding5" src="unit_1/module_2/assets/images/col_1_7.png" alt="myColombia"/></span></span></div>
        <div class="row row-flex justify-center">
          <table class="c-table-estilo_tres mt30 ta-c mr5">
            <thead>
              <tr>
                <th> Name</th>
                <th class="w50">Region</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>Antioquia</span></td>
              </tr>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>Tolima</span></td>
              </tr>
            </tbody>
          </table>
          <table class="c-table-estilo_tres mt30 ta-c mr5">
            <thead>
              <tr>
                <th> Name</th>
                <th class="w50">Region</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>Valle del Cauca</span></td>
              </tr>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>Tolima</span></td>
              </tr>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>Cundinamarca</span></td>
              </tr>
            </tbody>
          </table>
          <table class="c-table-estilo_tres mt30 ta-c">
            <thead>
              <tr>
                <th> Name</th>
                <th class="w50">Region</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>The West Planess</span></td>
              </tr>
              <tr>
                <td><span class="drop max-ancho100 h100"></span></td>
                <td><span>Caribbean Coast</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropImg()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
