
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(120)">
      <div class="row">
        <h6 class="mt20">Write about it, describing the decision you made, and also what you think could have happened if you had chosen the other option. <br/>Write 120 words.</h6>
        <div class="row-flex mt40 align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/self_10_1.png" alt="" srcset=""/></div>
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