
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="unirColumnasFuncion()">                 
      <h5 class="ta-c">Match the following phrases of encouragement to their meaning.  </h5>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="row mt30-md mt20-xs .row-flex.align-items-center">
            <div class="col xs12 col-center" data-ejercicio="unir">
              <div class="ancho270 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="1">It’s worth a shot.</span><span class="treeItem" id="Item0_1" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="2">Go for it.</span><span class="treeItem" id="Item0_2" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="3">Believe in yourself.</span><span class="treeItem" id="Item0_3" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="4">Don’t give up.</span><span class="treeItem" id="Item0_4" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="5">Think positive.</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho270 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="2">Encourage someone to put more effort into doing something.</span><span class="treeItem" id="Item1_1" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="3">To have confidence in your abilities.</span><span class="treeItem" id="Item1_2" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="1">You should try because there is a chance of success.</span><span class="treeItem" id="Item1_3" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="5">Do not think negatively about something that is about to happen.</span><span class="treeItem" id="Item1_4" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="4">To keep trying to do something even if it is difficult.</span></div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_2/module_6/assets/images/self_4_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>
<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>
<style>
  .treeItem[correcta="bien"],
  .treeItem_hi[correcta="bien"],
  .treeItem_set[correcta="bien"]{
      background-color: var(--color_good);
      color: white;
  }
  .treeItem[correcta="mal"],
  .treeItem_hi[correcta="mal"],
  .treeItem_set[correcta="mal"]{
      background-color: var(--color_wrong);
      color: white;
  }
  
  .treeItem[jsblock="jsblock"]{
      cursor: no-drop;
      pointer-events :none;
  }
</style>