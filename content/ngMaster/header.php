<?php session_start();?>
<aside class="c-modal c-modal--MenuHeader" id="navSections">
  <nav class="template-navigation o-nav c-modal--MenuHeader-Wrapper">
    
    
    <div class="o-nav__block o-nav--Menu c-modal--MenuHeader-BurgueMenu">
      <div class="o-nav--Menu-burguer" ng-click="triggerNavigationMenu('navSections', false)">
        <div class="c-menuBurguer" id="burguerClose">
          <div class="c-menuBurguer--Item"></div>
          <div class="c-menuBurguer--Item"></div>
          <div class="c-menuBurguer--Item"></div>
        </div>
        <h6>Navigate into Sections</h6>
      </div>
    </div>
    
    <ul class="o-nav__block o-nav--Info c-modal--MenuHeader-Info" ng-click="triggerNavigationMenu('container_navSections', false)">
      <li class="c-modal--MenuHeader-Item"><a class="o-nav--Data-Link  c-btn-IconNavigation u-bgIconHome" data-title="Home" ui-sref="units"></a></li>
      <li class="c-modal--MenuHeader-Item"><a class="o-nav--Data-Link  c-btn-IconNavigation u-bgIconUserProfile " data-title="User" ui-sref="user">
          <div class="alert" ng-class="ClasNotifUser"></div></a></li>
      <li class="c-modal--MenuHeader-Item " ng-repeat="menu in menuuser" ng-class="( menu.estado == 0 && rol_id == 3 ) ? 'is-disabled' : '' "><a class="o-nav--Data-Link  c-btn-IconNavigation {{menu.icono}}" data-title="{{menu.titulo}}" ng-class="('{{menu.titulo | lowercase }}' == '{{state.name}}') ? 'is-active' : ''" ui-sref="{{menu.url}}"></a></li>
      <li class="c-modal--MenuHeader-Item" ng-show="(<?php echo $_SESSION['nivel_id']?> == 4) ? true : false"><a class="o-nav--Data-Link  c-btn-IconNavigation u-bgIconSelfCheck" data-title="Grammar" ui-sref="grammar({Unidad_id: unidadid, Module_id: moduloid, Activity_id: 1})"></a></li>
      <li class="c-modal--MenuHeader-Item"><a class="o-nav--Data-Link  c-btn-IconNavigation u-bgIconUserProfile" data-title="Logout" href="../../login/data/logout.php"></a></li>
    </ul>
  </nav>
</aside>

<nav class="template-navigation template-navigation--header o-nav">
  
  
  <div class="o-nav__block o-nav--Menu">
    <div class="o-nav--Menu-burguer " ng-click="triggerNavigationMenu('navSections')">
      <div class="c-menuBurguer" ng-class="ClasNotif" id="burguerOpen ">
        <div class="c-menuBurguer--Item"></div>
        <div class="c-menuBurguer--Item"></div>
        <div class="c-menuBurguer--Item"></div>
      </div>
    </div>
  </div>
  
  <div class="o-nav__block o-nav--Info"><span class="o-nav--Info-indicator" ng-bind-html="numAct"></span>
    <div class="row row-flex o-nav--Info-title">
      <h1 class="o-nav--Info-titleSection" ng-bind-html="titulo | uppercase"></h1>
      <h4 class="o-nav--Info-titleDescription" ng-bind-html="titulo_2 | uppercase"></h4>
    </div>
  </div>
  
  <div class="o-nav__block o-nav--Data">
    <div class="o-nav--Data-Item" ng-if="(state.name == 'objectives') ? false : (state.name == 'units') ? false : (state.name == 'user') ? false : true">
      <div class="c-btn-IconAction u-bgIconInfoActivity" ng-click="callObjectiveModal()"></div>
    </div>
    <div class="o-nav--Data-Item">
      <div class="c-btn-IconIndicator u-bgIconINVIL" ng-class="iconoActividad"></div>
    </div>
    <div class="o-nav--Data-Item">
      <div class="c-btn-IconIndicator u-bgLogoProyect" js-level="<?php echo $_SESSION['nivel_id']?>"></div>
    </div>
  </div>
</nav>