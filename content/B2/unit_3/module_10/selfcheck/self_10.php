
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content " ng-init="ContadorPalabras(200)">
      <h6 class="ta-c">The city is planning on building a new second-floor road in your neighborhood, to improve traffic. This new second floor will block the view that most buildings in your neighborhood have to the rest of the city, and would block the view of the apartments that will have it right in front. You understand that there is a need to relieve traffic in the area, but is a second floor the best choice? Write a letter to the local newspaper giving your views and stating your opinion. Your letter should be 200 words long.</h6>
      <div class="row-flex mt100-xs mt10-md mt10-sm align-items-center">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row mb30 mt20 ta-c showTo-md"><img class="u-responsive-img" src="unit_3/module_10/assets/images/self_3.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
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