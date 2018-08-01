
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
          <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/tes_1.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row">
            <p> <strong class="u-textColor_4-dark">1.</strong> I <strong>(have)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>that computer for 6 years before it<strong> (break) </strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>down.    </p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">2.</strong> The old woman <strong>(want)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>to sit down because she <strong>(stand)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>for a long time.</p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">3.</strong>  James <strong>(be)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>tired because he<strong> (correct)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>exam papers all day.</p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">4.</strong> We <strong>(wait)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>at the bus stop for more than an hour when the bus finally <strong>(arrive) </strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">5.</strong><strong> (you ever go) </strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>to the opera before tonight?</p>
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
