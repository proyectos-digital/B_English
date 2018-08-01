
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropImg()">
    <section class="template-content">
      <div class="row-flex mt30-md">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <p>Arrange the pictures in the order in which they are described in the listening. </p>
        </div>
        <div class="col-flex-sm12 xs12 col-flex-md6 col-center">
          <audio class="row" controls="controls">
            <source src="unit_1/module_2/assets/audios/self_7_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="row-flex">
          <div class="col-flex-sm10 col-flex-md10 col-center mt15-md mt20-sm ta-j">
            <div class="row-flex justify-center">
              <div class="dragCont m-a mt10 f-l">
                <div class="drag" rescon="1"><img class="u-responsive-img" src="unit_1/module_2/assets/images/self_11a.png" alt=""/></div>
              </div>
              <div class="dragCont m-a mt10 f-l">
                <div class="drag" rescon="2"><img class="u-responsive-img" src="unit_1/module_2/assets/images/self_11b.png" alt=""/></div>
              </div>
              <div class="dragCont m-a mt10 f-l">
                <div class="drag" rescon="3"><img class="u-responsive-img" src="unit_1/module_2/assets/images/self_11c.png" alt=""/></div>
              </div>
              <div class="dragCont m-a mt10 f-l">
                <div class="drag" rescon="4"><img class="u-responsive-img" src="unit_1/module_2/assets/images/self_11d.png" alt=""/></div>
              </div>
              <div class="dragCont m-a mt10 f-l">
                <div class="drag" rescon="5"><img class="u-responsive-img" src="unit_1/module_2/assets/images/self_11e.png" alt=""/></div>
              </div>
              <div class="dragCont m-a mt10 f-l">
                <div class="drag" rescon="6"><img class="u-responsive-img" src="unit_1/module_2/assets/images/self_11f.png" alt=""/></div>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md11 col-center mt15-md mt30-sm ta-j">
            <div class="row-flex justify-center">
              <div class="drop mt10 m-a" pseudo-content="pseudo-content" before-content="1" content-size="3" content-color="color_4"></div>
              <div class="drop mt10 m-a" pseudo-content="pseudo-content" before-content="2" content-size="3" content-color="color_4"></div>
              <div class="drop mt10 m-a" pseudo-content="pseudo-content" before-content="3" content-size="3" content-color="color_4"></div>
              <div class="drop mt10 m-a" pseudo-content="pseudo-content" before-content="4" content-size="3" content-color="color_4"></div>
              <div class="drop mt10 m-a" pseudo-content="pseudo-content" before-content="5" content-size="3" content-color="color_4"></div>
              <div class="drop mt10 m-a" pseudo-content="pseudo-content" before-content="6" content-size="3" content-color="color_4"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropImg()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>