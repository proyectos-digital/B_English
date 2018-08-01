
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>What is the best way to apologize in English?</h5>
      <div class="row mt20 sm11 md8 lg9 hd12 col-center">
        <div class="c-contVideo">
          <video class="u-responsive-video" controls="controls">
            <source src="unit_2/module_5/assets/videos/act_8_1.mp4" type="video/mp4"/>
          </video>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2" ng-init="DragandDrop()">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12"> 
          <h5>Complete these apology sentences with the correct word.</h5>
          <div class="xs12 sm9 row-flex justify-around mt30 mb30 col-center">
            <div class="dragCont mt5">
              <div class="drag">mad</div>
            </div>
            <div class="dragCont mt5">
              <div class="drag">careless</div>
            </div>
            <div class="dragCont mt5">
              <div class="drag">sorry</div>
            </div>
            <div class="dragCont mt5">
              <div class="drag">forgive</div>
            </div>
            <div class="dragCont mt5">
              <div class="drag">apologize</div>
            </div>
            <div class="dragCont mt5">
              <div class="drag">sorry</div>
            </div>
          </div>
          <div class="row mt50">
            <p><strong class="u-textColor_4">•</strong>  “Please <span class="drop w20"></span> me for interrupting you. I didn’t realize you were busy.”</p>
            <p><strong class="u-textColor_4">•</strong>  “I can’t believe I forgot to call you. Please don’t be  <span class="drop w20"></span> at me.”</p>
            <p><strong class="u-textColor_4">•</strong>  “I’m so <span class="drop w20"></span> I’m late. This is the rush hour!”</p>
            <p><strong class="u-textColor_4">•</strong>  “Oh no, how  <span class="drop w20"></span> of me! Do you have a cloth so I can clean it?”</p>
            <p><strong class="u-textColor_4">•</strong>  “We <span class="drop w20"></span> for the train delay. We will get you to your destination as soon as possible.”</p>
            <p><strong class="u-textColor_4">•</strong>  “I’m  <span class="drop w20"></span> but you are sitting in my seat.”</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>