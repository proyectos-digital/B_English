
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a"> 
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c"> 1. Listen to the news report and complete the activities.</h5>
          <div class="row-flex align-items-center justify-between">
            <div class="col xs12 md5 row-flex justify-center mt30">
              <audio controls="controls">
                <source src="unit_2/module_5/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
              </audio>
            </div>
            <div class="col xs12 md6">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h5>No Vacation Nation John de Graaf </h5>
                  <h6>posted Sep 04, 2009</h6>
                  <p>Read the full story here: <a href="http://www.yesmagazine.org/happiness/no-vacation-nation" target="blank"> http://www.yesmagazine.org</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row-flex justify-between">
          <div class="col xs12 md5">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Paid holiday is a legal right in...</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">The USA.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">Guyana.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">Europe.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence. <br/> <br/>
              Leading experts believe that 
              <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_a"/> .
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4" ng-click="txtcaptura_a = 'vacation does not affect your physical health.' ">vacation does not affect your physical health.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5" ng-click="txtcaptura_a = 'lack of vacation affects your physical and mental health.' ">lack of vacation affects your physical and mental health.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6" ng-click="txtcaptura_a = 'lack of vacation affects your mental health only.' ">lack of vacation affects your mental health only.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.  <br/> <br/>
              The recession has health benefits.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">False</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer. <br/> <br/>
              Alan Grayson is a...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">Politician.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">A university professor.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">A doctor.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Americans tend to...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Take long summer vacations.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Only 7 to 14 days of vacation.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Take more vacation than Europeans.</label>
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