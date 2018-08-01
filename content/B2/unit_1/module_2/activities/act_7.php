
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Choose the best option to complete their predictions.</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row">
            <p class="mt30"><strong>1. </strong>In 5 years’ time, supply sales 
              <input class="c-input ancho170" disabled="disabled" type="text" ng-model="txtcaptura_a"/> slightly between February and March.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_1" ng-click="txtcaptura_a='will have been raising'"><span>will have been raising</span></label>
              <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_2" ng-click="txtcaptura_a='will have raising'"><span>will have raising</span></label>
              <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_3" ng-click="txtcaptura_a='will not have been raising'"><span>will not have been raising</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30"><strong>2. </strong>Compared to August, sales 
              <input class="c-input ancho190" disabled="disabled" type="text" ng-model="txtcaptura_b"/> in September.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_4" ng-click="txtcaptura_b='will have been starting to drop'"><span>will have been starting to drop</span></label>
              <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_5" ng-click="txtcaptura_b='will have started to drop'"><span>will have started to drop</span></label>
              <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_6" ng-click="txtcaptura_b='will not have been dropping'"><span>will not have been dropping</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30"><strong>3. </strong>Sales 
              <input class="c-input ancho170" disabled="disabled" type="text" ng-model="txtcaptura_c"/> 20,000 units by August.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_7" ng-click="txtcaptura_c='will not have reached'"><span>will not have reached</span></label>
              <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_8" ng-click="txtcaptura_c='will have reached'"><span>will have reached</span></label>
              <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_9" ng-click="txtcaptura_c='will have been reaching'"><span>will have been reaching</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30"><strong>4. </strong>By November and December, sales 
              <input class="c-input ancho170" disabled="disabled" type="text" ng-model="txtcaptura_d"/> at 1,000 units.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_4" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_10" ng-click="txtcaptura_d='will have been leveling'"><span>will have been leveling</span></label>
              <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_4" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_11" ng-click="txtcaptura_d='will have leveled'"><span>will have leveled</span></label>
              <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_4" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_12" ng-click="txtcaptura_d='will be leveling'"><span>will be leveling</span></label>
            </div>
          </div>
        </div>
        <div class="col col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row">
            <p class="mt30"><strong>5. </strong>Taking June, July and August, sales 
              <input class="c-input ancho160" disabled="disabled" type="text" ng-model="txtcaptura_e"/> 15,000 units that year.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_5" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_13" ng-click="txtcaptura_e='will have been averaging'"><span>will have been averaging</span></label>
              <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_5" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_14" ng-click="txtcaptura_e='will have averaged'"><span>will have averaged</span></label>
              <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_5" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_15" ng-click="txtcaptura_e='will average'"><span>will average</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30"><strong>6. </strong>Sales 
              <input class="c-input ancho190" disabled="disabled" type="text" ng-model="txtcaptura_f"/> 20,000 units by August.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_16" type="radio" name="selInputRadio_6" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_16" ng-click="txtcaptura_f='will not have increased'"><span>will not have increased</span></label>
              <input class="c-inputRadio" id="inputRadio_17" type="radio" name="selInputRadio_6" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_17" ng-click="txtcaptura_f='will have increased'"><span>will have increased</span></label>
              <input class="c-inputRadio" id="inputRadio_18" type="radio" name="selInputRadio_6" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_18" ng-click="txtcaptura_f='will not have been increasing'"><span>will not have been increasing</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30"><strong>7. </strong>In 5 years, sales 
              <input class="c-input ancho200" disabled="disabled" type="text" ng-model="txtcaptura_g"/> to 4000 units from September to October.
            </p>
            <div class="row-flex justify-evenly flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_19" type="radio" name="selInputRadio_7" value="1"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_19" ng-click="txtcaptura_g='will have been decreasing'"><span>will have been decreasing</span></label>
              <input class="c-inputRadio" id="inputRadio_20" type="radio" name="selInputRadio_7" value="2"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_20" ng-click="txtcaptura_g='will not have been decreasing'"><span>will not have been decreasing</span></label>
              <input class="c-inputRadio" id="inputRadio_21" type="radio" name="selInputRadio_7" value="3"/>
              <label class="c-Checkbox mb10 col-flex-xs10 col-flex-sm7 col-flex-md4" for="inputRadio_21" ng-click="txtcaptura_g='will have decreased'"><span>will have decreased</span></label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice u-bgIconInfoActivity is-active" ng-click="idNotice = 1"> </button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>