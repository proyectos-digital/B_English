
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="s_actividad = 1">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <h6> <strong class="u-textColor_4-dark">Part I: </strong> Read the story of how a business guru started his career. Complete it with the correct form of the verbs. Look out for negative statements and the use of adverbs.</h6>
        <div class="col-flex-sm12 col-flex-md4 col-center m-a showTo-md">
          <div class="row"><img class="u-responsive-img u-f-l  mt20" src="./unit_2/module_5/assets/images/act_2_1.png" alt="" srcset=""/></div>
          <div class="row"><img class="u-responsive-img centrado mt20" src="./unit_2/module_5/assets/images/act_2_2.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md7 offset-md1 col-center">
          <div class="row mt30">
            <p class="u-txtSpace">
               When Gilbert Peters finally found a publisher for his first book, Think Big, Get Rich, he <strong>(1. look)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> for one for a long time. </p>
            <p class="u-txtSpace">He<strong>(2. hope) </strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>for a big advance on the royalties from his book, but he <strong>(3. finally, realize)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>that he would have to accept a small publisher with no royalties at all, since he was an unknown author. </p>
            <p class="u-txtSpace">In fact, he <strong>(4. have to pay)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>a small amount himself, to cover "administrative costs" that the publishers wouldn't cover.</p>
            <p class="u-txtSpace">Peters <strong>(5. work) </strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>on his book for a long time and so he <strong>(6. be able – negative)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>to do a regular job.</p>
            <p class="u-txtSpace">He <strong>(7. try)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>to live on as little money as possible, but he<strong> (8. borrow)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>money from friends and the bank while he was waiting for a publishing contract.</p>
            <p class="u-txtSpace">He <strong>(9. even, sell) </strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>his car.</p>
            <p class="u-txtSpace">The day of the launch and presentation of his book at the International Business Book Fair was a day that he <strong>(10. dream)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>of for years.</p>
            <p class="u-txtSpace">He walked proudly into the room which <strong>(11. be scheduled)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>for his presentation. </p>
            <p class="u-txtSpace">But, instead of the dozens of people he <strong>(12. expect)</strong><span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>, the room was completely empty.</p>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2" ng-init="ContadorPalabras(120)">
        <div class="row">
          <h6> <strong class="u-textColor_4-dark">Part II: </strong>Read the story again and write an ending for it. Think of the following questions to help you: What happened after Peters walked into the empty room at the International Book Fair? What did he do? How do you think he and his book became famous in the end? <br/><br/><strong>Write 120 words.</strong></h6>
          <div class="row-flex">
            <div class="col-flex-sm12 col-flex-md6 col-center">
              <div class="row mt20"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_2_3.png" alt="" srcset=""/></div>
            </div>
            <div class="col-flex-sm12 col-flex-md6 col-center">
              <div class="c-wrapTextarea ">
                <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
                <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 1" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 1" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>