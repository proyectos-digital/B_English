
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task. Write an argument or a case to an educated reader with no specialized knowledge of the following topic:</h5>
          <p class="u-textColor_2">Some people prefer to buy designer clothes while others prefer to have their clothes made by a tailor or a dressmaker. Which one do you prefer?</p>
          <p>Give reasons for your answers.<br/> <strong>Minimum 250 words</strong>.</p>
          <div class="c-wrapTextarea " ng-init="ContadorPalabras(250)">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_9/assets/images/test_4_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <bbutton class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></bbutton>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>