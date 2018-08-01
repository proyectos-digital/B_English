
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row row-flex justify-center mt30">
          <div class="dragCont ml5">
            <div class="drag">find out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get away</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">figure out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get in</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">fill out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">focused on</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">fallen through</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get by</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag">get along</div>
          </div>
        </div>
        <div class="row row-flex justify-between mt30">
          <div class="col xs12 md5">
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  I have no luck with vacation, this is the third vacation I have planned and they have all  <span class="drop w20"></span> . Now I am home, bored with nowhere to go. </p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  I don’t know how we are going to get from Madrid to Barcelona and then to Bogota, we have to  <span class="drop w20"></span> a plan that includes all three of us.  </p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  Whenever you travel to another country you always have to  <span class="drop w20"></span> the customs form before you get to the customs officer.  </p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  I don’t know the cheapest way to travel to Panama, can you <span class="drop w20"></span> for me. </p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  With only two weeks to go, I am <span class="drop w20"></span> the company trip. It is so difficult to plan for so many people. </p>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  Image being stuck in a car with someone you don’t <span class="drop w20"></span> with for 5 hours! That was the worse weekend of my life.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  This quarter has been so stressful! We should all <span class="drop w20"></span> for at least a weekend so we can relax.  </p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  We are going to backpack across Latin America for a month. I am sure I can <span class="drop w20"></span> on just 2,000 dollars.   </p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  I lost my hotel key card, now I can’t <span class="drop w20"></span> my room. </p>
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
