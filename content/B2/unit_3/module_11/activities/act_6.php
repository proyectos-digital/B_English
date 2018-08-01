
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <h5>Match the collocations with the correct definition.</h5>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md2 col-center mt10-sm mt20-md">
          <div class="row-flex justify-center">
            <div class="_float-span">EARN</div>
            <div class="_float-span">LOSE</div>
            <div class="_float-span">RAISE</div>
            <div class="_float-span">SPEND</div>
            <div class="_float-span">DONATE</div>
            <div class="_float-span">SAVE</div>
            <div class="_float-span">STEAL</div>
            <div class="_float-span">LEND</div>
            <div class="_float-span">WIN</div>
            <div class="_float-span">FIND</div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row" data-ejercicio="unir">
            <div class="ancho150 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Earn money.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Raise money.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Donate money.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Steal money.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Win money.</span><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="6">Lose money.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="7">Spend money.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="8">Save money.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="9">Lend money.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="10">Find money.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">Give money to an organization.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="6">Not have money any longer.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">Get money in a lottery, game, show.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="8">Keep money for future use.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">Get money by working.</span><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="9">Give somebody money that they must return.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">Take money from somebody without permission.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="10">Discover by chance.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="7">Pay money for something.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">Get money from people for a purpose.</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconAlert openNotice is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_11/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>