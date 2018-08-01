
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_15">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md11 col-center mt10-sm mt10-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Match the sentences with the pictures of the person that performs the actions described in the statements. You can ask the question “By who?” to help you get to the right answers.</h5>
          </div>
          <div class="col xs10 md8 col-center mt20" data-ejercicio="unir">
            <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">The concert will have been worked on for over 2 years by the time it is finished.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">The food will have been left there all day by the time it comes to eat it.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">The toys will have been left there for ours by the time their mother picks them up.</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">This class will have been taught for years at this University.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">The TV show will have aired for 5 seasons this year.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho150 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2"><img src="unit_1/module_2/assets/images/act_15_1.png" alt=""/></span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1"><img src="unit_1/module_2/assets/images/act_15_2.png" alt=""/></span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5"><img src="unit_1/module_2/assets/images/act_15_3.png" alt=""/></span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="4"><img src="unit_1/module_2/assets/images/act_15_4.png" alt=""/></span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3"><img src="unit_1/module_2/assets/images/act_15_5.png" alt=""/></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_3_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<!-- ============================== -->
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>