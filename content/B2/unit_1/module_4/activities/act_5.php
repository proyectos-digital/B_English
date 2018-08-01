
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1; DragandDropClonable()">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong>  Read the following passage. Then do the exercise.             </h5>
      </div>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <p class="ta-j lh25">Keeping the house clean is so difficult. I live in Chiquinquirá with my brothers Oswaldo and Guillermo. Our parents live in Ubaté, so we need to do the house chores. Guillermo loves to do the washing while Oswaldo cooks everyday. He particularly enjoys making salads. I am in charge of making the beds, doing the dishes and cleaning the house. Sometimes, when I am busy, Guillermo does me a favor and cleans for me.</p>
        </div>
        <div class="col xs6 md5 offset-md1 ta-c col-center"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_5_1.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5><strong class="u-textColor_4">2. </strong> Now match the words <strong>DO </strong> and <strong>MAKE </strong> with the right expressions.</h5>
      <div class="row row-flex align-items-center justify-center mt50">
        <div class="col xs12 md10">
          <div class="row-flex align-items-center justify-around ">
            <div class="col-flex-xs4 col-center">
              <div class="dragCont centrado">
                <div class="drag">Make</div>
              </div>
            </div>
            <div class="col-flex-xs4 col-center">
              <div class="dragCont centrado">
                <div class="drag">Do</div>
              </div>
            </div>
          </div>
          <div class="grid-layout">
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">good</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">friends</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">a difference</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">a favor</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">a salad</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">your best</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">your hair</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">a phone call</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">a complaint</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">the right thing</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">money</div>
            </div>
            <div class="flex-inline">
              <div class="drop mb0"></div>
              <div class="m-a c-blue-text1">the washing</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt10-sm0">
        <div class="col sm6 md4 showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_5_2.png" alt=""/></div>
        <div class="col xs12 md8 lh30 ">
          <h5><strong class="u-textColor_4">3. </strong> Now, choose 4 combinations and write sentences that are true for you.</h5>
          <h6 class="u-textColor_4">For example: I always try to do my best.</h6>
          <div class="mb20 row-flex mt20 w100">
            <div class="col-flex w100"><strong class="u-textColor_4-dark w100"> 1.  <span class="c-textField w90">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></strong></div>
          </div>
          <div class="mb20 row-flex mt20 w100">
            <div class="col-flex w100"><strong class="u-textColor_4-dark w100"> 2.  <span class="c-textField w90">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></strong></div>
          </div>
          <div class="mb20 row-flex mt20 w100">
            <div class="col-flex w100"><strong class="u-textColor_4-dark w100"> 3.  <span class="c-textField w90">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></strong></div>
          </div>
          <div class="mb20 row-flex mt20 w100">
            <div class="col-flex w100"><strong class="u-textColor_4-dark w100"> 4.  <span class="c-textField w90">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></strong></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropClonable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-show="s_actividad == 3"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_5_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>