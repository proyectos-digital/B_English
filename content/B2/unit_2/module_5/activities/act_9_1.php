
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h6>Analyze the sentences and decide which event happens first and second.</h6>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="c-cardGreen h40">
              <div class="c-cardGreenContent">
                <p class="ta-c mt20">We had been sleeping for 12 hours</p>
              </div>
            </div>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">First</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">Second</label>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> <img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_9_1.png" alt="" srcset=""/></div>
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
