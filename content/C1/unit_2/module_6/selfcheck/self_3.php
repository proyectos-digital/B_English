
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c"> Listen to the following audio:</h5>
        </div>
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md5 row-flex align-items-center">
            <audio class="col-center" controls="controls">
              <source src="unit_2/module_6/assets/audios/self_3_1.mp3" type="audio/mpeg"/>
            </audio>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>5 Old-Fashioned Ways to Predict the Weather</h5>
                <h6>Lydia Cain posted Apr 17, 2017</h6>
                <p>Read the full story here: <a href="http://www.yesmagazine.org/issues/science/5-old-fashioned-ways-to-predict-the-weather-20170417" target="blank">http://www.yesmagazine.org/</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Open pine cones can let you know...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">The weather will be rainy.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_15" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_15">If the weather will be fine.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Winds coming from the East are...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">Counter-clockwise.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">A tell-tale sign of cold days to come.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">Always an unsure sign of bad weather to come.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Both tulips and dandelions...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">Are able to pollinate themselves in wet weather.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">Are able to store nectar in wet weather.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">Are able to let us know if the weather will be windy in the Eastern regions.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.  <br/> <br/>
              Will it start to snow the next morning if there was a clear moon the night before?
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> The smoke from chimneys will...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Rise if there’s a storm coming.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Fall closer to the ground if there are wet air particles.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Make air particles moist.</label>
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