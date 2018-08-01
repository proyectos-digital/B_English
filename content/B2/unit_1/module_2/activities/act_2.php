
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row mb30 ta-c showTo-md">
            <figure class="c-figure-Rombo" figure-size="25">
              <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_1/module_2/assets/images/act_2.png" alt=""/></div>
            </figure>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Complete the sentences using the future perfect or the future perfect continuous.</h5>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>By the time we get to the party, the guests: <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(eat) </strong>everything.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>When we get to October next year, we <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(live) </strong>here for 18 years.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>There´s no point leaving now. The bus <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(left) </strong>when we get to the bus stop.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>Be prepared to be standing up the entire concert. All the seats <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(take) </strong>when we arrive.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>When you get to your destination, you <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(fly) </strong>for 6 hours.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 6. </strong>This time tomorrow, I <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(finish) </strong>all my classes.</div>
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