
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">           
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong>  Read the following examples. Pay attention to words in bold.</h5>
      </div>
      <div class="row-flex">
        <ul class="c-listDefault">
          <li><strong>By the time</strong> I’m 50, I will have worked for 28 years.</li>
          <li>You must complete the application <strong>by</strong> Friday.</li>
          <li>We will have to wait <strong>until</strong> next week and then decide.</li>
        </ul>
      </div>
      <div class="row-flex mt40-md">
        <div class="col-flex-sm4 col-flex-xs5 col-center ta-c mb40"><img class="u-responsive-img" src="./unit_1/module_1/assets/images/act_10_1.png" alt="" srcset=""/></div>
        <div class="col-flex-sm11 col-flex-md7 col-center">
          <div class="row-flex mt40-md">
            <ol class="c-listDefault row mb30" data-ejercicio="">
              <li><span>Use</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>to express when an action will be complete at a specific time in the future.</span></li>
              <li><span>Use</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>to mean “not before” and “not after and not before”.</span></li>
              <li><span>Use</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span> to mean “not after” or “not later than”.</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconAlert is-active openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>