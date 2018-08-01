
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex justify-between align-items-center">
        <div class="col xs12 md10 col-center">
          <h5>Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex justify-center align-items-center">
            <audio controls="controls">
              <source src="unit_1/module_3/assets/audios/act_6_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
          <div class="col xs12 md7 col-center">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>Major Colombian newspaper reveals Bogotá mayor does not hold claimed Ph.D. degree</h5>
                <h6>Wikinews.org, Tuesday, April 12, 2016</h6>
                <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Major_Colombian_newspaper_reveals_Bogot%C3%A1_mayor_does_not_hold_claimed_PhD_degree" target="blank"> https://en.wikinews.org/</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt30">
        <h5>Now choose the best answer. Answer the following questions based on the audio recording.</h5>
      </div>
      <div class="row row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <div class="row">
            <p>Enrique Peñalosa said...</p>
          </div>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_1">The library at the University of Paris holds his doctoral thesis.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_2">He holds a Ph.D. in economics and history.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_3">He holds Diploma in advanced studies.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>  ...Claimed that Enrique Peñalosa lied about his studies.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4">Enrique Penalosa</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">Newspapers</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">Reporters</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <h6>Complete the sentence.</h6>
            <p><strong class="u-textColor_4">•</strong> Enrique Peñalosa is the 
              <input class="c-input js-escribir" type="text"/> of Bogota.
            </p>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <h6>Choose true or false.</h6>
            <p><strong class="u-textColor_4">•</strong> Enriques Peñalosa did his graduate study at the University of Paris.</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">False.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> According to the report, Enrique Peñalosa blamed in the misinformation on:</h6>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_10"> The newspaper.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">The reporters.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">Campaign's staff.</label>
              <input class="js-select" type="hidden"/>
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