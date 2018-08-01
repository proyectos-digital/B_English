
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <h5 class="mb35">Look at the following picture and guess what the activity is about.</h5>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img w75" src="unit_3/module_10/assets/images/col_1_1.png" alt="col_1"/></div>
        <div class="col xs12 md6 ta-l">
          <p>
            <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
            <label class="c-Checkbox w100" for="inputRadio_1" ng-click="txtcaptura_a='told'"><span> Tourism.</span></label>
          </p>
          <p>
            <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
            <label class="c-Checkbox w100" for="inputRadio_2" ng-click="txtcaptura_a='told'"><span> Colombia customs.</span></label>
          </p>
          <p>
            <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
            <label class="c-Checkbox w100" for="inputRadio_3" ng-click="txtcaptura_a='told'"><span> Legal errands.</span></label>
          </p>
          <p>
            <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_1" value="4"/>
            <label class="c-Checkbox w100" for="inputRadio_4" ng-click="txtcaptura_a='told'"><span> Colombians living in another country.</span></label>
          </p>
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
 