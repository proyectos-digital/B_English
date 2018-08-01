
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row">
        <div class="c-flickity ">
          <h5>Choose the right word to complete the sentences.</h5><br/>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_1.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
                <div class="col-flex-md8 col-center col-flex-sm10">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">worked <span class="c-textField">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_2.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_3.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
                <div class="col-flex-md8 col-center col-flex-sm10">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_4.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_5.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_6.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_18" ng-click="txtcaptura_f='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_7.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_21" ng-click="txtcaptura_g='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_8.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
                <div class="col-flex-md8 col-center col-flex-sm10">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent"><span class="c-textField">
                        <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_h"/></span> I think of it, don’t forget to call Mr. Blair.</div>
                  </div>
                </div>
                <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_8" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_22" ng-click="txtcaptura_h='for'">for</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_8" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_23" ng-click="txtcaptura_h='during'">during</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_8" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_24" ng-click="txtcaptura_h='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_9.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
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
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_27" ng-click="txtcaptura_i='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row-flex">
              <div class="col-flex-sm5 showTo-md"><img class="centrado u-responsive-img" src="unit_1/module_1/assets/images/act_19_10.png" alt="unsplash ramdon images"/></div>
              <div class="col-flex-sm7 m-a flex-colum row-flex">
                <div class="col-flex-md8 col-center col-flex-sm10">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">Two years ago she stayed in Riohacha <span class="c-textField">
                        <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_j"/></span> three months.</div>
                  </div>
                </div>
                <div class="col-flex-xs12 col-flex-md8 col-center col-flex-sm10">
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_9" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_28" ng-click="txtcaptura_j='for'">for</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_9" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_29" ng-click="txtcaptura_j='during'">during</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_9" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_30" ng-click="txtcaptura_j='white'">white</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row c-flickity-controls">
          <button class="c-flickity-button c-flickity-button--previous">←</button>
          <div class="c-flickity-controlsSlides">
            <button class="c-flickity-button is-selected ">1</button>
            <button class="c-flickity-button ">2</button>
            <button class="c-flickity-button ">3</button>
            <button class="c-flickity-button ">4</button>
            <button class="c-flickity-button ">5</button>
          </div>
          <button class="c-flickity-button c-flickity-button--next">→</button>
        </div>
      </div>
    </section>
  </div>
  
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>
  // external js: flickity.pkgd.js
  
  let flickitySlide = function(cellCarousel, cellSelector, cellButtonGroup, cellButtons, buttonPrevious, buttonNext){
  
      let 
              _cellCarousel     = cellCarousel
          , _cellSelector     = cellSelector
          , _cellButtonGroup  = cellButtonGroup
          , _cellButtons      = cellButtons
          , _buttonPrevious   = buttonPrevious
          , _buttonNext       = buttonNext
      ;
  
      let $carousel = $(`.${_cellCarousel}`).flickity({
          prevNextButtons: false,
          pageDots: false,
          cellSelector: `.${_cellSelector}`
      });
      // Flickity instance
      let flkty = $carousel.data('flickity');
      // elements
      let $cellButtonGroup = $(`.${_cellButtonGroup}`);
      let $cellButtons = $cellButtonGroup.find(`.${_cellButtons}`);
  
      // update selected cellButtons
      $carousel.on( 'select.flickity', function() {
          $cellButtons.filter('.is-selected').removeClass('is-selected');
          $cellButtons.eq( flkty.selectedIndex ).addClass('is-selected');
      });
  
      // select cell on button click
      $cellButtonGroup.on( 'click', `.${_cellButtons}`, function() {
          let index = $(this).index();
          $carousel.flickity( 'select', index );
      });
      // previous
      $(`.${_buttonPrevious}`).on( 'click', function() {
          $carousel.flickity('previous');
      });
      // next
      $(`.${_buttonNext}`).on( 'click', function() {
          $carousel.flickity('next');
      });
  };
  
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');
  
  
  
      
</script>