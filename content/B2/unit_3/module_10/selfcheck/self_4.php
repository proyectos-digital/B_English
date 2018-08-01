
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">                          
          <div class="row row-flex">
            <div class="col-flex-xs9 col-center"><span class="dragCont m-a"><span class="drag">about</span></span><span class="dragCont m-a"><span class="drag">things like that</span></span><span class="dragCont m-a"><span class="drag">someone like that</span></span><span class="dragCont m-a"><span class="drag">around</span></span><span class="dragCont m-a"><span class="drag">or so</span></span></div>
          </div>
          <div class="row row-flex mt40">
            <div class="col-flex-xs9 col-center">
              <ul class="c-listDefault">
                <li class="mb30"><strong class="u-textColor_4-dark">1</strong>. There were 30  <span class="drop"></span> people at the meeting.</li>
                <li class="mb30"><strong class="u-textColor_4-dark">2</strong>. I’ve typed some letters, reports and   <span class="drop"></span>.</li>
                <li class="mb30"><strong class="u-textColor_4-dark">3</strong>. It’s  <span class="drop"></span> half past two.</li>
                <li class="mb30"><strong class="u-textColor_4-dark">4</strong>. You have to ask a doctor or a lawyer or  <span class="drop"></span>.</li>
                <li class="mb30"><strong class="u-textColor_4-dark">5</strong>. It cost   <span class="drop"></span> 20 pounds or so.
                  
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/self_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>