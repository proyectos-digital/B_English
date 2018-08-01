
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Look at the underlined words and answer.</h5>
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md5 col-center padding20 showTo-md"><img class="c-figure w70 centrado" src="unit_2/module_6/assets/images/act_13.png" alt=""/></div>
        <div class="col-flex-sm12 col-flex-md6 col-center padding20">
          <div class="row mb20">
            <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 1. </strong>The word <strong>
                <u>subject</u> </strong> in the text refers to <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
              . 
            </p>
            <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 2. </strong>The <strong>
                <u>subject</u> </strong>  deals more specifically with the study of a society’s waste products – <strong>
                <u>its</u> </strong>  garbage. What is “it” in this statement? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 3. </strong>From looking at the food scraps <strong>
                <u>they</u> </strong> left, or the broken tools they discarded, <strong>
                <u>we</u> </strong> can start to get a picture of how the society operated. Who are <strong>“they”</strong> ? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> Who is <strong>“it”</strong> ? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </p>
            <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 4. </strong>By studying the amount of paper which offices and organizations throw away, <strong>
                <u>they</u> </strong> have concluded that computers, rather than cutting the amount of paper we use, have actually increased it. Who are <strong>“they”</strong>? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> Who is <strong>“it”</strong>? <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> </p>
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

<div class="c-noticeAside  is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>