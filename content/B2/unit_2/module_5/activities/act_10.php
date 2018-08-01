
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="s_actividad = 1">
      
      
      <div class="row-flex s-actividad u-animationFadeDown align-items-center" ng-show="s_actividad == 1">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p class="ta-c">
                 She is<strong> used to spending</strong> hours in front of the computer every day. </p>
              <p class="ta-c">He is slowly <strong>getting used </strong>to her new job.</p>
              <p class="ta-c">We're <strong>not getting used to </strong>the weather here in Seattle.</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_10_1.png" alt="" srcset=""/></div>
      </div>
      
      <div class="row s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="c-flickity">
          <h5><strong class="u-textColor_4">1. </strong> Choose the right word to complete the sentences.</h5>
          <div class="row mt30">
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
            <div class="c-flickity--cell min-h320">
              <div class="row-flex align-items-center col-center">
                <div class="col-flex-sm10 col-flex-md6 col-center">
                  <div class="c-cardGreenContent">
                    <p class="ta-c mt20">The boss is used to employees not linking his decisions.</p>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">The situation has become normal.</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">The person is in the process of making something normal.</label>
                  </div>
                </div>
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"> <img class="u-responsive-img centrado mt20" src="./unit_2/module_5/assets/images/act_10_2.png" alt="" srcset=""/></div>
              </div>
            </div>
            <div class="c-flickity--cell min-h320">
              <div class="row-flex align-items-center col-center">
                <div class="col-flex-sm10 col-flex-md6 col-center">
                  <div class="c-cardGreenContent">
                    <p class="ta-c mt20">The children are getting used to their new school.</p>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">The situation has become normal.</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">The person is in the process of making something normal.</label>
                  </div>
                </div>
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"> <img class="u-responsive-img centrado mt20" src="./unit_2/module_5/assets/images/act_10_3.png" alt="" srcset=""/></div>
              </div>
            </div>
            <div class="c-flickity--cell min-h320">
              <div class="row-flex align-items-center col-center">
                <div class="col-flex-sm10 col-flex-md6 col-center">
                  <div class="c-cardGreenContent">
                    <p class="ta-c mt20">He's used to getting up very early.</p>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">The situation has become normal.</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">The person is in the process of making something normal.</label>
                  </div>
                </div>
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"> <img class="u-responsive-img centrado mt20" src="./unit_2/module_5/assets/images/act_10_4.png" alt="" srcset=""/></div>
              </div>
            </div>
            <div class="c-flickity--cell min-h320">
              <div class="row-flex align-items-center col-center">
                <div class="col-flex-sm10 col-flex-md6 col-center">
                  <div class="c-cardGreenContent">
                    <p class="ta-c mt20">I'm used to eating out for lunch.</p>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">The situation has become normal.</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">The person is in the process of making something normal.</label>
                  </div>
                </div>
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"> <img class="u-responsive-img centrado mt20" src="./unit_2/module_5/assets/images/act_10_5.png" alt="" srcset=""/></div>
              </div>
            </div>
            <div class="c-flickity--cell min-h320">
              <div class="row-flex align-items-center col-center">
                <div class="col-flex-sm10 col-flex-md6 col-center">
                  <div class="c-cardGreenContent">
                    <p class="ta-c mt20">You're going to have to get used to this type of comments.</p>
                  </div>
                  <div class="row-flex">
                    <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">The situation has become normal.</label>
                    <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
                    <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">The person is in the process of making something normal.</label>
                  </div>
                </div>
                <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"> <img class="u-responsive-img centrado mt20" src="./unit_2/module_5/assets/images/act_10_6.png" alt="" srcset=""/></div>
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
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>