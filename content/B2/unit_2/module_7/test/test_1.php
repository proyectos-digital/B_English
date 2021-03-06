
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_1">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropClonable()">
    <section class="template-content">
      <div class="row">
        <h5>Classify the verbs.</h5>
        <div class="row mt40">
          <div class="col-flex-xs12 col-flex-sm9 col-center">
            <div class="row-flex mt40">
              <div class="col xs6 sm4 md3 col-center">
                <div class="dragCont">
                  <div class="drag" rescon="2">Direct Speech</div>
                </div>
              </div>
              <div class="col xs6 sm4 md3 col-center">
                <div class="dragCont">
                  <div class="drag" rescon="1">Reported Speech</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt40">                         
          <div class="row-flex mt40">
            <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
              <div class="_dropCont">Mary, please don´t open this window.<span class="drop centrado"></span></div>
            </div>
            <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
              <div class="_dropCont">My sister asked me to bring her a cup of coffee.<span class="drop centrado"></span></div>
            </div>
            <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
              <div class="_dropCont">Lock the door after arriving home.<span class="drop centrado"></span></div>
            </div>
            <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
              <div class="_dropCont">Sam wondered if the test was going to be difficult to answer.<span class="drop centrado">                       </span></div>
            </div>
            <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
              <div class="_dropCont">Where did you buy this cake?<span class="drop centrado"></span></div>
            </div>
            <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
              <div class="_dropCont">Sara said they were going to the zoo this weekend.<span class="drop centrado"></span></div>
            </div>
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