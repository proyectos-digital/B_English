
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(150)">
      <div class="row row-flex align-items-center">
        <div class="col xs12 md5 row-flex align-items-center"><img class="u-responsive-img col-center" src="unit_1/module_2/assets/images/self_6_1.png" alt=""/><img class="u-responsive-img col-center" src="unit_1/module_2/assets/images/self_6_2.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>Write a report for a university teacher using the information given. Write at least 150 words. You have 20 minutes on this task</h5>
          <p>The first chart shows the percentage of Dutch adults drinking more than the recommended guidelines on at least one day a week in 2004. The second graph shows the average alcohol consumption in children in Holland, aged 11-15, who drank in the last week (1990-2004).</p>
          <div class="row">
            <div class="c-wrapTextarea ">
              <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              <div class="c-wrapTextarea__counter"><span id="contador">0</span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
            </div>
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