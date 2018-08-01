
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="mt40 row" data-ejercicio="unir">                
          <div class="col xs5 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Are you serious? You must be joking!</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">That’s a surprise!</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">You’re kidding!</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">I must say it surprises me!</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Really?                    </span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class="col xs5 js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">I’m serious.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">Yeah!</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">It is.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">No, I’m not.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">Does it?</span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>