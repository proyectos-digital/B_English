
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <audio class="row w40 centrado" controls="controls">
          <source src="unit_2/module_5/assets/audios/test_5.mp3" type="audio/mpeg"/>Your browser does not support the audio element. 
        </audio>
      </div>
      <div class="row-flex align-items-center mt40">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <p><strong class="u-textColor_4-dark">1.</strong></p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">David smokes.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">David still wants to smoke.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">David never smoked.</label>
            </div>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">2.</strong></p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">David used to eat sushi.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">David doesn't eat salads anymore.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">David used to eat fast food.</label>
            </div>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">3.</strong></p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">David drinks wine now.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">David quit drinking.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">David drinks beer now.</label>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center"> 
          <div class="row">
            <p><strong class="u-textColor_4-dark">4.</strong></p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">David used to go to bed early.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">David used to go to bed late.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">David doesn't go to bed early.</label>
            </div>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">5.</strong></p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">David had healthy habits.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">David is sick.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">David feels better.</label>
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
