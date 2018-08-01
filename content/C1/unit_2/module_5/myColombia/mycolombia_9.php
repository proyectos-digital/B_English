
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_9">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h6>When we travel whether nationally in Colombia or internationally to other countries we need to understand how to maneuver through the airport. </h6>
        <p>
          Look at the pictures below and match them to the description. 
          
        </p>
        <div class="col xs12 col-center mt30" data-ejercicio="unir">
          <div class="js-columnas" id="sourceElements"><span class="treeItem ta-c" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="responsive-img m-a w30" src="unit_2/module_5/assets/images/col_9_1.png" alt="myColombia"/>  </span><span class="treeItem ta-c" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="responsive-img m-a w30" src="unit_2/module_5/assets/images/col_9_2.png" alt="myColombia"/> </span><span class="treeItem ta-c" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="responsive-img m-a w30" src="unit_2/module_5/assets/images/col_9_3.png" alt="myColombia"/></span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas row-flex flex-column justify-center" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">Baggage claim, a carousel where checked bags can be reclaimed after you have arrived at your destination airport. </span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="2">Disembarking a plane.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="1">Boarding a plane.</span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>