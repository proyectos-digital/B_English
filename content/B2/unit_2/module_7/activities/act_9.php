
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_9">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12  col-center">
            <h5 class="mb30">A mother is talking to her eldest and youngest sons. She is going to the kitchen and wants to make sure they can take care of each other. </h5>
            <h6>Read the sentences and then report them in the second line:</h6>
          </div>
          <div class="col xs12 md5 col-center showTo-md ">
            <div class="row-flex align-items-center"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_9.png" alt="act_9"/></div>
          </div>
          <div class="col xs12 md7 col-center">
            <div class="col xs12 sm10 col-center">
              <p><strong><span class="u-textColor_4-dark">1</span></strong>. The mother said, “I love you both.” </p>
              <p>The mother said 
                <input class="c-input js-escribir w60 mb15" type="text" placeholder="Text here..."/>
              </p>
            </div>
            <div class="col xs12 sm10 col-center">
              <p><strong><span class="u-textColor_4-dark">2</span></strong>. “Do you want something to eat?”, she asked him</p>
              <p>She asked him 
                <input class="c-input js-escribir w60 mb15" type="text" placeholder="Text here..."/>
              </p>
            </div>
            <div class="col xs12 sm10 col-center">
              <p><strong><span class="u-textColor_4-dark">3</span></strong>. “I can’t understand when you speak at the same time,” she said.</p>
              <p>She said 
                <input class="c-input js-escribir w60 mb15" type="text" placeholder="Text here..."/>
              </p>
            </div>
            <div class="col xs12 sm10 col-center">
              <p><strong><span class="u-textColor_4-dark">4</span></strong>. “Be nice to your brother,” she said.</p>
              <p>She asked her eldest son 
                <input class="c-input js-escribir w60 mb15" type="text" placeholder="Text here..."/>
              </p>
            </div>
            <div class="col xs12 sm10 col-center">
              <p><strong><span class="u-textColor_4-dark">5</span></strong>. “Don’t fight with your brother”, she said.</p>
              <p>She told the boys 
                <input class="c-input js-escribir w60 mb15" type="text" placeholder="Text here..."/>
              </p>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>