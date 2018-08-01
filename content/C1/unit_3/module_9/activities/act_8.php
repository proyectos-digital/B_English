
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8" ng-init="s_actividad = 1 ; ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p class="ta-c">The table below gives information about consumer spending on clothing and footwear in five different countries in 2012.<br/><strong>Summarize the information by selecting and reporting the main ideas, make comparisons where relevant. </strong><br/>Write a minimum of 150 words.</p>
      </div>
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_3/module_9/assets/images/act_8_1.png" alt=""/></div>
          <div class="col xs12 md6 ta-c">
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
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>