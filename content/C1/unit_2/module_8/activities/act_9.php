
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_9" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="col xs12 md10 col-center">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_2/module_8/assets/videos/act_9_1.mp4" type="video/mp4"/>Your browser does not support the audio element.
            </video>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row ta-c">
        <h5>Compliments</h5>
      </div>
      <div class="row">
        <div class="col xs12 sm6 mt30">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
              <source src="unit_2/module_8/assets/videos/act_9_2.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
        <div class="col xs12 sm6 mt30">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
              <source src="unit_2/module_8/assets/videos/act_9_3.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
      </div>
      <div class="row mt30">
        <div class="col xs12 sm6 col-center">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
              <source src="unit_2/module_8/assets/videos/act_9_4.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>