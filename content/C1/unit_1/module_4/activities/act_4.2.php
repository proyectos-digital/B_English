
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <div class="row">
      <h1 class="u-textColor_4-dark ta-c">AQUI VA EL FORO</h1>
    </div>
    <div class="row">
      <p class="ta-c">PENDIENTE POR MAQUETAR</p>
    </div>
  </div> 
   
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconRefresh is-active" ng-show="s_actividad == 3"></button>
    <button class="c-btn-IconAction u-bgIconCheck is-active" ng-show="s_actividad == 3"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>