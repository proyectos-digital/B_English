
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_14">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1"></aside>
  <div class="template-section m-a">
    <section class="template-content " ng-show="s_actividad == 1">
      <div class="row">
        <div class="c-flickity">
          <h5><strong class="u-textColor_4">1. </strong> All these people are related in some way to mysteries. Do you know who is who? Match.</h5><br/>
          <div class="row mt10">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Exercises 1</button>
                <button class="c-flickity-button ">Exercises 2</button>
                <button class="c-flickity-button ">Exercises 3</button>
                <button class="c-flickity-button ">Exercises 4</button>
                <button class="c-flickity-button ">Exercises 5</button>
                <button class="c-flickity-button ">Exercises 6</button>
                <button class="c-flickity-button ">Exercises 7</button>
                <button class="c-flickity-button ">Exercises 8</button><span class="c-flickity--cell-total">8</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row mt50-sm">
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18a.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">1. Johann Burckhardt</h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_1">Great Pyramid</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_2">Petra, Jordan</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_3">archaeologist</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_4">fictional detective</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18b.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">2. Sherlock Holmes </h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_5">Great Pyramid</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_6">Petra, Jordan</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_2" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_7">archaeologist</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_2" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_8">fictional detective</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18c.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">3. Indiana Jones</h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_9">Great Pyramid</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_3" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_10">Petra, Jordan</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_3" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_11">archaeologist</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_3" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_12">fictional detective</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18d.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">4. Khufu</h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_4" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_13">Great Pyramid</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_4" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_14">Petra, Jordan</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_4" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_15">archaeologist</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_4" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_16">fictional detective</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18e.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">5. Agatha Christie </h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_5" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_17">cartoon detective</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_5" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_18">e =mc2</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_5" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_19">mystery writer</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_5" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_20">student wizard</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18f.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">6. Harry Potter </h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_6" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_21">cartoon detective</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_6" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_22">e =mc2</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_6" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_23">mystery writer</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_6" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_24">student wizard</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18g.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">7. Albert Einstein</h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_7" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_25">cartoon detective</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_7" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_26">e =mc2</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_7" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_27">mystery writer</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_7" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_28">student wizard</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h500">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_18h.png"/>
                  <div class="c-cardGreen padding0">
                    <div class="c-cardGreenContent flex align-items-center justify-center">
                      <h6 class="u-textWhite">8. Inspector Gadget </h6>
                    </div>
                  </div>
                </div>
                <div class="row mt30">
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_8" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_29">cartoon detective</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_8" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_30">e =mc2</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_31" name="SelInputRadio_8" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_31">mystery writer</label>
                  </div>
                  <div class="col xs6 sm3  ta-c">
                    <input class="c-inputRadio" type="radio" id="inputRadio_32" name="SelInputRadio_8" value="4"/>
                    <label class="c-CheckSelected col-flex ml10 mr10 h40 w50" for="inputRadio_32">student wizard</label>
                  </div>
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

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_14_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>