
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_2_1.png" alt="" srcset=""/></div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p class="ta-c mt20">
                  Mr. Jones<span class="c-textField">
                  <input class="c-input ta-c js-escribir ml10 mr10" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span>reading a newspaper in the mornings. It's part of his daily routine.</p>
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
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
