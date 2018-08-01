
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>Match these word with their meanings.</h5>
        <div class="col xs12 col-center" data-ejercicio="unir">
          <div class="js-columnas w30" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Physics</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Biology</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Botany</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Zoology</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Ecology</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">Genetics</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">Astronomy</span><span class="treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">Chemistry</span><span class="treeItem" id="Item0_8" onclick="setSource(this)" seleccion="seleccion" valor="9">Geology</span><span class="treeItem" id="Item0_9" onclick="setSource(this)" seleccion="seleccion" valor="10">Paleontology</span></div>
          <div id="linecanvas" style="width: 80px; flex: 0 0 80px;"></div>
          <div class=" js-columnas max-w75 w75" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">The study of animals. </span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="8">The study of the components of matter and how they react together to form no compounds. </span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">The study of plants.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">The study of matter and energy, this includes mechanics, heat, light and other radiation, sound, electricity, magnetism, and the structure of atoms.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="5">The study of the environment.</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="10">The study of fossils.</span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="7">The study of celestial bodies and spaces. </span><span class="treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="6">The study of heredity and inherited characteristics.</span><span class="treeItem" id="Item1_8" onclick="setTarget(this)" seleccion="seleccion" valor="9">The study of the structure of the Earth and what makes it up and the history and processing that act on the Earth. </span><span class="treeItem" id="Item1_9" onclick="setTarget(this)" seleccion="seleccion" valor="2">The study of living organisms.</span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>