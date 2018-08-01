
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> The first step has been identified for you.</h5>
      <p class="ml20">Arrange the steps of the process, according to the audio. </p>
      <p class="ml20">The first step has been identified for you.</p>
      <div class="row-flex justify-center mt30">   
        <audio controls="controls" preload="auto">
          <source src="unit_1/module_4/assets/audios/test_5.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
        </audio>
      </div>
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md5 mt50-md mt30-sm showTo-md"><img class="u-responsive-img w90 centrado" src="unit_1/module_4/assets/images/test_5.png" alt=""/></div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center mt50-md mt30-sm sortreload" data-ejercicio="sortable" id="sortable">
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>3 tablespoons of oil are poured in a large pot.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>A quarter cup of popcorn is poured into the pot.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>Melted butter and salt is added.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>The pot is gently heaved until the corn pops</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>The popcorn is poured into a large bowl.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>One kernel of popcorn is put in the pot.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>The pot is put on the stove and the oil is heated on a light flame.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>The pot is covered with a lid.</div>
          <div class="mb20 row js-sortdrag ui-sortable--item"><strong class="u-textColor_4-dark"></strong>The pot is removed from the stove.</div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSortable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="sortable()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>
  $(function(){
      $( "#sortable" ).sortable();
      $( "#sortable" ).disableSelection();
  });
</script>