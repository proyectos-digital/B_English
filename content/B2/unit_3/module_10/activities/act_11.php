
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <div class="c-flickity">
            <h5>Can you guess what it is? Match the images with the objects they describe.</h5><br/>
            <div class="row mt10">
              <div class="row c-flickity-controls">
                <div class="c-flickity-controlsSlides">
                  <button class="c-flickity-button is-selected ">1</button>
                  <button class="c-flickity-button ">2</button>
                  <button class="c-flickity-button ">3</button>
                  <button class="c-flickity-button ">4</button>
                  <button class="c-flickity-button ">5</button>
                </div>
              </div>
            </div>
            <div class="row mt50-sm">
              <div class="c-flickity--cell">
                <div class="row">
                  <div class="col xs12 sm6 col-center"><img class="centrado u-responsive-img max-ancho150" src="unit_3/module_10/assets/images/act_11_4.png"/></div>
                </div>
                <div class="row-flex align-items-center">
                  <div class="col xs6 md4 ta-c mt15">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_1">I need one of those things for hitting things or forcing nails into wood or walls.</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_2">What’s all that stuff on your desk?</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_3">I can’t find my whatsitcalled! That thing you wrap around your neck when it’s cold.</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_1" value="4"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_4">He’s a tallish guy... maybe 6 feet?</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_1" value="5"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_5">They sell loads of really cool stuff in that boutique.</label>
                  </div>
                </div>
              </div>
              <div class="c-flickity--cell">
                <div class="row">
                  <div class="col xs12 sm6 col-center"><img class="centrado u-responsive-img" src="unit_3/module_10/assets/images/act_11_1.png"/></div>
                </div>
                <div class="row-flex align-items-center">
                  <div class="col xs6 md4 ta-c mt15">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="1"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_6">I need one of those things for hitting things or forcing nails into wood or walls.</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_2" value="2"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_7">What’s all that stuff on your desk?</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_2" value="3"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_8">I can’t find my whatsitcalled! That thing you wrap around your neck when it’s cold.</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_2" value="4"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_9">He’s a tallish guy... maybe 6 feet?</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_2" value="5"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_10">They sell loads of really cool stuff in that boutique.</label>
                  </div>
                </div>
              </div>
              <div class="c-flickity--cell">
                <div class="row">
                  <div class="col xs12 sm6 col-center"><img class="centrado u-responsive-img" src="unit_3/module_10/assets/images/act_11_3.png"/></div>
                </div>
                <div class="row-flex align-items-center">
                  <div class="col xs6 md4 ta-c mt15">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_3" value="1"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_11">I need one of those things for hitting things or forcing nails into wood or walls.</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_3" value="2"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_12">What’s all that stuff on your desk?</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_3" value="3"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_13">I can’t find my whatsitcalled! That thing you wrap around your neck when it’s cold.</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_3" value="4"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_14">He’s a tallish guy... maybe 6 feet?</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_3" value="5"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_15">They sell loads of really cool stuff in that boutique.</label>
                  </div>
                </div>
              </div>
              <div class="c-flickity--cell">
                <div class="row">
                  <div class="col xs12 sm6 col-center"><img class="centrado u-responsive-img" src="unit_3/module_10/assets/images/act_11_2.png"/></div>
                </div>
                <div class="row-flex align-items-center">
                  <div class="col xs6 md4 ta-c mt15">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_4" value="1"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_16">I need one of those things for hitting things or forcing nails into wood or walls.</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_17" name="selection_4" value="2"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_17">What’s all that stuff on your desk?</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_18" name="selection_4" value="3"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_18">I can’t find my whatsitcalled! That thing you wrap around your neck when it’s cold.</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_19" name="selection_4" value="4"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_19">He’s a tallish guy... maybe 6 feet?</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_20" name="selection_4" value="5"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_20">They sell loads of really cool stuff in that boutique.</label>
                  </div>
                </div>
              </div>
              <div class="c-flickity--cell">
                <div class="row">
                  <div class="col xs12 sm6 col-center"><img class="centrado u-responsive-img max-ancho150" src="unit_3/module_10/assets/images/act_11_5.png"/></div>
                </div>
                <div class="row-flex align-items-center">
                  <div class="col xs6 md4 ta-c mt15">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_21" name="selection_5" value="1"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_21">I need one of those things for hitting things or forcing nails into wood or walls.</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_22" name="selection_5" value="2"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_22">What’s all that stuff on your desk?</label>
                  </div>
                  <div class="col xs6 md4 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_23" name="selection_5" value="3"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_23">I can’t find my whatsitcalled! That thing you wrap around your neck when it’s cold.</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_24" name="selection_5" value="4"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_24">He’s a tallish guy... maybe 6 feet?</label>
                  </div>
                  <div class="col xs6 md6 ta-c mt20">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_25" name="selection_5" value="5"/>
                    <label class="c-CheckSelected col-flex h50 row" for="SelectRadio_25">They sell loads of really cool stuff in that boutique.</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <h5>Now, use a colloquial word to write a description for the following items:</h5>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1-dark pt40">
              <div class="mb30 row">
                <p class="col sx12 sm3 ta-c"><span class="u-textColor_4-dark"><strong>• </strong></span><strong>A marker:</strong></p>
                <input class="c-input js-escribir col sx12 sm9" type="text" placeholder="Text here..." ng-model="textousuario"/>
              </div>
              <div class="mb30 row">
                <p class="col sx12 sm3 ta-c"><span class="u-textColor_4-dark"><strong>• </strong></span><strong>A toaster:</strong></p>
                <input class="c-input js-escribir col sx12 sm9" type="text" placeholder="Text here..." ng-model="textousuariob"/>
              </div>
              <div class="mb30 row">
                <p class="col sx12 sm3 ta-c"><span class="u-textColor_4-dark"><strong>• </strong></span><strong>A mobile:</strong></p>
                <input class="c-input js-escribir col sx12 sm9" type="text" placeholder="Text here..." ng-model="textousuarioc"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 1" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 1" ng-click="seleccionMulti()"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-show="s_actividad == 2" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button');</script>