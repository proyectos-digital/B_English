
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <h5 class="mb40">From the list in the previous screen, the following are really common: Match the pictures to the verbs.</h5>
        <div class="row">
          <div class="col xs12 sm4 md3">
            <div class="row row-flex">
              <div class="dragCont mt10"><span class="drag">Get lost.</span></div>
              <div class="dragCont mt10"><span class="drag">Get married.</span></div>
              <div class="dragCont mt10"><span class="drag">Go on a diet.</span></div>
              <div class="dragCont mt10"><span class="drag">Go bald.</span></div>
              <div class="dragCont mt10"><span class="drag">Get ready.</span></div>
              <div class="dragCont mt10"><span class="drag">Go bankrupt.</span></div>
            </div>
          </div>
          <div class="col xs12 sm8 md9 mt10-md mt20-xs">
            <div class="row row-flex">
              <div class="col xs6 sm4 md3 col-center mb20"><img class="u-responsive-img _draggableImg" src="unit_2/module_7/assets/images/act_5_1.png" alt="act_2"/>
                <div class="drop mt10"></div>
              </div>
              <div class="col xs6 sm4 md3 col-center mb20"><img class="u-responsive-img _draggableImg" src="unit_2/module_7/assets/images/act_5_2.png" alt="act_2"/>
                <div class="drop mt10"></div>
              </div>
              <div class="col xs6 sm4 md3 col-center mb20"><img class="u-responsive-img _draggableImg" src="unit_2/module_7/assets/images/act_5_3.png" alt="act_2"/>
                <div class="drop mt10"></div>
              </div>
              <div class="col xs6 sm4 md3 col-center mb20"><img class="u-responsive-img _draggableImg" src="unit_2/module_7/assets/images/act_5_4.png" alt="act_2"/>
                <div class="drop mt10"></div>
              </div>
              <div class="col xs6 sm4 md3 col-center mb20"><img class="u-responsive-img _draggableImg" src="unit_2/module_7/assets/images/act_5_5.png" alt="act_2"/>
                <div class="drop mt10"></div>
              </div>
              <div class="col xs6 sm4 md3 col-center mb20"><img class="u-responsive-img _draggableImg" src="unit_2/module_7/assets/images/act_5_6.png" alt="act_2"/>
                <div class="drop mt10"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_5_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>