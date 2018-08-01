
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex align-items-center justify-between"></div>
        </div>
        <div class="row-flex justify-between">
          <div class="col xs12 md5">
            <div class="row-flex justify-center">
              <audio class="mt30" controls="controls">
                <source src="unit_3/module_10/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
              </audio>
            </div>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>International exhibit of chair art starts in Canada</h5>
                <h6>Monday, November 21, 2005</h6>
                <p>Read the full story here: <a href="https://en.wikinews.org/wiki/International_exhibit_of_chair_art_starts_in_Canada" target="blank">https://en.wikinews.org/</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> SAT’s display of artwork...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">makes use of mundane objects.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">highlights one particular object.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">includes abstract collages.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              Between seven to ten countries are going to have exhibitions at the Visual Arts Brampton show.
              
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
              The theme for SAT’s exhibit 
              <input class="c-input" type="text" readonly="readonly"/>
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">was the exact same theme used at a previous art show.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">was suggested by art curator Nicholas Moreau.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">had a likeness to a previous art show.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              The Snail Mail World Postcard Art Show has been held since 2001.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">False.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Visual Arts Brampton 
              <input class="c-input" type="text" readonly="readonly"/>
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">created a third display space for kids.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">hosts artworks by professional artists.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">will have a space dedicated to mail art.</label>
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