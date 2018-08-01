
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Drag and drop the right option from the box to complete the dialogue.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row-flex justify-around mt30">
              <div class="dragCont">
                <div class="drag">had gone</div>
              </div>
              <div class="dragCont">
                <div class="drag">had been trying</div>
              </div>
              <div class="dragCont">
                <div class="drag">had been waiting</div>
              </div>
              <div class="dragCont">
                <div class="drag">had been waiting</div>
              </div>
              <div class="dragCont">
                <div class="drag">had drunk</div>
              </div>
              <div class="dragCont">
                <div class="drag">had almost given up</div>
              </div>
              <div class="dragCont">
                <div class="drag">had already picked up</div>
              </div>
              <div class="dragCont">
                <div class="drag">had arranged</div>
              </div>
            </div>
            <div class="row mt30"><img class="u-responsive-img centrado w80" src="./unit_2/module_5/assets/images/act_16_1.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row mt30">
              <audio class="centrado" controls="controls">
                <source src="unit_2/module_5/assets/audios/act_16.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
            <div class="row mt30">
              <p class="u-txtSpace">I’m sorry I left without you last night, but I told you to meet me early because the show started at 8:00. I <strong>(1)</strong><span class="drop"></span>to get tickets for that play for months, and I didn’t want to miss it. By the time I finally left the coffee shop where we were supposed to meet, I <strong>(2)</strong><span class="drop"></span>5 cups of coffee and I <strong>(3)</strong><span class="drop"></span>over an hour. I had to leave because I <strong>(4)</strong><span class="drop"></span>to meet Kathy in front of the theater.</p>
              <p class="u-txtSpace">When I arrived at the theater, Kathy <strong>(5) </strong><span class="drop"></span>up the tickets and she was waiting for us near the entrance. She was really angry because she <strong>(6)  </strong><span class="drop"></span>for more than half an hour. She said she <strong>(7) </strong><span class="drop"></span>up and <strong>(8) </strong><span class="drop"></span>into the theater without us.  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
