
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="ContadorPalabras(200)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>What is your opinion?</h5>
        <p>In many gyms today, the use of steroids and other testosterone supplements is very common. What is your opinion on the use of this drugs or supplements and how they affect a person’s health and state of mind? <strong>Mínimum 200 words.</strong></p>
      </div>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 row-flex align-items-center showTo-md"><img class="u-responsive-img mt30 m-a" src="unit_1/module_2/assets/images/act_7_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0</span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
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