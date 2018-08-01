
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_7" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="col xs12 md6">
          <div class="row-flex justify-center"><img class="row u-responsive-img w80" src="unit_2/module_7/assets/images/col_7_1.png" alt="myColombia"/></div><br/><br/>
          <h6><strong class="u-textColor_4">Quick Facts </strong></h6>
          <ul>
            <li><span class="u-textColor_4">Population </span>: 44.3 million</li>
            <li><span class="u-textColor_4">Internet Penetration </span>: 56 percent </li>
            <li><span class="u-textColor_4">Social Media/ICT Apps Blocked </span>: No</li>
            <li><span class="u-textColor_4">Political/Social Content Blocked </span>: No</li>
            <li><span class="u-textColor_4">Bloggers/ICT Users Arrested </span>: No</li>
            <li><span class="u-textColor_4">Press Freedom Status </span>: Partly Free</li>
          </ul>
        </div>
        <div class="col xs12 md6 mt30-xs">
          <h6 class="mb20">Write a report for a university teacher describing the information shown. </h6>
          <p><strong class="u-textColor_4">»</strong> You should write at least 150 words.</p>
          <p><strong class="u-textColor_4">»</strong> You should spend about 20 minutes on this task</p>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>