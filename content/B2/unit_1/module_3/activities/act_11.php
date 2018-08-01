
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row">
        <h5 class="ta-c"><strong class="u-textColor_4">1. </strong>  We can make guesses about the past using<strong class="u-textColor_4-dark">modal verbs + have + past participle.</strong><br/>Choose the right modal to make deductions about an event in the past.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
            <div class="row mt30"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_11_1.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row-flex justify-around mt30">
              <div class="dragCont">
                <div class="drag">Can't</div>
              </div>
              <div class="dragCont">
                <div class="drag">Might</div>
              </div>
              <div class="dragCont">
                <div class="drag">Must</div>
              </div>
              <div class="dragCont">
                <div class="drag">Could</div>
              </div>
              <div class="dragCont">
                <div class="drag">Should</div>
              </div>
              <div class="dragCont">
                <div class="drag">May</div>
              </div>
            </div>
            <div class="row mt50">
              <p><strong class="u-textColor_4-dark">1.</strong><span class="drop ml20"></span><span class="drop"></span>- uncertainty.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">2.</strong><span class="drop ml20"></span>- it was 99% possible.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">3.</strong><span class="drop ml20"></span>- it was 50% possible.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">4.</strong><span class="drop ml20"></span>- expectation.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">5.</strong><span class="drop ml20"></span>- it was 99% impossible.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconAlert openNotice is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_3/activities/act_11_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>