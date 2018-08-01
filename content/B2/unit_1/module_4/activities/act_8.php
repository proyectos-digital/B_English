
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt50-xs mt50-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md10 offset-md1 col-center mt10-sm mt30-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong> Complete the following article using the verbs in parenthesis in their passive form.</h5>
          </div>
        </div>
        <div class="row mt20">
          <p class="ta-c"><strong>Strange Visitors in Town</strong></p>
          <div class="col-flex-xs12 col-flex-md10 offset-md1 col-center mt30">
            <p class="ta-j">Two very strange visitors <strong>(1. see)  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>in town earlier today. Early this morning, surprised residents saw a spectacled bear and her baby downtown, in Salento, Quindío. What was more interesting was that these were not real animals: They were part of a huge sculpture <strong>(2. pull)  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by a big tractor from the sculptor´s studio to the center of the square.</p>
          </div>
          <div class="col-flex-xs12 col-flex-md10 offset-md1 col-center mt30">
            <p class="ta-j">The giant sculpture  <strong>(3. create)  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by 15 artists, that worked together at Marco Valera´s studio, located only a few blocks away from Salento. It <strong>(4. made)  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>to show people the current and desperate situation of wildlife in Valle del Cocora. Because of human intervention and as a result of illegal hunting activities, many wild species have lost much of their natural habitat.</p>
          </div>
          <div class="row-flex showTo-md">
            <div class="col-flex-md3 col-flex-sm8 col-center mt30"><img class="c-figure w90 ml20" src="unit_1/module_4/assets/images/act_8_1.png" alt=""/></div>
            <div class="col-flex-md3 col-flex-sm8 col-center mt30"><img class="c-figure w90 ml20" src="unit_1/module_4/assets/images/act_8_2.png" alt=""/></div>
            <div class="col-flex-md3 col-flex-sm8 col-center mt30"><img class="c-figure w90 ml20" src="unit_1/module_4/assets/images/act_8_3.png" alt=""/></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>