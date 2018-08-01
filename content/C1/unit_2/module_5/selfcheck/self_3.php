
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md5 mt30 row-flex justify-center">
            <audio controls="controls">
              <source src="unit_2/module_5/assets/audios/self_3_1.mp3" type="audio/mpeg"/>
            </audio>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>Visa now compulsory for Qataris to enter Egypt, foreign ministry says</h5>
                <h6>Wikinews.org, Wednesday, July 19, 2017</h6>
                <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Visa_now_compulsory_for_Qataris_to_enter_Egypt,_foreign_ministry_says" target="blank"> https://en.wikinews.org/</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Citizens of Qatar travelling to Egypt will need a visa before travelling, with the exception of
              
              <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_c"/> .
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1" ng-click="txtcaptura_c = 'students.' ">students.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2" ng-click="txtcaptura_c = 'general tourists.' ">general tourists.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="txtcaptura_c = 'tourists to the pyramids.' "/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">tourists to the pyramids.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence. <br/> <br/>
              The change is due to  
              <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_a"/> .
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4" ng-click="txtcaptura_a = 'too many Qataris in Egypt.' ">too many Qataris in Egypt.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5" ng-click="txtcaptura_a = 'Qatar is cause too much mischief when are in Egypt tourist locations.' ">Qatar is cause too much mischief when are in Egypt tourist locations.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_a = 'the Egyptians believe Qatari Government support extremist.' ">the Egyptians believe Qatari Government support extremist.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence. <br/> <br/>
              Al Jazeera is located in the city of  
              <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_b"/> .
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_b = 'Qatar.' ">Qatar.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8" ng-click="txtcaptura_b = 'Doha.' ">Doha.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_9" ng-click="txtcaptura_b = 'Turkey.' ">Turkey.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.  <br/> <br/>
              The spouse of Egyptians need a visa to enter the country.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Qatar is in conflict with its neighbors but has the support of...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Egypt.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Saudi Arabia.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Turkey.</label>
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