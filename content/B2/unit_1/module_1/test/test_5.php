
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row"></div>
          <div class="col xs12 md6 ta-c">
            <div class="col-center col xs12 sm10 md8 lg11 ta-c mb20 "><img class="u-responsive-img m-a showTo-md" src="unit_1/module_1/assets/images/test_5_1.png" alt="act_13"/></div>
            <p>
              <button class="c-btn-IconAction u-bgIconListen u-textWhite mb30" ng-audio="unit_1/module_1/assets/audios/test_5_1.mp3"><span class="ml10">Conversation 1</span></button>
            </p>
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <p class="mb30"><strong class="u-textColor_4-dark">A: </strong> Janet is going to speak French well when she gets back from that language school in France.</p>
              <p class="mb30"><strong class="u-textColor_5">B: </strong> Hopefully! She  <strong>(1. take) </strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> classes for more than six months.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">A: </strong> She will be able to speak French with some of our French and Canadian clients.</p>
              <p class="mb30"><strong class="u-textColor_5">B: </strong> Good. Two clients from Canada <strong>(2. visit) </strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>  us next month when Janet returns.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">A: </strong> We need someone to entertain them while they are here.
                
              </p>
            </div>
          </div>
          <div class="col xs12 md6 ta-c">
            <div class="col-center col xs12 sm10 md8 lg11 ta-c mb20 "><img class="u-responsive-img m-a showTo-md" src="unit_1/module_1/assets/images/test_5_2.png" alt="act_13"/></div>
            <p>
              <button class="c-btn-IconAction u-bgIconListen u-textWhite mb30" ng-audio="unit_1/module_1/assets/audios/test_5_2.mp3"><span class="ml10">Conversation 2</span></button>
            </p>
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <p class="mb30"><strong class="u-textColor_4-dark">A: </strong> What are you going to be doing tomorrow at five?</p>
              <p class="mb30"><strong class="u-textColor_5">B: </strong> I  <strong>(3. repair) </strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> my kitchen.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">A: </strong> Still? How long have you been working on your kitchen?</p>
              <p class="mb30"><strong class="u-textColor_5">B: </strong>  It feels like forever. By the time I finish, I  <strong>(4. work) </strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>  on the kitchen for over two weeks.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">A: </strong> Too bad. I was going to ask you if you wanted to go to the movies. What about the day after tomorrow?</p>
              <p class="mb30"><strong class="u-textColor_5">B: </strong>  Sorry. I  <strong>(5. move) </strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> furniture and <strong>(6. hang) </strong> <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> curtains.</p>
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

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/self_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>