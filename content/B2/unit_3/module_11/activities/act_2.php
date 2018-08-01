
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <h5>Based on the information and the exercises above, choose the correct pronoun to complete the sentences.</h5>
      <div class="row">
        <div class="row-flex mt10-xs mt10-md mt10-sm m-a">
          <div class="col-flex-xs12 col-flex-md2 offset-md1 col-center mt10-sm mt20-md">
            <div class="row-flex">
              <div class="dragCont m-a f-l mt10"><span class="drag">when</span></div>
              <div class="dragCont m-a f-l mt10"><span class="drag">whose</span></div>
              <div class="dragCont m-a f-l mt10"><span class="drag">where</span></div>
              <div class="dragCont m-a f-l mt10"><span class="drag">whom</span></div>
              <div class="dragCont m-a f-l mt10"><span class="drag">who</span></div>
            </div>
          </div>
          <div class="col-flex-xs12 col-flex-md8 offset-md1 col-center mt10-sm mt20-md">
            <div class="mb20 row-flex mt30">
              <div class="col-flex">
                <p><strong class="u-textColor_4-dark"> 1. </strong>He is the player <span class="drop"> </span>scored the last goal.</p>
              </div>
            </div>
            <div class="mb20 row-flex mt30">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>Summer is the season <span class="drop"> </span>I prefer to go on vacation. </div>
            </div>
            <div class="mb20 row-flex mt30">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>I know a mechanic <span class="drop"> </span>can help us fix the car.</div>
            </div>
            <div class="mb20 row-flex mt30">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>We went back to the shop <span class="drop"> </span>I saw the skirt I liked.</div>
            </div>
            <div class="mb20 row-flex mt30">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong> He is the painter paints <span class="drop "> </span>are being auctioned.</div>
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