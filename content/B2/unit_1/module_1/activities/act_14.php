
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong>  Complete the sentences using the future perfect continuous. </h5>
        <h6>Watch out for negative sentences and questions.</h6>
      </div>
      <div class="row-flex mt40-md">
        <div class="col-flex-sm4 col-flex-xs5 col-center ta-c mb40 showTo-md"><img class="u-responsive-img" src="./unit_1/module_1/assets/images/act_14_1.png" alt="" srcset=""/></div>
        <div class="col-flex-sm11 col-flex-md7 col-center">
          <div class="row-flex mt40-xs">
            <ol class="c-listDefault row mb30" data-ejercicio="">
              <li><span>I </span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(work) </strong><span>all weekend so I won’t have a lot of energy on Sunday night.</span></li>
              <li><span>How</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(you / wait) </strong><span>when you finally get your exam results?</span></li>
              <li><span>Julie</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(not / eat)</strong><span>much, so we’ll need to make sure she has a good meal when she arrives.</span></li>
              <li><span>How</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(she / plan)  </strong><span>to move house when she finally moves?</span></li>
              <li><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(she / wait) </strong><span>long by the time we get there?</span></li>
              <li><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(he / play) </strong><span>computer games for ten hours when he finally stops?</span></li>
              <li><span>They</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(study)  </strong><span>all day, so they'll want to go out in the evening.</span></li>
            </ol>
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