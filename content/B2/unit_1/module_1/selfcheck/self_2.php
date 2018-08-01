
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_2" ng-init="DragandDrop()">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Drag and drop the correct verb to complete the sentences.</h5>
      <div class="row"> 
        <p class="col xs12 mb30">                        </p>
        <div class="row">
          <div class="col xs4 sm3 md2">
            <div class="dragCont">
              <div class="drag">playing</div>
            </div>
          </div>
          <div class="col xs4 sm3 md2">
            <div class="dragCont">
              <div class="drag">having</div>
            </div>
          </div>
          <div class="col xs4 sm3 md2">
            <div class="dragCont">
              <div class="drag">doing</div>
            </div>
          </div>
          <div class="col xs4 sm3 md2">
            <div class="dragCont">
              <div class="drag">raining</div>
            </div>
          </div>
          <div class="col xs4 sm3 md2">
            <div class="dragCont">
              <div class="drag">sleeping</div>
            </div>
          </div>
          <div class="col xs4 sm3 md2">
            <div class="dragCont">
              <div class="drag">watching</div>
            </div>
          </div>
        </div>
        <div class="row mt30">
          <div class="row-flex align-items-center"> 
            <div class="col xs12 md6 col-center lh30"> 
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> I will be <span class="drop"></span> tennis at 11:00 am tomorrow.</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> They won’t be  <span class="drop"></span> TV at that time tonight.</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> What will you be <span class="drop"></span> when I arrive?</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> She will not be <span class="drop"></span> when you telephone her.</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> We’ll be <span class="drop"></span> dinner when the film starts.</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> Take your umbrella. It will be <span class="drop"></span> when you return.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>