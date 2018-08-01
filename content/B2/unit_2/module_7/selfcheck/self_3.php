
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 col-center">
          <div class="mt40 row" data-ejercicio="unir">                
            <div class="ancho350 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Don’t leave the room.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">They said they looked around but couldn’t find me.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">He asked us where we wanted to go.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Have you been saving water?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">My friend told me it was always good to see me.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="6">My boss asked me whether I was busy.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho350 js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="6">Are you busy?</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">It’s always good to see you!</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="4">The man asked us if we had been saving water.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">Where do you want to go?</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">We looked around, but couldn’t find you.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">She told us not to leave the room.</span></div>
          </div>
        </div>
        <div class="col sm12 md6 col-center">
          <div class="row-flex align-items-center"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/self_6.png" alt="act_2"/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>