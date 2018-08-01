
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt20">
        <h5><strong class="u-textColor_4">1. </strong>  Choose the right answer. </h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row mt40">
              <p><strong class="u-textColor_4-dark">1.</strong> Dad would like to go to Cartagena whereas Mom <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span>go to San Andres.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='would rather to'">would rather to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='would prefer to'">would prefer to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='would prefer'">would prefer</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">2.</strong> Dad <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span>rent a house.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='would prefer'">would prefer</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='would rather to'">would rather to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='would rather'">would rather</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">3.</strong> Mrs. Clark <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span>to stay in a hotel.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='prefer'">prefer</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='would rather'">would rather</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='would prefer'">would prefer</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">4.</strong> My sister would like to have fun at the beach but I would <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span>to go on a cruise.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='prefer to'">prefer to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='rather to'">rather to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='prefer'">prefer</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">5.</strong> My wife would like to stay in at the hotel but I would<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span>go out fishing.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='rather to'">rather to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='prefer'">prefer</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='rather'">rather</label>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt40">
              <p><strong class="u-textColor_4-dark">6.</strong> My wife would like to visit a museum, but I would<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span>to go to sightseeing.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_6" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_f='prefer'">prefer</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_6" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_f='rather'">rather</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_6" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_f='likes'">likes</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">7.</strong> I would<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_g"/></span>become a scuba diver.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_7" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_19" ng-click="txtcaptura_g='prefer'">prefer</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_7" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_20" ng-click="txtcaptura_g='rather'">rather</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_7" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_21" ng-click="txtcaptura_g='rather to'">rather to</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">8.</strong> I would<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_h"/></span>not to spend too much money.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_8" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_22" ng-click="txtcaptura_h='prefer to'">prefer to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_8" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_23" ng-click="txtcaptura_h='prefer'">prefer</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_8" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_24" ng-click="txtcaptura_h='rather'">rather</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">9.</strong>  I would<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_i"/></span>buy souvenirs because my suitcase is already full.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_9" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_25" ng-click="txtcaptura_i='rather not'">rather not</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_9" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_26" ng-click="txtcaptura_i='prefer not'">prefer not</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_9" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_27" ng-click="txtcaptura_i='not prefer'">not prefer</label>
              </div>
              <p class="mt20"><strong class="u-textColor_4-dark">10.</strong> I would<span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_j"/></span>not rent a car.</p>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_10" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_28" ng-click="txtcaptura_j='rather to'">rather to</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_10" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_29" ng-click="txtcaptura_j='rather'">rather</label>
                <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_10" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_30" ng-click="txtcaptura_j='prefer'">prefer</label>
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