
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="row">
          <h5><strong class="u-textColor_4">1. </strong>  Mark and Kate have gone on an expedition to the Los Nevados National Park. A friend is talking about it. </h5>
          <h6>Complete the sentences with the correct future form of the verbs from the box. Look out for negative statements.</h6>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row mb30 ta-c showTo-md">
            <figure class="c-figure-Rombo" figure-size="25">
              <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_1/module_2/assets/images/act_17.png" alt=""/></div>
            </figure>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row-flex">
            <div class="mb20 row-flex mt20">
              <div class="c-green-text ml20">eat</div>
              <div class="c-green-text ml20">walk</div>
              <div class="c-green-text ml20">sleep</div>
              <div class="c-green-text ml20">take</div>
              <div class="c-green-text ml20">be</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex fz9 line-h">Mark and Kate are my older brother and sister. They went on a trip across the Los Nevados National Park. They left home last week. By the time they finish their trip across the park, they <strong>(1) <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>for more than six days. And they <strong>(2) <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>in a bed or <strong>(3) <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>a shower in almost a week! We will go to pick them up by the end of their trip. When we do, they <strong>(4) <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </strong>camping food for days, and I am sure they  <strong>(5) <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </strong>proper food. They are going to be starving. I think we should plan on taking them directly to a restaurant when they arrive! Or maybe home for a proper shower?</div>
            </div>
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