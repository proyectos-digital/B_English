
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>Match these words to for the appropriate two word phrase:</h5>
        <div class="row-flex justify-center">
          <div class="col xs6 md3 mt30">                       
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Cloud</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Operating</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Phone </div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Information</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>State</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Cutting</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Outdated</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Shop</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>E</div>
            <div class="mb10 row-flex align-items-center justify-center u-bgColor_1-lighter  h60"><strong class="u-textColor_4-dark"></strong>Cyber</div>
          </div>
          <div class="col xs6 md3 mt30 sortable sortreload" data-ejercicio="sortable" id="sortable">
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="2"><strong class="u-textColor_4-dark"></strong>system</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="4"><strong class="u-textColor_4-dark"></strong>technology</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="1"><strong class="u-textColor_4-dark"></strong>storage</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="7"><strong class="u-textColor_4-dark"></strong>software</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="9"><strong class="u-textColor_4-dark"></strong>commerce</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="10"><strong class="u-textColor_4-dark"></strong>attack</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="5"><strong class="u-textColor_4-dark"></strong>of the art</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="3"><strong class="u-textColor_4-dark"></strong>addiction</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="6"><strong class="u-textColor_4-dark"></strong>edge</div>
            <div class="mb10 row js-sortdrag ui-sortable--item h60" dataval="8"><strong class="u-textColor_4-dark"></strong>online</div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
  <script>
    $(function(){
        $( ".sortable" ).sortable();
        $( ".sortable" ).disableSelection();
    });
  </script>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
