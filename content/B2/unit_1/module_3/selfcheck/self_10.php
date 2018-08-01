
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="ContadorPalabras(120)">
    <section class="template-content">
      <h5>Look at the picture. What do you think happened? </h5>
      <h6>Write 120 words speculating about the situation. </h6>
      <div class="row">
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center showTo-md">
            <div class="row mt40"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/sel_10.png" alt="" srcset=""/></div>
          </div>
          <div class="col xs12 md7 col-center">
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
    <button class="c-btn-IconAction u-bgIconRefresh"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="enviarTexto()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>