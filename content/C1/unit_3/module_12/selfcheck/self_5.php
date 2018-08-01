
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md5 row-flex">
            <audio class="mt30 col-center" controls="controls">
              <source src="unit_3/module_12/assets/audios/self_5_1.mp3" type="audio/mpeg"/>
            </audio>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>Alison Smith: Elections Money Can’t Buy</h5>
                <p>The YES! Breakthrough 15: How a quiet, stay-at-home mom became a clean-elections champion</p>
                <p>Read the full story here: <a href="http://www.yesmagazine.org/issues/the-yes-breakthrough-15/alison-smith-elections-money-cant-buy" target="blank">www.yesmagazine.org</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer.</p>
            <p>Allison Smith took part in the town meeting because: </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">She wanted to become more aware of the issues affecting her town.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">She wanted to speak out against some of the illegal activities taking place. </label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">She wanted to speak out against violations to the wetland area.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/> The politics in Maine changed due to the efforts by activists to maintain a separation between money and politics.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence.<br/> <br/>
              The League of Women Voters...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">Sponsors election candidates.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">Help credible candidates hold a competitive election campaign.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">Forces the reform of election practices.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.  <br/> <br/>
              The Clean Election initiative was passed with 80 percent of the votes in 2010.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer. <br/> <br/> With the pressures of fundraising...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">There will be less debt owed by candidates to the League.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Election campaigns won’t be as competitive.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Election candidates will have less contact with possible voters.</label>
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