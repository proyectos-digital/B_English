
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>When speaking about the weather and climate we use certain vocabulary.</h5>
        <h6>Match these words with their meanings.</h6>
        <div class="col xs12 col-center mt20" data-ejercicio="unir">
          <div class="js-columnas w30" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Fossil fuels</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Renewable energy</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Greenhouse effect</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Invasive specie</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Carbon Neutral</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">Mitigation</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">Food Shortage</span><span class="treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">Biofuels</span><span class="treeItem" id="Item0_8" onclick="setSource(this)" seleccion="seleccion" valor="9">Coral bleaching</span><span class="treeItem" id="Item0_9" onclick="setSource(this)" seleccion="seleccion" valor="10">Landfill</span><span class="treeItem mt50" id="Item0_10" onclick="setSource(this)" seleccion="seleccion" valor="11">Impact</span><span class="treeItem" id="Item0_11" onclick="setSource(this)" seleccion="seleccion" valor="12">Sustainable</span><span class="treeItem" id="Item0_12" onclick="setSource(this)" seleccion="seleccion" valor="13">Offset</span><span class="treeItem" id="Item0_13" onclick="setSource(this)" seleccion="seleccion" valor="14">Neutral </span><span class="treeItem" id="Item0_14" onclick="setSource(this)" seleccion="seleccion" valor="15">harmful</span></div>
          <div id="linecanvas" style="width: 80px; flex: 0 0 80px;"></div>
          <div class=" js-columnas max-w75 w75" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="10">When waste is placed in the earth and covered and left to decompose. </span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="6">Action that will reduce the effects of climate change eg. planting more drives and switching to clean energy. </span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">When heat is drop in the atmosphere by gases like carbon dioxide and methane and causes the earth get warmer.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="4">An organism that does not belong to a particular ecosystem but was introduced there. usually by human action. They tend to cause harm to the ecosystem. </span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="5">Process where there is no net release of carbon dioxide for example growing plants to cut down a tree. </span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="9">When Coral appears whitened because they expelled the organism living inside due stress like heat. </span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="7">When there is not enough food for everyone.</span><span class="treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="8">Fuels made from plant material or other waste material. These include ethanol and methane. </span><span class="treeItem" id="Item1_8" onclick="setTarget(this)" seleccion="seleccion" valor="2">Wind, solar and hydroelectricity.</span><span class="treeItem" id="Item1_9" onclick="setTarget(this)" seleccion="seleccion" valor="1">Oil, coal, natural.</span><span class="treeItem mt50" id="Item1_10" onclick="setTarget(this)" seleccion="seleccion" valor="12">To be able to maintain at a certain level without negative effects.</span><span class="treeItem" id="Item1_11" onclick="setTarget(this)" seleccion="seleccion" valor="13">To counteract something by doing something that as the opposite effect.</span><span class="treeItem" id="Item1_12" onclick="setTarget(this)" seleccion="seleccion" valor="14">Not having a negative or positive effect.</span><span class="treeItem" id="Item1_13" onclick="setTarget(this)" seleccion="seleccion" valor="11">To have an effect on something like the environment.</span><span class="treeItem" id="Item1_14" onclick="setTarget(this)" seleccion="seleccion" valor="15">Causes damage.</span></div>
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