
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Choose the correct phrasal verbs in these sentences. You may check any online dictionary in case of any doubt.</h5>
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 col-center mt30-md mt30-sm">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Try not to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a" disabled="disabled"/></span><span>out on the opportunity. You don’t know when you might get a second chance.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='point'">point</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='miss'">miss</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='whip'">whip</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I think it’s time for you to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b" disabled="disabled"/></span><span>down and find a job.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='come'">come</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='count'">count</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='settle'">settle</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Look! I think someone has tried to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c" disabled="disabled"/></span><span>into your car!</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='break'">break</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='put'">put</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='turn'">turn</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Sorry! Can you</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d" disabled="disabled"/></span><span>on a minute?</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='go'">go</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='hang'">hang</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='try'">try</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I think I’m going to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e" disabled="disabled"/></span><span>up swimming. I need to get fit.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='take'">take</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='put'">put</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='speed'">speed</label>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt30-md mt30-sm showTo-md"><img class="u-responsive-img w90 centrado mt30 " src="unit_2/module_6/assets/images/act_16.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>