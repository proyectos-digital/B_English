
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()">
      <div class="row mt30-md mt20-xs">
        <h6>Matc these iconic science pictures to their names  </h6>
        <p>
          Let’s review some common science words and what they mean.
          
        </p>
        <div class="col xs12 col-center row-flex justify-center"><span class="dragCont mt10">
            <div class="drag">Atom</div></span><span class="dragCont mt10">
            <div class="drag">Hazard</div></span><span class="dragCont mt10">
            <div class="drag">Microscope</div></span><span class="dragCont mt10">
            <div class="drag">DNA</div></span><span class="dragCont mt10">
            <div class="drag">Fossil</div></span><span class="dragCont mt10">
            <div class="drag">Evolution</div></span><span class="dragCont mt10">
            <div class="drag">An animal cell</div></span><span class="dragCont mt10">
            <div class="drag">equation</div></span></div>
        <div class="col xs12 col-center row-flex justify-center">
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_1.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_2.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_3.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_4.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_5.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_6.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_7.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_3/module_11/assets/images/col_3_8.png" alt="myColombia"/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>
<style>
  .treeItem[correcta="bien"],
  .treeItem_hi[correcta="bien"],
  .treeItem_set[correcta="bien"]{
      background-color: var(--color_good);
      color: white;
      width: 5px;
  }
  .treeItem[correcta="mal"],
  .treeItem_hi[correcta="mal"],
  .treeItem_set[correcta="mal"]{
      background-color: var(--color_wrong);
      color: white;
      width: 5px;
      
  }
</style>