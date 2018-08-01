
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt10-md">
          <h5>Read the following sentences. Pay attention to the words in bold.</h5>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• We <strong>used to play </strong>in this park when I was a child.</div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">
              <p>• There <strong>didn´t use to be </strong> mall here before.</p>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• My brother <strong>had/used to have </strong>a red bicycle.</div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• We <strong>went </strong>to Bucaramanga in 2013. </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt70-md">
          <p><strong>Look at the examples and complete the rules.</strong></p>
          <div class="mb20 row-flex mt20">
            <div>• We use </div><span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>to talk about past states.</span>
          </div>
          <div class="mb20 row-flex mt20">
            <div>• When an action happened only once we use </div><span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
          </div>
          <div class="mb20 row-flex mt20">
            <div>• We can use </div><span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>or</span><span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>to talk about repeated past actions.</span>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_8/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>