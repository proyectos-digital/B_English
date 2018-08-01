
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row mt40 ">
        <div class="row-flex">
          <div class="row">
            <h5><strong class="u-textColor_4">1. </strong> Watch the video:</h5>
            <div class="col xs12 md6">
              <div class="col md11">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls">
                    <source src="unit_1/module_4/assets/videos/act_1_1.mp4" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
            <div class="col xs12 md6">
              <h5 class="mb20 mt20"><strong class="u-textColor_4">2</strong>. Now, read the sentences. Pay attention to the words in bold.</h5>
              <div class="col">
                <div class="c-cardBlue">
                  <div class="c-cardBlueContent">
                    <p>A farmer <strong>picks</strong> the apples first, then he cleans them, and finally, he <strong>packs </strong> and <strong>ships</strong> them to the market.</p>
                    <p>First, the apples <strong>are picked</strong>, then they <strong>are cleaned</strong>, and finally, <strong>they’re packed</strong> and <strong>shipped </strong> to the market.</p>
                    <p><strong>Active Form: </strong>A farmer <strong>picks </strong> the apples first, then he cleans them, and finally he <strong>packs </strong> and <strong>ships</strong> them to the market.</p>
                    <p><strong>Passive Form: </strong>First the apples <strong>are picked</strong>, then they <strong>are cleaned</strong>, and finally <strong>they’re packed</strong> and <strong>shipped </strong> to the market.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row mt40-sm mt10-md mt10-xs">
        <div class="col xs12 md4 showTo-md"><img src="unit_1/module_4/assets/images/act_1.png" alt=""/></div>
        <div class="col xs12 md8">
          <h5 class="mb30">Complete the examples below using the verbs in parentheses.</h5>
          <p><strong class="u-textColor_4">The passive voice is used when we do not know who did the action:</strong></p>
          <div class="mb20 row-flex mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>This bridge: <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(consider) </strong>the longest in the world.</div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>The biggest diamond: <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(kept) </strong>in a safety vault in Paris.</div>
          </div>
          <p class="mt30 mb20"><strong class="u-textColor_4">The passive voice is used when the action is more important than the doer.</strong></p>
          <div class="mb20 row-flex mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>The new Audi: <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(sell) </strong>in 112 countries.</div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>Iphones: <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> <strong>(distribute) </strong>by Apple stores.</div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>