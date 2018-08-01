
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5> </h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_4.png" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="row">
              <h6><strong class="u-textColor_4">1. </strong> Pay attention to the words in bold:</h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent">
                  <p class="ta-c">
                     Simon has been sleeping <strong>for</strong> 8 hours.</p>
                  <p class="ta-c">
                     I met him <strong>while </strong>we were studying in the library.</p>
                  <p class="ta-c">
                     Choco gets plenty of rain <strong>during </strong>the rainy season.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <h6>Complete:</h6>
              <p class="mt20"> <strong class="u-textColor_4-dark">1.</strong> I've been meaning to call you<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>some time.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">2.</strong> When we were in Condoto, we all stayed inside<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>the storm.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">3.</strong> Someone stole my bag<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>I was riding on the train.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>