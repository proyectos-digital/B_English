
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row flex align-items-center">
        <div class="col xs12 md3 ta-c showTo-md"><img class="u-responsive-img" src="unit_1/module_1/assets/images/test_2_1.png" alt=""/></div>
        <div class="col xs12 md9">
          <div class="c-flickity h_auto">
            <h5>Choose the right word to complete the sentences.</h5><br/>
            <div class="row mt10">
              <div class="row c-flickity-controls c-flickity-controls-flex">
                <div class="c-flickity-controlsSlides">
                  <button class="c-flickity-button is-selected ">Exercises 1</button>
                  <button class="c-flickity-button ">Exercises 2</button>
                  <button class="c-flickity-button ">Exercises 3</button>
                  <button class="c-flickity-button ">Exercises 4</button>
                  <button class="c-flickity-button ">Exercises 5</button><span class="c-flickity--cell-total">5</span>
                </div>
                <button class="c-flickity-button c-flickity-button--previous">←</button>
                <button class="c-flickity-button c-flickity-button--next">→</button>
              </div>
            </div>
            <div class="row mt50-sm">
              <div class="c-flickity--cell ">
                <div class="row flex justify-center mt80 mb30">
                  <p>I’ll start cooking dinner <span class="c-textField">
                      <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span>  I get home.</p>
                </div>
                <div class="row flex">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='until'">until</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='while'">while</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='before'">before</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_1" value="4"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_a='as long as'">as soon as</label>
                </div>
              </div>
              <div class="c-flickity--cell ">
                <div class="row flex justify-center mt80 mb30">
                  <p>We´ll find a hotel <span class="c-textField">
                      <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span>  we arrive in Portland.</p>
                </div>
                <div class="row flex">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_2" value="1"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_b='until'">until</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_2" value="2"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_b='when'">when</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_2" value="3"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_b='while'">while</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_2" value="4"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_b='as long as'">as long as</label>
                </div>
              </div>
              <div class="c-flickity--cell ">
                <div class="row flex justify-center mt80 mb30">
                  <p> I don´t want to leave this unfinished. I want to finish my work <span class="c-textField">
                      <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span>  we go out.</p>
                </div>
                <div class="row flex">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_3" value="1"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_c='until'">until</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_3" value="2"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_c='before'">before</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_3" value="3"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_16" ng-click="txtcaptura_c='after'">after</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_3" value="4"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_17" ng-click="txtcaptura_c='while'">while</label>
                </div>
              </div>
              <div class="c-flickity--cell ">
                <div class="row flex justify-center mt80 mb30">
                  <p>I´ll give you a call <span class="c-textField">
                      <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span>   I get back from my trip.</p>
                </div>
                <div class="row flex">
                  <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_4" value="1"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_19" ng-click="txtcaptura_d='until'">until</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_4" value="2"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_20" ng-click="txtcaptura_d='while'">while</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_4" value="3"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_23" ng-click="txtcaptura_d='when'">when</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_4" value="4"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_24" ng-click="txtcaptura_d='as long as'">as long as</label>
                </div>
              </div>
              <div class="c-flickity--cell ">
                <div class="row flex justify-center mt80 mb30">
                  <p> She´s going to look after my children <span class="c-textField">
                      <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span>  I´m away on business.</p>
                </div>
                <div class="row flex">
                  <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_5" value="1"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_25" ng-click="txtcaptura_e='until'">until</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_5" value="2"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_26" ng-click="txtcaptura_e='as long as'">as long as</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_5" value="3"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_29" ng-click="txtcaptura_e='when'">when</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_5" value="4"/>
                  <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_30" ng-click="txtcaptura_e='while'">while</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>