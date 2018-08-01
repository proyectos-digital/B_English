
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_16" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <article class="row" ng-show="s_actividad == 1">
        <div class="row-flex justify-between align-items-center">
          <div class="col xs12 md7">
            <p>The three main phrases that are used are:</p>
            <p>Could you? Can you? And do you mind?</p>
            <div class="row">
              <h5>Remember the structure that they follow:</h5>
            </div>
            <div class="c-cardBlue">
              <div class="c-cardBlueContent u-textColor_1">
                <ul class="lh">
                  <li>
                    <p><strong class="u-textColor_4">•</strong> "Could you" is followed by a verb, Could you (verb)</p>
                    <p><strong class="u-textColor_4 mr15"></strong> Could you hand me the stapler please?</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="c-cardBlue">
              <div class="c-cardBlueContent u-textColor_1">
                <ul class="lh">
                  <li>
                    <p><strong class="u-textColor_4">•</strong> “Can you” is followed by a verb, Can you (verb)</p>
                    <p><strong class="u-textColor_4 mr15"></strong> Can you open the door for me?</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="c-cardBlue">
              <div class="c-cardBlueContent u-textColor_1">
                <ul class="lh">
                  <li>
                    <p><strong class="u-textColor_4">•</strong> “Would you mind” is followed by a verb + ing</p>
                    <p><strong class="u-textColor_4 mr15"></strong> Would you mind opening the door for me?</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="c-cardBlue">
              <div class="c-cardBlueContent u-textColor_1">
                <ul class="lh">
                  <li>
                    <p><strong class="u-textColor_4">•</strong> “Do you mind if” is another way to ask for permission</p>
                    <p><strong class="u-textColor_4 mr15"></strong> “Do you mind if “followed by the verb?</p>
                    <p><strong class="u-textColor_4 mr15"></strong> Do you mind if I borrow your computer for a minute?</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col xs12 md4 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_1/module_2/assets/images/act_16_1.png" alt=""/></div>
        </div>
      </article>
      <article class="row" ng-show="s_actividad == 2">
        <h5>Do you know how to respond to these request?</h5>
        <h6>Match the appropriate response to the requests.</h6>
        <div class="c-flickity">
          <div class="row mt10 mb30">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Page 1</button>
                <button class="c-flickity-button ">Page 2</button>
                <button class="c-flickity-button ">Page 3</button>
                <button class="c-flickity-button ">Page 4</button><span class="c-flickity--cell-total">4</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
            <div class="row "></div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs9 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent flex align-items-center justify-center"><span>Can you bring me the brochures please?</span></div>
                  </div>
                  <div class="row">
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                      <label class="c-Checkbox row w100" for="selInput_1">No, not all.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                      <label class="c-Checkbox row w100" for="selInput_2">Sure, no problem.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                      <label class="c-Checkbox row w100" for="selInput_3">No, I don’t mind at all.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs9 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent flex align-items-center justify-center"><span>Could you check the front desk for the deliveries?</span></div>
                  </div>
                  <div class="row">
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                      <label class="c-Checkbox row w100" for="selInput_4">No, not all.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                      <label class="c-Checkbox row w100" for="selInput_5">Sure, no problem.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                      <label class="c-Checkbox row w100" for="selInput_6">No, I don’t mind at all.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs9 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent flex align-items-center justify-center"><span>Do you mind if I use your phone?</span></div>
                  </div>
                  <div class="row">
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                      <label class="c-Checkbox row w100" for="selInput_7">No, not all.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                      <label class="c-Checkbox row w100" for="selInput_8">Sure, no problem.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                      <label class="c-Checkbox row w100" for="selInput_9">No, I don’t mind at all.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs9 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <spantrong>Would you mind handing me the table salt?</spantrong>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                      <label class="c-Checkbox row w100" for="selInput_10">No, not all.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                      <label class="c-Checkbox row w100" for="selInput_11">Sure, no problem.</label>
                    </div>
                    <div class="col xs4">
                      <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                      <label class="c-Checkbox row w100" for="selInput_12">No, I don’t mind at all.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarWordFind" ng-click="seleccionMulti()" ng-show="s_actividad == 2"></button>
  </aside>
  
  <footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
</section>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '260');</script>