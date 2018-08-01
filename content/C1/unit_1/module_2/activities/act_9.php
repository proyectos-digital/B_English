
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="col xs12 md10 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <h6>In English there are several ways to ask for clarification and repetition. The most important thing is that speakers understand how to ask for clarification in a polite and appropriate manner. <br/> <br/> Below are some more examples of how to ask for clarification and repetition politely.</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h5>Listen and repeat the following examples.</h5>
        <p>Then decide if the phrases are used when you <strong>don’t understand</strong> something or when you <strong>didn’t hear</strong> something.</p>
      </div>
      <div class="row">
        <div class="col xs12 md6 row-flex align-items-center justify-center showTo-md"><img class="u-responsive-img mt30 mb30 m-a col-center" src="unit_1/module_2/assets/images/act_9_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <div class="row row-flex align-items-center justify-center">
            <div class="col xs11 col-center">
              <div class="row mt30">
                <div class="col xs2">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_9_1.mp3"></button>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                  <label class="c-Checkbox row w100" for="selInput_1">Don’t understand</label>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                  <label class="c-Checkbox row w100" for="selInput_2">Didn’t hear</label>
                </div>
              </div>
            </div>
            <div class="col xs11 col-center">
              <div class="row mt30">
                <div class="col xs2">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_9_2.mp3"></button>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_3" value="1"/>
                  <label class="c-Checkbox row w100" for="selInput_3">Don’t understand</label>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="2"/>
                  <label class="c-Checkbox row w100" for="selInput_4">Didn’t hear</label>
                </div>
              </div>
            </div>
            <div class="col xs11 col-center">
              <div class="row mt30">
                <div class="col xs2">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_9_3.mp3"></button>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_5" value="1"/>
                  <label class="c-Checkbox row w100" for="selInput_5">Don’t understand</label>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="2"/>
                  <label class="c-Checkbox row w100" for="selInput_6">Didn’t hear</label>
                </div>
              </div>
            </div>
            <div class="col xs11 col-center">
              <div class="row mt30">
                <div class="col xs2">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_9_4.mp3"></button>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_7" value="1"/>
                  <label class="c-Checkbox row w100" for="selInput_7">Don’t understand</label>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="2"/>
                  <label class="c-Checkbox row w100" for="selInput_8">Didn’t hear</label>
                </div>
              </div>
            </div>
            <div class="col xs11 col-center">
              <div class="row mt30">
                <div class="col xs2">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_9_5.mp3"></button>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_9" value="1"/>
                  <label class="c-Checkbox row w100" for="selInput_9">Don’t understand</label>
                </div>
                <div class="col xs5">
                  <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_10" value="2"/>
                  <label class="c-Checkbox row w100" for="selInput_10">Didn’t hear</label>
                </div>
              </div>
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