
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>The graph below shows the number of computer and internet users in different Central America countries.</h5>
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_2/module_7/assets/images/act_8_1.png" alt=""/></div>
          <div class="col xs12 md6 ta-c">
            <h6>Write a report describing the information in the graph below. <strong>Minimum 150 words. You have 20 minutes for this task</strong>.</h6>
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
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>