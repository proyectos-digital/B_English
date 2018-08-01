
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(120)">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> I can express abstract ideas.</h5>
        <div class="row-flex align-items-center">
          <p>
             Think of some regrets you've had in the past. For example: <strong class="u-textColor_4-dark">I wish I had learnt how to sing; I wish I had taken piano lessons; I wish I hadn't started smoking. </strong><strong>Write 120 words explaining the regrets you have. </strong>Try to use the sentence stem I wish I had/hadn't... elaborating on them a little.</p>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt20"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/sel_9.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
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
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>