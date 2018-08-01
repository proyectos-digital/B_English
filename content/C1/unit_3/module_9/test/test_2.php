
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex justify-between">
          <div class="col xs12 md5">
            <div class="row-flex justify-center mt30">
              <audio controls="controls">
                <source src="unit_3/module_9/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
              </audio>
            </div>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>Finnish department store Stockmann bids for fashion chain Lindex</h5>
                <h6>Monday, October 1, 2007</h6>
                <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Finnish_department_store_Stockmann_bids_for_fashion_chain_Lindex" target="blank">https://en.wikinews.org/</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Lindex’s desire is to...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">Open 350 stores in Sweden.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">Have recognition as a fashion chain in Europe.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">Be more present in Eastern and Central European countries.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              Lindex AB is located in Helsinki.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence..  <br/> <br/>
              KappAhl withdrew its offer because...
              
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">A rival chain had a better offer.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">There was a decrease in Stockmann’s Kroner.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">They didn’t believe Stockmann had sufficient experience in business.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              7.9 billion kronor is equivalent to 763 million euros.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Stockman has success in several European countries due to its...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Knowledge of the fashion industry.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Location in Helsinki.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Its rivals not having a lot of experience.</label>
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