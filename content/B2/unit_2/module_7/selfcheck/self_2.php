
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col sm12 md6 col-center">
          <div class="row-flex align-items-center">
            <h6><span class="u-textColor_4-dark">1</span> .  Read the sentence on the left and find how it is related on the right.</h6><img class="u-responsive-img m-a showTo-md" src="unit_2/module_7/assets/images/self_10.png" alt="act_2"/>
          </div>
        </div>
        <div class="col xs12 md6 col-center">
          <div class="mt40 row-flex" data-ejercicio="unir">
            <div class="col-flex-xs5">
              <h6 class="ta-c">A month ago,Amanda said</h6>
            </div>
            <div class="col-flex-xs5 col-center">
              <h6 class="ta-c">A month ago, Amanda said that she</h6>
            </div>
          </div>
          <div class=" row m-a" data-ejercicio="unir">
            <div class="ancho300 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">“A month ago, Amanda said”</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">“I am in Itagui.”</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="4">“had been in Itagui by that time.”</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="3">“I have been to Itagui.”</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">“I have visited Itagui three times this year.”</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">“I visited Itagui a month ago.” </span><span class="ta-c u-bgColor_5 treeItem" id="Item0_6" onclick="setSource(this)" seleccion="seleccion" valor="7">“I can visit many places in Itagui.”</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_7" onclick="setSource(this)" seleccion="seleccion" valor="8">“I must stay one more week in Itagui.” </span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="ancho300 js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="6">had visited Itagui a month ago.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">I was in Itagui by that time</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">had visited Itagui three times this year.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="7">could visit many places in Itagui</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3">had been in Itagui.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="8">had to stay one more week in Itagui.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_6" onclick="setTarget(this)" seleccion="seleccion" valor="2">was in Itagui.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_7" onclick="setTarget(this)" seleccion="seleccion" valor="1">A month ago, Amanda said that she</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
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