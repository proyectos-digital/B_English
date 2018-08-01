
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row-flex">
        <h5>Read the statements below. </h5>
        <p>Notice that the words who’s (who is), who’s (who has) and whose sound the same when you pronounce them. The only way to know which one to choose is to pay attention to the meaning of each sentence. </p>
        <h6>Choose the right option to complete the sentences.</h6>
      </div>
      <div class="row-flex col-center mt30-xs mt50-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">1. </span></strong>The receptionist is the person <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span> responsible for reservations.
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_1" ng-click="txtcaptura_a='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_2" ng-click="txtcaptura_a='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_3" ng-click="txtcaptura_a='whose'">whose</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">2. </span></strong>Do you know anybody <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span>worked in a hotel?
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_4" ng-click="txtcaptura_b='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_5" ng-click="txtcaptura_b='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_6" ng-click="txtcaptura_b='whose'">whose</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">3. </span></strong>There is a 10% discount for guests <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span> reservations are made on the Internet.
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_7" ng-click="txtcaptura_c='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_8" ng-click="txtcaptura_c='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_9" ng-click="txtcaptura_c='whose'">whose</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">4. </span></strong>Is there anybody in the class <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span> stayed in a luxury hotel?
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_10" ng-click="txtcaptura_d='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_11" ng-click="txtcaptura_d='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_12" ng-click="txtcaptura_d='whose'">whose</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">5. </span></strong><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span>backpack is this?
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_13" ng-click="txtcaptura_e='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_14" ng-click="txtcaptura_e='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_15" ng-click="txtcaptura_e='whose'">whose</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">6. </span></strong>That’s the guest <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span> plane arrived late.
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_6" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_16" ng-click="txtcaptura_f='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_6" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_17" ng-click="txtcaptura_f='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_6" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_18" ng-click="txtcaptura_f='whose'">whose</label>
              </div>
            </p>
          </div>
          <div class="row mb20">
            <p> <strong><span class="u-textColor_4-dark">7. </span></strong>The hotel manager, <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_g"/></span> not here today, is the person you need to talk to.
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_19" name="selection_7" value="1"/>
                <label class="c-CheckSelected" for="SelectRadio_19" ng-click="txtcaptura_g='who&#96;s (who is)'">who’s (who is)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_20" name="selection_7" value="2"/>
                <label class="c-CheckSelected" for="SelectRadio_20" ng-click="txtcaptura_g='who&#96;s (who has)'">who’s (who has)</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_21" name="selection_7" value="3"/>
                <label class="c-CheckSelected" for="SelectRadio_21" ng-click="txtcaptura_g='whose'">whose</label>
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