
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center" ng-init="ContadorPalabras(150)">
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_12/assets/images/act_8_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>You have 20 minutes for the task</h5>
          <p class="u-textColor_2">The pie chart gives information on United Arab Emirates Government budget of the year 2000. The total budget was AED (United Arab Emirates Dirham) 315 billion.</p>
          <p>Summarize the information by selecting and reporting the main features, making comparisons where relevant.<br/> <strong>Minimum 150 words</strong>.</p>
          <div class="c-wrapTextarea ">
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