
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md lh25">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1.</span></strong><span> You can cross…  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">the road</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">a stream</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">a door</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_1" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">a bridge</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2.</span></strong><span> You can be chased by one.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">a ball</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">the police</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">a dog</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_2" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">a thief</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3.</span></strong><span> You can do this with a painting.</span>
              <div class="row-flex"> 
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">make </label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">buy    </label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">look at    </label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_3" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">watch                        </label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4.</span></strong><span> It shines.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">a candle</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">a flashlight</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">a window</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_4" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_16">the sun</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5.</span></strong><span> It´s healthy.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_17">exercise</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_18">junk food</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_19" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_19">vegetables</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_20" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_20">fruit</label>
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