
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex mt20-xs mt10-md mt10-sm">
        <div class="col-flex-xs11 col-flex-md5 col-center mt10-sm mt20-md padding10">
          <div class="dragCont">
            <div class="drag">You may have left it in your room.</div>
          </div>
          <div class="dragCont">
            <div class="drag">I am positive you put it on the refrigerator yesterday.</div>
          </div>
          <div class="dragCont">
            <div class="drag">You might have forgotten it the restaurant.</div>
          </div>
          <div class="dragCont">
            <div class="drag">You can´t have left it in the classroom.</div>
          </div>
          <div class="dragCont">
            <div class="drag">You must have lost it in the bus.</div>
          </div>
        </div>
        <div class="col-flex-xs11 col-flex-md5 col-center mt10-sm mt20-md padding10">
          <p><span class="drop  "></span></p>
          <p><span class="drop mt10"></span></p>
          <p><span class="drop mt10"></span></p>
          <p><span class="drop mt10"></span></p>
          <p><span class="drop mt10"></span></p>
        </div>
        <div class="col-flex-xs3 col-flex-md2 col-center mt10-sm mt20-md showTo-md"><img class="u-responsive-img w45 ml10" src="unit_2/module_6/assets/images/self_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>