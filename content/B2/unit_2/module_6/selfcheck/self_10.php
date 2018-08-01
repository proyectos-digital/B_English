
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="ContadorPalabras(120)">
    <section class="template-content">
      <h5>I can express certainty, probability, and doubt.</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt30-md">
          <p>Look at the gadget in the picture. What do you think it might be? What do you think it could be used for? Who may be interested in buying and using it? Write a description of the gadget answering these questions and any other that come to your mind. Write 120 words.</p>
          <div class="row mb30 mt30 ta-c showTo-md"><img class="u-responsive-img" src="unit_2/module_6/assets/images/self_3.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt10-md">
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