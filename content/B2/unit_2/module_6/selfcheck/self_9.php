
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>I can express certainty, probability, and doubt.</h5>
      <p>Read the following chart about statistical probability for some events to happen. Then, write a sentence about yourself, as in the example.</p>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• Only one person in 11,500 wins an Oscar.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• Only 1 in 12 million people can become an astronaut.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuariob"></textarea>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• Around 1 person in 13,300,000 can get Ebola.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuarioc"></textarea>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• One person in 700 million can be directly killed by a small meteorite.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuariod"></textarea>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• Only 1 person in 900,000 can become president of Colombia.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuarioe"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside  is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/selfcheck/self_9_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>