
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="c-cardGreen">
        <div class="c-cardGreenContent u-textColor_1">
          <p class="ta-c">To praise someone is to be in awe of them or to approve of something they’ve done. Here are a few expressions:</p>
          <div class="row">
            <div class="col xs4">
              <h6 class="ta-c">•Congratulations!<br/> • Congratulations for + NOUN / ING</h6>
            </div>
            <div class="col xs4">
              <h6 class="ta-c">• You did a great / an excellent job!<br/> • Well done!</h6>
            </div>
            <div class="col xs4">
              <h6 class="ta-c">• Hats off to you.<br/> • Thanks to…</h6>
            </div>
          </div>
          <div class="row ta-c mt30">
            <button class="c-btn-IconAction u-bgIconListen ml10" ng-audio="unit_3/module_12/assets/audios/self_3_1.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen ml10" ng-audio="unit_3/module_12/assets/audios/self_3_2.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen ml10" ng-audio="unit_3/module_12/assets/audios/self_3_3.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen ml10" ng-audio="unit_3/module_12/assets/audios/self_3_4.mp3"></button>
          </div>
        </div>
      </div>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <h5 class="ta-c"> Write a congratulatory note to each person using the most appropriate expressions.</h5>
        <div class="row mt30">
          <div class="col xs6 md4">
            <div class="col xs10 col-center"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_1.png" alt=""/>
              <div class="c-wrapTextarea ">
                <textarea class="c-textarea h50" placeholder="Write here..." ng-model="textousuario"></textarea>
              </div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="col xs10 col-center"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_2.png" alt=""/>
              <div class="c-wrapTextarea ">
                <textarea class="c-textarea h50" placeholder="Write here..." ng-model="textousuariob"></textarea>
              </div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="col xs10 col-center"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_3.png" alt=""/>
              <div class="c-wrapTextarea ">
                <textarea class="c-textarea h50" placeholder="Write here..." ng-model="textousuarioc"></textarea>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h5 class="ta-c"> Write a congratulatory note to each person using the most appropriate expressions.</h5>
        <div class="row mt30">
          <div class="col xs6 md4">
            <div class="col xs10 col-center"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_4.png" alt=""/>
              <div class="c-wrapTextarea ">
                <textarea class="c-textarea h50" placeholder="Write here..." ng-model="textousuariod"></textarea>
              </div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="col xs10 col-center"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_5.png" alt=""/>
              <div class="c-wrapTextarea ">
                <textarea class="c-textarea h50" placeholder="Write here..." ng-model="textousuarioe"></textarea>
              </div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="col xs10 col-center"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_6.png" alt=""/>
              <div class="c-wrapTextarea ">
                <textarea class="c-textarea h50" placeholder="Write here..." ng-model="textousuariof"></textarea>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');
  
</script>
