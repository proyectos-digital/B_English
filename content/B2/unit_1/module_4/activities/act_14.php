
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_14">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction waves-effect waves-light" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction waves-effect waves-light" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  <div class="template-section m-a">
    <section class="template-content " ng-show="s_actividad == 1">
      <h5><strong class="u-textColor_4">1. </strong> Read about the production in three countries.</h5>
      <div class="row">
        <div class="col xs12 md4">
          <div class="col xs12 md10 col-center">
            <div class="col xs12 sm8 md12 col-center flex align-items-center justify-around mb20 mt20">
              <h6 class="u-textColor_4">Italy</h6><img class="u-responsive-img w50" src="unit_1/module_4/assets/images/act_14g.png" alt=""/>
            </div>
            <p class="lh25 ta-j">Italy is known for many different things: fashionable clothing, modern furniture, beautiful glasswork, marble, and many historical and cultural attractions. Tourists come to Italy every year to see the sites and go shopping for popular Italian products like shoes and pottery. Foods such as olive oil, wine and cheese are also produced in Italy and exported abroad. Plenty of fish are caught and processed in the coastal areas of the country, too.</p>
          </div>
        </div>
        <div class="col xs12 md4">
          <div class="col xs12 md10 col-center">
            <div class="col xs12 sm8 md12 col-center flex align-items-center justify-around mb20 mt20">
              <h6 class="u-textColor_4">Colombia</h6><img class="u-responsive-img w50" src="unit_1/module_4/assets/images/act_14h.png" alt=""/>
            </div>
            <p class="lh25 ta-j">Colombia is known for its beautiful green landscapes. They cover most of the country. Much of this land is devoted to farming and agriculture. Rare and beautiful wildlife, plants and trees are found in this South American Country. But this country isn’t only for scientists and tourists! Agricultural crops, such as coffee and roses, are also grown here and exported to other countries. Also, salt is produced from seawater.</p>
          </div>
        </div>
        <div class="col xs12 md4">
          <div class="col xs12 md10 col-center">
            <div class="col xs12 sm8 md12 col-center flex align-items-center justify-around mb20 mt20">
              <h6 class="u-textColor_4">China</h6><img class="u-responsive-img w50" src="unit_1/module_4/assets/images/act_14i.png" alt=""/>
            </div>
            <p class="lh25 ta-j">China is known for its many products, its large population, and its long history. More rice is grown in China, more steel and textiles are produced in China, and more people live in China than in any other country in the world. China is also a very big exporter of tea. The Chinese are known for inventing many useful and common things we use today, such as paper, gunpowder, silk and the compass. One of China’s most famous attractions is the Great Wall. It’s located in northern China.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">   
      <div class="row">
        <div class="c-flickity">
          <h5><strong class="u-textColor_4">1. </strong> Match the products with the country where they are produced</h5><br/>
          <div class="row mt10">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Exercises 1</button>
                <button class="c-flickity-button ">Exercises 2</button>
                <button class="c-flickity-button ">Exercises 3</button>
                <button class="c-flickity-button ">Exercises 4</button>
                <button class="c-flickity-button ">Exercises 5</button>
                <button class="c-flickity-button ">Exercises 6</button><span class="c-flickity--cell-total">6</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row mt50-sm ">
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_14a.png"/></div>
                <div class="row mt30">
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                      <label class="c-CheckImage" for="inputRadio_1"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14g.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                      <label class="c-CheckImage" for="inputRadio_2"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14h.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                      <label class="c-CheckImage" for="inputRadio_3"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14i.png"/></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_14b.png"/></div>
                <div class="row mt30">
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
                      <label class="c-CheckImage" for="inputRadio_4"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14g.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
                      <label class="c-CheckImage" for="inputRadio_5"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14h.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
                      <label class="c-CheckImage" for="inputRadio_6"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14i.png"/></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_14c.png"/></div>
                <div class="row mt30">
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
                      <label class="c-CheckImage" for="inputRadio_7"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14g.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
                      <label class="c-CheckImage" for="inputRadio_8"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14h.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
                      <label class="c-CheckImage" for="inputRadio_9"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14i.png"/></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_14d.png"/></div>
                <div class="row mt30">
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
                      <label class="c-CheckImage" for="inputRadio_10"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14g.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
                      <label class="c-CheckImage" for="inputRadio_11"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14h.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
                      <label class="c-CheckImage" for="inputRadio_12"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14i.png"/></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_14e.png"/></div>
                <div class="row mt30">
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
                      <label class="c-CheckImage" for="inputRadio_13"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14g.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
                      <label class="c-CheckImage" for="inputRadio_14"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14h.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
                      <label class="c-CheckImage" for="inputRadio_15"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14i.png"/></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs12 sm3 col-center"><img class="centrado u-responsive-img" src="unit_1/module_4/assets/images/act_14f.png"/></div>
                <div class="row mt30">
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_6" value="1"/>
                      <label class="c-CheckImage" for="inputRadio_16"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14g.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_6" value="2"/>
                      <label class="c-CheckImage" for="inputRadio_17"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14h.png"/></label>
                    </div>
                  </div>
                  <div class="col xs4">
                    <div class="col xs6 col-center">
                      <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_6" value="3"/>
                      <label class="c-CheckImage" for="inputRadio_18"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_14i.png"/></label>
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

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_14_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>