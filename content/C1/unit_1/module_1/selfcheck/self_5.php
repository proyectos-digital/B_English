
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="row col-center">
            <h5>Listen to the following audio and choose the correct phrase to ask for clarification of the word kerfuffle.</h5>
            <audio class="row mt10 mb20" controls="controls">
              <source src="unit_1/module_1/assets/audios/self_5_1.mp3" type="audio/mpeg"/> Your browser does not support the audio element.
            </audio>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">Sorry, I did not hear what you said. Can you repeat, please?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">Is kerfuffle a word?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">I am not sure what you meant by kerfuffle. Could you elaborate, please?</label>
            </div>
          </div>
          <div class="row mt30">
            <h5>You are listening to someone speak and a truck passes by and you did not hear what was said. How do you ask for clarification?</h5>
            <audio class="row mt10 mb20" controls="controls">
              <source src="unit_1/module_1/assets/audios/self_5_2.mp3" type="audio/mpeg"/> Your browser does not support the audio element.
            </audio>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4">I am sorry, I don’t understand what you mean.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">Could you possibly repeat that for me, please?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">What are you trying to say?</label>
            </div>
          </div>
          <div class="row col-center mt30">
            <h5> Someone is informing you about a change in the venue of a meeting. Which phrase would you use to clarify the new location of the meeting?</h5>
            <audio class="row mt10 mb20" controls="controls">
              <source src="unit_1/module_1/assets/audios/self_5_3.mp3" type="audio/mpeg"/> Your browser does not support the audio element.
            </audio>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">Could you repeat that for me, please? I don’t think I understood everything you said.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">What do you mean by same personnel? Could you possibly clarify that for me? Thank you.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">If I understood correctly the meeting is going to be in the conference room on the 7th floor. Is that correct?</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c mt30 showTo-md"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_5_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>