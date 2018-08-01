
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_13" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <p class="ta-c">"Will" in the present situation and "would" in the past situation is used to express someone’s willingness or unwillingness to do something.</p>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 ta-c mb30"><img class="u-responsive-img mt30 m-a" src="unit_1/module_2/assets/images/act_13_1.png" style="width: 400px;" alt=""/></div>
        <div class="col xs12 md6">
          <p>Listen to these sentences. Do you think the person is <strong>willing to</strong> do these things or <strong>just thinking or planning</strong> about doing them?</p>
          <div class="col xs10 col-center flex align-items-center justify-around mt30">
            <div class="col xs2">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_13_1.mp3"></button>
            </div>
            <div class="col xs4">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_1">Willing</label>
            </div>
            <div class="col xs6">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_2">Just thinking or planning</label>
            </div>
          </div>
          <div class="col xs10 col-center flex align-items-center justify-around mt30">
            <div class="col xs2">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_13_2.mp3"></button>
            </div>
            <div class="col xs4">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_3" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_3">Willing</label>
            </div>
            <div class="col xs6">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_4">Just thinking or planning</label>
            </div>
          </div>
          <div class="col xs10 col-center flex align-items-center justify-around mt30">
            <div class="col xs2">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_13_3.mp3"></button>
            </div>
            <div class="col xs4">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_5" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_5">Willing</label>
            </div>
            <div class="col xs6">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_6">Just thinking or planning</label>
            </div>
          </div>
          <div class="col xs10 col-center flex align-items-center justify-around mt30">
            <div class="col xs2">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_13_4.mp3"></button>
            </div>
            <div class="col xs4">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_7" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_7">Willing</label>
            </div>
            <div class="col xs6">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_8">Just thinking or planning</label>
            </div>
          </div>
          <div class="col xs10 col-center flex align-items-center justify-around mt30">
            <div class="col xs2">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_13_5.mp3"></button>
            </div>
            <div class="col xs4">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_9" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_9">Willing</label>
            </div>
            <div class="col xs6">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_10" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_10">Just thinking or planning</label>
            </div>
          </div>
          <div class="col xs10 col-center flex align-items-center justify-around mt30">
            <div class="col xs2">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_13_6.mp3"></button>
            </div>
            <div class="col xs4">
              <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_11" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_11">Willing</label>
            </div>
            <div class="col xs6">
              <input class="c-inputRadio" type="radio" name="sel_input_6" id="selInput_12" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_12">Just thinking or planning</label>
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