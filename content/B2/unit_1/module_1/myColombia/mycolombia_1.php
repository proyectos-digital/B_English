
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1" ng-init="DragandDrop()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="row ta-c mb50">
          <h5><strong class="u-textColor_4">1. </strong>  Identifying main ideas: Riohacha</h5>
          <p> Can you locate the following places? Drag and drop.</p>
        </div>
        <div class="col xs12 md6 ">
          <div class="col xs9 md10 lg12 col-center mb30">
            <figure class="map_cont"><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_1_1.png" alt=""/><span class="map_cont-item_1 drop"></span><span class="map_cont-item_2 drop"></span><span class="map_cont-item_3 drop"></span><span class="map_cont-item_4 drop"></span><span class="map_cont-item_5 drop"></span><span class="map_cont-item_6 drop"></span></figure>
          </div>
        </div>
        <div class="md6 cont_grid col-center">
          <div class="dragCont">
            <p class="drag">Riohacha</p>
          </div>
          <div class="dragCont">
            <p class="drag">Cabo de la Vela</p>
          </div>
          <div class="dragCont">
            <p class="drag">Santa Marta</p>
          </div>
          <div class="dragCont">
            <p class="drag">Venezuela</p>
          </div>
          <div class="dragCont">
            <p class="drag">Panamá</p>
          </div>
          <div class="dragCont">
            <p class="drag">Caribbean Sea</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>