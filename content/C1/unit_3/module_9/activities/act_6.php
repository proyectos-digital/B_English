
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <h5>Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex justify-center">
            <audio class="mt30" controls="controls">
              <source src="unit_3/module_9/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
            </audio>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>Andrea Muizelaar on fashion, anorexia, and life after 'Top Model'</h5>
              <h6>Monday, November 26, 2007</h6>
              <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Andrea_Muizelaar_on_fashion,_anorexia,_and_life_after_%27Top_Model%27" target="blank"> en.wikinews.org</a></p>
            </div>
          </div>
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> According to Andrea 
                <input class="c-input js-escribir row w80 mt10" type="text" ng-model="txtcaptura_a"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1" ng-click="txtcaptura_a = 'she was bullied for looking geeky.'">she was bullied for looking geeky.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2" ng-click="txtcaptura_a = 'she wanted to work in media.'">she wanted to work in media.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3" ng-click="txtcaptura_a = 'she developed bad eating habits as a child.'">she developed bad eating habits as a child.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.</p>
              <p> Andrea used modelling to help cure her anorexic disorder.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">False.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>  Complete the sentence.</p>
              <p>Thin girls are the norm in the modelling world because 
                <input class="c-input js-escribir row w80 mt10" type="text" ng-model="txtcaptura_b"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_b = 'they were victims of bullying.'">they were victims of bullying.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_b = 'girls with a bigger body size won’t be successful.'">girls with a bigger body size won’t be successful.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_8" ng-click="txtcaptura_b = 'being slender is considered to be the image of perfection.'">being slender is considered to be the image of perfection.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> What is Andrea’s opinion of the image of thin models?</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_9">It can psychologically affect the public.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">It promotes diversity.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">It negatively impacts young girls.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Andrea considers that Tyra Banks 
                <input class="c-input js-escribir row w80 mt10" type="text" ng-model="txtcaptura_c"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_12" ng-click="txtcaptura_c = 'gained success in modelling as a result of her slim figure.'">gained success in modelling as a result of her slim figure.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_13" ng-click="txtcaptura_c = 'used her platform to promote different body types.'">used her platform to promote different body types.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_14" ng-click="txtcaptura_c = 'is a role model to many young girls.'">is a role model to many young girls.</label>
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