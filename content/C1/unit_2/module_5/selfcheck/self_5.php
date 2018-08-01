
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <h5>1. The charts below show the number of Canadian tourists traveling abroad between 1985 and 1995 and Australia’s share of the Canadian tourist market. </h5>
        <p class="ta-j"> Write a report for a university lecturer describing the information shown below. Minimum 150 words. You have 20 minutes for this task.</p>
        <div class="row">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_2/module_5/assets/images/self_5_1.png" alt=""/></div>
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_2/module_5/assets/images/self_5_2.png" alt=""/></div>
        </div>
        <div class="c-wrapTextarea ">
          <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
          <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>