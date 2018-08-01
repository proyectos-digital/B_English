
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">                  
            <h5>Read and choose the right word to complete the story.</h5>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_13.png" alt="act_13"/></div>
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <p><strong><span class="u-textColor_2">Alex:  </span></strong><span>Where is Mary?</span></p>
              <p><strong><span class="u-textColor_5">Jorge:  </span></strong><span>Mary <strong>insisted on taking</strong> the bus instead of a taxi.</span></p>
              <p><strong><span class="u-textColor_2">Alex:  </span></strong><span>That is a problem. She always <strong>objects to taking </strong>public transportation.</span></p>
              <p><strong><span class="u-textColor_5">Jorge:  </span></strong><span>Well, may be she is <strong>fed up with dealing</strong> with full buses all the time!</span></p>
              <p><strong><span class="u-textColor_2">Alex:  </span></strong><span>I just hope she <strong>succeeded in finding</strong> an empty cab. This is rush hour!</span></p>
              <p><strong><span class="u-textColor_5">Jorge:  </span></strong><span>Me too! Otherwise she is going to have to go <strong>into jogging</strong>. Hahaha.</span></p>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <h5 class="mb50 mt30">Complete the sentences.</h5>
              <p class="mb30"><strong class="u-textColor_4-dark">1</strong>.  Happiness consists largely in <strong>(have)</strong>  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> true friends.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">2</strong>.  About two-thirds of Americans object to online <strong>(track)</strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> by advertisers.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. I look forward to <strong>(pick)</strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> up my new computer.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. He insisted on <strong>(go)</strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> to the movies, despite the cold weather.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong>.  I don’t think I can cope with your <strong>(complain)</strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>anymore.
                
                
                
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>