
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Match the verbs with prepositions to their meanings.</h5>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-c"><img class="u-responsive-img m-a mt30 showTo-md" src="unit_2/module_8/assets/images/test_1.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="col xs12 md12 col-center" data-ejercicio="unir">
            <div class="js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Dream of</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Escape from</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Forgive for</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Insist on</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Keep on</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="6">Pay for</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">To decide that you will not be angry with someone who has offended, upset, or harmed you.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">To continue doing something.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="6">To give money in order to buy something.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">Something good that you hope you will have or achieve in the future.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">To keep doing something that annoys people.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="2">Get away from something bad.</span></div>
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