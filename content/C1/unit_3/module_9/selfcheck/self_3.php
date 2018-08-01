
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md6">
            <div class="col xs12 md11 col-center">
              <div class="row-flex justify-center mt30">
                <audio controls="controls">
                  <source src="unit_3/module_9/assets/audios/self_3_1.mp3" type="audio/mpeg"/>
                </audio>
              </div>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h5>Andrea Muizelaar on fashion, anorexia, and life after ‘Top Model’</h5>
                  <h6>Monday, November 26, 2007</h6>
                  <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Andrea_Muizelaar_on_fashion,_anorexia,_and_life_after_%27Top_Model%27" target="blank">en.wikinews.org</a></p>
                </div>
              </div>
              <h6 class="ta-j mt30"><strong class="u-textColor_4">•</strong> Andrea decided to enter the televised modeling competition because...
                
              </h6>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_1">she wanted to change her life.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_2">her image would make her successful.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_3">she felt lonely and didn’t have a support unit.</label>
              </div>
              <h6 class="ta-j mt30"><strong class="u-textColor_4">•</strong> Andrea claimed her career was ruined because...
                
              </h6>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_12" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_12">her health was getting worse.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_13" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_13">the people in the industry were disrespectful.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_14" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_14">of things said against her by one of the judges on Top Model.</label>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col xs12 md11 col-center">
              <h6 class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence.</h6>
              <p>After winning Top Model...</p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_4" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_4">Andrea began to appear in many fashion magazines.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_5" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_5">Andrea had many issues with housing.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_6">Andrea and her parents lost contact.</label>
              </div>
              <h6 class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
              <p>Most Top Model winners turn out not achieving the modeling success they dreamed of.</p>
              <div class="row row-flex justify-around">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_7" value="1"/>
                <label class="c-Checkbox xs12 md5" for="selInput_7">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="2"/>
                <label class="c-Checkbox xs12 md5" for="selInput_8">False.</label>
              </div>
              <h6 class="ta-j mt30"><strong class="u-textColor_4">•</strong> With the Top Model contract, the winners...
                
              </h6>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_9" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_9">can leave Canada and find work in other countries.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_10" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_10">get $65,000 in addition to magazine spreads.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_11">must fulfill many contractual agreements.</label>
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