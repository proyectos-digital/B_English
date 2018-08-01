
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(250)">
      <div class="row row-flex mt30 align-items-center">
        <h6 class="ta-c mb20">You have 40 minutes for this task. </h6>
        <p>Write about the following topic: <strong>People attend colleges or universities for many different reasons (for example, new experiences, career preparation, increased knowledge etc.)</strong>.</p>
        <p>Why do you think people attend colleges or universities? You should give reasons for your answer using your own ideas and experience. <strong>Minimum 250 words</strong>.</p>
        <div class="col xs12 md6">
          <div class="c-wrapTextarea">
            <textarea class="campo c-textarea h300" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" ng-src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/test_{{actividadid}}_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>