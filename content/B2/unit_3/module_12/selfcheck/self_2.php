
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1.</span></strong><span> She looks pretty sick. I think she</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span><span> go to a doctor.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1" ng-click="txtcaptura_a='can'">can</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2" ng-click="txtcaptura_a='should'">should</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2.</span></strong><span> You’ve been driving all day. You</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span><span> be exhausted!</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_b='must'">must</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5" ng-click="txtcaptura_b='should'">should</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3.</span></strong><span> You</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span><span>smoke so much. It’s bad for your health.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7" ng-click="txtcaptura_c='can’t'">can’t</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8" ng-click="txtcaptura_c='shouldn’t'">shouldn’t                         </label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4.</span></strong><span> Hey I’m lost</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span><span>you help me?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13" ng-click="txtcaptura_e='Should'">should</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14" ng-click="txtcaptura_e='Can'">can</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5.</span></strong><span> You have such a beautiful voice. You </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span><span>sing for us!</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15" ng-click="txtcaptura_f='Should'">should</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_16" ng-click="txtcaptura_f='Can'">can</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">6.</span></strong><span> I know he speaks five languages, but </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_g"/></span><span> he speak Arabic?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_6" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_17" ng-click="txtcaptura_g='Should'">should</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_6" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_18" ng-click="txtcaptura_g='Can'">can</label>
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