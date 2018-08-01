
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="row mt50-sm ">
          <h6>How to Accept a Compliment</h6>
          <p>The best way to respond is with a simple thank you and a big smile.</p>
          <div class="row">
            <div class="col xs12 md8 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_11_1.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="row mt50-sm ">
          <h6>Now play the videos again and practice how to accept a compliment.</h6>
          <p>There are many people who have difficulty accepting a compliment. They may respond in a humble way. They may also fish for more compliments.</p>
          <div class="row">
            <div class="col xs12 md8 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_11_2.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row">
        <div class="row mt50-sm ">
          <p>Some people can’t take a compliment. They almost always respond to a compliment in a self-deprecating way.</p>
          <p>Watch to the following examples then think of how you would respond to these compliments then say them out loud.</p>
          <div class="row">
            <div grid-layout="column-3">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_11_3.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_11_4.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls" poster="./../assets/multimedia/images/app/UNAD_video-poster.png">
                  <source src="unit_2/module_8/assets/videos/act_11_5.mp4" type="video/mp4"/> Your browser does not support the audio element.
                </video>
              </div>
            </div>
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