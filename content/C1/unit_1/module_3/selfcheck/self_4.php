
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="ContadorPalabras(150)">
    <section class="template-content">
      <div class="row row-flex align-items-center">
        <p><strong>You have 20 minutes for this task</strong>. The charts below show responses to a survey by students at Carell University. The first chart shows students’ reasons for choosing their course and the second chart shows what effect students feel their courses have had on their lives afterward.</p>
        <p>Write a report for a university lecturer describing the information below. <strong>Minimum 150 words</strong>.</p>
        <div class="col xs12 md7 col-center ta-c"><img class="u-responsive-img mt30" src="unit_1/module_3/assets/images/self_4_1.png" alt=""/><img class="u-responsive-img mt30" src="unit_1/module_3/assets/images/self_4_2.png" alt=""/></div>
        <div class="col xs12 md5">
          <div class="row">
            <div class="c-wrapTextarea ">
              <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
            </div>
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