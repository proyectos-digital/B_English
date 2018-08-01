
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h6>Listen to the description of these famous Colombian vacation destination and  choose the picture that is being described. </h6>
        <p>
          Look at the pictures below and match them to the description. 
          
        </p>
        <div class="col xs12 col-center" data-ejercicio="unir">
          <div class="js-columnas ancho130" id="sourceElements"><span class="treeItem ta-c" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="u-responsive-img m-a" src="unit_2/module_5/assets/images/col_10_1.png" alt="myColombia"/>  </span><span class="treeItem ta-c" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="u-responsive-img m-a" src="unit_2/module_5/assets/images/col_10_2.png" alt="myColombia"/> </span><span class="treeItem ta-c" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="u-responsive-img m-a" src="unit_2/module_5/assets/images/col_10_3.png" alt="myColombia"/></span><span class="treeItem ta-c" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4"><img class="u-responsive-img m-a" src="unit_2/module_5/assets/images/col_10_4.png" alt="myColombia"/></span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas row-flex flex-column justify-center" id="targetElements"> 
            <div class="audioABsolute">
              <audio controls="controls">
                <source src="unit_2/module_5/assets/audios/col_10_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4"></span>
            <div class="audioABsolute">
              <audio controls="controls">
                <source src="unit_2/module_5/assets/audios/col_10_2.mp3"/>Your browser does not support the audio element.
              </audio>
            </div><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="3"></span>
            <div class="audioABsolute">
              <audio controls="controls">
                <source src="unit_2/module_5/assets/audios/col_10_3.mp3"/>Your browser does not support the audio element.
              </audio>
            </div><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2"></span>
            <div class="audioABsolute">
              <audio controls="controls">
                <source src="unit_2/module_5/assets/audios/col_10_4.mp3"/>Your browser does not support the audio element.
              </audio>
            </div><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1"></span>
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

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>