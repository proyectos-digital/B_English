
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row mt20-xs mt40-md"></div>
      <div class="row mt40-xs">
        <div class="row ta-c">
          <h6>Complete the sentences using the future perfect tense. Choose a verb from the box.</h6>
        </div>
        <div class="col sm7 md5 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <div class="row-flex justify-center mt10-xs mt20-md"><span>Finish<strong class="mr10 ml10">| </strong></span><span>Check<strong class="mr10 ml10">| </strong></span><span>Learn<strong class="mr10 ml10">| </strong></span><span>Visit<strong class="mr10 ml10">| </strong></span><span>Lose</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex mt40-xs mt20-md">
        <div class="col-flex-sm10 col-flex-md6 col-center">
          <div class="row">
            <ol class="c-list col mb10" data-ejercicio="">
              <li><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>you</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span> the report by tomorrow?</span></li>
            </ol>
          </div>
          <div class="row">
            <ol class="c-list col mb10" data-ejercicio="">
              <li> Bob’s going on a world tour next year. By December, he  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>six countries.</span></li>
            </ol>
          </div>
          <div class="row">
            <ol class="c-list col mb10" data-ejercicio="">
              <li> I’m going on a diet. By this time next month, I<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span> five kilograms.</span></li>
            </ol>
          </div>
          <div class="row">
            <ol class="c-list col mb10" data-ejercicio="">
              <li> When you come to class next week,<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>you</span><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>this grammar?</span></li>
            </ol>
          </div>
          <div class="row">
            <ol class="c-list col mb10" data-ejercicio="">
              <li> The movie starts at six o’clock. It	<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><span>by eight.</span></li>
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