
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md lh25">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1.</span></strong><span> Diana Northup is a cave explorer. To learn about life in caves, they…    </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1" ng-click="txtcaptura_a='must be visited'">must be visited</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2" ng-click="txtcaptura_a='must visit'">must visit</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3" ng-click="txtcaptura_a='mustn´t be visited'">mustn´t be visited</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2.</span></strong><span> Diana knows that some risks</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span><span> when exploring caves. That´s why she´s always careful.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_b='are taken'">are taken</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5" ng-click="txtcaptura_b='should take'">should take</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6" ng-click="txtcaptura_b='have to be taken'">have to be taken</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3.</span></strong><span> Some caves</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span><span>without a gas mask.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7" ng-click="txtcaptura_c='must be entered'">must be entered</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8" ng-click="txtcaptura_c='mustn´t be entered'">mustn´t be entered   </label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9" ng-click="txtcaptura_c='couldn´t be entered'">couldn´t be entered                         </label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4.</span></strong><span> It is important for explorers to monitor gas levels in caves. That´s why a gas meter</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13" ng-click="txtcaptura_e='has to be used'">has to be used</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14" ng-click="txtcaptura_e='can´t be used'">can´t be used</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15" ng-click="txtcaptura_e='might be used'">might be used</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5.</span></strong><span> With a gas meter, gas levels</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span><span>while explorers are in the caves.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_16" ng-click="txtcaptura_f='can´t be checked'">can´t be checked</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_17" ng-click="txtcaptura_f='must check'">must check</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_5" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_18" ng-click="txtcaptura_f='can be checked'">can be checked</label>
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