
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <div class="col xs12 md6 ta-c mt30"><img class="u-responsive-img" src="unit_2/module_7/assets/images/self_5_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>The graph shows Internet Usage in Colombia by Age Group, 1998-2000.</h5>
          <p class="ta-j u-textColor_2">Summarize the information by selecting and reporting the main ideas and make comparisons where relevant. </p>
          <p class="ta-j"> You have 20 minutes for this task.<br/><br/> <strong> Minimum 150 words. </strong></p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>