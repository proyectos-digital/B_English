
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_8" ng-init="DragandDrop()">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row"> 
        <div class="row row-flex">
          <div class="dragCont">
            <div class="drag"><span>By the next month, <strong>I will have been saving</strong> money for a new house for 4 years.</span></div>
          </div>
          <div class="dragCont">
            <div class="drag"><span>By the next year, Ben and his wife <strong>will have been living</strong> together for 50 years.</span></div>
          </div>
          <div class="dragCont">
            <div class="drag"><span>By this time, they <strong>will have been working</strong> for 12 hours, so they will be very tired.</span></div>
          </div>
          <div class="dragCont">
            <div class="drag"><span>Before they arrive, we <strong>will have been cleaning</strong> the house for 5 hours.</span></div>
          </div>
          <div class="dragCont">
            <div class="drag"><span>We <strong>will have been driving</strong> 6 hours by the time we get home.</span></div>
          </div>
        </div>
        <div class="row row-flex align-items-center"> 
          <div class="row"> 
            <div class="col xs6 md4 ta-c"><img class="u-responsive-img _draggableImg" src="unit_1/module_1/assets/images/self_8_1.png" alt=""/><span class="drop centrado"> </span></div>
            <div class="col xs6 md4 ta-c"><img class="u-responsive-img _draggableImg" src="unit_1/module_1/assets/images/self_8_2.png" alt=""/><span class="drop centrado"> </span></div>
            <div class="col xs6 md4 ta-c"><img class="u-responsive-img _draggableImg" src="unit_1/module_1/assets/images/self_8_3.png" alt=""/><span class="drop centrado"> </span></div>
            <div class="col xs6 md4 ta-c"><img class="u-responsive-img _draggableImg" src="unit_1/module_1/assets/images/self_8_4.png" alt=""/><span class="drop centrado"> </span></div>
            <div class="col xs6 md4 ta-c"><img class="u-responsive-img _draggableImg" src="unit_1/module_1/assets/images/self_8_5.png" alt=""/><span class="drop centrado"> </span></div>
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