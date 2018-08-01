
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="unirColumnasFuncion()">
      <article class="col xs12 md8 col-center">
        <h5>A wide range of vocabulary is used to when we speak about fashion. Match the words to the pictures.</h5>
        <div class="row-flex justify-center col col-center mt40" data-ejercicio="unir">
          <div class="js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_3_1.png" alt="myColombia"/></span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_3_2.png" alt="myColombia"/></span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_3_3.png" alt="myColombia"/></span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_3_4.png" alt="myColombia"/></span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas row-flex" id="targetElements"><span class="treeItem ta-c" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">Sarong</span><span class="treeItem ta-c" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">Corsage</span><span class="treeItem ta-c" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="1">Lapel Pin</span><span class="treeItem ta-c" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">Cufflinks</span></div>
        </div>
      </article>
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