
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(250)">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task.</h5>
          <p class="u-textColor_2">Artists need a certain amount of freedom to develop their creativity. Some people think that artists should have total freedom to express any thoughts and ideas. To what extent do you agree or disagree?</p>
          <p>Use specific reasons and examples.<br/> <strong>Write a minimum of 250 words</strong>.</p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_10/assets/images/self_5_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>