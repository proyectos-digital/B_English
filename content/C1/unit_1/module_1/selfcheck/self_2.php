
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <h5> Read the following excerpt and choose the correct answers.</h5>
      </div>
      <div class="row ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_2_1.png" alt=""/></div>
    </section>
    <section class="template-content " ng-show="s_actividad == 2">
      <h5>Choose the correct answers.</h5>
      <div class="row-flex align-items-center mt20">
        <div class="col xs12 md4 ta-c mb30"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_2_2.png" alt=""/></div>
        <div class="col xs12 md8">
          <div class="row row-flex">
            <div class="row col-center">
              <p><strong class="u-textColor_4">•</strong> This text discusses...
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                  <label class="c-Checkbox row ta-l " for="selInput_1"> The quality of MBAs in national and international universities.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                  <label class="c-Checkbox row ta-l " for="selInput_2">Gender inequity between men and women.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                  <label class="c-Checkbox row ta-l " for="selInput_3">The reasons why a candidate was not selected for a promotion.</label>
                </div>
              </p>
            </div>
            <div class="row col-center">
              <p><strong class="u-textColor_4">•</strong> The person who writes this complaint is a woman...
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                  <label class="c-Checkbox row ta-l " for="selInput_4">Who works as a receptionist</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                  <label class="c-Checkbox row ta-l " for="selInput_5">With professional certifications.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                  <label class="c-Checkbox row ta-l " for="selInput_6">Who has no experience.</label>
                </div>
              </p>
            </div>
            <div class="row col-center">
              <p><strong class="u-textColor_4">•</strong> In order to make her argument stronger, the author...
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                  <label class="c-Checkbox row ta-l " for="selInput_7">Summarizes gender discriminations cases around the world.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                  <label class="c-Checkbox row ta-l " for="selInput_8">Talks only about her case.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                  <label class="c-Checkbox row ta-l " for="selInput_9">Mentions that if she doesn’t get the promotion, she will quit.</label>
                </div>
              </p>
            </div>
            <div class="row col-center">
              <p><strong class="u-textColor_4">•</strong> It can be inferred that this passage...
                <div class="row">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                  <label class="c-Checkbox row ta-l " for="selInput_10">Is part of a letter of complaint.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                  <label class="c-Checkbox row ta-l " for="selInput_11">Appeared in a newspaper or magazine.</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                  <label class="c-Checkbox row ta-l " for="selInput_12">Is criticizing the promotion system in a company.</label>
                </div>
              </p>
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
