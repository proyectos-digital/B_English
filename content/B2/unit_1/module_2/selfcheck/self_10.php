
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="ContadorPalabras(120)"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Write 120 words describing the changes you could make and your predictions for your future life.</h5>
      <div class="row-flex align-items-center">
        <div class="col-flex-sm8 col-flex-md4 offset-md1 col-center mt50-md mt30-sm ta-j">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent padding20 ">
              <p>Think of a list of changes that you could make to your life (e.g. “I’m going to quit my job and become an artist”) and then predict your future life at certain points in time (e.g. this time tomorrow, in a year and in ten years).</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm10 col-flex-md6 offset-sm1 col-center mt50-md mt30-sm">
          <div class="row-flex">
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