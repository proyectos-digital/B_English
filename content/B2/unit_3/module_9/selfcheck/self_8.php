
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row">
        <h6 class="mt30">If you are not sure about the regulation, you can check on the web: Pay attention to these regulations in Colombia:</h6>
      </div>
      <div class="row mt40-md mt20-xs">
        <div class="col xs12 sm10 md8 col-center" data-ejercicio="unir">
          <div class="ancho280 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">You cannot drive a car</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">You can drive with glasses</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">You can drink alcohol and drive</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">You cannot have children at the front seat</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Children under 10 don't need to have the safety belt</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">You can turn right when the traffic light is red</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">You can have up to 5 people in the car</span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class="ancho280 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="5">only if they are accompanied by an adult.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="7">if the car specifications include more seats.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">providing you do not exceed the amount of alcohol permitted.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">unless you are 18 and have taken and passed a driving test.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">you driving license does not specify the contrary</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="6">unless this is openly prohibited.</span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="4">even if they are wearing a safety belt.</span></div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/selfcheck/sel_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>