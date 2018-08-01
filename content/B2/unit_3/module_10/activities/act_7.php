
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">                  
            <h5><strong class="u-textColor_4">1. </strong> Pay attention to the “negative” word at the beginning. </h5>
            <h6 class="ml15">Pay attention to the word order:</h6>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_3/module_10/assets/images/act_7.png" alt="act_7"/></div>
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <h6 class="ta-c mb30 u-textColor_4">Javier Pinto is giving his impressions about his program at UNAD.</h6>
              <p><strong><span class="u-textColor_2">Never   </span></strong><span> (before) have I met such a serious program. </span></p>
              <p><strong><span class="u-textColor_5">Rarely  </span></strong><span>have there been cases of demotivated students. </span></p>
              <p><strong><span class="u-textColor_2">Seldom  </span></strong><span>have we seen tutors who have not prepared their sessions.</span></p>
              <p><strong><span class="u-textColor_5">Little </span></strong><span> did I know when I started the program. I am simply happy!</span></p>
              <p><strong><span class="u-textColor_2">Hardly   </span></strong><span>had we started the program when we received information about each course.</span></p>
              <p><strong><span class="u-textColor_5">Barely  </span></strong><span>had I opened the book to read <strong>when </strong> my tutor was already offering her help. </span></p>
              <p><strong><span class="u-textColor_2">No sooner   </span></strong><span>had tutorial session begun <strong>than </strong> I began to understand everything.</span></p>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <h5 class="mb50 mt30">Transform the following sentences into negative adverbials.</h5>
              <div class="mb30">
                <p><strong class="u-textColor_4-dark">1</strong>.  I had hardly arrived home when my phone rang.</p>
                <input class="c-input js-escribir row" type="text" placeholder="Text here..."/>
              </div>
              <div class="mb30">
                <p><strong class="u-textColor_4-dark">2</strong>.  They had barely won the match when the coach had a heart attack. </p>
                <input class="c-input js-escribir row" type="text" placeholder="Text here..."/>
              </div>
              <div class="mb30">
                <p><strong class="u-textColor_4-dark">3</strong>.   The company had no sooner launched a new product than it went bankrupt. </p>
                <input class="c-input js-escribir row" type="text" placeholder="Text here..."/>
              </div>
              <div class="mb30">
                <p><strong class="u-textColor_4-dark">4</strong>.  She didn’t really understand what the conversation was about. (Little...) </p>
                <input class="c-input js-escribir row" type="text" placeholder="Text here..."/>
              </div>
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
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>