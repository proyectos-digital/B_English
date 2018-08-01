
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row row-flex">
        <h5>Look at the following cooking instructions and place the sentences in the correct order.</h5>
      </div>
      <div class="row row-flex justify-center align-items-center">
        <div class="col-flex-sm12 col-flex-md4 mt30 ta-c"><img class="u-responsive-img sm-w80" src="unit_1/module_2/assets/images/col_3_1.png" alt="myColombia"/></div>
        <div class="col-flex-sm12 col-flex-md8 mt30 sortable sortreload" data-ejercicio="sortable" id="sortable">
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Remove them from the pot and drain off the oil.</div>
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Serve them hot!</div>
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Add the baking soda and Knead until it is evenly mixed in.</div>
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Add all the ingredients to a bowl, mix and knead until you get a soft consistent dough. If the dough is too dry, add little milk and knead until the dough is soft and consistent.</div>
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Shape the buñuelos into balls according to your liking.</div>
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Heat up the deep frying pot with cooking to around 330 degrees F, add the buñuelos one at a time, they should float to the top of the oil.</div>
          <div class="mb10 row js-sortdrag ui-sortable--item h60"><strong class="u-textColor_4-dark"></strong>Let them fry for around 25 minutes until they become golden brown.</div>
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
