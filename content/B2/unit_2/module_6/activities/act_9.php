
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt10-md">
          <h5>Rewrite the following sentences, using the word even in the correct position. Use the cues in parenthesis to help you.</h5>
          <div class="row-flex">
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong> I am terrible at cooking. I can´t make eggs! <strong>(Surprise)</strong>
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>Cali is hot, but Buenaventura is hotter. <strong>(Comparison)</strong>
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>I saved you this time! Now we´re equal. <strong>(Equality)</strong>
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>He has all the movies; he has the latest one! <strong>(Surprise)</strong>
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>The match was 2-2. <strong>(Equality) </strong>
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 6. </strong>This surface is not leveled. <strong>(Flat) </strong>
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt100-md showTo-md"><img class="u-responsive-img mt30" src="unit_2/module_6/assets/images/act_9.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>