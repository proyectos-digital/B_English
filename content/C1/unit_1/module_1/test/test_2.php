
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Listen to Mike and Ron talk about an adventure in Kenya.</h5>
      <div class="row">
        <div class="col xs12 sm10 md8 col-center">
          <audio class="row mt30" controls="controls">
            <source src="unit_1/module_1/assets/audios/test_2_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
      </div>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="col xs11 col-center mt30">
            <div class="row-flex">
              <p> <strong class="u-textColor_4">•</strong>  From the dialog, you can infer that Mike generally 
                <input class="c-input js-escribir" type="text" ng-model="modelTextA"/> to get back to the Research Center Dorms.
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1" ng-click="modelTextA = 'drives a car.' ">drives a car</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2" ng-click="modelTextA = 'rides a bike.' ">rides a bike</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3" ng-click="modelTextA = 'goes on foot.' ">goes on foot</label>
            </div>
          </div>
          <div class="col xs11 col-center mt30">
            <div class="row-flex align-items-center">
              <p> <strong class="u-textColor_4">•</strong>  You can infer that Mike was working in Kenya as a:</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4"> Researcher.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">Driver.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">Bike trainer.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="col xs11 col-center mt30">
            <div class="row-flex">
              <p> <strong class="u-textColor_4">•</strong> From the story, it is clear that Mike’s main concern in that moment was:</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">Not to be seen by the rhino.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">Not to find a rhino.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">Not to be smelled by the rhino.</label>
            </div>
          </div>
          <div class="col xs11 col-center mt30">
            <div class="row-flex">
              <p> <strong class="u-textColor_4">•</strong> It was possible to escape without being hurt due to:</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_10">The speed of the wind.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">The direction of the wind.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12">The distance Mike had to run.</label>
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