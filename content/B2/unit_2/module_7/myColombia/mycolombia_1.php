
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row mt40 ">
        <h5 class="row">Match the first column with the second to form a perfect match for these words:</h5>
        <div class="row-flex align-items-center mt40">
          <div class="col xs12 md6 showTo-md">
            <div class="row">
              <div class="col xs6 ta-c"><img class="u-responsive-img col sm10 mt30" src="unit_2/module_7/assets/images/col_1_1.png" alt=""/></div>
              <div class="col xs6 ta-c"><img class="u-responsive-img col sm10 mt30 " src="unit_2/module_7/assets/images/col_1_2.png" alt=""/></div>
            </div>
            <div class="row">
              <div class="col xs6 col-center"><img class="u-responsive-img col sm10 centrado" src="unit_2/module_7/assets/images/col_1_3.png" alt=""/></div>
            </div>
          </div>
          <div class="col xs12 sm12 md6 ">
            <div class=" row m-a" data-ejercicio="unir">
              <div class="ancho300 js-columnas" id="sourceElements"><span class="ta-c treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Sports</span><span class="ta-c treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Oil</span><span class="ta-c treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Oyster</span><span class="ta-c treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Fire</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho300 js-columnas" id="targetElements"> <span class="ta-c treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">duct</span><span class="ta-c treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">station</span><span class="ta-c treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="1">arena</span><span class="ta-c treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">shells</span></div>
            </div>
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