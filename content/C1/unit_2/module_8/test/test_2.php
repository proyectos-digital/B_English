
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the following report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex justify-between">
          <div class="col xs12 md5 row align-items-center">
            <audio class="mt30 col-center" controls="controls">
              <source src="unit_2/module_8/assets/audios/test_2_1.mp3"/>
            </audio>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>Climate Change Film Tells Us “How to Let Go of the World</h5>
                <p class="ta-c">
                  <In>his new documentary, Josh Fox says we can use love to push aside the fear and hopelessness that comes with climate change</In>.
                </p>
                <p>Yessenia Funes posted Jun 03, 2016</p>
                <p>Read the full story here: <a href="http://www.yesmagazine.org/planet/climate-change-film-tells-us-how-to-let-go-of-the-world-20160603" target="blank">www.yesmagazine.org</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> What was the original subject of Josh Fox’s film?</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">The environmental damage caused by using coal as a source of energy.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">Human rights and repression faced by in China.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">How film producers and foreigners in general are treated in China.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              Josh Fox visited seven continents.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence. <br/> <br/>
              In China...
              
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">Facebook is not available and information on Google is controlled by the government.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">Facebook and Google are not available in China.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">Information on Facebook is controlled by the government and Google is not available.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Fox and Funes met to talk about his film in... <br/> <br/>
              
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">Hong Kong.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">China.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">Seattle.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Fox believes that at this point...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Political changes are not enough to save the environment at this point in time.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Individual actions in the home are not enough to save the environment.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Only individuals can change help the climate by using solar panels.</label>
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