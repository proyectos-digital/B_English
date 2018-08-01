
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt30 row-flex align-items-center">
        <div class="col xs12 md6 ta-c">
          <audio controls="controls">
            <source src="unit_1/module_2/assets/audios/test_2_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col xs12 md6 ta-c">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <h6>Sesame Street to promote healthy lifestyles</h6>
              <p><a href="https://en.wikinews.org/wiki/Sesame_Street_to_promote_healthy_lifestyles" target="blank">https://en.wikinews.org/wiki/</a></p>
            </div>
          </div>
        </div>
      </div>
      <h5>Answer the following questions based on the audio recording.</h5>
      <div class="row row-flex mt30">
        <div class="col xs12 md4">
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> What are the characters mentioned?
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_1">Cookie Monster.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_2">Talking eggplant.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_3">Talking Carrot.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="4"/>
                <label class="c-Checkbox row ta-l " for="selInput_4">Hoot the owl.</label>
              </div>
            </p>
          </div>
          <div class="row col-center mt10-md">
            <p><strong class="u-textColor_4">•</strong> The health moment will be...
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_5" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_5">At the beginning of the show.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_6">In the middle of the show.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_7">At the end of the show.</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col xs12 md4">
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> One of the goals of PBS is to...
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_8">Help children to get a diet.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_9">Teach children how to be vegetarian.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_10">Children to eat healthy.</label>
              </div>
            </p>
          </div>
          <div class="row col-center mt35-md">
            <p><strong class="u-textColor_4">•</strong> Producer of the show is trying introduce the word diet?
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_11">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_12">False.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_13">Information not given.</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col xs12 md4">
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> They will…
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_14" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_14">Focus on health once per week on Mondays.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_15" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_15">Focus on health every one of every two days.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_16" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_16">Focus on health everyday.</label>
              </div>
            </p>
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