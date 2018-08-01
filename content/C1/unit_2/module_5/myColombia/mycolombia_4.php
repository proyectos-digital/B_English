
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
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
          <div class="js-columnas" id="sourceElements"><span class="ta-j treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="responsive-img w30 mr10" src="unit_2/module_5/assets/images/col_2_9.png" alt="myColombia"/> The growing popularity of Daniel Pitro moved it from its original location as it becomes one of the capitals’ most popular eateries. Locals and tourists flock to Daniel Pitro for its sophisticated Mediterranean-French cuisine. The restaurant is also renowned for its coffee which is enjoyed in a super cool hipster atmosphere. Daniel Pitro is a kitchen that believes in the traditional processes and small Colombian producers.</span><span class="ta-j treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="responsive-img w30 mr10" src="unit_2/module_5/assets/images/col_2_8.png" alt="myColombia"/> If you are looking for the experience of a lifetime we have just the thing for you. bungy jumping 70 meters from a crane suspended over the Fonce River just outside of San Gil.</span><span class="ta-j treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="responsive-img w30 mr10" src="unit_2/module_5/assets/images/col_2_7.png" alt="myColombia"/> In Bahia Solano, on the pacific coast of Colombia, There are 4-hour nature tour into the forest to view in hidden waterfalls. Learn about the unique fauna and flora. Take a boat to whale watch take photographs as the beautiful creatures.    </span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas row-flex flex-column justify-center" id="targetElements"> <span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">Sarah </span><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">Francine </span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">Peter</span></div>
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