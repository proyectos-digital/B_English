
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>Choose the right pronoun to complete the sentences.</h5>
        <div class="row-flex align-items-center mt30">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_3.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="row">
              <p> <strong class="u-textColor_4-dark"> 1.</strong> The family <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span>lives upstairs is very noisy.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='which'">which</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='they'">they</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='that'">that</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_a='who'">who</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">2.</strong> The shop<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span>sells that good almojabanas is closed on Sundays.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='whose'">whose</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='where'">where</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_b='who'">who</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_2" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_b='that'">that</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">3.</strong> That might be the man<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span>stole your wallet.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='when'">when</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_c='where'">where</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_c='that'">that</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_3" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_c='which'">which</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">4.</strong> Do you know the men<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span>are standing over there?</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_d='which'">which</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_d='when'">when</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_d='that'">that</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_4" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_d='where'">where</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">5.</strong> Do you like the T-shirt<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span>I bought in PMart?</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_e='that'">that</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_e='who'">who</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_5" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_19" ng-click="txtcaptura_e='where'">where</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_5" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_20" ng-click="txtcaptura_e='when'">when</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">6.</strong>I can't find the key<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span>opens the door.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_6" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_21" ng-click="txtcaptura_f='that'">that</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_6" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_22" ng-click="txtcaptura_f='where'">where</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_6" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_23" ng-click="txtcaptura_f='whose'">whose</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_6" value="4"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_24" ng-click="txtcaptura_f='who'"> who</label>
              </div>
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
