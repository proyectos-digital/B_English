
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_4" ng-init="ContadorPalabras(250)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <div class="col xs12 md6 ta-c mt30"><img class="u-responsive-img" src="unit_2/module_7/assets/images/test_4_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task. Write about the following topic:</h5>
          <p class="u-textColor_2">Modern technology now allows rapid and uncontrolled access to information. Far from being beneficial, this is a danger to our societies. To what extent do you agree or disagree?</p>
          <p>Give reasons for your answers and include any relevant examples from your own knowledge or experience.<br/> <strong>Minimum 250 words</strong>.</p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>