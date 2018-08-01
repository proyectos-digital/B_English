
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="c-flickity">
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
              <div class="row-flex align-items-center">
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_2_1.png" alt="" srcset=""/></div>
                <div class="col-flex-sm10 col-flex-md6 col-center"> 
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">
                         Mr. Jones <span class="c-textField">
                          <input class="c-input ta-c js-escribir ml10 mr10 mb10" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span>reading a newspaper in the mornings. It´s part of his daily routine.</p>
                    </div>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='gets used to'">gets used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='is used to'">is used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3" ng-click="txtcaptura_a='used to'">used to</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_2_2.png" alt="" srcset=""/></div>
                <div class="col-flex-sm10 col-flex-md6 col-center"> 
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">
                         My cousin<span class="c-textField">
                          <input class="c-input ta-c js-escribir ml10 mr10 mb10" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span>have a car when he was in high-school. He got his driver´s license after he graduated.</p>
                    </div>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='didn&#96;t use to'">didn't use to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='wasn&#96;t used to'">wasn't used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6" ng-click="txtcaptura_b='got used to used to'">got used to</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_2_3.png" alt="" srcset=""/></div>
                <div class="col-flex-sm10 col-flex-md6 col-center"> 
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">
                         Mike and Jimmy<span class="c-textField">
                          <input class="c-input ta-c js-escribir ml10 mr10 mb10" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span>sharing a room. They´re twins, so they´ve been doing this since they were born.</p>
                    </div>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='aren&#96;t used to'">aren't used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='used to'">used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9" ng-click="txtcaptura_c='are used to'">are used to</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_2_4.png" alt="" srcset=""/></div>
                <div class="col-flex-sm10 col-flex-md6 col-center"> 
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">
                          I can't drive, so I'm<span class="c-textField">
                          <input class="c-input ta-c js-escribir ml10 mr10" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span>taking a bus to work.</p>
                    </div>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='not used to'">not used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='used to'">used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_12" ng-click="txtcaptura_d='get used to'">get used to</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row-flex align-items-center">
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_2_5.png" alt="" srcset=""/></div>
                <div class="col-flex-sm10 col-flex-md6 col-center"> 
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">
                         After a couple of months in Mexico, I finally<span class="c-textField">
                          <input class="c-input ta-c js-escribir ml10 mr10" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span>having lunch late in the afternoon.</p>
                    </div>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='am used to'">am used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e='was used to'">was used to</label>
                    <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_15" ng-click="txtcaptura_e='got used to'">got used to</label>
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

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button');</script>