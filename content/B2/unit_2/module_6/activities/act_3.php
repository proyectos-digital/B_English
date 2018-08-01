
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-xs10 col-flex-md5 col-center mt10-sm mt20-md m-a">
          <div class="dragCont f-l ml30">
            <div class="drag">Get By.</div>
          </div>
          <div class="dragCont f-l ml30">
            <div class="drag">Get Up.</div>
          </div>
          <div class="dragCont f-l ml30">
            <div class="drag">Get On.</div>
          </div>
        </div>
      </div>
      <div class="row-flex mt20-xs mt10-md mt10-sm">
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3a.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3b.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3c.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt20-xs mt10-md mt10-sm">
        <div class="col-flex-xs10 col-flex-md6 col-center mt10-sm mt20-md m-a">
          <div class="dragCont f-l ml30">
            <div class="drag">Turn around.</div>
          </div>
          <div class="dragCont f-l ml30">
            <div class="drag">Come back.</div>
          </div>
          <div class="dragCont f-l ml30">
            <div class="drag">Drive off.</div>
          </div>
        </div>
      </div>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3d.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3e.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3f.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt120-xs mt10-md mt10-sm">
        <div class="col-flex-xs10 col-flex-md6 col-center mt10-sm mt20-md m-a">
          <div class="dragCont f-l ml30">
            <div class="drag">Look out.</div>
          </div>
          <div class="dragCont f-l ml30">
            <div class="drag">Take off.</div>
          </div>
          <div class="dragCont f-l ml30">
            <div class="drag">Break down.</div>
          </div>
        </div>
      </div>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3g.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3h.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
        <div class="col-flex-xs10 col-flex-md3 col-center mt10-sm mt20-md m-a"><img class="u-responsive-img ml10" src="unit_2/module_6/assets/images/act_3i.png" alt=""/><span class="drop centrado ancho150 mt20"></span></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()" ng-show="s_actividad == 3"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 3"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>