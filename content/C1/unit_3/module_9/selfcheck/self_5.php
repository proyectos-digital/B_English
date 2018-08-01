
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_9/assets/images/self_5_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>You have 20 minutes for this task.</h5>
          <p class="u-textColor_2 ta-j">You recently bought an item of clothing from a shop. You discovered that it had a fault and returned it to the shop for a replacement or a refund. However, the assistant told you that this was against the store’s policy.</p>
          <p><br/> <strong>Write Minimum 250 words</strong>.</p>
          <div class="c-wrapTextarea " ng-init="ContadorPalabras(250)">
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