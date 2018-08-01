
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_12.png" alt="" srcset=""/></div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row mt30" data-ejercicio="unir">
            <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_3/module_9/assets/audios/act_12_1.mp3">  </button>It's quite sweet. It tastes like</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">  
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_3/module_9/assets/audios/act_12_2.mp3"></button>These chocolates taste as if they've</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"> 
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_3/module_9/assets/audios/act_12_3.mp3"></button>Phew! This cheese smells like</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4"> 
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_3/module_9/assets/audios/act_12_4.mp3"></button>This fruit feels like</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5"> 
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_3/module_9/assets/audios/act_12_5.mp3"> </button>It looks as if it's</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6"> 
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_3/module_9/assets/audios/act_12_6.mp3"></button>That sounds like</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho250 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="5">it's made from pork.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">silk.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">Roquefort.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="6">a fryer.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">honey.</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="2">got alcohol in them.</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_12_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>