
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(150)">
      <div class="row row-flex mt30">
        <h5> Write a report for a university teacher describing the information shown. Minimum 150 words. You have 20 minutes on this task.</h5>
        <p>The graphs below show the numbers of male and female workers in 1995 and 2005 in several employment sectors of the Republic of Deerland.</p>
        <div class="col xs12 md6 col-center ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_7_1.png" alt=""/></div>
        <div class="col xs12 md6 col-center ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_7_2.png" alt=""/></div>
        <div class="row"> 
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>