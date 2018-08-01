
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>Decide whether 'take' or 'have' should be used with the nouns listed below.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">1.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span>a break.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='take'">Take</label>
              </div>
            </div>
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">2.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span>a headache.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_b='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='take'">Take</label>
              </div>
            </div>
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">3.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span>a haircut.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_c='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_c='take'">Take</label>
              </div>
            </div>
            <div class="row mt20">
              <p class="ta-c"> <strong class="u-textColor_4-dark">4.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span>an exam.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_d='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_d='take'">Take</label>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md5 col-center"> 
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">5.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span>a seat.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_e='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_e='take'">Take</label>
              </div>
            </div>
            <div class="row mt20">
              <p class="ta-c"> <strong class="u-textColor_4-dark">6.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span>a holiday.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_6" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_f='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_6" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_f='take'">Take</label>
              </div>
            </div>
            <div class="row mt20">
              <p class="ta-c"> <strong class="u-textColor_4-dark">7.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_g"/></span>a taxi.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_7" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_g='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_7" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_g='take'">Take</label>
              </div>
            </div>
            <div class="row mt20">
              <p class="ta-c"> <strong class="u-textColor_4-dark">8.</strong><span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_h"/></span>a bath.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_8" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_h='have'">Have</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_8" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_h='take'">Take</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>