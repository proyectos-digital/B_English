
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row mt100-xs mt10-md mt10-sm">
        <h5><strong class="u-textColor_4">1. </strong>  Are these sentences correct or incorrect? Correct the sentences that are wrong. Write them on the space. If the sentences are correct, don´t make any changes.</h5>
      </div>
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center showTo-md ta-c"><img class="u-responsive-img w80 m-a mt30 mb30" src="unit_1/module_2/assets/images/act_13.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md6 col-center">
          <div class="row-flex">
            <div class="mb20 row-flex mt20 row">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong> Life will be changing a lot by 2020. 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>In twenty years we’ll all be living longer.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>By 2020 doctors won’t be treating people any more.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>In 2020 people will have worked longer hours.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>By 2020 our lives will have changed a lot. 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 6. </strong>Will we have eaten different types of food in 2020? 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2" ng-init="ContadorPalabras(150)">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md9 col-center">
          <h5><strong class="u-textColor_4">2. </strong>  Now it is your turn to think about what life will be like in the year 2020. Write a short paragraph with your ideas on how our lives will be different by the year 2020. Write 150 words.</h5>
          <div class="c-wrapTextarea">
            <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 1" ng-click="validarCompletartxt()"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-show="s_actividad == 2" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>