
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong> Look careful the following picture. Can you guess what is going to be the text about?</h5>
        <div class="row-flex m-a">
          <div class="col-flex-sm12 col-flex-md9 col-center ta-c"><img class="u-responsive-img ancho340 mt30" src="unit_1/module_4/assets/images/col_1a.png" alt=""/><img class="u-responsive-img ancho340 mt30 " src="unit_1/module_4/assets/images/col_1b.png" alt=""/></div>
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