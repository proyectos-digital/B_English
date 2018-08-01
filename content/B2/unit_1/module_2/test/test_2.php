
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 offset-md1">
          <div class="row mt20 m-a">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A.</strong>He said he would buy that very expensive house.</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. (1)
                  <input class="c-input js-escribir " type="text" placeholder="Text here..."/></strong></div>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> A.</strong>I lost my wallet.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. (2)
                  <input class="c-input js-escribir " type="text" placeholder="Text here..."/></strong></div>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> A.</strong>I went to Bali last month.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. (3)
                  <input class="c-input js-escribir " type="text" placeholder="Text here..."/></strong></div>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> A.</strong>I fixed it with a hammer.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. (4)
                  <input class="c-input js-escribir " type="text" placeholder="Text here..."/></strong></div>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> A.</strong>The assignment was due yesterday.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. (5)
                  <input class="c-input js-escribir " type="text" placeholder="Text here..."/></strong></div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm6 col-flex-md4 mt30-md showTo-md"><img class=" u-responsive-img m-a" src="unit_1/module_2/assets/images/test_2_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>