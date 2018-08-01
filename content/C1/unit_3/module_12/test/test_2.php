
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c"> Listen to the report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex justify-between">
          <div class="col xs12 md5 row-flex">
            <audio class="mt30 col-center" controls="controls">
              <source src="unit_3/module_12/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
            </audio>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>The facts are: in austerity politics don’t work.</h5>
                <p class="ta-c"><i>From England’s double-dip recession to Portugal’s spiking unemployment, there is now conclusive evidence of the complete failure of austerity</i></p>
                <h6>Sally Kohn posted Dec 03, 2013</h6>
                <p>Read the full story here: <a href="http://www.yesmagazine.org/issues/how-to-eat-like-our-lives-depend-on-it/austerity-politics-doesn-t-work" target="blank">www.yesmagazine.org</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence. <br/><br/> In a political era, it is considered that...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">Facts are as important as reason.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">Reason is overridden.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">Facts are neglected.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              The theory of austerity is becoming increasingly unpopular.
              
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
              The International Monetary Fund...
              
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">Insists on countries reducing their spending in order to qualify for a bailout.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">Aided Portugal’s economic development after its bailout.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">Organizes bailout programs alongside the EU.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              The United Kingdom lost its AAA rating due to its austerity measures.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> The aim of Carmen Reinhart and Kenneth Rogoff’s theory was to...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Get the U.S. government to cut its spending.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Show European countries how to properly manage their economy.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Argue that there is less economic growth when the nation’s public debt reaches 90% of GDP.</label>
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