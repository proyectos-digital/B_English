
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
      </div>
      <div class="row row-flex justify-around mt30">
        <div class="dragCont">
          <div class="drag">on going</div>
        </div>
        <div class="dragCont">
          <div class="drag">count on</div>
        </div>
        <div class="dragCont">
          <div class="drag">come up with</div>
        </div>
        <div class="dragCont">
          <div class="drag">break up</div>
        </div>
        <div class="dragCont">
          <div class="drag">look up</div>
        </div>
        <div class="dragCont">
          <div class="drag">cheer up</div>
        </div>
        <div class="dragCont">
          <div class="drag">cover up</div>
        </div>
        <div class="dragCont">
          <div class="drag">crack down</div>
        </div>
        <div class="dragCont">
          <div class="drag">break down</div>
        </div>
        <div class="dragCont">
          <div class="drag">shut down</div>
        </div>
      </div>
      <div class="row mt30">
        <div class="col xs12 md6">
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> John forgot to</span>
            <span class="drop"></span>
            the address of the client that he was supposed to visit and now he is lost.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Remember to</span>
            <span class="drop"></span>
            the computer system over the weekend. We can save a lot of electricity that way. 
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Police officers are starting to </span>
            <span class="drop"></span>
            on drunk drivers. They arrested five yesterday. 
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> We have had an </span>
            <span class="drop"></span>
            feud with the landlord for the past three years. He tries to evict us every year. 
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> The project has been stuck for a month. We need your team to</span>
            <span class="drop"></span>
            some fresh ideas to move the project along.
            
          </p>
        </div>
        <div class="col xs12 md6">
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> After the C.E.O. found out his company was hacked, he tried to</span>
            <span class="drop"></span>
            what happened by issuing a false statement.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> After the first two engines failed, we were left to</span>
            <span class="drop"></span>
            the old backup engine. 
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Sandra’s new smartphone fell and broke this morning. She is really upset, let´s take her to lunch! That should help her </span>
            <span class="drop"></span>.
            
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> The idea is great but we need to  </span>
            <span class="drop"></span>
            the presentation into four sections so it is easier to understand. 
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Many analysts think that Samsung should </span>
            <span class="drop"></span>
            to form a handset producer and software producer.
          </p>
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
