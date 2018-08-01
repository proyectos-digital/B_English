
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row mb30 ta-c showTo-md"><img class="c-figure w40 mb20 " src="unit_1/module_2/assets/images/act_6-a.png" alt=""/><img class="c-figure w40 ml20 mb20" src="unit_1/module_2/assets/images/act_6-b.png" alt=""/><img class="c-figure w40 " src="unit_1/module_2/assets/images/act_6-c.png" alt=""/><img class="c-figure w40 ml20" src="unit_1/module_2/assets/images/act_6-d.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Match the statements to the echo questions.</h5>
          </div>
          <div class="row mt50">
            <div class="col xs12 md12 col-center" data-ejercicio="unir">
              <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Look! Mary is climbing a mango tree to pick some!</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Juan has just arrived at the bus station after a long journey.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">I really enjoy listening to Salsa music from Cali.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">We are spending two days in Providence island.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">The film you recommended wasn´t interesting at all.</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">You look very smart in that black suit.</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">Who hasn´t arrived where?</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="6">I look What?</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">You what?</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">Mary is doing what?</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">Two days Where?</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="5">It wasn´t what?</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck  js-validarUnir"></button>
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
<style>
  .treeItem[correcta="bien"],
  .treeItem_hi[correcta="bien"],
  .treeItem_set[correcta="bien"]{
      background-color: var(--color_good);
      color: white;
  }
  .treeItem[correcta="mal"],
  .treeItem_hi[correcta="mal"],
  .treeItem_set[correcta="mal"]{
      background-color: var(--color_wrong);
      color: white;
  }
</style>