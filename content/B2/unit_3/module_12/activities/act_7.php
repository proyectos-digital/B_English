
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-top">
          <div class="row ta-c">                  
            <h5 class="row mb40">Complete the sentences with the verb in parenthesis in a past form and a modal from the box.</h5>
            <div class="col xs12 md8 col-center">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center">
                  <p>Must - Can’t - May - Could</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <p class="mb30"><strong class="u-textColor_4-dark">1</strong>. You look sad and worried. You  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(have) </strong> a problem with your family.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">2</strong>. Mary  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(be) </strong>at home because she hasn’t been in her room all day.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. Betty hasn’t showed up yet. She  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(miss) </strong>the bus.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. Neil is a very good boy. He isn’t naught, so he   <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(break) </strong>the vase. Someone else  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(break) </strong>it.
                
                
              </p>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong>.  I’m sure that I dropped my glasses in the car. They <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(be) </strong> in the car at the moment.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">6</strong>. The street is wet this morning. I’m not sure but it  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(rain) </strong>last night.
                
                
                
                
                
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