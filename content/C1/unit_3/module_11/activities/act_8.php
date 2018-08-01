
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(150)">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <h5>You have 20 minutes for this task</h5>
          <p class="u-textColor_2">The chart below show the levels of participation of science in developing and developed countries in 2000 and 2010.</p>
          <div class="row ta-c"><img class="u-responsive-img" src="unit_3/module_11/assets/images/act_8_1.png" alt=""/></div>
        </div>
        <div class="col xs12 md6">
          <p>Write a report for a university professor describing the information shown below.<br/> <strong>Write a minimum 150 words.</strong></p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0</span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
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