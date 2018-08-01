
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row">
        <h6><strong class="u-textColor_4">1. </strong> Listen to the conversation. Then match the problems with what had happened.</h6>
        <div class="row"><img class="u-responsive-img centrado w25" src="./unit_2/module_5/assets/images/act_3_1.png" alt="" srcset=""/>
          <div class="row-flex row mt20">
            <audio class="col-flex-xs12 col-flex-sm8 col-flex-md7 col-center" controls="controls">
              <source src="unit_2/module_5/assets/audios/act_3.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
        </div>
        <div class="row mt50">
          <div class="col xs12 md8 col-center" data-ejercicio="unir">
            <div class="ancho280 js-columnas" id="sourceElements">
              <p class="mb30 ml100"><strong class="u-textColor_4-dark u-ta-c">Problem</strong></p><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Not many guests arrived</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">There was no birthday cake</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">There was nothing to drink</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">He had no new clothes to wear</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">There was no music</span>
            </div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho280 js-columnas" id="targetElements"> 
              <p class="mb30 ml50"><strong class="u-textColor_4-dark">What had happened</strong></p><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">He had forgotten to go clothes shopping.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">The DJ had had an accident</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="1">He had forgotten to send out the invitations</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">The shop had run out of beer</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">The bakery had already closed    </span>
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
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>