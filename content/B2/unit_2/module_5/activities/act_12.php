
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
        <div class="row">
          <h6><strong class="u-textColor_4">1. </strong> Study the situations and choose the correct option.</h6>
        </div>
        <div class="col sm6 md6">
          <div class="row mt30"><img class="u-responsive-img centrado w80" src="./unit_2/module_5/assets/images/act_12_1.png" alt="" srcset=""/></div>
          <div class="row mt10">
            <p class="ta-c"> <strong>Situation 1</strong></p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">1.</strong> Jane is British but she has lived in Colombia for three years. When she first drove a car in Bogota, she found it very difficult because she had to drive on the right instead of on the left. Driving on the right was strange and difficult for her because:</p>
            <div class="row-flex mt20 flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex mt10" for="SelectRadio_1">She wasn't used to driving.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex mt10" for="SelectRadio_2"> She wasn't used to driving on the right.</label>
            </div>
          </div>
        </div>
        <div class="col sm6 md5 offset-md1">
          <div class="row">
            <p><strong class="u-textColor_4-dark">2.</strong> But after a lot of practice, driving on the right became less strange. So:</p>
            <div class="row-flex mt20 flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex mt10" for="SelectRadio_3">She got used to driving on the left.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex mt10" for="SelectRadio_4"> She didn't get used to driving on the left.</label>
            </div>
          </div>
          <div class="row mt30">
            <p> <strong class="u-textColor_4-dark">3.</strong> Now after three years, driving on the right is no problem for Jane:</p>
            <div class="row-flex mt20 flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex mt10" for="SelectRadio_5">She is used to driving on the right.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex mt10" for="SelectRadio_6"> She isn't used to driving on the right.</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown align-items-center" ng-show="s_actividad == 2">
        <div class="row">
          <div class="col sm6 md6">
            <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_12_2.png" alt="" srcset=""/>
              <p class="ta-c"> <strong>Situation 2</strong></p>
            </div>
          </div>
          <div class="col sm6 md6">
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">4.</strong> Juan is Spanish and came to live in Colombia. In Spain he always had dinner late in the evening, but in Colombia dinner was at 7 o’clock. This was very early for him because:</p>
            </div>
            <div class="row">
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_7">He wasn't used to having dinner so early.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_8"> He got used to having dinner so early.</label>
              </div>
            </div>
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">5.</strong> He's been living in Colombia for some time now. Now he finds early dinners quite normal.</p>
              <div class="row-flex mt20 flex-column">
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_9">He was used to having early dinners.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex mt10" for="SelectRadio_10"> He got used to having early dinners.</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>