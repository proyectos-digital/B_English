
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm align-items-center ">
        <div class="col xs3 flex align-items-center showTo-md"><img class="c-figure w90 ml20" src="unit_1/module_4/assets/images/act_3_1.png" alt=""/></div>
        <div class="col xs12 md9  col-center ">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong> Choose a newspaper headline for each of these five topics.</h5>
          </div>
          <div class="row mt50">
            <div class="col xs12 md12 col-center" data-ejercicio="unir">
              <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Murder in Cucuta</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Winning the Baloto</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Sales</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Elections in Colombia</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Sports</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">30 billion won by very old lady.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">Woman is found under palm tree.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">Australia BMX cup is won by Pajon.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="4">Young man is elected in Floridablanca.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3">Quinua is sold in stores now.</span></div>
            </div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_3_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<!-- ============================== -->
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>