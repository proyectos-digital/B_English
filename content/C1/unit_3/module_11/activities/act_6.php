
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
              <source src="unit_3/module_11/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
            </audio>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>One solution to make women scientists more visible</h5>
              <h6><i>Put them on posters.</i></h6>
              <p class="ta-c">Jennifer Luxton posted Apr 20, 2017</p>
              <p>Read the full story here: <a href="http://www.yesmagazine.org/people-power/one-solution-to-make-women-scientists-more-visible-20170420" target="blank"> www.yesmagazine.org</a></p>
            </div>
          </div>
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The March for Science aims to...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">Bring greater awareness to the field of science.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">Encourage greater interest by females in science.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">Highlight some of the essential contributions to science.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.</p>
              <p>Areas such as Neuroscience suffer from insufficient tools and experts to transmit knowledge.</p>
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
              <p><strong class="u-textColor_4">•</strong>  Amanda Phingbodhipakkiya is...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">A graphic designer who became a neuroscientist.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">Trying to promote interest in science through the use of illustrated posters.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">A well-known female researcher.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.<br/><br/> In 2003, 29% of female graduates made up the science and technology workforce.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_9">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">False.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Marie Curie...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">Won a Nobel Prize at the age of 32.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">Didn’t graduate from grade-school but made significant contributions to the field of science.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_13">Made numerous contributions to the field of science.</label>
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