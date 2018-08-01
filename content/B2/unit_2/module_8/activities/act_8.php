
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="DragandDropClonable()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt10-md mt10-xs m-a">
        <h5>Match the verbs with the preposition.</h5>
        <div class="col-flex-sm12 col-flex-md12 col-center padding10">
          <div class="row mt40 ">
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Ask</span><span class="drop"></span></div>
            </div>
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Blame</span><span class="drop"></span></div>
            </div>
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Care</span><span class="drop"></span></div>
            </div>
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Carry</span><span class="drop"></span></div>
            </div>
          </div>
          <div class="row mt40 ">
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Prevent</span><span class="drop"></span></div>
            </div>
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Use</span><span class="drop"></span></div>
            </div>
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>Rely</span><span class="drop"></span></div>
            </div>
            <div class="col xs6 sm6 md3">
              <div class="c-blue-text"><span>spend money</span><span class="drop"></span></div>
            </div>
          </div>
          <div class="row row-flex mt40 ">
            <div class="dragCont m-a">
              <div class="drag">for</div>
            </div>
            <div class="dragCont m-a">
              <div class="drag">from</div>
            </div>
            <div class="dragCont m-a">
              <div class="drag">of</div>
            </div>
            <div class="dragCont m-a">
              <div class="drag">on</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5>Now, complete the following passage with the verbs and the combinations.</h5>
      <div class="row row-flex mt40 ">
        <div class="dragCont m-a">
          <div class="drag">prevented from</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">use of</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">blamed for</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">carry on</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">rely on</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">spend money</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">ask for</div>
        </div>
        <div class="dragCont m-a">
          <div class="drag">care for</div>
        </div>
      </div>
      <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt10-md mt10-xs m-a">
        <div class="mb20 row-flex mt20">
          <div class="col-flex fz9 line-h">Many students <strong>(1) </strong><span class="drop"></span>video games and, in a way, they cannot be <strong>(2) </strong><span class="drop"></span>for this. These students make <strong>(3) </strong><span class="drop"></span>technological devices and <strong>(4) </strong><span class="drop"></span>computers for almost everything. When you <strong>(5) </strong><span class="drop"></span>the reasons to spend so much money in video game(s), they say they love technology and when there is a new video game available they only <strong>(6) </strong><span class="drop"></span>the latest and newest effects. These video games <strong>(7) </strong><span class="drop"></span>with a tradition of creative design and engaging images. All those kids who know about technology cannot be <strong>(8) </strong><span class="drop"></span>spending their money in this way.</div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropClonable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"> </button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>