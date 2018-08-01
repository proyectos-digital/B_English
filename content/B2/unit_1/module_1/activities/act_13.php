
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong>  Read the following examples. Pay attention to the words in bold.</h5>
      </div>
      <div class="row-flex">
        <ul class="c-listDefault">
          <li>José Pardo <strong>will have been teaching</strong> at the university for more than a year by the time he leaves for Europe.</li>
          <li>How long <strong>will you have been studying</strong> when you graduate?</li>
        </ul>
      </div>
      <div class="row mt40 ">
        <h6>Complete the sentences using the correct form of the verb.</h6>
      </div>
      <div class="row-flex mt40-md">
        <div class="col-flex-sm4 col-flex-xs5 col-center ta-c mb40 showTo-md"><img class="u-responsive-img" src="./unit_1/module_1/assets/images/act_13_1.png" alt="" srcset=""/></div>
        <div class="col-flex-sm11 col-flex-md7 col-center">
          <div class="row-flex mt40-xs">
            <ol class="c-listDefault row mb30" data-ejercicio="">
              <li><span>She will have been </span><strong>(work)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>here for 3 hours by 9 this morning!</span></li>
              <li><span>Tomás will have been </span><strong>(study)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>for four hours by the time he takes the test.</span></li>
              <li><span>What will they have been </span><strong>(do)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>by the time we arrive?</span></li>
              <li><span>Kevin and Anderson won’t have been</span><strong> (play) </strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>tennis for long by six o’clock.</span></li>
              <li><span>How long will they have been </span><strong>(wait)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>by the time he arrives?</span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction is-active u-bgIconAlert openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>