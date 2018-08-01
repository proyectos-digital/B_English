
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>The English vocabulary changes with time. One of the areas that changes the most is vocabulary related to technology. Try matching these words to there meaning. </h5>
        <div class="col xs12 col-center" data-ejercicio="unir">
          <div class="js-columnas w30" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Techie</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Computer crash</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Podcast</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Send an attachment</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Back up</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">Wireless network</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">Bookmark</span><span class="treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">Upgrade</span><span class="treeItem" id="Item0_8" onclick="setSource(this)" seleccion="seleccion" valor="9">High spec</span><span class="treeItem" id="Item0_9" onclick="setSource(this)" seleccion="seleccion" valor="10">Hotspot</span></div>
          <div id="linecanvas" style="width: 80px; flex: 0 0 80px;"></div>
          <div class=" js-columnas max-w75 w75" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="1">A person that knows a lot about technology and enjoy using new technologies.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="10">A means of sharing the internet connection with others in a cafe, a school or even from your mobile phone.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="3">An audio file that is made available on the internet for the public. </span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">When it suddenly stop working. </span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="5">To make a copy of data, a computer or files in case the original is corrupted. </span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="8">To get the latest version or more advanced version of a technology or equipment. </span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="7">To save the address of a webpage on your computer or browser for future use. </span><span class="treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="6">A way to access a network or the internet without a physical cable attached to your device. </span><span class="treeItem" id="Item1_8" onclick="setTarget(this)" seleccion="seleccion" valor="9">A computer or system with the latest top quality components and software. </span><span class="treeItem" id="Item1_9" onclick="setTarget(this)" seleccion="seleccion" valor="4">To add a file ( audio, video, PDF, word etc) to an email that you are sending.</span></div>
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