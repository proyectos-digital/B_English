
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>Match these word with their meanings.</h5>
        <div class="col xs12 col-center" data-ejercicio="unir">
          <div class="js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Dormitory</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Freshman</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Attendance</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Class timetable</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Enroll</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="6">Recess</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="7">Principal/headmaster</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="8">Term/ semester</span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="8">The two or three time periods in which the school year is divided. </span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="6">A break between classes.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">To join a class or course.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">Going to school and classes.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">A table showing classes and when they start and end.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">A student in the first year of high school or university.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">Student residence at a school.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="7">The person in charge of a primary or high school.</span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
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
</style>