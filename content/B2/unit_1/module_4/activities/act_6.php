
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt10-md">
          <h5><strong class="u-textColor_4">1. </strong> Differentiating <strong>DO </strong> and <strong>MAKE</strong>.</h5>
          <p>Read and listen to the short conversations</p>
          <p>Complete them with do or make.</p>
          <div class="row mb30 ta-c mt30 showTo-md"><img class="u-responsive-img w80" src="unit_1/module_4/assets/images/act_6_1.png" alt=""/></div>
          <button class="c-btn-Icon u-bgIconListen mt20" ng-audio="unit_1/module_4/assets/audios/act_6_1.mp3"><span>Conversación 1</span></button>
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>What are you doing on Friday?</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>I am going <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> on Friday afternoon.</div>
            </div>
          </div>
          <button class="c-btn-Icon u-bgIconListen mt20" ng-audio="unit_1/module_4/assets/audios/act_6_2.mp3"><span>Conversación 2</span></button>
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Sir, can I help you with anything else?</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>Please, can you <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> for me in that nice Italian restaurant?</div>
            </div>
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Sure.</div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt10-md">
          <button class="c-btn-Icon u-bgIconListen mt20" ng-audio="unit_1/module_4/assets/audios/act_6_3.mp3"><span>Conversación 3</span></button>
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Will you <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>? Help me carry this table.</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>Sure. Where do you want us to put it?</div>
            </div>
          </div>
          <button class="c-btn-Icon u-bgIconListen mt20" ng-audio="unit_1/module_4/assets/audios/act_6_4.mp3"><span>Conversación 4</span></button>
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Thanks, Doctor. When should I come again?</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>Let’s <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> for 10:00 in the morning next Tuesday. Does that work for you?</div>
            </div>
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Yes, perfect.</div>
          </div>
          <button class="c-btn-Icon u-bgIconListen mt20" ng-audio="unit_1/module_4/assets/audios/act_6_5.mp3"><span>Conversación 5</span></button>
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Oh, dear! There is so much <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>!</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>Don’t worry. I’ll help you.</div>
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