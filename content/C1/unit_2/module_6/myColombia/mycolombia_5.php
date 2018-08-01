
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()">
      <div class="row mt30-md mt20-xs">
        <p>
          Look at the pictures below and match them to the description. 
          
        </p>
        <div class="col xs12 col-center row-flex justify-center">
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A deadly tornado</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A massive tsunami</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">An explosive volcanic eruption</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A Severe drought</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A disastrous wildfire</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A Catastrophic flood</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A fast moving landslide</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A large sinkhole</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A shallow earthquake</div></span></div>
          <div class="col xs6 md2 mt30"><span class="dragCont">
              <div class="drag">A destructive hurricane</div></span></div>
        </div>
        <div class="col xs12 col-center row-flex justify-center">
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_1.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_2.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_3.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_4.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_5.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_6.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_7.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_8.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_9.png" alt="myColombia"/></div>
          <div class="col xs6 md2 mt30"><span class="drop w100 margin0 "></span><img class="u-responsive-img m-a w100 mt10" src="unit_2/module_6/assets/images/col_8_10.png" alt="myColombia"/></div>
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
