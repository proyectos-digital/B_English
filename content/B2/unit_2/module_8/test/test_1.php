
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <h5><strong class="u-textColor_4">1. </strong> Match the halves to form complete sentences.</h5>
        <div class="row mt10-sm mt20-md"><img class="u-responsive-img col xs3 offset-xs2 col-center showTo-md " src="unit_2/module_8/assets/images/test_1.png" alt=""/><img class="u-responsive-img col xs3 offset-xs2  col-center showTo-md " src="unit_2/module_8/assets/images/test_2.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md9 col-center mt10-sm mt20-md">
          <div class="col xs12 md12 col-center" data-ejercicio="unir">
            <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">I used to eat a lot of chocolate but…</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Peter used to work in Peru but…</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">I used to take the subway to work but…</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">When I lived in the city…</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">She used to play the violin but…</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">I often used to go to the theater.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">now she plays the guitar.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">now he works in Chile.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">I drive a very old car.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">now I´m on a diet.</span></div>
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
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>