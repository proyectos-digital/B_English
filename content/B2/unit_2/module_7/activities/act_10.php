
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col sm12 md6 col-center">
          <h5><span class="u-textColor_4-dark">1</span>. Read the following sentences:</h5>
          <div class="row-flex align-items-center">
            <div class="col-flex-xs11 col-flex-sm9 col-center ">
              <p>Pablo is telling Carlos how determined he is. Carlos wants to show that he is also very determined:</p>
              <p class="ml20"><span><strong class="u-textColor_2 ">Pablo:</strong></span>  I enjoyed our camping holiday <strong>in spite of </strong> the rain</p>
              <p class="ml20"><span><strong class="u-textColor_5 ">Carlos:</strong></span>  In my case, <strong>despite </strong> the pain in my leg, I completed the marathon.</p>
              <p class="ml20"><span><strong class="u-textColor_2 ">Pablo:</strong></span>  Well, we went swimming in the pool <strong>although </strong> the water was freezing.</p>
              <p class="ml20"><span><strong class="u-textColor_5 ">Carlos:</strong></span>  <strong>Even though </strong> I had to be taken to the hospital, I went to school the next day!</p>
              <p class="ml20"><span><strong class="u-textColor_2 ">Pablo:</strong></span>  Ok, you win! You are more determined than me!</p>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 col-center">
          <h5><span class="u-textColor_4-dark">2</span>. Read the following sentences:</h5>
          <div class="mt40 row" data-ejercicio="unir">                
            <div class="ancho350 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Although I was tired…</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">I like my job…</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">He walked home…</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Despite his age…</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">Although we grew up in the same neighborhood…</span></div>  
              
            <div id="linecanvas" style="width: 60px;"></div>
            
            <div class="ancho350 js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="5">we weren’t close friends.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="3">in spite of the bad weather.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="1">I just couldn’t sleep.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">despite the long hours.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">he still works out every day.</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
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