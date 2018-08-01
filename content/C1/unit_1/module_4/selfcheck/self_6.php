
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_6" ng-init="ContadorPalabras(250)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <div class="col xs12 md6 ta-c mb30 showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/self_6_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5> You have 40 minutes for this task.</h5>
          <p class="ta-j">Many people believe that women make better parents than men and that is why they have the greatest role in raising children in most societies. Others claim that men are just as good as women at parenting</p>
          <h6>Write an essay expressing your point of view. Give reasons for your answers and provide relevant examples and experiences you might have had. Minimum 250 words.</h6>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
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