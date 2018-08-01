
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40 ">
        <div class="row-flex m-a">
          <div class="col-flex-sm12 col-flex-md4 col-center"><img class="u-responsive-img mt20 showTo-md" src="unit_2/module_6/assets/images/col_1.png" alt=""/></div>
          <div class="col-flex-sm12 col-flex-md6 mt60 col-center">
            <p>Tell us about your experience or a relative's experience leaving his or her town for the first time. Send the text to your teacher.</p>
            <div class="row-flex mt30">
              <div class="c-wrapTextarea">
                <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              </div>
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

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'">                                                       </footer>