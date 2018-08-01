
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex c-moduleObjetive">
        <div class="col-flex-md7 showTo-md">
          <figure class="c-figure-Rombo">
            <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_1/module_1/assets/images/obj_1.jpg" alt=""/></div>
          </figure>
        </div>
        <div class="col-flex-md5 col-flex-xs12 col-flex-sm7 col-center">
          <div class="row">
            <div class="c-moduleObjetive-title"><img class="u-responsive-img c-moduleObjetive-img" src="../assets/multimedia/images/app/obj_title.png" alt=""/></div>
            <ul class="c-moduleObjetive-description browser-default">
              <li class="c-moduleObjetive-items">Students will be able to:</li>
              <li class="c-moduleObjetive-items">Talk about events happening at a given point in the future. </li>
              <li class="c-moduleObjetive-items">Describe future experiences.</li>
              <li class="c-moduleObjetive-items">Talk about the past in the future.</li>
              <li class="c-moduleObjetive-items">Understand and speak about activities in progress in the future.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<footer class="template-footer">
  <nav class="template-navigation o-nav">
    <div class="o-nav__block row-flex justify-around">
      <div class="ancho200 row-flex justify-around">
        <button class="c-btn-IconAction u-bgIconArrowNext is-active" ui-sref="activities({Unidad_id: 1, Module_id: 1, Activity_id: 1})" href="#/unit/1/modules/1/activities/1"><span class="ml20 u-textWhite">go to Activites</span></button>
      </div>
    </div>
  </nav>
</footer>