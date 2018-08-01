
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Answer the following questions based on the audio recording.</h5>
      <div class="row mt30 row-flex align-items-center">
        <div class="col xs12 md5 m-a">
          <audio class="mb20 mt30" controls="controls">
            <source src="unit_1/module_3/assets/audios/test_2.mp3" type="audio/mpeg"/>
          </audio>
          <div class="c-cardGreen ta-c">
            <div class="c-cardGreenContent">
              <h6>India subsidizes girls’ education to offset gender imbalance</h6>
              <p class="ta-c">Wikinews.org, Friday, September 23, 2005</p>
              <h6><a href="https://en.wikinews.org/wiki/India_subsidizes_girls%27_education_to_offset_gender_imbalance" target="blank">https://en.wikinews.org/wiki/</a></h6>
            </div>
          </div>
          <div class="row col-center mt30">
            <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
            <p>It is illegal for a doctor to tell parents the sex of their child.</p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="1"/>
              <label class="c-Checkbox xs5 " for="selInput_8">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="2"/>
              <label class="c-Checkbox xs5 " for="selInput_9">False.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 m-a">
          <div class="row col-center mt30">
            <h6><strong class="u-textColor_4">•</strong> The reason for free education for girls is 
              <input class="c-input min-w230" type="text" disabled="disabled" ng-model="txtcaptura_a"/>.
            </h6>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox xs12 sm3 md12 " for="selInput_1" ng-click="txtcaptura_a = 'to promote equality'">to promote equality.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox xs12 sm3 md12 " for="selInput_2" ng-click="txtcaptura_a = 'to reduce the number of childbirth'">to reduce the number of childbirth.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox xs12 sm3 md12 " for="selInput_3" ng-click="txtcaptura_a = 'to promote education'">to promote education.</label>
            </div>
          </div>
          <div class="row col-center mt30">
            <h6><strong class="u-textColor_4">•</strong> Complete the sentence.</h6>
            <p>Parents with two girls will receive the same government subsidy 
              <input class="c-input min-w230 w95" type="text" disabled="disabled" ng-model="txtcaptura_b"/>.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_5" ng-click="txtcaptura_b = 'the subsidies given to girls depend on wheather or not they have other siblings'">the subsidies given to girls depend on wheather or not they have other siblings.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_b = 'as boys'">as boys.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_7" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_b = 'three girls'">three girls.</label>
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