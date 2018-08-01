
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
            <div class="xs12 md11 col-center">
              <div class="row-flex justify-center mt30">
                <audio class="mt30" controls="controls">
                  <source src="unit_3/module_11/assets/audios/self_3_1.mp3" type="audio/mpeg"/>
                </audio>
              </div>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h5>Netflix and Bill Nye are saving science—30 minutes at a time</h5>
                  <p class="ta-c"><i>With Netflix’s ascendancy and the way it’s changing viewing habits, “Bill Nye Saves the World” may be a huge opportunity for science education.</i></p>
                  <p class="ta-c">Mark Rahner posted May 08, 2017</p>
                  <p>Read the full story here: <a href="http://www.yesmagazine.org/planet/netflix-and-bill-nye-are-saving-science-30-minutes-at-a-time-20170508" target="blank">www.yesmagazine.org</a></p>
                </div>
              </div>
              <div class="row mt30">
                <h6 class="ta-j"><strong class="u-textColor_4">•</strong> The People’s Climate March...</h6>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_1">is a new Netflix series.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_2">was a response to the new American government’s stance on science.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_3">is described as paranormal.</label>
                </div>
              </div>
              <div class="row mt30">
                <h6><strong class="ta-j u-textColor_4">•</strong> Choose true or false.</h6>
                <p>The Environmental Protection Agency (EPA) will no longer exist.</p>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="xs12 md11 col-center">
              <h6><strong class="u-textColor_4">•</strong> Complete the sentence.</h6>
              <p class="ta-j">With a now theocratic Republican Party,</p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_6">less concern is given to environmental protection.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_7">the Department of Interior will become responsible for the Board of Scientific Counselors.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_8">Andrea and her parents lost contact.</label>
              </div>
              <div class="row mt30">
                <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
                <p class="ta-j">Under the new administration, came the suspension of over 200 research advisory panels.</p>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_9">True.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_10">False.</label>
                </div>
              </div>
              <div class="row mt30">
                <h6 class="ta-j"><strong class="u-textColor_4">•</strong> Complete the sentence.</h6>
                <p>The news media and the scientific community  
                  <input class="c-input row" type="text" readonly="readonly" ng-model="txtcaptura_a"/>
                </p>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_11" ng-click="txtcaptura_a = 'are both influential when it comes to certain issues.'">are both influential when it comes to certain issues.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_12" ng-click="txtcaptura_a = 'consider climate change and evolution serious issues to be discussed.'">consider climate change and evolution serious issues to be discussed.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_13" ng-click="txtcaptura_a = 'have opposite views concerning climate change.'">have opposite views concerning climate change.</label>
                </div>
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