
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm align-items-center">
        <div class="col-flex-xs12 col-flex-md6 col-center ">
          <div class="row mb30 mt20 ta-c">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c padding40 lh30"><span><strong>Write two letters or notes expressing sympathy and condolence: one must be formal, addressed to your school director, who recently lost a brother. The other one must be informal, addressed to a friend who lost his dog. Each message should be at least 80 words.</strong></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex mt100-xs mt10-md mt10-sm align-items-center">            
        <div class="col-flex-xs12 col-flex-md6 col-center">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong> Informal</h5>
            <div class="row padding5">
              <div class="c-wrapTextarea" ng-init="ContadorPalabras(80)">
                <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
                <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">2. </strong> Formal</h5>
            <div class="row padding5">
              <div class="c-wrapTextarea" ng-init="ContadorPalabras2(80)">
                <textarea class="campo2 c-textarea h200" placeholder="Write here..." ng-model="textousuariob"></textarea>
                <div class="c-wrapTextarea__counter"><span id="contador2">0 </span><span ng-bind="limitePalabras2"></span><span id="alertamensaje2"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>