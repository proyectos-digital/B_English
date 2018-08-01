
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown align-items-center " ng-show="s_actividad == 1">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <h6><strong class="u-textColor_4">1. </strong> Read the following sentences. Pay attention to the words in bold.</h6>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p>
                 Mariana works at the Colombian taxes department. She is really worried about Julian, a friend who works in the same office because between January and June he <strong>had been working </strong>too hard. </p>
              <p>
                  She decided to go to Julian's house. She rang Julian's doorbell at 8:15 yesterday but Julian <strong>had already left </strong>the house. </p>
              <p>Her plan was to invite him to spend the weekend at her parent's country house in Santandersito but Julian <strong>had already taken </strong>a taxi to the airport because he <strong>had bought </strong>tickets to go to Armenia.</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_13.png" alt="" srcset=""/></div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown align-items-center" ng-show="s_actividad == 2">
        <div class="col-flex-sm12 col-center">
          <h6><strong class="u-textColor_4">2. </strong> Choose the correct words to complete the sentences.</h6>
          <div class="row mt20">
            <p class="mt20 row-flex align-items-center"><strong class="u-textColor_4-dark">1.</strong><span class="ml5 mr5">I</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_1">didn't understand</label></span><span>/</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_2">hadn't understood </label></span><span>what was happening because</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_3">hadn't been listening.</label></span><span>/</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_4">I didn’t listen</label></span></p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">2.</strong><span class="ml5 mr5">I</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_5">didn't pay attention</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_6">hadn't been paying attention </label></span><span>in class so I</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_7">got</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_8">had got</label></span><span>all the answers wrong in the test today.</span></p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">3.</strong><span class="ml5 mr5">She </span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_9">left</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_10">had left </label></span><span>by the time</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_6" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_11">arrived</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_6" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_12">had arrived</label></span></p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">4.</strong><span class="ml5 mr5">She</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_7" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_13">was</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_7" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_14">had been  </label></span><span>upset when we arrived because I</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_8" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_15">forgot</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_8" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_16">had forgotten </label></span><span>to tell her we’d be late.</span></p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">5.</strong><span class="ml5 mr5">He</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_9" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_17">waited</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_9" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_18">had been waiting  </label></span><span>for three years when she finally</span><span>
                <input class="c-inputRadio" type="radio" id="SelectRadio_19" name="selection_10" value="1"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_19">said</label></span><span>/
                <input class="c-inputRadio" type="radio" id="SelectRadio_20" name="selection_10" value="2"/>
                <label class="mt0 c-CheckSelected col-flex ml5 mr5" for="SelectRadio_20">had said </label></span><span>she would marry him.</span></p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1" ng-show="s_actividad == 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>