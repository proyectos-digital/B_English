
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Now, match the beginnings with the endings to form complete sentences.           </h5>
      <div class="row">
        <div class="col xs10 md8 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">In some regions in Colombia, people still have beliefs. Some people in Neiva, for example, <strong class="u-textColor_1-darker_05">believe in</strong> ghosts. Others decide to <strong class="u-textColor_1-darker_05">protect</strong> their kids <strong class="u-textColor_1-darker_05">against</strong> “mal de ojo” and they <strong class="u-textColor_1-darker_05">look after </strong>their children with special talismans. If you <strong class="u-textColor_1-darker_05">ask</strong> them <strong class="u-textColor_1-darker_05">about</strong> this, they will begin to <strong class="u-textColor_1-darker_05">talk about</strong> cases where a kid got sick because someone with evil sight saw him or her. How true are these beliefs? We are still <strong class="u-textColor_1-darker_05">waiting for</strong> scientific evidence but nothing has been produced so far.</div>
          </div>
        </div>
      </div>
      <div class="row mt30-md mt20-xs">
        <div class="col xs12 sm10 md8 col-center" data-ejercicio="unir">
          <div class="ancho270 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">She loyally stood</span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">It is really hot. I’m dying</span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">I don’t know what John can be playing</span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">I’ll just run</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">That’s a tricky one. I’ll need to sleep</span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class="ancho270 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">through the details once again.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">by her husband through the whole scandal.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="2">for a nice cold drink.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="5">on it.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3">at. Where on earth is he?</span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction is-active u-bgIconAlert openNotice" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction is-active u-bgIconInfoActivity openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_4_notice_'+ idNotice +'.php'"></article>
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