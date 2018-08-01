
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="5" ng-click="s_actividad = 5" ng-class="(s_actividad == 5) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <div class="template-content">
      <h4 class="ta-c"><strong>Giving Compliments</strong></h4>
      <h6>These are some common expressions for giving a compliment.</h6>
      <h4 class="u-textColor_4 ta-c mt30 mb30">Activity {{s_actividad}}</h4>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <div class="row ta-c">
            <p><span>Choose the proper categories to the videos.</span>
              <select class="c-select mt10" name="act_10_1">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">Talent</option>
                <option value="2">Work</option>
                <option value="3">Indirect</option>
                <option value="4">Appearance</option>
                <option value="5">Food</option>
              </select>
            </p>
          </div>
          <div grid-layout="column-3">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_1.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_2.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_3.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
          <div class="row mt20">
            <div class="col xs12 md9 col-center">
              <div grid-layout="column-2">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                    <source src="unit_2/module_8/assets/videos/act_10_4.mp4" type="video/mp4"/> Your browser does not support the audio element.
                  </video>
                </div>
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                    <source src="unit_2/module_8/assets/videos/act_10_5.mp4" type="video/mp4"/> Your browser does not support the audio element.
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <div class="col xs12 md9 col-center">
            <div class="row ta-c">
              <p><span>Choose the proper categories to the videos.</span>
                <select class="c-select mt10" name="act_10_1">
                  <option value="" disabled="disabled" selected="selected"></option>
                  <option value="1">Talent</option>
                  <option value="2">Work</option>
                  <option value="3">Indirect</option>
                  <option value="4">Appearance</option>
                  <option value="5">Food</option>
                </select>
              </p>
            </div>
            <div grid-layout="column-2">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_10_6.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_10_7.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_10_8.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_10_9.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 3">
        <div class="row">
          <div class="row ta-c">
            <p><span>Choose the proper categories to the videos.</span>
              <select class="c-select mt10" name="act_10_1">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">Talent</option>
                <option value="2">Work</option>
                <option value="3">Indirect</option>
                <option value="4">Appearance</option>
                <option value="5">Food</option>
              </select>
            </p>
          </div>
          <div grid-layout="column-3">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_10.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_11.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_12.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
        </div>
      </section>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 4">
        <div class="row">
          <div class="row ta-c">
            <p><span>Choose the proper categories to the videos.</span>
              <select class="c-select mt10" name="act_10_1">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">Talent</option>
                <option value="2">Work</option>
                <option value="3">Indirect</option>
                <option value="4">Appearance</option>
                <option value="5">Food</option>
              </select>
            </p>
          </div>
          <div grid-layout="column-3">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_13.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_14.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_15.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
        </div>
      </section>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 5">
        <div class="row">
          <div class="row ta-c">
            <p><span>Choose the proper categories to the videos.</span>
              <select class="c-select mt10" name="act_10_1">
                <option value="" disabled="disabled" selected="selected"></option>
                <option value="1">Talent</option>
                <option value="2">Work</option>
                <option value="3">Indirect</option>
                <option value="4">Appearance</option>
                <option value="5">Food</option>
              </select>
            </p>
          </div>
          <div grid-layout="column-3">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_16.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_17.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                <source src="unit_2/module_8/assets/videos/act_10_18.mp4" type="video/mp4"/> Your browser does not support the audio element.
              </video>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()" ng-show="s_actividad == 5"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()" ng-show="s_actividad == 5"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '1024');</script>