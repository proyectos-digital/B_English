
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <h6>When speaking about tourism and travel we use some common words.</h6><span>Match the sentences that are saying the same thing. </span>
      <div class="col xs12 col-center mt30" data-ejercicio="unir">
        <div class="js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">I bought a return ticket from Bogota to Miami.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">The outbound flights were delayed because of the weather.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">I am on an inbound flight to Bucaramanga.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Check the boarding pass for your seat number.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Please make sure the hand luggage you take on the plane is not too big for the storage compartment.</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">Juan checked three bags.</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">The flight arrived on time.</span><span class="treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">The flight is delayed. </span><span class="treeItem" id="Item0_8" onclick="setSource(this)" seleccion="seleccion" valor="9">The plane landed safely despite weather.</span><span class="treeItem" id="Item0_9" onclick="setSource(this)" seleccion="seleccion" valor="10">The airline has a 22-hour stopover in Bogota</span></div>
        <div id="linecanvas" style="width: 60px;"></div>
        <div class=" js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="9">The flight touchdown without incident although the conditions were bad. </span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="7">The plane landed when it was supposed to. </span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="10">The flight has a day-long layover in Bogota.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="5">The carry on bags must be able to fit in the overhead bins.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="8">The plane did not arrive at the airport when it was scheduled to. </span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="4">The piece of paper they gave you at the check-in desk will let you know where to sit on the plane. </span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="2">There are no planes leaving the airport until the conditions get better.</span><span class="treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="1">I have a ticket to fly from Bogota to Miami and a ticket from Miami to Bogota. </span><span class="treeItem" id="Item1_8" onclick="setTarget(this)" seleccion="seleccion" valor="3">The plane I am on is heading to Bucaramanga.</span><span class="treeItem" id="Item1_9" onclick="setTarget(this)" seleccion="seleccion" valor="6">They put some of his luggage in the luggage compartment under the plane.</span></div>
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