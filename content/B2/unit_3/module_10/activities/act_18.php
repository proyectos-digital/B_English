
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">   
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_3/module_10/assets/audios/act_18.mp3"></button><img class="u-responsive-img centrado mt30" src="./unit_3/module_10/assets/images/act_18.png" alt="" srcset=""/>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="mb30">
            <p><strong class="u-textColor_4-dark">1</strong>.   Length of day.</p>
            <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuario"/>
          </div>
          <div class="mb30">
            <p><strong class="u-textColor_4-dark">2</strong>.   Oxygen.</p>
            <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariob"/>
          </div>
          <div class="mb30">
            <p><strong class="u-textColor_4-dark">3</strong>.   Temperature.</p>
            <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuarioc"/>
          </div>
          <div class="mb30">
            <p><strong class="u-textColor_4-dark">4</strong>.  Weather.</p>
            <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariod"/>
          </div>
          <div class="mb30">
            <p><strong class="u-textColor_4-dark">4</strong>.  Water.</p>
            <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuarioe"/>
          </div>
          <div class="mb30">
            <p><strong class="u-textColor_4-dark">4</strong>.  Gravity.</p>
            <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariof"/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>