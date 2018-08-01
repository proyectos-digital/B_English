
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">   
        <div class="col xs12 md6">
          <p>Sometimes when asking for clarity it is necessary to repeat what you have heard in your own words in order to make sure that you understand completely what has been said.</p>
          <div class="row-flex align-items-center justify-around mt30">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_4/assets/audios/act_9_1.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_4/assets/audios/act_9_2.mp3"></button>
          </div>
          <p class="mt30">When someone has misspoken, or is wrong about something, you may not want to point it out directly as that can sometimes be considered rude. Instead try to repeat the statement but this time use correct information. </p>
          <div class="row-flex align-items-center justify-around mt30">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_4/assets/audios/act_9_3.mp3"></button>
          </div>
        </div>
        <div class="col xs12 md6">
          <h6>Now practice clarifying and correcting when speaking with friends in English.</h6>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Do you know that Botero is one of the most famous painters in the world? He is from Colombia, Medellin to be exact.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">What are you talking about?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">So, Botero is a famous Colombian artist from Medellin?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">Medellin is in Colombia?</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The Flower Festival is held in Bogota every year.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">Did you mean the flower Festival is held in Medellin every year?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">What is held where?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">You are so wrong?</label>
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