
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row">
        <h6 class="ta-c">Match the sentences with their endings.</h6>
        <div class="row-flex align-items-center mt60">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row-flex flex-column w60 centrado">
              <div class="dragCont">
                <div class="drag">I gave it to Peter,</div>
              </div>
              <div class="dragCont">
                <div class="drag">We stopped at the museum,</div>
              </div>
              <div class="dragCont">
                <div class="drag">He gave me the letter,</div>
              </div>
              <div class="dragCont">
                <div class="drag">I spoke to Fred,</div>
              </div>
              <div class="dragCont">
                <div class="drag">He was carrying his belongings,</div>
              </div>
              <div class="dragCont">
                <div class="drag">An elephant and a mouse fell in love,</div>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="row">
              <p class="ta-c"> <strong class="u-textColor_4-dark">1.</strong><span class="drop w60"></span></p>
              <p class="ta-c">who explained the problem.</p>
            </div>
            <div class="row mt20">
              <p class="ta-c"> <strong class="u-textColor_4-dark">2.</strong><span class="drop w60"></span></p>
              <p class="ta-c">which we'd never been to.</p>
            </div>
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">3.</strong><span class="drop w60"></span></p>
              <p class="ta-c">who now has it.</p>
            </div>
            <div class="row mt20">
              <p class="ta-c"> <strong class="u-textColor_4-dark">4.</strong><span class="drop w60"></span></p>
              <p class="ta-c">which was in a blue envelope.</p>
            </div>
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">5.</strong><span class="drop w60"></span></p>
              <p class="ta-c">which is most unusual.</p>
            </div>
            <div class="row mt20">
              <p class="ta-c"><strong class="u-textColor_4-dark">6.</strong><span class="drop w60"></span></p>
              <p class="ta-c">many of which were broken.</p>
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