
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10 ">
          <div class="row mb30 ta-c"><img class="u-responsive-img" src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/test_{{actividadid}}_1.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb30">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> I definitely can´t wait until the weekend to watch that movie! I´ll</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span><span> by then.</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1" ng-click="txtcaptura_d='will have seen it'">will have seen it</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2" ng-click="txtcaptura_d='will be seeing it'">will be seeing it</label>
              </div>
            </p>
          </div>
          <div class="row mb30">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> I´m sorry I can´t wait for you. I</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span><span> by the time you get home.</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3" ng-click="txtcaptura_e='will be eating'">will be eating</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_e='will have eaten'">will have eaten</label>
              </div>
            </p>
          </div>
          <div class="row mb30">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> She</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span><span>her homework by the time I get home.</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5" ng-click="txtcaptura_f='will be finishing'">will be finishing</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6" ng-click="txtcaptura_f='will have finished'">will have finished</label>
              </div>
            </p>
          </div>
          <div class="row mb30">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span> At this time tomorrow, I</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_g"/></span><span>.</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7" ng-click="txtcaptura_g='will be traveling'">will be traveling</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8" ng-click="txtcaptura_g='will have traveled'">will have traveled</label>
              </div>
            </p>
          </div>
          <div class="row mb30">
            <p><strong><span class="u-textColor_4-dark">•</span></strong><span>  I´m very nervous because I</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_h"/></span><span> my final exam at this time tomorrow</span>
              <div class="row-flex ta-c">
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9" ng-click="txtcaptura_h='will be taken'">will be taken</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10" ng-click="txtcaptura_h='will have taken'">will have taken</label>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
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