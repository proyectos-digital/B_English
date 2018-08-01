
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_16" ng-init="unirColumnasFuncion()">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="row">
          <div class="mt40" data-ejercicio="unir">                
            <div class=" js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">How is your brother?</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Simon hasn’t done any studying.</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">He didn’t take a jacket!</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Helen is in love with Raul.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Did you hear the weather forecast for today?</span><span class="treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">He isn’t doing very well at work.</span><span class="treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">Ted isn’t eating very much.</span><span class="treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">He’s three hours late.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class=" js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="7">I’m worried he’ll get sick.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">Great! He’s going to be a father!</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="8">He isn’t going to come, is he?</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="6">I think he’ll probably get fired.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">I think she’ll probably marry him.</span><span class="treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="5">They said it’s going to rain.</span><span class="treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="3">He didn't because it is not going to rain.</span><span class="treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="2">He won’t pass the exam then.</span></div>
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

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>