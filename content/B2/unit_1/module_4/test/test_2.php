
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md4 mt50-md mt30-sm">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img w90 centrado" src="unit_1/module_4/assets/images/test_2.png" alt=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md8 mt50-md mt30-sm">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Can I</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a" disabled="disabled"/></span><span>a phone call, please?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='go'">go</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='make'">make</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='do'">do</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_a='makes'">makes</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>You should always try to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b" disabled="disabled"/></span><span>your best.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='makes'">makes</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='do'">do</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_b='make'">make</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_2" value="4"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_b='does'">does</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>The teacher often</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c" disabled="disabled"/></span><span>research for the University.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='make'">make</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_c='do'">do</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_c='does'">does</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_3" value="4"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_c='makes'">makes</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>You have to stop</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d" disabled="disabled"/></span><span>excuses.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_d='make'">make</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_d='doing'">doing</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_d='making'">making</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_4" value="4"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_d='do'">do</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I don´t like it when people ask me to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e" disabled="disabled"/></span><span>favors for them.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_e='do'">do</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_e='does'">does</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_19" ng-click="txtcaptura_e='make'">make</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_5" value="4"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_20" ng-click="txtcaptura_e='makes'">makes</label>
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