
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt40-md">
        <div class="col-flex-sm4 col-flex-xs5 col-center showTo-md">
          <div class="mt40"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_12_1.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm11 col-flex-md7 col-center">
          <div class="row">
            <h6><strong class="u-textColor_4">1. </strong>  Match the sentences that have the same meaning.</h6>
          </div>
          <div class="row mt30" data-ejercicio="unir">
            <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">That must have been Sara.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">It can’t have been Sara.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">It should have been Sara. </span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">It could have been Sara. </span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">It may have been Sara.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho250 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="5">I am not certain if it was Sara.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">I'm certain it was Sara.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="4">There is a possibility it was Sara.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">I'm sure it wasn't Sara.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3">I expected it to be Sara.</span></div>
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