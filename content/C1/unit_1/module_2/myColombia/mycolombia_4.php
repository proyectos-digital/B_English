
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="DragandDrop()">
      <h5>Fill in the blank space with the appropriate words from the list below.</h5>
      <h6>Written by Stephen Gill March 31, 2016.</h6>
      <div class="row row-flex mt30 ta-c">
        <div class="dragCont col sm6 md2 mt10 offset-md1"><span class="drag">Cuisine</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">mouthwatering</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">Portions</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">Tempting</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">Filling</span></div>
        <div class="dragCont col sm6 md2 mt10 offset-md1"><span class="drag">unprocessed</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">gone bad</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">horrible</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">leftovers</span></div>
        <div class="dragCont col sm6 md2 mt10"><span class="drag">inedible</span></div>
      </div>
      <p class="mt50">When most people travel to Colombia they tend to enjoy the local <span class="drop"></span>. In my opinion most of the dishes are <span class="drop"></span>
        . Every time a new dish is introduced to me I find it so <span class="drop"></span>. The meals usually come in large <span class="drop"></span>
        and are very <span class="drop"></span>. Because most of the ingredients are <span class="drop"></span> and fresh, it makes
        the food more appetizing.<br/>
        Whenever I go out for a meal I tend to ask for the uneaten portion to be placed in a box so I can take it home. <span class="drop on-mayusc"></span> make
        a delicious breakfast, but you need to be careful that its hasn’t <span class="drop"></span>. If you did not refrigerate your leftovers in Colombia
        they tend to be <span class="drop"></span> and taste <span class="drop"></span> .
      </p>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
