
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex justify-between align-items-center">   
        <div class="col xs12 md6">
          <div class="row">
            <p>To express wishes regarding the past, whether for ourselves or someone else, the past perfect tense is used.</p>
            <p class="mb20 mt20"><strong>I wish + subject + past perfect</strong></p>
            <p class="ml20"><strong class="u-textColor_4">• </strong> <strong>Eg1: I wish I hadn’t eaten</strong> all that spicy food. Now I have a terrible stomachache. </p>
            <p class="ml20"><strong class="u-textColor_4">•</strong> <strong>I wish Sebastian had listened </strong> to me when I told him not to quit his job.</p>
          </div>
          <div class="row">
            <h5 class="mb20">Based on the following situations, create sentences expressing wishes for the past.</h5>
            <p class="ml20"><strong class="u-textColor_2">Example:</strong> <strong> Carl took my bicycle to the park and the front wheel got punctured. </strong> </p>
            <p class="ta-c"><strong><strong class="u-textColor_4">•</strong> I wish Carl hadn’t taken my bicycle to the park.</strong></p>
          </div>
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> I didn’t take the medication prescribed by the doctor. Now, I’m in so much pain.</p>
            <p>I wish I 
              <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/> the medication prescribed by the doctor.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_1" ng-click="txtcaptura_a = 'had taken.'">had taken</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_2" ng-click="txtcaptura_a = 'have taken.'">have taken</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_3" ng-click="txtcaptura_a = 'had take.'">had take</label>
                <input class="js-select" type="hidden"/>
              </div>
            </p>
          </div>
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> I fell in love with Ronald and he ended up breaking my heart.</p>
            <p>I wish I 
              <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/> in love with Ronald.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_4" ng-click="txtcaptura_b = 'haven’t fall.'">haven’t fall</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_5" ng-click="txtcaptura_b = 'hadn’t fallen.'">hadn’t fallen</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_b = 'hadn’t fall.'">hadn’t fall</label>
                <input class="js-select" type="hidden"/>
              </div>
            </p>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> I ate a lot of sweets when I was younger which caused me to be diagnosed with diabetes. </p>
            <p>I wish I 
              <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/>  a lot of sweets when I was younger.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_c = 'hadn’t eat.'">hadn’t eat</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_8" ng-click="txtcaptura_c = 'haven’t eat.'">haven’t eat</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_9" ng-click="txtcaptura_c = 'hadn’t eaten.'">hadn’t eaten</label>
                <input class="js-select" type="hidden"/>
              </div>
            </p>
          </div>
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> Margaret didn’t pay the rent on time. Now the landlord is absolutely upset. </p>
            <p>I wish Margaret 
              <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/> the rent on time.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_10" ng-click="txtcaptura_d = 'had pay.'">had pay</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_11" ng-click="txtcaptura_d = 'had paid.'">had paid</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_12" ng-click="txtcaptura_d = 'have pay'">have pay</label>
                <input class="js-select" type="hidden"/>
              </div>
            </p>
          </div>
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> I told the students they could use their cellphones in class. It was a big mistake! </p>
            <p>I wish I 
              <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/>  the students to use their cellphones in class.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_13" ng-click="txtcaptura_e = 'had tell.'">had tell</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_14" ng-click="txtcaptura_e = 'have tell.'">have tell</label>
                <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_15" ng-click="txtcaptura_e = 'hadn’t told.'">hadn’t told</label>
                <input class="js-select" type="hidden"/>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <h5>Here are the same examples from the previous exercise. Rewrite using wish and the past participle. </h5>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> I didn’t take the medication prescribed by the doctor. Now, I’m in so much pain.</p>
            <input class="row c-input js-escribir" type="text" placeholder="Text here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> I fell in love with Ronald and he ended up breaking my heart.</p>
            <input class="row c-input js-escribir" type="text" placeholder="Text here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> I ate a lot of sweets when I was younger which caused me to be diagnosed with diabetes.</p>
            <input class="row c-input js-escribir" type="text" placeholder="Text here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> Margaret didn’t pay the rent on time. Now the landlord is absolutely upset.</p>
            <input class="row c-input js-escribir" type="text" placeholder="Text here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> I told the students they could use their cellphones in class. It was a big mistake!</p>
            <input class="row c-input js-escribir" type="text" placeholder="Text here..."/>
          </div>
        </div>
        <div class="col xs12 md5"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_11_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
 
<script src="./../assets/js/librerias/wordfind.js"></script>
<script src="./../assets/js/librerias/wordfindgame.js"></script>