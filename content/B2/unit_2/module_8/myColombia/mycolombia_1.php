
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">       
    <section class="template-content u-animationFadeDown">
      <div class="row-flex">
        <h5><strong class="u-textColor_4">1. </strong> Look at the following pictures and guess what the activity is about.</h5>
        <div class="col-flex-sm12 col-flex-md9 col-center mt40-sm mt10-md mt10-xs m-a"><img class="u-responsive-img ancho250 mt20" src="unit_2/module_8/assets/images/col_1.png" alt=""/><img class="u-responsive-img ancho250 mt20" src="unit_2/module_8/assets/images/col_1a.png" alt=""/><img class="u-responsive-img ancho250 mt20" src="unit_2/module_8/assets/images/col_1b.png" alt=""/></div>
        <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt10-md mt10-xs m-a">
          <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
          <label class="c-CheckSelected col-flex ml10 ancho230 h60 mt30 mr10" for="inputRadio_1" ng-click="txtcaptura_b='come'">Means of transportation </label>
          <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
          <label class="c-CheckSelected col-flex ml10 ancho230 h60 mt30 mr10" for="inputRadio_2" ng-click="txtcaptura_b='count'">Childhood in America </label>
          <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
          <label class="c-CheckSelected col-flex ml10 ancho230 h60 mt30 mr10" for="inputRadio_3" ng-click="txtcaptura_b='settle'">Electronic devices nowadays</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
          <label class="c-CheckSelected col-flex ml10 ancho230 h60 mt30 mr10" for="inputRadio_4" ng-click="txtcaptura_b='settle'">Traditional games in Colombia </label>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
 
<script src="./../assets/js/librerias/jquery.flip.min.js"></script>
<script>
  $(document).ready(function() {
      
      $(".flip_card").flip({
          axis: 'y',
          trigger: 'click',
          reverse: true
      });
  });
</script>