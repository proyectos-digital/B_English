
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_6" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>Look at the following pictures, can you tell which events are taking place? Think for a few minutes, write a brief background about the event.</h5>
        <h6 class="ta-c u-textColor_3 mt30">Part # {{ s_actividad }} of 4</h6>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="col xs12 md10 col-center">
          <div class="row">
            <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/col_{{actividadid}}_1.png" alt="imagen 1"/></figure>
            <div class="col xs6 md8">
              <div class="c-wrapTextarea">
                <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="col xs12 md10 col-center">
          <div class="row">
            <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/col_{{actividadid}}_2.png" alt="imagen 2"/></figure>
            <div class="col xs6 md8">
              <div class="c-wrapTextarea">
                <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuariob"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 3">
        <div class="col xs12 md10 col-center">
          <div class="row">
            <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/col_{{actividadid}}_3.png" alt="imagen 3"/></figure>
            <div class="col xs6 md8">
              <div class="c-wrapTextarea">
                <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuarioc"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 4">
        <div class="col xs12 md10 col-center">
          <div class="row">
            <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/col_{{actividadid}}_4.png" alt="imagen 4"/></figure>
            <div class="col xs6 md8">
              <div class="c-wrapTextarea">
                <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuariod"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
