
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt40 align-items-center">
        <div class="col-flex-sm6 col-flex-md4 col-center"><img class="w100 c-figure centrado" src="unit_1/module_2/assets/images/test_3.png" alt=""/></div>
        <div class="col-flex-sm6 col-flex-md6 mt30-md offset-md1">
          <div class="row mb50">
            <p>• Why is Jenny so excited?</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">Because she´s ten years old</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">Because she´s going to the zoo.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">Because she collects stuffed animals.</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Jenny is six years old.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">The text doesn´t say.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">Yes, she is.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">No, she isn´t.</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Jenny likes to pretend that she is an animal.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">Yes, she does.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">No, she doesn´t.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">I don´t know.</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Her mother is taking her to the zoo.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">Yes, she is.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">No, she isn´t.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">The text doesn´t say.</label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Jenny knows how to fly.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">Yes, she does.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">No, she doesn´t.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">I don´t know.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction is-active openNotice u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/test/test_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>