
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown">
      <h5><strong class="u-textColor_4">1. </strong> Watch the video:</h5>
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex justify-center mt20 mb20">
            <div class="col md11">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls">
                  <source src="unit_2/module_8/assets/videos/act_1.mp4" type="video/mp4"/>
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <p>Now read the following sentences. Pay attention to the use of <strong>WOULD</strong>.</p>
          <p>• When I was a child my father <strong>would </strong> sometimes <strong>take </strong> me to the Campin stadium.</p>
          <p>• We <strong>would go </strong> to a nearby restaurant after the games.</p>
          <h6><strong class="u-textColor_4">1. </strong> Complete and match.</h6>
          <div class="row-flex mt50">
            <div class="col xs12 md12 col-center" data-ejercicio="unir">
              <div class="ancho350 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">We use would + ___________ when we talk about activities that were frequently repeated in the past.</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">If the action in the past happened only once, we must use __________</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho350 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">I went on a long bike ride last Saturday.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">Every Saturday, I would go on a long bike ride.</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_8/activities/act_1_notice_'+ idNotice +'.php'"></article>
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