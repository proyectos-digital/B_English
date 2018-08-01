
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <div class="template-section m-a">
    <section class="template-content">
      <ul>
        <li><a ui-sref="activities({Unidad_id: 1, Module_id: 1, Activity_id: 'welcome'})">back weolcome</a></li>
        <li><a ui-sref="activities({Unidad_id: 1, Module_id: 1, Activity_id: 'description'})">go to description</a></li>
      </ul>
      <div class="row-flex c-moduleObjetive">
        <div class="col-flex-md7 showTo-md"><img class="centrado" src="unit_2/module_5/assets/images/obj_1.png" alt=""/></div>
        <div class="col-flex-md5 col-flex-xs12 col-flex-sm7 col-center">
          <div class="row">
            <div class="c-moduleObjetive-title"><img class="u-responsive-img c-moduleObjetive-img" src="../assets/multimedia/images/app/obj_title.png" alt=""/></div>
            <ul class="c-moduleObjetive-description browser-default">
              <li class="c-moduleObjetive-items">Students will be able to:</li>
              <li class="c-moduleObjetive-items">Understand past events in reference to other actions in the past.</li><br/>
              <li class="c-moduleObjetive-items">Introduce new information in an argument.</li>
              <li class="c-moduleObjetive-items">Talk about habits and routines.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
