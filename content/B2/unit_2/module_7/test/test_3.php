
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_3">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropClonable()">
    <section class="template-content">
      <div class="row">
        <h5>Classify the verbs.</h5>
        <div class="row-flex justify-center mt40">
          <div class="col-flex-xs12 col-flex-sm9">
            <div class="row-flex justify-center mt40"><span class="dragCont m-a"><span class="drag">Contrasting Ideas</span></span><span class="dragCont m-a"><span class="drag">Showing Reasons</span></span><span class="dragCont m-a"><span class="drag">Showing Results</span></span><span class="dragCont m-a"><span class="drag">Adding Information</span></span></div>
          </div>
        </div>
        <div class="row-flex mt40">
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">When I was little, I wanted to be a firefighter. But I <strong>also</strong> wanted to be an astronaut.<span class="drop"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont"><strong>Since</strong> we didn´t have the original invoice, they couldn´t replace the damaged product.<span class="drop"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">I didn´t devote enough time to the paper. <strong>As a consequence</strong>, I did not get a good grade.<span class="drop"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">We had our picnic, <strong>in spite of the</strong> bad weather.<span class="drop"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont"><strong>While</strong> Bogota is a really exciting city, I find it too busy.<span class="drop"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">I decided to go to the library, <strong>even though it</strong> is really far.<span class="drop"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropClonable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>