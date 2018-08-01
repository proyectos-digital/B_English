
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row"></div>
      <div class="row-flex mt40-md">
        <div class="col-flex-sm4 col-flex-xs5 col-center showTo-md">
          <div class="row mt40"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/self_3_1.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm11 col-flex-md7 col-center">
          <div class="row mt30" data-ejercicio="unir">
            <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">For</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">During </span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">While  </span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">As a matter of fact</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho250 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">Used when speaking about 2 actions that are happening at the same time</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">Used as a synonym of "in fact."</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="1">Used to express how long something or someone is doing something.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">Used to represent the length of time of an action that is while the action is happening.</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>