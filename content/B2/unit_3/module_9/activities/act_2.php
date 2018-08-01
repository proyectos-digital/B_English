
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content"> 
      <div class="row">
        <h5 class="ta-c">This exercise will also help you identify relative clauses. Notice how the two sentences in the right are combined in ONE sentence on the left. Match the sentences with the same meaning.</h5>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row-flex"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_2_1.png" alt="" srcset=""/><img class="u-responsive-img centrado mt10" src="./unit_3/module_9/assets/images/act_2_2.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center mt30"> 
            <div class="row col-center" data-ejercicio="unir">
              <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Can you give me back the money that I lent you last month?</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">People who like playing tennis usually like playing squash, too.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Is he the one who gave you a ride?</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">This is the hospital where my brother was born.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">The man that you saw outside was there yesterday.</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho250 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">Some people like playing tennis. They also like squash.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">This is a hospital. My brother was born here.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">There was a man outside. He was there yesterday.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">I lent you some money last month. I need it back.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3">I don't know that man. Did he give you a ride?</span></div>
            </div>
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