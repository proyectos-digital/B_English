
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="row">
          <h5><strong class="u-textColor_4">1. </strong> Match the actions with the people who performed the actions</h5>
        </div>
        <div class="row mt10-sm mt100-md align-items-center">
          <div class="col xs12 md3 showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_11_1.png" alt=""/></div>
          <div class="col xs12 md9">
            <div class="col xs12 md12 col-center" data-ejercicio="unir">
              <div class="ancho350 js-columnas" id="sourceElements">
                <p><strong>Action</strong></p><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Sensors were used to record the movements of the actors.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">The final information was given to the computer designers.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Pandora was drawn on computer.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Backgrounds, people and other special effects were added later on.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">A whole language was invented for this movie.</span>
              </div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho200 js-columnas" id="targetElements"> 
                <p><strong>By who?</strong></p><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="5">Dr. Frommer</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">Computer designers</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">The director</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">Professional artists</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">The filming crew</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_11_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<!-- ============================== -->
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