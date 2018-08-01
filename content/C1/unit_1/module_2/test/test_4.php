
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(250)">
      <div class="row mt30">
        <h6>You have 40 minutes on this task.</h6>
        <p>Present a written argument or case to an educated reader without special knowledge of the following topic:</p>
        <p>Some countries have free health services. However, some people feel that those who live <br/> unhealthy lifestyles should not receive free healthcare.</p>
        <h5>Do you agree or disagree with this view?</h5>
        <p>Use examples and relevant evidence, knowledge and experience to support your arguments. <br/><br/> Minimum 250 words.</p>
        <div class="col xs12 md6 align-items-center row-flex">
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0</span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
        <div class="col xs12 md6 align-items-center row-flex"><img class="u-responsive-img col-center" src="unit_1/module_2/assets/images/test_4_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>