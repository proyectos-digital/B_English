
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c"> Listen to the following story about the sun and answer the questions that follow.</h5>
        </div>
        <div class="row">
          <div class="col xs12 md6">
            <div class="xs12 md11 col-center">
              <div class="row-flex justify-center mt30">
                <audio controls="controls">
                  <source src="unit_3/module_11/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
                </audio>
              </div>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h5>Sun’s mood swings not so strange after all, say scientists</h5>
                  <h6>Monday, July 17, 2017</h6>
                  <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Sun%27s_mood_swings_not_so_strange_after_all,_say_scientists" target="blank">https://en.wikinews.org/</a></p>
                </div>
              </div>
              <div class="row mt30">
                <h6 class="ta-j"><strong class="u-textColor_4">•</strong> According to Antoine Strugarek,</h6>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_1">the sun has the shape of an odd-shaped ball.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_2">the sun is far from different to other solar stars.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_3">the sun is a cosmic odd-ball.</label>
                </div>
              </div>
              <div class="row mt30">
                <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
                <p class="ta-j">There isn’t any relation between sunspots and solar volcanoes.</p>
                <div class="u-responsive_check">
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
              <div class="row">
                <h6><strong class="u-textColor_4">•</strong> Complete the sentence..</h6>
                <p class="ta-l">Satellites and power grids can be affected if 
                  <input class="c-input row" type="text" readonly="readonly" ng-model="txtcaptura_a"/>
                </p>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_6" ng-click="txtcaptura_a = 'the Earth’s magnetic field is struck.' ">the Earth’s magnetic field is struck.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_7" ng-click="txtcaptura_a = 'the sunspots erupt.' ">the sunspots erupt.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_8" ng-click="txtcaptura_a = 'charged particles are released resulting from plasma eruptions.' ">charged particles are released resulting from plasma eruptions.</label>
                </div>
              </div>
              <div class="row mt30">
                <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
                <p class="ta-j">There is an increased intensity of the magnetic fields when the sun experiences very little activity.</p>
                <div class="u-responsive_check">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_9">True.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_10">False.</label>
                </div>
              </div>
              <div class="row mt30">
                <h6><strong class="u-textColor_4">•</strong> Choose the correct answer.</h6>
                <p class="ta-j">A star’s Rossby number is important in determining...</p>
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_11">Its luminosity and rotation.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="2"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_12">Its plasma flow.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
                  <label class="c-Checkbox w100 ta-l " for="selInput_13">The intensity of its activity.</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>