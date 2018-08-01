
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <h5>Look out for the use of negative forms.</h5>
      <div class="row-flex">
        <div class="col xs12 md9 col-center mt30" data-ejercicio="unir">
          <div class="ancho450 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">
              <button class="c-btn-Icon u-bgIconListen mr20" ng-audio="unit_1/module_2/assets/audios/test_5_1.mp3"></button>What will your life be like in 2025?</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">
              <button class="c-btn-Icon u-bgIconListen mr20" ng-audio="unit_1/module_2/assets/audios/test_5_2.mp3"></button>What will you be doing by the time<br/>you´re 60?</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">
              <button class="c-btn-Icon u-bgIconListen mr20" ng-audio="unit_1/module_2/assets/audios/test_5_3.mp3"></button>What do you think will have happened by the 22nd century?</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">
              <button class="c-btn-Icon u-bgIconListen mr20" ng-audio="unit_1/module_2/assets/audios/test_5_4.mp3"></button>I lost my job, but I´m not worried. I need a vacation.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">
              <button class="c-btn-Icon u-bgIconListen mr20" ng-audio="unit_1/module_2/assets/audios/test_5_5.mp3"></button>How long will you have lived here for in a month?</span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class="ancho350 js-columnas" id="targetElements"><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">By that time, we will have developed cars that fly.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">You should be worried because in a month or two, your money will have run out!</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">Five years.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">I think I will have had children by then.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">I will have retired and will be a millionaire.</span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<!-- ==============================-->
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>