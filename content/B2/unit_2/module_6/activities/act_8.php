
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md9 col-center mt10-sm mt10-md">
          <div class="row mt50">
            <div class="col xs12 md12 col-center" data-ejercicio="unir">
              <div class="ancho350 js-columnas" id="sourceElements"><img class="c-figure w90 mb20" src="unit_2/module_6/assets/images/act_7a.png" alt=""/><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Even though the weather was terrible, they went to the concert.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">We couldn´t afford that house, even if we saved for another year.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Even when we had all that money from winning the lottery, we couldn´t afford the house.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Even if the weather is terrible, we´ll still go to the concert.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Even though we had enough money, we decided not to buy the house.</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho350 js-columnas" id="targetElements"> <img class="c-figure w90 mb20" src="unit_2/module_6/assets/images/act_7b.png" alt=""/><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">The money wasn´t enough to buy the house.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">We had the money, but we didn´t buy it.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="4">We have the tickets, so we will go, no matter what.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">The weather was terrible, but they went to the concert anyway.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">Saving for another year wouldn´t be enough to buy that house.</span></div>
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