
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_9">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="ContadorPalabras(150)">
    <section class="template-content u-animationFadeDown">
      <div class="row-flex justify-between col-center"> 
        <article class="xs12 md6">
          <h6 class="mb20">Colombia: Chamber of Representatives</h6>
          <div class="row-flex justify-center"><img class="u-responsive-img " src="unit_3/module_12/assets/images/col_9_1.png" alt=""/></div>
        </article>
        <article class="row-flex xs12 md6">
          <h6 class="mb20">Colombia: Senate</h6>
          <div class="row-flex justify-center centrar_bottom w100"><img class="u-responsive-img " src="unit_3/module_12/assets/images/col_9_2.png" alt=""/></div>
        </article>
        <div class="row col-flex-md7 col-flex-xs12 mt30">
          <h6>Write a report for a university teacher describing the information shown.</h6>
          <p>» You should write at least 150 words.</p>
          <p>» You should spend about 20 minutes on this task.</p>
        </div>
        <div class="row col-flex-md7 col-flex-xs12">
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>       
   
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"> </button>
  </aside>
</section> 
 
<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'">    </footer>