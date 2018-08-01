
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
          <div class="row flex flex-column"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_8_1.png" alt="" srcset=""/><img class="u-responsive-img centrado mt30" src="./unit_3/module_9/assets/images/act_8_2.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <h6>Match the relative clauses with their reduced forms.</h6>
          <div class="row mt30" data-ejercicio="unir">
            <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">The man who is in the house likes to watch Señal Colombia all day.  </span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">The books that are on the desk are mine.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">The man who is swimming in the lake is my father. </span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">The clothes that are lying on the floor belong to me.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">The survey which was conducted by the government did not indicate true public opinion.</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">The food that was eaten by the mice was poisonous.</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">The girl who sits next to Peter is my neighbor’s daughter.</span><span class="treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">Most people who were invited to the party didn’t turn up.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">The clothes lying on the floor belong to me.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="6">The food eaten by the mice was poisonous.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="8">Most people invited to the party didn’t turn up.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">The books on the desk are mine.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="7">The girl sitting next to Peter is my neighbor’s daughter.</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="3">The man swimming in the lake is my father.</span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="1">The man in the house likes to watch Señal Colombia all day.</span><span class="treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="5">The survey conducted by the government did not indicate true public opinion.</span></div>
          </div>
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

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>