
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <h5>Listen to the conversation and choose expressions from the box to complete it.</h5>
      <div class="row-flex col-center align-items-center">
        <div class="row">
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">I owe you big time</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">Don’t mention it</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">What’s going on</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">appreciate</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">I thought you did a great job</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">Thanks</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">Seriously</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">What are you working on</div>
            </div>
          </div>
          <div class="col xs6 md4">
            <div class="dragCont">
              <div class="drag">a million</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row flex align-items-center mt40">
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_14.mp3"></button>
            </div>
            <div class="col xs10">
              <p><span class="u-textColor_2"><strong>A: </strong></span> <span class="u-textColor_4"><strong>(1) </strong></span> <span class="drop h25 "></span> ?</p>
              <p><span class="u-textColor_5"><strong>B: </strong></span> Some visual aids. I have to give another presentation next week.</p>
              <p><span class="u-textColor_2"><strong>A: </strong></span> Really? <span class="u-textColor_4"><strong>(2) </strong></span> <span class="drop h25 "></span> with the last one. </p>
              <p><span class="u-textColor_5"><strong>B: </strong></span> <span class="u-textColor_4"><strong>(3) </strong></span> <span class="drop h25 "></span> I really <span class="u-textColor_4"><strong>(4) </strong></span> <span class="drop h25 "></span> that. <span class="u-textColor_4"><strong>(5) </strong></span> <span class="drop h25 "></span> with you?</p>
              <p><span class="u-textColor_2"><strong>A: </strong></span> I’m finishing up the report we were working on.</p>
              <p><span class="u-textColor_5"><strong>B: </strong></span> Hey, thanks <span class="u-textColor_4"><strong>(6) </strong></span> <span class="drop h25 "></span>. <span class="u-textColor_4"><strong>(7) </strong></span> <span class="drop h25 "></span> </p>
              <p><span class="u-textColor_2"><strong>A: </strong></span> No problem.</p>
              <p><span class="u-textColor_5"><strong>B: </strong></span> <span class="u-textColor_4"><strong>(8) </strong></span> <span class="drop h25 "></span> ! I don’t think I could get this presentation done without your help.</p>
              <p><span class="u-textColor_2"><strong>A: </strong></span> <span class="u-textColor_4"><strong>(9) </strong></span> <span class="drop h25 "></span></p>
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