
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="s_actividad = 1">
      <div class="row s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <h5 class="ta-c"><strong class="u-textColor_4">1. </strong> According to the previous text answer the following questions:</h5>
        <div class="row-flex align-items-center mt50">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/col_3.png" alt="" srcset=""/></div>
          <div class="col-flex-sm11 col-flex-md6 col-center">
            <div class="row">
              <p><strong class="u-textColor_4-dark">1.</strong>  What conditions did Miami meet to become the sister city of Santa Marta? </p>
              <div class="row-flex mt20 flex-column w80 col-center">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_1">Both are beach cities and tourism destination.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_2"> Both have indigenous population.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_3"> Both have a good mayor.</label>
              </div>
            </div>
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">2.</strong>   All twin city council members in Santa Marta are elected by?</p>
              <div class="row-flex mt20 flex-column w80 col-center">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_4">The residence.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_5">The Miami Council.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_6"> The mayor of Santa Marta.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <h5 class="ta-c"><strong class="u-textColor_4">2. </strong> Choose the best answer for the following questions:</h5>
        <div class="row-flex align-items-center mt50">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/col_2_1.png" alt="" srcset=""/></div>
          <div class="col-flex-sm11 col-flex-md6 col-center">
            <div class="row">
              <p><strong class="u-textColor_4-dark">3.</strong> The twin city program was started to promote...</p>
              <div class="row-flex mt20 flex-column w80 col-center">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_7">Parties and festivals.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_8">Cultural awareness.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_9"> To study different cultures.</label>
              </div>
            </div>
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">4.</strong> In recent years the focus of the sister city program has been...</p>
              <div class="row-flex mt20 flex-column w80 col-center">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_10">Cultural exchange.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_11">Tourism.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_12"> To secure business deals.</label>
              </div>
            </div>
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">5.</strong> Another name for the text could be...</p>
              <div class="row-flex mt20 flex-column w80 col-center">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_13">Cities after the world war.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_14">Santa Marta.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_15">The origin of the Twin Cities program.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>