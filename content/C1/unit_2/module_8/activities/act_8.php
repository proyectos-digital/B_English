
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30" ng-init="ContadorPalabras(250)">
        <div class="col xs12 md6 ta-c mb30"><img class="u-responsive-img" src="unit_2/module_8/assets/images/act_8_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task.</h5>
          <p class="u-textColor_2">The government should control the amount of violence in films and on television in order to decrease violent crimes in society. To what extent do you agree or disagree?</p>
          <p>Use specific reasons and examples that support your opinion. <br/> <strong>Minimum 250 words</strong>.</p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>