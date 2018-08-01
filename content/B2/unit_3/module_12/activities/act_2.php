
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1. </span></strong><span>A woman is running down the street.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_1" ng-click="txtcaptura_a='for'">She should go to the doctor.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_2" ng-click="txtcaptura_a='to'">She may be late for work.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_3" ng-click="txtcaptura_a='on'">She would be late for work.</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2. </span></strong><span>Your boss has been on the phone for more than an hour.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_4" ng-click="txtcaptura_b='for'">He could have a family problem.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_5" ng-click="txtcaptura_b='of'">He can have a family problem.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_6" ng-click="txtcaptura_b='about'">He should have a family problem.</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3. </span></strong><span>There´s an empty old building in the corner of your street.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_7" ng-click="txtcaptura_c='at'">They shall remodel it.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_8" ng-click="txtcaptura_c='about'">They would remodel it.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_9" ng-click="txtcaptura_c='of'">They could remodel it.</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4. </span></strong><span> You asked for a taxi and it never arrived. </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_10" ng-click="txtcaptura_d='up'">The driver will have gotten lost.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_11" ng-click="txtcaptura_d='in'">The driver must have gotten lost.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_12" ng-click="txtcaptura_d='off'">The driver should have gotten lost.</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5. </span></strong><span> You are at a restaurant and have been waiting for more than 30 minutes for your order.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_13" ng-click="txtcaptura_e='in'">The waiter could have forgotten to take your order to the kitchen.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_14" ng-click="txtcaptura_e='to'">The waiter shall have forgotten to take your order to the kitchen.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected row ml10 mr10 mt10" for="SelectRadio_15" ng-click="txtcaptura_e='on'">The waiter would have forgotten to take your order to the kitchen.</label>
              </div>
            </p>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>