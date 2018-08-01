
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>Read the following sentences. Pay attention to the words in bold.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <p>
                   Mariana works at the Colombian taxes department. She is really worried about Julian, a friend who works in the same office because between January and June he <strong>had been working </strong>too hard. </p>
                <p>
                    She decided to go to Julian's house. She rang Julian's doorbell at 8:15 yerterday but julian <strong>had already left </strong>the house. </p>
                <p>Her plan was to invite him to spend the weekend at her parent's country house in Santandersito but Julian <strong>had already taken </strong>a taxi to the airport because he <strong>had bought </strong>tickets to go to Armenia.</p>
              </div>
            </div>
            <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_13.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">1.</strong></p>
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">I didn't understand</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">hadn't understood what was happening because I didn’t listen</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">hadn't been listening.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">2.</strong></p>
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">I didn't pay attention</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">hadn't been paying attention in class so I got</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">had got all the answers wrong in the test today.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">3.</strong></p>
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">She left</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">had left by the time we arrived</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">had arrived.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">4.</strong></p>
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">She was</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">had been upset when we arrived because I forgot</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">had forgotten to tell her we’d be late.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">5.</strong></p>
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">He waited</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">had been waiting for three years when she finally said</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">had said she would marry him.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>