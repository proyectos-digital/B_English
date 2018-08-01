
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1" ng-init="unirColumnasFuncion()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row">
          <h5>Match the picture with its graphic definition:</h5>
        </div>
        <div class="row-flex justify-center col col-center mt40" data-ejercicio="unir">
          <div class="js-columnas" id="sourceElements"><span class="treeItem" id="Item1_0" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_1_1.png" alt=""/></span><span class="treeItem" id="Item1_1" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_1_2.png" alt=""/></span><span class="treeItem" id="Item1_2" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_1_3.png" alt=""/></span><span class="treeItem" id="Item3_3" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_1_4.png" alt=""/></span><span class="treeItem" id="Item3_4" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_1_5.png" alt=""/></span><span class="treeItem" id="Item3_5" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_1_6.png" alt=""/></span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas" id="targetElements"><span class="treeItem ta-c" id="Item0_0" onclick="setTarget(this)" seleccion="seleccion" valor="1"><span class="centrado">Canoeing</span></span><span class="treeItem ta-c" id="Item0_1" onclick="setTarget(this)" seleccion="seleccion" valor="2"><span class="centrado">Climbing</span></span><span class="treeItem ta-c" id="Item0_2" onclick="setTarget(this)" seleccion="seleccion" valor="3"><span class="centrado">Rappel</span></span><span class="treeItem ta-c" id="Item0_3" onclick="setTarget(this)" seleccion="seleccion" valor="1"><span class="centrado">Skating</span></span><span class="treeItem ta-c" id="Item0_4" onclick="setTarget(this)" seleccion="seleccion" valor="2"><span class="centrado">Camping</span></span><span class="treeItem ta-c" id="Item0_5" onclick="setTarget(this)" seleccion="seleccion" valor="3"><span class="centrado">Mountain biking</span></span></div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"> </button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>