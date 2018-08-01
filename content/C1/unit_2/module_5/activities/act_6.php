
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Listen to the news report and answer the questions that follow.</h5>
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <div class="row-flex justify-center mt40-xs">
            <audio controls="controls">
              <source src="unit_2/module_5/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
            </audio>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>Space tourist returns to Earth after 14-day trip</h5>
              <h6>Wikinews.org, Saturday, April 21, 2007</h6>
              <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Space_tourist_returns_to_Earth_after_14_day_trip" target="blank"> https://en.wikinews.org/</a></p>
            </div>
          </div>
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The international space station...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">Is place for rich tourist to visit.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">Is a place where only trained astronauts can visit.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">Is a place both astronauts and tourists can visit.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>  Complete the sentence.</p>
              <p>The landing sight 
                <input class="c-input ancho380" type="text" readonly="readonly" ng-model="txtcaptura_a"/> .
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4" ng-click="txtcaptura_a = 'is in Russia as it is managed by the Russian government.' ">is in Russia as it is managed by the Russian government.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5" ng-click="txtcaptura_a = 'needs to be in good condition to allow landing' ">needs to be in good condition to allow landing.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_a = 'cannot host the family and the landing team.' ">cannot host the family and the landing team.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Fill in the blank space with the appropriate person.</p>
              <p>
                <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_b"/> works in health care.
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_b = 'Anatoly Grigoryev.' ">Anatoly Grigoryev.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8" ng-click="txtcaptura_b = 'Charles Simonyi' ">Charles Simonyi</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_9" ng-click="txtcaptura_b = 'Michael Lopez-Alegria.' ">Michael Lopez-Alegria.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.</p>
              <p>All three men were on the space station for only 14 days.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">True</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">False</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The longer you spend in space...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">The more you have to pay.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_13">The more difficult it is when you return to earth.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_14">The bigger your reception when you land.</label>
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