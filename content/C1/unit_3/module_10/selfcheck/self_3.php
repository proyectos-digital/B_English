
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex align-items-center justify-between"></div>
        </div>
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md5">
            <div class="row-flex justify-center">
              <audio class="mt30" controls="controls">
                <source src="unit_3/module_10/assets/audios/self_3_1.mp3" type="audio/mpeg"/>
              </audio>
            </div>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>Five arrested in Italian art smuggling</h5>
                <h6>Saturday, October 8, 2005</h6>
                <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Five_arrested_in_Italian_art_smuggling" target="blank">en.wikinews.org</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/> ‘Mozart’ worked as a curator in Rome
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">False.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence.<br/> <br/>
              For the crime committed 
              <input class="c-input" type="text" readonly="readonly"/>
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_3" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">‘mozart’ will be prosecuted in Austria.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">each criminal must pay seven hundred euros.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">Over 28 people were arrested.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.  <br/> <br/>
              The smuggled artifacts are said to go back to the 8th century BCE.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Italian authorities 
              <input class="c-input" type="text" readonly="readonly"/>
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">believe the artifacts are going to be on display in Italy.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">suspect artifacts were stolen from a museum in Rome.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">are certain that all the artifacts were ceramic.</label>
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