
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <h5>The following are the steps to make soft cheese. Put them in the appropriate order.</h5>
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md12 col-center padding10">
          <div class="c-blue-text ancho180 ml10 mr10 ta-c f-l">Step 1<img class="u-responsive-img ancho180 mt10" src="unit_2/module_8/assets/images/act_12a.png" alt=""/><span class="drop h160 w100 centrado mt30"></span></div>
          <div class="c-blue-text ancho180 ml10 mr10 ta-c f-l">Step 2<img class="u-responsive-img ancho180 mt10" src="unit_2/module_8/assets/images/act_12b.png" alt=""/><span class="drop h160 w100 centrado mt30"></span></div>
          <div class="c-blue-text ancho180 ml10 mr10 ta-c f-l">Step 3<img class="u-responsive-img ancho180 mt10" src="unit_2/module_8/assets/images/act_12c.png" alt=""/><span class="drop h160 w100 centrado mt30"></span></div>
          <div class="c-blue-text ancho180 ml10 mr10 ta-c f-l">Step 4<img class="u-responsive-img ancho180 mt10" src="unit_2/module_8/assets/images/act_12d.png" alt=""/><span class="drop h160 w100 centrado mt30"></span></div>
          <div class="c-blue-text ancho180 ml10 mr10 ta-c f-l">Step 5<img class="u-responsive-img ancho180 mt10" src="unit_2/module_8/assets/images/act_12e.png" alt=""/><span class="drop h160 w100 centrado mt30"></span></div>
        </div>
        <div class="col-flex-sm12 col-flex-md12 col-center padding10">
          <div class="dragCont ancho160 m-a mt10 f-l ml20 mr20">
            <div class="drag h160">After about 24 hours you can open the cloth. Form the cheese into a ball and keep it in the fridge. It is best if you eat it within the next 2 days.</div>
          </div>
          <div class="dragCont ancho160 m-a mt10 f-l ml20 mr20">
            <div class="drag h160">Add a small spoon of salt and mix it again.</div>
          </div>
          <div class="dragCont ancho160 m-a mt10 f-l ml20 mr20">
            <div class="drag h160">Leave the cheese inside the cloth.</div>
          </div>
          <div class="dragCont ancho160 m-a mt10 f-l ml20 mr20">
            <div class="drag h160">Put the yogurt in a bowl and mix it up so it is smooth.</div>
          </div>
          <div class="dragCont ancho160 m-a mt10 f-l ml20 mr20">
            <div class="drag h160">Put into a clean thin cloth. Lift the four corners and tie a knot in the cloth. Put it in a second bowl s liquid can fall through the cloth.</div>
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