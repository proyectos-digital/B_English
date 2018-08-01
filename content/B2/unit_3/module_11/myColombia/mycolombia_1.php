
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">       
    <section class="template-content u-animationFadeDown">
      <h5>In which Colombian city, are the following monuments located? </h5>
      <div class="row-flex">
        <div class="col-flex-sm9 col-flex-md11 col-center mt40-sm mt10-md mt10-xs m-a">
          <div class="col xs4"><img class="u-responsive-img" src="unit_3/module_11/assets/images/col_1.png" alt=""/></div>
          <div class="col xs4"><img class="u-responsive-img" src="unit_3/module_11/assets/images/col_1a.png" alt=""/></div>
          <div class="col xs4"><img class="u-responsive-img" src="unit_3/module_11/assets/images/col_1b.png" alt=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt40-md mt40-xs m-a">
          <div class="row-flex">
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected" for="inputRadio_1" ng-click="txtcaptura_b='come'">Riohacha</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected" for="inputRadio_2" ng-click="txtcaptura_b='count'">Santa Marta </label>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
            <label class="c-CheckSelected" for="inputRadio_3" ng-click="txtcaptura_b='settle'">Bogota</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
            <label class="c-CheckSelected" for="inputRadio_4" ng-click="txtcaptura_b='settle'">Valledupar </label>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"> </button>
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