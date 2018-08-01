
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>You have 20 minutes for this task. </h5>
        <p><strong>The diagram below shows how the Chilean Bureau of Meteorology collects up-to-the-minute information on the weather in order to produce reliable forecasts</strong>. </p>
        <p>Write a report for a university lecturer describing the information shown below. Minimum 150 words.</p>
      </div>
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_2/module_6/assets/images/act_7_1.png" alt=""/></div>
          <div class="col xs12 md6">
            <div class="c-wrapTextarea ">
              <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
            </div>
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