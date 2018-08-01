
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(200)">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md5 col-center">
          <p>
             What extreme sport can be practiced in your town? <br/><strong>Write 200 words. </strong>Include:</p>
          <p>
              Its description, what kind of people can practice it (age, personality, etc), where to practice and other aspects that you consider important. Send the text to your tutor.</p>
        </div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
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