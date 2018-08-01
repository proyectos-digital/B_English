
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md6 col-center">
            <p><strong>Go and Get </strong> are probably two of the most common verbs in English. Sometimes, they are combined with other words. The following are the most common words accompanying with go and get. Notice that in Spanish we use some of these combinations, too:</p>
            <div class="row-flex align-items-center justify-center">
              <div class="col-flex-xs8 col-flex-sm5 col-center ">
                <div class="c-cardBlue ">
                  <div class="c-cardBlueContent"> 
                    <ul>
                      <li>• go abroad/overseas</li>
                      <li>• go online</li>
                      <li>• go shopping/swimming</li>
                      <li>• go crazy/mad</li>
                      <li>• go blind</li>
                      <li>• go bald</li>
                      <li>• go quiet/silent</li>
                      <li>• go bankrupt</li>
                      <li>• go missing</li>
                      <li>• go on a diet        </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-flex-xs8 col-flex-sm5 col-center ">
                <div class="c-cardGreen ">
                  <div class="c-cardGreenContent"> 
                    <ul>
                      <li>• get drunk</li>
                      <li>• get a job</li>
                      <li>• get lost</li>
                      <li>• get married</li>
                      <li>• get ready</li>
                      <li>• get permission</li>
                      <li>• get angry</li>
                      <li>• get divorced</li>
                      <li>• get started </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 lg6 col-center">
            <h5>Complete the sentences.</h5>
            <h6 class="mb50">Remember to type the verbs in the proper tense.</h6>
            <p class="mb30"><strong class="u-textColor_4-dark">1</strong>. Are you ready to <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>?</p>
            <p class="mb30"><strong class="u-textColor_4-dark">2</strong>. I heard that company <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>last year. That’s why they closed.</p>
            <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. Let me <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>to see if we can find the information.</p>
            <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. The police is still looking for the little girl that <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>last week.</p>
            <p class="mb30"><strong class="u-textColor_4-dark">5</strong>. Did you <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>to take the day off?</p>
            <p class="mb30"><strong class="u-textColor_4-dark">6</strong>. We <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>completely <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> ! We drove for hours and never found the restaurant.
              
              
              
              
                  
              
            </p>
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

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>