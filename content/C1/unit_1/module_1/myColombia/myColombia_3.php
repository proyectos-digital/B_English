
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5> Watch the following videos, pay attention to the activities described by each person:</h5>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_1/module_1/assets/videos/col_3_1.mp4" type="video/mp4"/>Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_1/module_1/assets/videos/col_3_2.mp4" type="video/mp4"/>Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_1/module_1/assets/videos/col_3_3.mp4" type="video/mp4"/>Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_1/module_1/assets/videos/col_3_4.mp4" type="video/mp4"/>Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5>From the videos of informal jobs that we previously looked at, which ones do you believe will no longer exist in the near future?</h5>
      <div class="row row-flex mt30 align-items-center justify-center">
        <div class="row-flex col xs12 sm6 col-center">
          <figure class="padding5 xs6"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_3_5.png" alt="activities described by each person"/></figure>
          <figure class="padding5 xs6"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_3_6.png" alt="activities described by each person"/></figure>
          <figure class="padding5 xs6"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_3_7.png" alt="activities described by each person"/></figure>
          <figure class="padding5 xs6"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_3_8.png" alt="activities described by each person"/></figure>
        </div>
        <div class="col xs12 sm6 col-center">
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
