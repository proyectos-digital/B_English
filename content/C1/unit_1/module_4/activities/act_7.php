
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p class="ta-c"><strong>You have 20 minutes for this task</strong>.<br/>
          The pie chart below shows the proportion of different categories of families living in poverty in Colombia in 1992.
          Summarize the information by selecting and reporting the main features and make comparisons where relevant.<br/>
          <strong>Minimum 150 words</strong>.
        </p>
      </div>
      <h4 class="u-textColor_4 ta-c">Proportion of people from each household type living in poverty.</h4>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 row-flex align-items-center showTo-md"><img class="u-responsive-img mt30 col-center" src="unit_1/module_4/assets/images/act_7_1.png" alt=""/></div>
        <div class="col xs12 md6">
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