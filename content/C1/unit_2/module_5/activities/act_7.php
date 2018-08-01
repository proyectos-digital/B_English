
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="ContadorPalabras(150)">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p class="ta-c"><strong>You have 20 minutes for this task</strong>.<br/>
          The first chart below shows the results of a survey which sampled a cross-section of 100,000 people asking if they
          traveled abroad and why they traveled for the 1994-1998 time period. The second chart shows their destinations over the same time period.<br/>
        </p>
      </div>
      <div class="row">
        <div class="row">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_2/module_5/assets/images/act_7_1.png" alt=""/></div>
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_2/module_5/assets/images/act_7_2.png" alt=""/></div>
        </div>
        <div class="row mt50">
          <h6>Write a report for a university professor describing the information shown above. Minimum 150 words.</h6>
          <div class="c-wrapTextarea ">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="enviarTexto()" ng-show="enviarMensaje_minPalabras"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>