
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_5" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <article class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <h5 class="ta-c">Look at the following pictures choose the verbs that describes the process of preparing them.</h5>
        <div class="row row-flex justify-center aling-items-center mt30">
          <div class="col xs12 sm5 ta-c"><img class="u-responsive-img mt30" src="unit_1/module_2/assets/images/col_5_1.png" alt="myColombia"/></div>
          <div class="col xs12 sm3 row-flex justify-center align-content-center">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox" for="selInput_1">Fry</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_2" value="2"/>
            <label class="c-Checkbox" for="selInput_2">Knead</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox" for="selInput_3">Boil</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="4"/>
            <label class="c-Checkbox" for="selInput_4">Steam</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="5"/>
            <label class="c-Checkbox" for="selInput_5">Chop</label>
          </div>
        </div>
      </article>
      <article class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h5>Look at the following pictures choose the verbs that describes the process of preparing them.</h5>
        <div class="row row-flex justify-center aling-items-center mt30">
          <div class="col xs12 sm5 ta-c"><img class="u-responsive-img mt30" src="unit_1/module_2/assets/images/col_5_2.png" alt="myColombia"/></div>
          <div class="col xs12 sm3 row-flex justify-center align-content-center">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
            <label class="c-Checkbox" for="selInput_6">Fry</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_7" value="2"/>
            <label class="c-Checkbox" for="selInput_7">Knead</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
            <label class="c-Checkbox" for="selInput_8">Boil</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="4"/>
            <label class="c-Checkbox" for="selInput_9">Steam</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="5"/>
            <label class="c-Checkbox" for="selInput_10">Chop</label>
          </div>
        </div>
      </article>
      <article class="row u-animationFadeDown" ng-show="s_actividad == 3">
        <h5>Look at the following pictures choose the verbs that describes the process of preparing them.</h5>
        <div class="row row-flex justify-center aling-items-center mt30">
          <div class="col xs12 sm5 ta-c"><img class="u-responsive-img mt30" src="unit_1/module_2/assets/images/col_5_3.png" alt="myColombia"/></div>
          <div class="col xs12 sm3 row-flex justify-center align-content-center">
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
            <label class="c-Checkbox" for="selInput_11">Fry</label>
            <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_12" value="2"/>
            <label class="c-Checkbox" for="selInput_12">Crush</label>
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
            <label class="c-Checkbox" for="selInput_13">Boil</label>
            <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_14" value="4"/>
            <label class="c-Checkbox" for="selInput_14">Steam</label>
            <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_15" value="5"/>
            <label class="c-Checkbox" for="selInput_15">Chop</label>
          </div>
        </div>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>