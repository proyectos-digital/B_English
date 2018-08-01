
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5> Listen to this presentation about what Petroleum Engineers require.</h5>
      <div class="row mt30">
        <div class="col xs12 md7 col-center">
          <audio class="xs12" controls="controls">
            <source src="unit_1/module_1/assets/audios/self_4_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
          <div class="row">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <h5>What is a Petroleum Engineer?</h5>
                <blockquote>
                  <p>EDA, Incorporated, Petroleum Engineering</p>
                  <p><a href="http://edasolutions.com/old/Groups/PetroleumEngineering.htm" target="_blank" style="word-break:break-all;">http://edasolutions.com/old/Groups/PetroleumEngineering.htm</a></p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-flex mt30">
        <div class="col xs12 md6">
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> Which is NOT mentioned as a requirement for Petroleum Engineers?
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_1">Patience.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_2">Sound judgment.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_3">Good physical condition.</label>
              </div>
            </p>
          </div>
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> The speaker mentions that oil drilling is somewhere between a science and an art. He mentions this because:
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_4">you have to accept failure.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_5">this is an exact science.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_6">there is no space for speculation.</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> A PE must enjoy:
              <div class="row mt30-md mt0-hd">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_7">working in an office.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_8">getting dirty in the field.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_9">working with different people.</label>
              </div>
            </p>
          </div>
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> According to the speaker, for a PE to work in an office, you have to have:
              <div class="row mt15-md mt30-hd">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_10">further studies in the area, including a Ph.D.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_11">experience using different exploration methods in the fields</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_12">many years of experience to be considered a veteran.</label>
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