
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Complete the sentences with the right form of the verbs.</h5>
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-sm7 col-center"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_7_1.png" alt=""/></div>
        <div class="col-flex-sm11 col-flex-md7 col-center mt30">
          <div class="row-flex">
            <ol class="c-list row mb10" data-ejercicio="">
              <li> By the time the money arrives, we <strong>(go)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>broke.</span></li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-list row mb10" data-ejercicio="">
              <li> By April, my grandfather <strong>(reach)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>eighty.</span></li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-list row mb10" data-ejercicio="">
              <li> The president <strong>(make)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>a decision by the end of the week.</span></li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-list row mb10" data-ejercicio="">
              <li> By 2017, we <strong>(know)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>each other for ten years.</span></li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-list row mb10" data-ejercicio="">
              <li> In five minutes, Eric <strong>(complete)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>the first lap of the race.</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction is-active u-bgIconAlert openNotice" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction is-active u-bgIconInfoActivity openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>