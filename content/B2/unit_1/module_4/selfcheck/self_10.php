
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="ContadorPalabras(120)">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm aling-items-center">
        <div class="col-flex-xs12 align-items-center col-flex-md6 col-center">
          <div class="row mb30 mt20 ta-c showTo-md"><img class="u-responsive-img w80" src="unit_1/module_2/assets/images/self_10.png" alt=""/></div>
        </div>
        <div class="row-flex align-items-center col-flex-xs12 col-flex-md6 col-center mt10-xm">
          <div class="c-cardGreen">   
            <div class="c-cardGreenContent">                           
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> Think of a mysterious or historic place or location in your country.</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> Who discovered it? Who was it built/constructed by? What was it</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> built/constructed for? How old is this place?</p>
              <p><strong><span class="u-textColor_4-dark">•  </span></strong> Write 120 words describing this place.</p>
            </div>
          </div>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>