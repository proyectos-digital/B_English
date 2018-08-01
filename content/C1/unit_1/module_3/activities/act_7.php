
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p>You have 20 minutes for this task. </p>
        <p>You have a full-time job and are also doing a part-time evening course. You now find that you cannot continue the course. Write a letter to your teacher. In your letter  <strong> describe the situation, explain why you cannot continue at this time</strong> and  <strong>say what action you would like to take</strong>. </p>
        <p>You should write at least 150 words.</p>
      </div>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 ta-c mb30"><img class="u-responsive-img mt30 m-a" src="unit_1/module_3/assets/images/act_7_1.png" alt=""/></div>
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