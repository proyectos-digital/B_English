
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center mt10-sm mt30-md">
          <h5><strong class="u-textColor_4">1. </strong>  Listen to the short conversations. Drag the correct echo questions to complete them.</h5>
          <div class="row mb30 mt30 ta-c showTo-md"><img class="c-figure w70" src="unit_1/module_2/assets/images/act_10.png" alt=""/></div>
          <div class="dragCont ancho280 m-a mt10">
            <div class="drag">Was she? That´s interesting.</div>
          </div>
          <div class="dragCont ancho280 m-a mt10">
            <div class="drag">Do you? Me too.</div>
          </div>
          <div class="dragCont ancho280 m-a mt10">
            <div class="drag">Are you? Is it fun?</div>
          </div>
          <div class="dragCont ancho280 m-a mt10">
            <div class="drag">Does he? Which one?</div>
          </div>
          <div class="dragCont ancho280 m-a mt10">
            <div class="drag">Aren´t you? Where are you from?</div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center mt30-sm mt30-md">
          <div class="row-flex">
            <div class="col-flex-xs12 col-flex-sm10 col-center col-flex-md12 mt20-xs">
              <ol class="u-listStyle-UAlpha">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_1/module_2/assets/audios/act_10_1.mp3"></button>
                <li class="u-textColor_4 ml70"><span class="u-textColor_1-dark">She was the Carnival Queen last year.</span></li>
                <li class="u-textColor_4 mt20 ml70"><span class="u-textColor_1-dark"><span class="drop ancho280"></span></span></li>
              </ol>
            </div>
            <div class="col-flex-xs12 col-flex-sm10 col-center col-flex-md12 mt10-xs">
              <ol class="u-listStyle-UAlpha">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_1/module_2/assets/audios/act_10_4.mp3"></button>
                <li class="u-textColor_4 ml70"><span class="u-textColor_1-dark">My dad works for an international company.</span></li>
                <li class="u-textColor_4 mt20 ml70"><span class="u-textColor_1-dark"><span class="drop ancho280"></span></span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_1/module_2/assets/audios/act_10_2.mp3"></button>
                <li class="u-textColor_4 ml70"><span class="u-textColor_1-dark">I am not Uruguayan.</span></li>
                <li class="u-textColor_4 mt20 ml70"><span class="u-textColor_1-dark"><span class="drop ancho280"></span></span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_1/module_2/assets/audios/act_10_5.mp3"></button>
                <li class="u-textColor_4 ml70"><span class="u-textColor_1-dark">We are studying Business Administration.</span></li>
                <li class="u-textColor_4 mt20 ml70"><span class="u-textColor_1-dark"><span class="drop ancho280"></span></span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_1/module_2/assets/audios/act_10_3.mp3"></button>
                <li class="u-textColor_4 ml70"><span class="u-textColor_1-dark">I hate sports. </span></li>
                <li class="u-textColor_4 mt20 ml70"><span class="u-textColor_1-dark"><span class="drop ancho280"></span></span></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>