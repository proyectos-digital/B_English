
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center" ng-init="ContadorPalabras(250)">
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task.</h5>
          <p class="ta-j u-textColor_2">Scientists and media are presenting ever more evidence of climate change. Governments cannot be expected to solve this problem. It is the responsibility of individuals to change their lifestyle to prevent further damage.</p>
          <p class="ta-j">What are your views? Give reasons for your answers and include any relevant examples from your own knowledge or experience. <strong>Write a minimum of 250 words. </strong>.</p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_11/assets/images/test_4_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>