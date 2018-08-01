
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="s_actividad = 1">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <h6><strong class="u-textColor_4">1. </strong> Read the following sentences. Pay attention to the words in bold.</h6>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p>
                 Belisario just came in. <strong>As a matter of fact, </strong>he's right here. 
                Do you want to talk to him?
              </p>
              <p><strong>As a matter of fact, </strong>he came into the room while you were talking about him.</p>
              <p>I'm not a poor worker. <strong>As a matter of fact, </strong>I'm very efficient.</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_6_1.png" alt="" srcset=""/></div>
      </div>
      <div class="row s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row"></div>
        <div class="c-flickity">
          <h6>Match the parts of the famous quotes.</h6>
          <div class="row mt30">
            <div class="row c-flickity-controls">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">1</button>
                <button class="c-flickity-button ">2</button>
                <button class="c-flickity-button ">3</button>
              </div>
            </div>
          </div>
          <div class="row mt50-sm">
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs10 md8 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">"I once terminated a partnership with a chap who proved unreliable.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-flex align-items-center col-center w80">
                <div class="col-flex-sm12 col-flex-md6 col-center">
                  <div class="row-flex flex-column">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_1">As a matter of fact, it is not male parts, but male brains that I prefer." - Sarah Bernhardt </label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_2">As a matter of fact, we think it is infinite" - Dan Ouayle</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_3">As a matter of fact, I terminated him. - Edward L. Bernds</label>
                  </div>
                </div>
                <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado mt40" src="./unit_2/module_5/assets/images/act_6_2.png" alt="" srcset=""/></div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs10 md8 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent">
                      <p class="ta-c mt20">I have often been asked why I am so fond of playing male parts. As a matter of fact, it is not male parts...</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-flex align-items-center col-center w80">
                <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado mt40" src="./unit_2/module_5/assets/images/act_6_3.png" alt="" srcset=""/></div>
                <div class="col-flex-sm12 col-flex-md6 col-center">
                  <div class="row-flex flex-column">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_4">As a matter of fact, it is not male parts, but male brains that I prefer." - Sarah Bernhardt </label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_5">As a matter of fact, we think it is infinite" - Dan Ouayle</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_6">As a matter of fact, I terminated him. - Edward L. Bernds</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row">
                <div class="col xs10 md8 col-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent"> 
                      <p class="ta-c mt20">"Space is almost infinitive.   </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row-flex align-items-center col-center w80">
                <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado mt40" src="./unit_2/module_5/assets/images/act_6_4.png" alt="" srcset=""/></div>
                <div class="col-flex-sm12 col-flex-md6 col-center">
                  <div class="row-flex flex-column">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_7">As a matter of fact, it is not male parts, but male brains that I prefer." - Sarah Bernhardt </label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_8">As a matter of fact, we think it is infinite" - Dan Ouayle</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                    <label class="c-CheckSelected col-flex pt20 pb20 mt20" for="SelectRadio_9">As a matter of fact, I terminated him. - Edward L. Bernds</label>
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
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1" ng-show="s_actividad == 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar" ng-click="seleccionMulti()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button');</script>