
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">                  
            <h5 class="mb40"><strong class="u-textColor_4">1. </strong> Complete the sentences with y <strong>You will </strong>, <strong>you won´t </strong> or <strong>you might </strong> .</h5>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h6 class="u-textWhite">Take your next vacation in our brand-new starship. <strong>You will </strong> have the time of your life! Don’t worry, you won’t be bored. Outer space is fascinating. Every night you’ll eat unusual, delicious food from other planets. Every morning, <strong>You will </strong> wake up in a strange, new place. <strong>You might </strong> be on the moon, or Mercury. One day <strong>you might </strong> look out of your window and see the beautiful rings of Saturn, or the Red Planet itself. One thing is for sure: <strong>You will </strong> never forget your vacation in outer space. Call today!    </h6>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <p class="mb30"><strong class="u-textColor_4-dark">1</strong>. <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> have a great time.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">2</strong>. <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> be bored.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> eat delicious food.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> wake up in new places.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong>. <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> be on Mercury or the moon.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">6</strong>. <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> forget a vacation like this one.
                
              </p>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_3/module_10/assets/images/test_3.png" alt="act_13"/></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()">       </button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/self_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>