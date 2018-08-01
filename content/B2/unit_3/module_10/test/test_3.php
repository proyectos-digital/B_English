
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10 ta-c"><img class="u-responsive-img mb30" src="unit_3/module_10/assets/images/test_2.png" alt="self_5"/></div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">1. </span></strong><span> I am going to call Martha to give her the news right now! </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_1">Scheduled in the future.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_2">Intention, plan already in action.</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">2. </span></strong><span>You are not going to believe what happened. </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_3">Prediction.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_e='to'">The future as it relates to current reality.</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">3. </span></strong><span>She is going to be so happy when you give her the present.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_5">Prediction.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_6">About to happen.</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">4. </span></strong><span>Javier is going to the gym after class today.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_7">Intention, plan already in action.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_8">Prediction.</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">5. </span></strong><span>I wonder how the teacher is going to tell him that he failed the course.  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_9">Guess.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
                <label class="c-CheckSelected row ml10 mr10" for="SelectRadio_10">About to happen.</label>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>