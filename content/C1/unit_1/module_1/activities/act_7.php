
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <h5><span class="u-textColor_4-dark">1.</span> Listen to the news report and answer the questions that follow.</h5>
      </div>
      <div class="row row-flex">
        <figure class="col-flex-xs12 col-flex-md5 m-a ta-c"><img class="u-responsive-img mt30" src="unit_1/module_1/assets/images/act_7_1.jpg" alt=""/>
          <figcaption>
            <audio controls="controls">
              <source src="unit_1/module_1/assets/audios/act_7_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </figcaption>
        </figure>
        <div class="col-flex-xs12 col-flex-md6 m-a">
          <div class="row">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent row row-flex justify-center align-items-center">
                <h6>Clash of cultures: Somali and Latino workers at U.S. meat packing plants</h6>
                <address>Wikinews.org, Friday, October 17, 2008<br/>Grand Island, Nebraska</address>
                <p class="mt20 ta-l">
                  Read the full story here:
                  <a class="u-textColor_2-darker" href="https://en.wikinews.org/wiki/Clash_of_cultures:_Somali_and_Latino_workers_at_U.S._meat_packing_plants" target="blank_" u-word-break="all">https://en.wikinews.org</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex">
        <h5><span class="u-textColor_4-dark">2.</span> Choose the best answer.</h5>
      </div>
      <div class="row row-flex">
        <div class="col-flex-xs12 col-flex-md6 mt20 col-center">
          <div class="row md11 col-center">
            <p>What is the news story about?</p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                  <label class="c-Checkbox " for="selInput_1"> Work schedule.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                  <label class="c-Checkbox " for="selInput_2">Religion.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                  <label class="c-Checkbox " for="selInput_3">Pay.</label>
                </div>
              </li>
            </ul>
          </div>
          <div class="row md11 col-center mt20">
            <p>The federal government raided the meat packing plant because  <span class="c-textField row">
                <input class="c-input ta-c row" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span> at the plant.</p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                  <label class="c-Checkbox " for="selInput_4" ng-click="txtcaptura_a = 'workers resigning'"><span>workers resigning</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                  <label class="c-Checkbox " for="selInput_5" ng-click="txtcaptura_a = 'there were undocumented workers'"><span>there were undocumented workers</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                  <label class="c-Checkbox " for="selInput_6" ng-click="txtcaptura_a = 'there were Muslim workers'"><span>there were Muslim workers</span></label>
                </div>
              </li>
            </ul>
          </div>
          <div class="row md11 col-center mt20">
            <p>Trade Unions negotiated the work contracts   <span class="c-textField row">
                <input class="c-input ta-c row" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span></p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                  <label class="c-Checkbox " for="selInput_7" ng-click="txtcaptura_b = 'with religion in mind'"><span>with religion in mind.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                  <label class="c-Checkbox " for="selInput_8" ng-click="txtcaptura_b = 'before religion was an issue'"><span>before religion was an issue.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                  <label class="c-Checkbox " for="selInput_9" ng-click="txtcaptura_b = 'to avoid arguing about religion'"><span>to avoid arguing about religion.</span></label>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 mt20 col-center">
          <div class="col-flex-md11 col-center">
            <div class="row md11 col-center">
              <p>Why were some Somali workers fired?</p>
              <ul class="c-listDefault" style="list-style: none;">
                <li>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                    <label class="c-Checkbox " for="selInput_10"> The company could not afford to lose hundreds of workers at the same time.</label>
                    <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                    <label class="c-Checkbox " for="selInput_11">They were Muslims and the union did not want to represent them.</label>
                    <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                    <label class="c-Checkbox " for="selInput_12">They were not a part of the union.</label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="row md11 col-center mt20">
              <p>The non-Muslim workers complained because   <span class="c-textField row">
                  <input class="c-input ta-c row" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span>.</p>
              <ul class="c-listDefault" style="list-style: none;">
                <li>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
                    <label class="c-Checkbox " for="selInput_13" ng-click="txtcaptura_c = 'they wanted more breaks like the Muslim employees.'"><span>they wanted more breaks like the Muslim employees.</span></label>
                    <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
                    <label class="c-Checkbox " for="selInput_14" ng-click="txtcaptura_c = 'they wanted more pay, equal to the Muslim employees.'"><span>they wanted more pay, equal to the Muslim employees.</span></label>
                    <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
                    <label class="c-Checkbox " for="selInput_15" ng-click="txtcaptura_c = 'they believe Muslim employees were given preferential treatment. '"><span>they believe Muslim employees were given preferential treatment.</span></label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>