
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper myColombia_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="row">
          <h5 class="mb40 ta-c"><strong class="u-textColor_4">1. </strong>   Choose the best answer for the following questions:</h5>
        </div>
        <div class="row">
          <div class="c-flickity h_auto">
            <div class="row c-flickity-controls">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">1</button>
                <button class="c-flickity-button ">2</button>
              </div>
            </div>
            <div class="row mt50-sm">
              <div class="c-flickity--cell  ">
                <div class="col xs12 md6 ">
                  <div class="col xs9 md10 lg12 col-center mb30 ta-c showTo-md"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_3_1.png" alt=""/></div>
                </div>
                <div class="col xs12 md6 ta-l">
                  <div class="row mt30">
                    <p> <strong class="u-textColor_4-dark">1.</strong> What was the reason for the 1567 expedition to the New World?</p>
                    <div class="row-flex mt20">
                      <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_1">To attack Spanish ships.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_2"> To trade slaves.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_3">To get pearls</label>
                    </div>
                  </div>
                  <div class="row mt30">
                    <p> <strong class="u-textColor_4-dark">2.</strong> Who considered Drake a pirate?</p>
                    <div class="row-flex mt20">
                      <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_4">The British.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_5"> The Colombians.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_6">The Spanish.</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-flickity--cell ">
                <div class="col xs12 md6 ">
                  <div class="col xs9 md10 lg12 col-center mb30 ta-c showTo-md"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_3_2.png" alt=""/></div>
                </div>
                <div class="col xs12 md6 ta-l">
                  <div class="row mt30">
                    <p> <strong class="u-textColor_4-dark">3.</strong> Why was Drake interested in Riohacha?</p>
                    <div class="row-flex mt20">
                      <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_7">Because he could get canoes there</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_8"> Because of its famous pearls.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_9">Because he had slaves to trade.</label>
                    </div>
                  </div>
                  <div class="row mt30">
                    <p> <strong class="u-textColor_4-dark">4.</strong> What did Drake do to Riohacha and Santa Marta?</p>
                    <div class="row-flex mt20">
                      <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_10">He burned them down.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_11">He conquered them.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_12">He settled there.</label>
                    </div>
                  </div>
                  <div class="row mt30">
                    <p> <strong class="u-textColor_4-dark">5.</strong> Was Drake successful in acquiring riches in Riohacha and Santa Marta?</p>
                    <div class="row-flex mt20">
                      <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_13">Yes.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_14">No.</label>
                      <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                      <label class="c-CheckSelected col-flex" for="SelectRadio_15">I don´t know.</label>
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

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell ', 'c-flickity-controlsSlides', 'c-flickity-button');</script>