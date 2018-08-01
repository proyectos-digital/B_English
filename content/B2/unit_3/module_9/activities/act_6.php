
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
          <div class="row"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_6.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row">
            <h6>Questions.</h6>
            <p class="mt20"><strong class="u-textColor_4-dark">1.</strong> Have you ever dreamed of seeing the world? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          </div>
          <div class="row mt10">
            <p><strong class="u-textColor_4-dark">2.</strong> What is the Assistant Directors responsible for? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          </div>
          <div class="row mt10">
            <p><strong class="u-textColor_4-dark">3.</strong> What qualifications do the candidates need to be experienced in? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          </div>
          <div class="row mt10">
            <p><strong class="u-textColor_4-dark">4.</strong> Should candidates have experience in planning recreational activities? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          </div>
          <div class="row mt10">
            <p><strong class="u-textColor_4-dark">5.</strong>What about other languages, is that necessary to apply for the position?<span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>