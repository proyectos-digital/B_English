
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(250)">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_10/assets/images/test_4_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task. Do you agree or disagree with the following statement?</h5>
          <p class="u-textColor_2">Art is considered an important part of a society as well as an expression of its culture. Do you think it is important for children to be taught art? Do you think children should be encouraged to focus on art rather than other subjects?</p>
          <p>Use specific reasons and examples. <strong>Write a minumum of 250 words</strong>.</p>
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