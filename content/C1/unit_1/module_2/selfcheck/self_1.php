
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
      </div>
      <div class="row-flex justify-around mt20">
        <div class="dragCont">
          <div class="drag">account for</div>
        </div>
        <div class="dragCont">
          <div class="drag">add up</div>
        </div>
        <div class="dragCont">
          <div class="drag">advises against</div>
        </div>
        <div class="dragCont">
          <div class="drag">agree with</div>
        </div>
        <div class="dragCont">
          <div class="drag">allow for</div>
        </div>
        <div class="dragCont">
          <div class="drag">appeal to</div>
        </div>
        <div class="dragCont">
          <div class="drag">applied for</div>
        </div>
        <div class="dragCont">
          <div class="drag">backed away</div>
        </div>
        <div class="dragCont">
          <div class="drag">back down</div>
        </div>
        <div class="dragCont">
          <div class="drag">backed up</div>
        </div>
      </div>
      <div class="row mt30">
        <div class="col xs12 md6">
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Liliana</span>
            <span class="drop"></span>
            a job yesterday. She submitted some scanned documents.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> The doctor</span>
            <span class="drop"></span>
            using soap to wash the injury.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> I </span>
            <span class="drop"></span>
            your common sense when making arrangement to select the catering company.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> They wondered what could </span>
            <span class="drop"></span>
            his bad luck.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> You need to</span>
            <span class="drop"></span>
            the possibility that some of the evidence presented cannot be trusted.
            
          </p>
        </div>
        <div class="col xs12 md6">
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> I </span>
            <span class="drop"></span>
            your argument that children are not practicing enough for the coming competition.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Are you accusing us of fraud? Your accusation has to be </span>
            <span class="drop"></span>
            solid evidence.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> The sales manager</span>
            <span class="drop"></span>
            from the deal because it was not the best offer.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> Even though it was a difficult challenge Sara did not  </span>
            <span class="drop"></span>
            because she is a very resilient person.
          </p>
          <p class="mt20 lh30"><span><strong class="u-textColor_4">•</strong> The two different reports of the same task don’t </span>
            <span class="drop"></span>
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
