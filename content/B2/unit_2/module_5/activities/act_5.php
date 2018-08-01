
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="c-flickity">
          <h5><strong class="u-textColor_4">1. </strong> Choose the right word to complete the sentences.</h5><br/>
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
                <button class="c-flickity-button ">Exercises 8</button>
                <button class="c-flickity-button ">Exercises 9</button>
                <button class="c-flickity-button ">Exercises 10</button><span class="c-flickity--cell-total">10</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row mt50-sm">
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_1.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm11">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">I worked <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span> the holidays.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_2.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">We’ll walk <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span> an hour. Then we’ll have a rest.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_3.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm11">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">She is gardening <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span> her husband is painting the chairs.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_4.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">Belisario called me <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span> the meeting.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_5.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">We met <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span> the barbecue party.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_6.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">I’ve been waiting for them <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_f"/></span> two hours.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_6" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_f='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_6" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_f='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_6" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_f='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_7.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">Samantha visited the Salt Cathedral <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_g"/></span> her stay in Zipaquira.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_7" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_19" ng-click="txtcaptura_g='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_7" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_20" ng-click="txtcaptura_g='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_7" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_21" ng-click="txtcaptura_g='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_8.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent"><span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_h"/></span> I think of it, don’t forget to call Mr. Blair.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_8" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_22" ng-click="txtcaptura_h='For'">For</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_8" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_23" ng-click="txtcaptura_h='During'">During</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_8" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_24" ng-click="txtcaptura_h='While'">While</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_9.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">Don’t speak <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_i"/></span> I am doing this exercise!</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_9" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_25" ng-click="txtcaptura_i='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_9" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_26" ng-click="txtcaptura_i='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_9" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_27" ng-click="txtcaptura_i='while'">while</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell min-h400">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_2/module_5/assets/images/act_5_10.png" alt="unsplash ramdon images"/></div>
                <div class="col-flex-sm7 col-flex-xs12 col-center">
                  <div class="row-flex flex-colum">
                    <div class="col-flex-md8 col-center col-flex-sm10">
                      <div class="c-cardGreen">
                        <div class="c-cardGreenContent">Two years ago she stayed in Riohacha <span class="c-textField">
                            <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_j"/></span> three months.</div>
                      </div>
                    </div>
                    <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                      <div class="row-flex">
                        <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_10" value="1"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_28" ng-click="txtcaptura_j='for'">for</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_10" value="2"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_29" ng-click="txtcaptura_j='during'">during</label>
                        <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_10" value="3"/>
                        <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_30" ng-click="txtcaptura_j='while'">while</label>
                      </div>
                    </div>
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

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>