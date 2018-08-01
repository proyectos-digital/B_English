
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row s-actividad u-animationFadeDown">
        <h5>Remember to change the word order when necessary                    </h5>
        <div class="row-flex col xs12 mt20">
          <div class="col-center col xs12 md6 lh-20 ta-l"> 
            <p class="mb30"><strong class="u-textColor_4-dark">1</strong>. Alejandro is the most dedicated student I have ever met. Never <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>.</p>
            <p class="mb30"><strong class="u-textColor_4-dark">2</strong>. He rarely missed a class. Rarely <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>. </p>
            <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. He scarcely had any grade below 4.5. His average was 4.9! Scarcely  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> His average was 4.9!</p>
            <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. He was a good student and he also helped the others. Not only <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> but also helped the other students.</p>
            <p class="mb30"><strong class="u-textColor_4-dark">5</strong>. He was known for his academic achievements and also for his solidarity. Not only<span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> but also for his solidarity.</p>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_3/module_10/assets/images/self_2.png" alt="act_13"/>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h6 class="u-textWhite">Alejandro is a student of Agriculture at the UNAD Monteria. He received a diploma for his dedication, his solidarity and his academic results. </h6>
                </div>
              </div>
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