
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>
<section class="template-wrapper">
  <div class="template-section m-a">
    <section class="template-content">
      <ul>
        <li><a ui-sref="activities({Unidad_id: 1, Module_id: 2, Activity_id: 'objetives'})">back Objetives</a></li>
        <li><a ui-sref="activities({Unidad_id: 1, Module_id: 2, Activity_id: 1})">init activities</a></li>
      </ul>
      <div class="row-flex c-moduleDescription">
        <figure class="c-figure-Rombo">
          <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_1/module_1/assets/images/obj_1.jpg" alt=""/></div>
          <div class="c-figure-RomboData">
            <div class="c-figure-RomboDataTitle c-icon u-bgIconDownload"></div>
            <div class="c-figure-RomboDataIcon"><img class="u-responsive-img" src="unit_1/module_1/assets/images/obj_1.jpg" alt=""/></div>
          </div>
        </figure>
      </div>
    </section>
    <style>
      .c-moduleDescription {
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: center;
          min-height: 65vh;
      }
    </style>
  </div>
</section>
<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>