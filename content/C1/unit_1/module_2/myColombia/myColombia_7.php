
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <h5>Read the article then answer the question below.</h5>
        <div class="row">
          <div class="col xs12 md10 col-center">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <h5>Colombia soldier survives 23-day jungle ordeal on diet of tortoise and rap music</h5>
                <p class="ta-j">written by Stephen Gill March 31, 2016<br/><br/>
                  A Colombian soldier who was missing in the jungle for more than three weeks, found
                  his way back to civilization after surviving his ordeal by eating raw tortoise and singing
                  rap songs to himself, the Colombian army said.<br/>
                  Yefer Sanchez got separated from his unit on March 5 while on patrol in the dense
                  tropical forest of central Colombia’s Meta province.<br/>
                  The army said more than 500 troops combed the jungle and flew over the area
                  looking for the 26-year-old soldier, before a lone colleague stumbled upon him more
                  than three weeks after he went missing.<br/>
                  Sanchez, who was found in a very vulnerable state, told local media that he had no
                  food or water when he got lost.<br/>
                  “I was only carrying my equipment, my rifle, ammunition, helmet, some explosives…
                  a poncho, a machete, a canteen,” he said.<br/>
                  He cited his army training was one of the key reasons for his endurance indicating that
                  his survival skills were severely tested.<br/>
                  “Thanks to my army survival training, I learned that anything that monkeys eat, we
                  can eat too.”<br/>
                  He lived off seeds primarily and discovered that a red-footed tortoise is a culinary
                  “delight.”<br/>
                  “One of them crossed my path and I had to take advantage. I ate it raw. I was very
                  hungry by that point,” he said.<br/>
                  This jungle area in the Meta department is a hotbed for guerrilla activity and Sanchez
                  said he saw FARC rebels at one point while staggering through the thick vegetation,
                  but decided against surrendering to them.<br/>
                  “I barely slept. I was just clinging to my rifle, always on alert,” he said.
                  To keep his spirits up, he sang rap songs to himself, a habit he is known for among
                  his comrades, reported newspaper El Tiempo.<br/>
                  When he crossed paths with the soldier who found him, both initially pointed their
                  rifles at each other, before the rescuer’s “very professional” handling of the situation
                  defused the tension, he said.<br/>
                  Sanchez, who is being treated for dehydration and fatigue at a military base, said
                  that he will continue his role within the army despite the ordeal.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row row-flex align-items-center">
          <div class="col xs12 md10 col-center">
            <div class="row mt20">
              <p><strong>The soldier was found by.</strong></p>
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox w100" for="selInput_1">A tortoise.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox w100" for="selInput_2">The Army found him.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox w100" for="selInput_3">He found his way back to civilization.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong>He was marching with...</strong></p>
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox w100" for="selInput_4">500 hundred soldiers.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox w100" for="selInput_5">His unit.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox w100" for="selInput_6">a 26 year old soldier.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong>Sanchez did not sleep well because...</strong></p>
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox w100" for="selInput_7">Of all the mosquitoes and animals in the jungle.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox w100" for="selInput_8">He had no tent, it was cold outside and he was hungry.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                <label class="c-Checkbox w100" for="selInput_9">He was worried about the enemy finding him.</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong>The line “more than 500 troops combed the jungle” means.</strong></p>
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                <label class="c-Checkbox w100" for="selInput_10">Over 500 soldiers searched the jungle.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                <label class="c-Checkbox w100" for="selInput_11">Over 500 soldiers were in the Jungle.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                <label class="c-Checkbox w100" for="selInput_12">Over 500 soldiers were marching in the jungle,</label>
              </div>
            </div>
            <div class="row mt20">
              <p><strong>The phrase “ Meta department is a hotbed for guerrilla activity” means.</strong></p>
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
                <label class="c-Checkbox w100" for="selInput_13">The guerillas sleep there  at nights.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
                <label class="c-Checkbox w100" for="selInput_14">Its home to the guerillas.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
                <label class="c-Checkbox w100" for="selInput_15">The guerrillas are very active in that area.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
