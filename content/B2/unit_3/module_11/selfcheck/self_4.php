
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md9 col-center mt10-sm mt20-md ta-j">
          <div class="col xs12 md12 col-center" data-ejercicio="unir">
            <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Come forward.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Keep score.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Come a long way.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Keep an eye on.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Come adrift.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="6">Keep away.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">To improve a lot, or to make a lot of progress.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">To become separated from something.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">To count the number of times that something happens.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="6">To avoid someone or something, or to make someone else do this.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">To offer help or information.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">To look after someone or something.</span></div>
          </div>
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
<!-- ============================== -->
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>