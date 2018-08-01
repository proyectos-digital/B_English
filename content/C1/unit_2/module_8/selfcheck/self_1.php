
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row-flex justify-between col-center mt30">
          <div class="dragCont ml5">
            <div class="drag">get rid of</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">hold on</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get up</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">hand out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">hurry up</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get over</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">sit down</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">gave in</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get together</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">handed in</div>
          </div>
        </div>
        <div class="row-flex mt30 flex align-items-center justify-between">
          <div class="col xs12 md5">
            <p><strong class="u-textColor_4">•</strong>  It is difficult to accept that we can no longer visit Kerry next door but I guess I will eventually <span class="drop w20"></span> it.</p>
            <p><strong class="u-textColor_4">•</strong>  There are too many apps on the mobile phone, you must <span class="drop w20"></span> some.</p>
            <p><strong class="u-textColor_4">•</strong>  I have not seen Sandra in a long time, we must <span class="drop w20"></span> with her for lunch one day.</p>
            <p><strong class="u-textColor_4">•</strong>  Every morning at 5:00 ‘O’ clock, I need to <span class="drop w20"></span> and take the dog for a walk.</p>
            <p><strong class="u-textColor_4">•</strong>  After being asked eight times to go with Karen to the mall, Suzy finally <span class="drop w20"></span> .</p>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4">•</strong> I finished my homework but I just wanted to check the answers again before it is <span class="drop w20"></span> to the teacher.</p>
            <p><strong class="u-textColor_4">•</strong> The boss came down to our department to congratulate us and <span class="drop w20"></span> our bonuses.</p>
            <p><strong class="u-textColor_4">•</strong> I have been waiting for 3 hours and the secretary just asked me to <span class="drop w20"></span> a little bit longer because the director will soon be here.</p>
            <p><strong class="u-textColor_4">•</strong> We are late again, you eat too slowly, please <span class="drop w20"></span> !</p>
            <p><strong class="u-textColor_4">•</strong> There are many problems with the new protocol that need to be fixed, we have to <span class="drop w20"></span> and iron out the problems before we can implement it.</p>
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
