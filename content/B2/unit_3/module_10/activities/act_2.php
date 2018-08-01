
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col sm12 md6 col-center">
          <h5>Listen and match the sentences to complete the conversations.</h5>
          <div class="row-flex align-items-center"><img class="u-responsive-img m-a" src="unit_3/module_10/assets/images/act_2.png" alt="act_2"/></div>
        </div>
        <div class="col xs12 md6 col-center">
          <div class="mt40" data-ejercicio="unir">                
            <div class="ancho350 js-columnas" id="sourceElements">
              <h6 class="ta-c">SPEAKER A</h6>
              <div class="flex align-items-center">
                <button class="c-btn-IconAction u-bgIconListen mb20 mr10" ng-audio="unit_3/module_10/assets/audios/act_2_1.mp3"></button><span class="treeItem" id="Item0_0" style="width:100%;" onclick="setSource(this)" seleccion="seleccion" valor="1">I don’t want to cook tonight.</span>
              </div>
              <div class="flex align-items-center">
                <button class="c-btn-IconAction u-bgIconListen mb20 mr10" ng-audio="unit_3/module_10/assets/audios/act_2_2.mp3"></button><span class="treeItem" id="Item0_1" style="width:100%;" onclick="setSource(this)" seleccion="seleccion" valor="2">Oh! I don’t have any money.</span>
              </div>
              <div class="flex align-items-center">
                <button class="c-btn-IconAction u-bgIconListen mb20 mr10" ng-audio="unit_3/module_10/assets/audios/act_2_3.mp3"></button><span class="treeItem" id="Item0_2" style="width:100%;" onclick="setSource(this)" seleccion="seleccion" valor="3">Do you want to go out tonight?</span>
              </div>
              <div class="flex align-items-center">
                <button class="c-btn-IconAction u-bgIconListen mb20 mr10" ng-audio="unit_3/module_10/assets/audios/act_2_4.mp3"></button><span class="treeItem" id="Item0_3" style="width:100%;" onclick="setSource(this)" seleccion="seleccion" valor="4">That shirt is dirty!</span>
              </div>
              <div class="flex align-items-center">
                <button class="c-btn-IconAction u-bgIconListen mb20 mr10" ng-audio="unit_3/module_10/assets/audios/act_2_5.mp3"></button><span class="treeItem" id="Item0_4" style="width:100%;" onclick="setSource(this)" seleccion="seleccion" valor="5">You have an email from John.</span>
              </div>
            </div>
            
            <div id="linecanvas" style="width: 60px;"></div>  
               
            <div class="ancho350 js-columnas" id="targetElements"> 
              <h6 class="ta-c">SPEAKER B</h6><span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">No, I’m going to clean the house.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="2">Don’t worry. I’ll pay.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="4">Oh, yes. I’ll wash it.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">OK. I’ll cook.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="5">OK, I’ll answer it</span>
            </div>
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