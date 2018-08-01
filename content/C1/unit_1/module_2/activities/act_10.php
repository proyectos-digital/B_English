
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h4>Introducing Yourself to an Individual</h4>
      </div>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls">
                  <source src="unit_1/module_2/assets/videos/act_10_1.mp4" type="video/mp4"/>
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <h5>How would you feel in the following situations?</h5>
          <div class="row-flex">
            <figure class="xs6 padding5"><img class="u-responsive-img" src="unit_1/module_2/assets/images/act_10_1.png"/></figure>
            <figure class="xs6 padding5"><img class="u-responsive-img" src="unit_1/module_2/assets/images/act_10_2.png"/></figure>
          </div>
          <div class="c-wrapTextarea ">
            <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
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