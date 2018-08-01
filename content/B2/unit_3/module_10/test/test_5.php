
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row row-flex align-items-center">
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">
              <div class="c-cardGreen ">
                <div class="c-cardGreenContent ta-c pt30">
                  <h6 class="u-textWhite">find | get | play | practice | quit | study</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md6 ">
            <div class="row">
              <div class="col xs4 ta-c">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/test_5_1.mp3"></button>
                <h6>Audio 1</h6>
              </div>
              <div class="col xs4 ta-c">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/test_5_2.mp3"></button>
                <h6>Audio 2</h6>
              </div>
              <div class="col xs4 ta-c">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/test_5_3.mp3"></button>
                <h6>Audio 3</h6>
              </div>
            </div>
            <div class="row pt40">
              <p class="mb30"><strong class="u-textColor_4-dark">1</strong>. Paul loves  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> soccer.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">2</strong>. Paul needs <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> in better shape.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">3</strong>. Carlos´s father wants him <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> playing on the soccer team.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">4</strong>. Carlos promised <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> more.</p>
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong>. Ben decided <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> another judo class.
                
                
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