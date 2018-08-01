
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">                      </div>
          <div class="row">
            <div class="col-center col xs12 sm11 md10 lh-20 ta-l">
              <p class="mb30"><strong class="u-textColor_4-dark">1</strong>. Watch out! This car  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(explode)</strong> any minute.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">2</strong>. Can you remind me of my visit to the dentist tomorrow?  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(I, forget, certainly). </strong></p>
              <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. The bus is late. I have a feeling  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(not arrive)</strong> before 5 o’clock.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. Look at the engine!  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(never, we, repair) </strong> on time! </p>
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong>. Let’s stop by the supermarket.  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(be, Coke, cheaper)</strong></p>
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong>. Jane knows math well.  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(help, she)</strong> you.
                
                
                
                
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/self_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>