
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Listen to the following report about New Zealand and how government introduces graphic warnings on cigarettes.</h5>
      <div class="row mt30 row-flex align-items-center">
        <div class="col xs12 md9 ta-c col-center">
          <audio class="mt30 row" controls="controls">
            <source src="unit_1/module_2/assets/audios/self_3_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
          <div class="row">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <h6>Set A health warnings - cigarette packs</h6>
                <p>Read the full story here:</p>
                <p><a href="http://www.health.gov.au/internet/main/publishing.nsf/content/tobacco-warn-A" target="blank" style="word-break:break-all;">http://www.health.gov.au/internet/main/publishing.nsf/content/tobacco-warn-A</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-flex mt30">
        <h5>Answer the following questions based on the audio recording.</h5>
        <div class="row mt30">
          <div class="col xs12 md6">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> The new pictures will…</h6>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_1">Replace all writing on the cigarette boxes as they are more graphic.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_2">Will replace the cigarette boxes.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_3">Will leave only 10% of the space on the back of the box.</label>
                <input class="js-select" type="hidden" ng-model="valorinputa"/>
              </div>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Complete the sentence.</h6>
              <p>
                <input class="c-input js-escribir" type="text"/> need to have the new boxes on their shelf 2008.
              </p>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Fill in the blank space with appropriate person.</h6>
              <p>According to 
                <input class="c-input" type="text" ng-model="completeOra" readonly="readonly"/> “Pictures were more effective than written warnings”.
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" ng-click="completeOra = 'the ex-prime minister' " value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_4">the ex-prime minister</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" ng-click="completeOra = 'a former smoker' " value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_5">a former smoker</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" ng-click="completeOra = 'the retailer' " value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_6">the retailer</label>
                <input class="js-select" type="hidden" ng-model="valorinputb"/>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Answer true or false</h6>
              <p>There are 14 warning pictures initially and 7 to come later.</p>
              <div class="row row-flex justify-around">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox xs12 sm5" for="selInput_7">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox xs12 sm5" for="selInput_8">False.</label>
                <input class="js-select" type="hidden" ng-model="valorinputc"/>
              </div>
            </div>
            <div class="row mt30">
              <h6><strong class="u-textColor_4">•</strong> When corrections need to be made to labeling the minister of health says…</h6>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_9">They will consult an all changes.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_10">They will assist with the payments.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_11">Companies need to pay for them themselves.</label>
                <input class="js-select" type="hidden" ng-model="valorinputd"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>