
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <h6>What’s the extra information in these sentences?</h6>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">1.</strong> Yesterday I called our friend Julie, who lives in Cucuta.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">2.</strong> The photographer called the singer, who looked annoyed.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">3.</strong> Last week I bought a new computer, which I don’t like now.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">4.</strong> I really love the new Chinese restaurant, which we went to last night.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">5.</strong> I bought a new sweater, which is blue.</p>
            <input class="c-input js-escribir w100" type="text" placeholder="Write here..."/>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row-flex flex-column"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_13_1.png" alt="" srcset=""/><img class="u-responsive-img centrado mt30" src="./unit_3/module_9/assets/images/act_13_2.png" alt="" srcset=""/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1">
      <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 2"></button>
    </button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>