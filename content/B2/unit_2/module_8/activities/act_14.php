
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_13a.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md4 col-center mt10-sm padding10">
              <h5>El Carmelo</h5><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/>
              <audio class="row mt20" controls="controls">
                <source src="unit_2/module_8/assets/audios/act_14_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md4 col-center mt10-sm padding10">
              <h5>Sassones</h5><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/>
              <audio class="row mt20" controls="controls">
                <source src="unit_2/module_8/assets/audios/act_14_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_13b.png" alt=""/></div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_13c.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md4 col-center mt10-sm padding10">
              <h5>Caramillo</h5><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/><span class="c-textField mt10 mb10 w60">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span><br/>
              <audio class="row mt20" controls="controls">
                <source src="unit_2/module_8/assets/audios/act_14_3.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4"></section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconListen"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxtB2_U2_M8_ACT14()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>