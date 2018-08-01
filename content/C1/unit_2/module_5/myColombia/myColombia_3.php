
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="unirColumnasFuncion()">
      <div class="row mt30-md mt20-xs">
        <p>
          You have three friends that are visiting from The United States. They all have different tastes.
          Sarah wants to enjoy nature and photography.<br/>
          Peter enjoys extreme sports and loves the adrenaline rush he gets from the danger.<br/>
          Francine likes the good life. She enjoys staying at the best hotels and fine dining.
          You need to put together a vacation package for each of them.<br/>
        </p>
        <h5>Match the person with the activities and places that you think they will like.</h5>
        <div class="col xs12 col-center" data-ejercicio="unir">
          <div class="js-columnas" id="sourceElements"><span class="ta-j treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="u-responsive-img w30 mr10" src="unit_2/module_5/assets/images/col_2_6.png" alt="myColombia"/> Located in the center of Medellin our 5-star luxury spa is designed with luxury, relaxation and wellness in mind, we have created our Spa with the spirit of offering unique therapies and treatments.</span><span class="ta-j treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="u-responsive-img w30 mr10" src="unit_2/module_5/assets/images/col_2_5.png" alt="myColombia"/> If you love being on the water we have the perfect trip for you. It includes 3 days and two nights at our beautiful 2-star hotel and 3 days of  white water rafting along the Samaná River in Antioquia.</span><span class="ta-j treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="u-responsive-img w30 mr10" src="unit_2/module_5/assets/images/col_2_4.png" alt="myColombia"/> Visit the highest coastal range in Colombia, camp in the mountains with native Indians and enjoy the daily mountain hikes followed by relaxing sessions of meditation.</span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas row-flex flex-column justify-center" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">Francine </span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">Sarah </span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">Peter</span></div>
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