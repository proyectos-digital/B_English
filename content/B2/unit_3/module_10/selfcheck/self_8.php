
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1.</span></strong><span> I left </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span><span> things at the office last night. </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1" ng-click="txtcaptura_a='One of two'">One of two</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2" ng-click="txtcaptura_a='One or two'">One or two</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3" ng-click="txtcaptura_a='One and two'">One and two</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2.</span></strong><span> There are a couple </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span><span>  in the speech we need to talk about. </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_b='bits'">bits</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5" ng-click="txtcaptura_b='bit'">bit</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6" ng-click="txtcaptura_b='stuf'">stuff</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3.</span></strong><span> It’s</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span><span> three o’clock now.  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7" ng-click="txtcaptura_c='approximately'">approximately</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8" ng-click="txtcaptura_c='y sort of'">sort of</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9" ng-click="txtcaptura_c='about'">about</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4.</span></strong><span> There are </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span><span> people on the bus.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10" ng-click="txtcaptura_d='fifty-odd'">fifty-odd</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11" ng-click="txtcaptura_d='kind of fifty'">kind of fifty</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12" ng-click="txtcaptura_d='the odd fifty'">the odd fifty</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5.</span></strong><span> I usually eat lunch at</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span><span>.  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13" ng-click="txtcaptura_e='one around'">one around</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14" ng-click="txtcaptura_e='one-odd'">one-odd</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15" ng-click="txtcaptura_e='oneish'">oneish</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">6.</span></strong><span> She has    </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span><span>hair.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_6" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_16" ng-click="txtcaptura_f='about reddish'">about reddish</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_6" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_17" ng-click="txtcaptura_f='red-odd'">red-odd</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_6" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_18" ng-click="txtcaptura_f='sort of reddish'">sort of reddish</label>
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