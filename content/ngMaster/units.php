
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>
<?php session_start();?>
<section class="template-wrapper">
  <section class="chainable is-inactive">
    <!-- chainable inner start-->
    <div class="chainable__inner">
      
      
      <!-- chainableEl start-->
      <div class="chainableEl" ng-init="chainableLayout()" ng-repeat="unidad in unidades" ng-click="listarModulos(unidad.unidad_id)" ng-class="(unidad.estado == 0 && <?php echo $_SESSION['rol_id']?> == 3 ) ? 'is-disabled' : ''">
        <div class="chainableEl__overflow">
          <div class="chainableEl__inner">
            <div class="chainableEl__bg"></div>
            <div class="chainableEl__preview-cont">
              <h2 class="chainableEl__heading ta-c">Unit</h2>
            </div>
            <div class="chainableEl__content">
              <div class="chainableEl__close-btn"></div>
              <div class="chainableEl__text">
                <div class="chainableEl__text--title">Modules</div>
                <div class="chainableEl__text--content">
                  <div class="c-cardModule" data-unitid="{{unidad.unidad_id}}">
                    <div class="c-cardModule-card" ng-repeat="modulo in modulos" ng-class="(modulo.estado == 0 && <?php echo $_SESSION['rol_id']?> == 3) ? 'is-disabled' : ''" data-moduleid="{{modulo.modulo_id}}" ui-sref="objectives({Unidad_id: unidad.unidad_id, Module_id: modulo.modulo_id})"></div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="chainableEl__index">
          <div class="chainableEl__index-back">{{unidad.unidad_id}}</div>
          <div class="chainableEl__index-front">
            <div class="chainableEl__index-overlay" data-index="{{unidad.unidad_id}}">{{unidad.unidad_id}}</div>
          </div>
        </div>
      </div>
      <!-- chainableEl End-->
    </div>
  </section>
</section>