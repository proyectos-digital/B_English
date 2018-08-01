
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="s_actividad = 1">
    <section class="template-content">
      <div class="row-flex s-actividad" ng-show="s_actividad == 1">
        <div class="col-flex-xs12">
          <div class="row-flex">
            <h5>Unscramble the words to make sentences with negative adverbials.</h5>
            <div class="mb20 row-flex mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">1. </strong></div>
              <div class="flex flex-wrap sortreload ta-c" data-ejercicio="sortable" id="sortable1"> <span class="ancho200 ui-sortable--item js-sortdrag">you</span><span class="ancho200 ui-sortable--item js-sortdrag">pilots</span><span class="ancho200 ui-sortable--item js-sortdrag">to</span><span class="ancho200 ui-sortable--item js-sortdrag">allowed</span><span class="ancho200 ui-sortable--item js-sortdrag">the</span><span class="ancho200 ui-sortable--item js-sortdrag">no</span><span class="ancho200 ui-sortable--item js-sortdrag">circumstances</span><span class="ancho200 ui-sortable--item js-sortdrag">.</span><span class="ancho200 ui-sortable--item js-sortdrag">under</span><span class="ancho200 ui-sortable--item js-sortdrag">are</span><span class="ancho200 ui-sortable--item js-sortdrag">disturb</span></div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">2. </strong></div>
              <div class="flex flex-wrap sortreload" data-ejercicio="sortable" id="sortable2"> <span class="ancho200 ui-sortable--item js-sortdrag">never</span><span class="ancho200 ui-sortable--item js-sortdrag">faced</span><span class="ancho200 ui-sortable--item js-sortdrag">a</span><span class="ancho200 ui-sortable--item js-sortdrag">have</span><span class="ancho200 ui-sortable--item js-sortdrag">challenge</span><span class="ancho200 ui-sortable--item js-sortdrag">such</span><span class="ancho200 ui-sortable--item js-sortdrag">!</span><span class="ancho200 ui-sortable--item js-sortdrag">we</span></div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">3. </strong></div>
              <div class="flex flex-wrap sortreload" data-ejercicio="sortable" id="sortable3"> <span class="ancho200 ui-sortable--item js-sortdrag">only</span><span class="ancho200 ui-sortable--item js-sortdrag">this</span><span class="ancho200 ui-sortable--item js-sortdrag">guessing</span><span class="ancho200 ui-sortable--item js-sortdrag">solve</span><span class="ancho200 ui-sortable--item js-sortdrag">by</span><span class="ancho200 ui-sortable--item js-sortdrag">.</span><span class="ancho200 ui-sortable--item js-sortdrag">can</span><span class="ancho200 ui-sortable--item js-sortdrag">you</span><span class="ancho200 ui-sortable--item js-sortdrag">puzzle</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex" ng-show="s_actividad == 2">
        <div class="col-flex-xs12">
          <div class="row-flex">
            <h5>Unscramble the words to make sentences with negative adverbials.</h5>
            <div class="mb20 row-flex mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">4. </strong></div>
              <div class="flex flex-wrap sortreload ta-c" data-ejercicio="sortable" id="sortable4"> <span class="ancho200 ui-sortable--item js-sortdrag">if</span><span class="ancho200 ui-sortable--item js-sortdrag">would</span><span class="ancho200 ui-sortable--item js-sortdrag">everybod</span><span class="ancho200 ui-sortable--item js-sortdrag">I</span><span class="ancho200 ui-sortable--item js-sortdrag">accept</span><span class="ancho200 ui-sortable--item js-sortdrag">position</span><span class="ancho200 ui-sortable--item js-sortdrag">Only</span><span class="ancho200 ui-sortable--item js-sortdrag">.</span><span class="ancho200 ui-sortable--item js-sortdrag">agreed</span><span class="ancho200 ui-sortable--item js-sortdrag">this</span></div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">5. </strong></div>
              <div class="flex flex-wrap sortreload" data-ejercicio="sortable" id="sortable5"> <span class="ancho200 ui-sortable--item js-sortdrag">I</span><span class="ancho200 ui-sortable--item js-sortdrag">had</span><span class="ancho200 ui-sortable--item js-sortdrag">would</span><span class="ancho200 ui-sortable--item js-sortdrag">the</span><span class="ancho200 ui-sortable--item js-sortdrag">told</span><span class="ancho200 ui-sortable--item js-sortdrag">answer</span><span class="ancho200 ui-sortable--item js-sortdrag">,</span><span class="ancho200 ui-sortable--item js-sortdrag">I</span><span class="ancho200 ui-sortable--item js-sortdrag">known</span><span class="ancho200 ui-sortable--item js-sortdrag">you</span><span class="ancho200 ui-sortable--item js-sortdrag">have</span><span class="ancho200 ui-sortable--item js-sortdrag">.</span></div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex mb20"><strong class="u-textColor_4-dark">6. </strong></div>
              <div class="flex flex-wrap sortreload" data-ejercicio="sortable" id="sortable6"> <span class="ancho200 ui-sortable--item js-sortdrag">told</span><span class="ancho200 ui-sortable--item js-sortdrag">have</span><span class="ancho200 ui-sortable--item js-sortdrag">before</span><span class="ancho200 ui-sortable--item js-sortdrag">,</span><span class="ancho200 ui-sortable--item js-sortdrag">I</span><span class="ancho200 ui-sortable--item js-sortdrag">me</span><span class="ancho200 ui-sortable--item js-sortdrag">could</span><span class="ancho200 ui-sortable--item js-sortdrag">an</span><span class="ancho200 ui-sortable--item js-sortdrag">ticket</span><span class="ancho200 ui-sortable--item js-sortdrag">.</span><span class="ancho200 ui-sortable--item js-sortdrag">you</span><span class="ancho200 ui-sortable--item js-sortdrag">extra</span><span class="ancho200 ui-sortable--item js-sortdrag">had</span><span class="ancho200 ui-sortable--item js-sortdrag">bought</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad==2" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad==2" ng-click="sortable()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script>
  $(function(){
      $( "#sortable6" ).sortable();
      $( "#sortable6" ).disableSelection();
      $( "#sortable5" ).sortable();
      $( "#sortable5" ).disableSelection();
      $( "#sortable4" ).sortable();
      $( "#sortable4" ).disableSelection();
      $( "#sortable3" ).sortable();
      $( "#sortable3" ).disableSelection();
      $( "#sortable2" ).sortable();
      $( "#sortable2" ).disableSelection();
      $( "#sortable1" ).sortable();
      $( "#sortable1" ).disableSelection();
  });
</script>