
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row"><strong class="u-textColor_4-dark">1.</strong>
            <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_1/module_3/assets/audios/test_5_1.mp3"></button>
            <div class="row-flex mt30">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">She'd rather go to the park.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">She'd rather go to the movies.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">She'd rather stay home.</label>
            </div>
          </div>
          <div class="row mt40"><strong class="u-textColor_4-dark">3.</strong>
            <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_1/module_3/assets/audios/test_5_2.mp3"></button>
            <div class="row-flex mt30">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">They would rather have visited Japan than China.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">They would have rather visited China than Japan.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">They would have rather visited India.</label>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center">
          <div class="row"><strong class="u-textColor_4-dark">2.</strong>
            <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_1/module_3/assets/audios/test_5_3.mp3"></button>
            <div class="row-flex mt30">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">He prefers pizza.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">He prefers tacos.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">He likes both.</label>
            </div>
          </div>
          <div class="row mt40"><strong class="u-textColor_4-dark">4.</strong>
            <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_1/module_3/assets/audios/test_5_4.mp3"></button>
            <div class="row-flex mt30">
              <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">He´d rather not risk his money.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">He´d rather invest in a bank.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">He´d rather spend all his money.</label>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 col-center">
          <div class="row mt40"><strong class="u-textColor_4-dark">5.</strong>
            <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_1/module_3/assets/audios/test_5_5.mp3"></button>
            <div class="row-flex mt30">
              <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">She´d rather have walked to work</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">She´d rather have driven to work.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">She´d rather not have walked to work</label>
            </div>
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
