
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row-flex justify-between col-center mt30">
          <div class="dragCont w10">
            <div class="drag">Pointed out</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Shut up</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Put off</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Ran into</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Set off</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Put on</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Set up</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Rely on</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Put out</div>
          </div>
          <div class="dragCont w10">
            <div class="drag">Run out of</div>
          </div>
        </div>
        <div class="row-flex mt30 flex align-items-center justify-between">
          <div class="col xs12 md5">
            <p><strong class="u-textColor_4">•</strong> It is cold outside, you need to <span class="drop w20"></span> a jacket.</p>
            <p><strong class="u-textColor_4">•</strong> It is raining, we will have to  <span class="drop w20"></span> the picnic for another day.</p>
            <p><strong class="u-textColor_4">•</strong> On Fridays the garbage truck passes at 8 am. So make sure you <span class="drop w20"></span> the garbage before then.</p>
            <p><strong class="u-textColor_4">•</strong> We were not sure what time the movie started so Andrea <span class="drop w20"></span> that the movies start at 6:00 pm every day.</p>
            <p><strong class="u-textColor_4">•</strong> I need to be at the airport at 10:00 am, can I <span class="drop w20"></span> you to get me there on time.</p>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4">•</strong> Johnny has not seen his sister in 2 years. He <span class="drop w20"></span> her at the mall yesterday, what a surprise!</p>
            <p><strong class="u-textColor_4">•</strong> There are a lot of students at the museum today so we need more candy. We are going to  <span class="drop w20"></span> candy very soon.</p>
            <p><strong class="u-textColor_4">•</strong> The crowd was angry but what really <span class="drop w20"></span> the crowd was when they said the concert was cancelled.</p>
            <p><strong class="u-textColor_4">•</strong> The dogs are always thirsty when they play in the park so we need to  <span class="drop w20"></span> a water trough.</p>
            <p><strong class="u-textColor_4">•</strong> Francy was talking loudly during the presentation so the teacher asked her to  <span class="drop w20"></span> so everyone could hear the presentation.</p>
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
