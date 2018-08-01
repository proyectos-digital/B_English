
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Choose a verb from the box to complete your sentences.</h5>
      <h6 class="ml20">Include it in the phrase in its passive form</h6>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center ">
              <p>discover // build // win // elect // paint</p>
            </div>
          </div>
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img m-a" src="unit_1/module_4/assets/images/test_1.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>The Eiffel Tower / 1889 / Gustave Eiffel / France</div>
            </div><span class="c-textField w100">
              <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>George Washington / 1798 / president of the United States </div>
            </div><span class="c-textField w100">
              <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>The Mona Lisa / Leonardo Da Vinci / 1507</div>
            </div><span class="c-textField w100">
              <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>A Nobel Prize for Physics / Albert Einstein / 1921</div>
            </div><span class="c-textField w100">
              <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>Gravity / Sir Isaac Newton / England / 1666</div>
            </div><span class="c-textField w100">
              <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
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