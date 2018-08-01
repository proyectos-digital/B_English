
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt40-md align-items-center">
        <div class="col-flex-sm4 col-flex-xs5 col-center showTo-md">
          <div class="row mt40"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/sel_6.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm11 col-flex-md7 col-center">
          <div class="row">
            <h6><strong class="u-textColor_4">1. </strong> Match the columns to complete the answers.</h6>
          </div>
          <div class="row mt30" data-ejercicio="unir">
            <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">I am used to getting up early in the morning.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">He didn’t complain about the neighbors’ loud party.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">I don’t think Daniel is strange.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">I don’t understand him.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Now I can understand him</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">I got used to waking up early in the morning.</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">After a while he didn’t mind the noise in the office.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho250 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="7">He got used to it.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="2">He was used to the noise.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">I'm used to him.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="4">I'm not used to his accent yet.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">I don't mind it.</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="6">Now my days are longer!</span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="5">I got used to his Scottish accent after a while.</span></div>
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