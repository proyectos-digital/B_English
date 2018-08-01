
<!-- ============================== templateContainer-->
<header class="template-header" ng-init="objectivesModulesini()" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper obj_1">
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex c-moduleObjetive">
        <div class="col-flex-md7 showTo-md">
          <figure class="c-figure-Rombo">
            <div class="c-figure-RomboRotate"> <img class="c-figure-RomboImage" ng-src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/obj_1.png" alt=""/></div>
          </figure>
        </div>
        <div class="col-flex-md5 col-flex-xs12 col-flex-sm7 col-center">
          <div class="row"> 
            <div class="c-moduleObjetive-title"><img class="u-responsive-img c-moduleObjetive-img" src="../assets/multimedia/images/app/obj_title.png" alt=""/></div>
            <ul class="c-moduleObjetive-description browser-default" ng-repeat="objetive in objectivesModules">
              <li class="c-moduleObjetive-items">{{objetive.title}}</li>
              <li class="c-moduleObjetive-items" ng-repeat="listObjetive in objetive.objectives">{{ listObjetive.objectives }}</li>
            </ul>
            <div class="ta-r">
              <button class="c-btn mr100" ui-sref="activities({Unidad_id: unidadid, Module_id: moduloid, Activity_id: 1})">Go to activities</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>