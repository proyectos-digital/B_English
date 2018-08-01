
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="ContadorPalabras(250)">
    <section class="template-content">
      <div class="row mt30">
        <h5> This is a 40 minute task.</h5>
        <p>Present a written argument or case to an educated reader with no specialist knowledge of the following topic: Many people think that nowadays they are being subjected to more and more pressure at their jobs, thus having less and less time to relax. Give your opinion. Use examples and relevant evidence to explain the reasons for your opinion.</p>
        <h6>Minimum 250 words.</h6>
        <div class="col xs12 md6">
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0</span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/test_4_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>