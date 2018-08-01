
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_5" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex justify-content-center">
        <div class="row mt50">
          <h5>Look at  these famous Colombian artworks and try to critique them.</h5>
          <h6 class="mt30">What do you think the artist is trying to say  with his or her artwork? <br/> How do they make you feel?</h6>
          <p class="mt30">Write your answer in the space next to each picture.</p>
          <h5 class="ta-c u-textColor_3 mt30">Part # {{ s_actividad}} of 4</h5>
        </div>
        <section class="row u-animationFadeDown" ng-show="s_actividad == 1">
          <div class="col xs12 md10 col-center">
            <div class="row">
              <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_3/module_10/assets/images/col_5_1.png" alt="Colombian street art"/>
                <figcaption>Colombian street art</figcaption>
              </figure>
              <div class="col xs6 md8">
                <div class="c-wrapTextarea">
                  <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="row u-animationFadeDown" ng-show="s_actividad == 2">
          <div class="col xs12 md10 col-center">
            <div class="row">
              <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_3/module_10/assets/images/col_5_2.png" alt="Diego Rivera, The Flower Vendor"/>
                <figcaption>Diego Rivera, The Flower Vendor</figcaption>
              </figure>
              <div class="col xs6 md8">
                <div class="c-wrapTextarea">
                  <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuariob"></textarea>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="row u-animationFadeDown" ng-show="s_actividad == 3">
          <div class="col xs12 md10 col-center">
            <div class="row">
              <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_3/module_10/assets/images/col_5_3.png" alt="Débora Arango: Schizophrenia in prison"/>
                <figcaption>Débora Arango: Schizophrenia in prison</figcaption>
              </figure>
              <div class="col xs6 md8">
                <div class="c-wrapTextarea">
                  <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuarioc"></textarea>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="row u-animationFadeDown" ng-show="s_actividad == 4">
          <div class="col xs12 md10 col-center">
            <div class="row">
              <figure class="col xs6 md4 ta-r"><img class="u-responsive-img" src="unit_3/module_10/assets/images/col_5_4.png" alt="Botero: Slaughter of the innocents"/>
                <figcaption>Botero: Slaughter of the innocents</figcaption>
              </figure>
              <div class="col xs6 md8">
                <div class="c-wrapTextarea">
                  <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuariod"></textarea>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()" ng-show="s_actividad == 4"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
