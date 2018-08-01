
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img w45 f-l ml10 mb20 m-a" src="unit_1/module_4/assets/images/self_6b.png" alt=""/><img class="u-responsive-img w45 f-l ml10 mb20 m-a" src="unit_1/module_4/assets/images/self_6c.png" alt=""/><img class="u-responsive-img w45 f-l ml10 mb20 m-a" src="unit_1/module_4/assets/images/self_6a.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>Hiram Bingham rediscovered the lost city in 1911.</div><span class="c-textField w100">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>A Spanish nobleman discovered bones in Altamira.  </div><span class="c-textField w100">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>His daughter found colorful paintings in the cave.</div><span class="c-textField w100">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>Artists decorated the walls of Angkor Wat with stone sculptures. </div><span class="c-textField w100">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>People forgot the city of Machu Picchu for hundreds of years. </div><span class="c-textField w100">
                <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            </div>
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