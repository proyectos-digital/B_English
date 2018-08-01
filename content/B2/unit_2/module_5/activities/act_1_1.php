
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5>Watch the animation.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row-flex justify-center mt20 mb20">
              <div class="col md11">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls">
                    <source src="unit_2/module_5/assets/videos/act_1.mp4" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
            <h6 class="mt40">Read the following sentences. Pay attention to the words in bold:</h6>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <p>When you arrived at 7:00</p>
                <p>
                   I <strong>had already cooked </strong>everything,</p>
                <p>I <strong>had already taken </strong>the car and they <strong>had already washed</strong>
                  <the>car.</the>
                </p>
                <p>
                   I<strong> had already</strong> taken the dog for a walk. </p>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_1.png" alt="" srcset=""/></div>
            <div class="row mt20">
              <h6> Complete the rules:</h6>
              <p class="mt20"><strong class="u-textColor_4-dark">1.</strong> We make the past perfect simple with<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span><br/>+ past participle.</p>
              <p class="mt20"><strong class="u-textColor_4-dark">2.</strong>  Negative statements are formed with had +<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span></p>
              <p class="mt20"><strong class="u-textColor_4-dark">3.</strong> Questions are formed with <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span><br/>+ subject +<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span></p>
              <p class="mt20"><strong class="u-textColor_4-dark">4.</strong> When adverbs are used, the past perfect simple is formed with had +<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>+<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span></p>
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
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>