
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Listen to the news report and answer the questions that follow.</h5>
      <div class="row-flex align-items-center jusify-between">
        <div class="col xs12 md5 row-flex align-items-center">
          <audio class="col-center" controls="controls">
            <source src="unit_1/module_4/assets/audios/act_6_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col xs12 md6 offset-md1">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>Ontario, Canada Celebrates Family Day</h5>
              <h6>Wikinews.org, Monday, February 18, 2008</h6>
              <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Ontario,_Canada_celebrates_Family_Day " target="blank"> https://en.wikinews.org/</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The government of Ontario...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">was elected two terms in a row.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">is new to government.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">introduced a statutory holiday for federal workers.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>  Complete the sentence.</p>
              <p>Not all workers will enjoy this holiday...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4">only Federal workers.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">only tourism workers.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">only 60% of workers.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Answer true or false.</p>
              <p>Everyone is in agreement with the new holiday.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">False.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Fill in the blank space with appropriate answer or option.</p>
              <p>Under the new Family Day holiday law, 
                <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_a"/> must observe the holiday.
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" ng-click="txtcaptura_a = 'tourism workers and Federal employees' " value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">tourism workers and Federal employees</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" ng-click="txtcaptura_a = 'city employees and tourism workers' " value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">city employees and tourism workers</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" ng-click="txtcaptura_a = 'federal Employees' " value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">federal Employees</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Family day is observed on a different day in...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_13">Alberta and Saskatchewan.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_14">Manitoba's and South Africa.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_15">South Africa and Australia.</label>
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