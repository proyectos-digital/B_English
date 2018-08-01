
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <h5><strong class="u-textColor_4">1. </strong> Complete the newspaper report choosing verbs from the box and using them in the correct form.</h5>
        <div class="col-flex-xs12 col-flex-md9 col-center mt10-sm mt20-md">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex justify-center align-items-center">Be | Promote | Strike | Fire| Go | Permit</div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex fz9 line-h">Yesterday, Congress voted 10 to 2 in favor of  <strong>(1) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>strike. <br/>By <strong>(2) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>, they hope to reverse the administrations’ decision to fire staff working for them. Congressmen are very much against <strong>(3) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>people because of their political views. They strongly believe in <strong>(4) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </strong>the free expression of all opinions. They feel that everyone should be able to say what they want without <strong>(5) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </strong>afraid of the administration’s reaction. If the Congress succeeds in <strong>(6) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </strong>the strike, it will begin next Thursday.</div>
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