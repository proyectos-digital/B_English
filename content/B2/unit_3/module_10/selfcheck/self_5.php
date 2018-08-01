
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">
            <h6 class="ta-c">THE MOST EXACT</h6>
            <div class="mb20 row-flex mt20">
              <div class="sortreload m-a" data-ejercicio="sortable" id="sortable2"> <span class="row ui-sortable--item js-sortdrag">There were 1235 people in the Carlos Vives concert in Santa Martha last week.</span><span class="row ui-sortable--item js-sortdrag">There were 1235 people in the Carlos Vives concert in Santa Martha some days ago.</span><span class="row ui-sortable--item js-sortdrag">There were approximately 1200 people in the Carlos Vives concert in Santa Martha recently.</span><span class="row ui-sortable--item js-sortdrag">There was a crowd over 1000 people in the Carlos Vives Concert in Santa Martha recently.</span><span class="row ui-sortable--item js-sortdrag">A lot of people attended the Carlos Vives concert when he played in a city in the coast.</span><span class="row ui-sortable--item js-sortdrag">Hundreds went to the Carlos Vives concert in his last tour.</span></div>
            </div>
            <h6 class="ta-c">THE LEAST EXACT </h6>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/self_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>
<script>
  $(function(){
      $( "#sortable2" ).sortable();
      $( "#sortable2" ).disableSelection();
      $( "#sortable1" ).sortable();
      $( "#sortable1" ).disableSelection();
  });
</script>