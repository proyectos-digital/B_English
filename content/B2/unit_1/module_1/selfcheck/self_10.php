
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content ">
      <h5>What will the members of the Adams family will be doing tomorrow? Write a paragraph describing their routine for tomorrow.</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm align-items-center">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row mb30 mt20 ta-c showTo-sm">
            <div class="col xs6 sm4 md3"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_10_1.png" alt=""/></div>
            <div class="col xs6 sm4 md3"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_10_2.png" alt=""/></div>
            <div class="col xs6 sm4 md3"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_10_3.png" alt=""/></div>
            <div class="col xs6 sm4 md3"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_10_4.png" alt=""/></div>
            <div class="col xs6 sm4 md3"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_10_5.png" alt=""/></div>
            <div class="col xs6 sm4 md3"><img class="u-responsive-img" src="unit_1/module_1/assets/images/self_10_6.png" alt=""/></div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row-flex">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
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