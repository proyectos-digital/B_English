
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong>  Read Ricardo’s itinerary for tomorrow.<br/> Choose future continuous or future perfect to complete the sentences.</h5>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-md5 col-flex-sm11 col-center">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 8:00 am, Ricardo</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span><span>home.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='will be leaving'">will be leaving</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='will have left'">will have left</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>By 8: 30am, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span><span>at the airport.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_b='will be arriving'">will be arriving</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='will have arrived'">will have arrived</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 9:00 am, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span><span>for his plane.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='will be waiting'">will be waiting </label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='will have waited'">will have waited</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 9:30am, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span><span>for Puerto Inirida.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='will be leaving'">will be leaving</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='will have left'">will have left</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 10:00 am, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span><span>to Puerto Inirida.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='will be flying'">will be flying</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e=' will have flown'"> will have flown</label>
            </div>
          </div>
        </div>
        <div class="col-flex-md5 col-flex-sm11 col-center">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 11:10 am, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_f"/></span><span>in Puerto Inirida.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_6" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_f='will be arriving'">will be arriving</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_6" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_f='will have arrived'">will have arrived</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 1:30 pm, the meeting </span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_g"/></span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_7" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_g='will be starting'">will be starting</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_7" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_19" ng-click="txtcaptura_g='will have started'">will have started</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 7:50pm, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_h"/></span><span>his dinner.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_8" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_20" ng-click="txtcaptura_h='will be eating'">will be eating</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_8" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_21" ng-click="txtcaptura_h='will have eaten'">will have eaten</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At 10:15pm, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_i"/></span><span>the restaurant.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_9" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_22" ng-click="txtcaptura_i='will be leaving'">will be leaving</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_9" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_23" ng-click="txtcaptura_i='will have left'">will have left</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>At midnight, he</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_j"/></span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_10" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_24" ng-click="txtcaptura_j='will be sleeping'">will be sleeping</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_10" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_25" ng-click="txtcaptura_j='will have slept'">will have slept</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction is-active u-bgIconAlert openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_16_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>