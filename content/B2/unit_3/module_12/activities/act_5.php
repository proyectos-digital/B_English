
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <h5 class="mt30 mb60 row">A friend of yours has recently lost a very dear uncle. Write a short sympathy note to her expressing your condolences. Use expressions from the box and add your own information.</h5>
        <div class="col xs12 md7">
          <div class="col xs12 md11 col-center">
            <div class="c-cardBlue">
              <div class="c-cardBlueContent">
                <ul class="lh30">
                  <li>• My heartfelt condolences on your loss.</li>
                  <li>• Our thoughts are with you.</li>
                  <li>• She/he meant a lot of things to many people and will be missed.</li>
                  <li>• Thinking of you in your time of loss.</li>
                  <li>• We are very saddened to hear of your loss. With deepest sympathies.</li>
                  <li>• You have my sincere sympathy.</li>
                  <li>• You have our deepest sympathy.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row-flex">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>