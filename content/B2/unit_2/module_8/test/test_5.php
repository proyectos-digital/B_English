
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Listen to the short dialogues and complete the sentences using the cues in parenthesis and an appropriate preposition.</h5>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm mt20-md">
          <ol class="c-listReset mb30" data-ejercicio="">
            <p>
              <button class="c-btn-Icon u-bgIconListen mt40" ng-audio="unit_2/module_8/assets/audios/test_5_1.mp3"><span class="ml20">Conversation 1</span></button>
            </p>
            <li><span></span>The woman<strong>(apologize / come) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>late.</li>
            <p>
              <button class="c-btn-Icon u-bgIconListen mt40" ng-audio="unit_2/module_8/assets/audios/test_5_2.mp3"><span class="ml20">Conversation 2</span></button>
            </p>
            <li><span></span>Students<strong>(be worried / miss) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>classes.</li>
            <p>
              <button class="c-btn-Icon u-bgIconListen mt40" ng-audio="unit_2/module_8/assets/audios/test_5_3.mp3"><span class="ml20">Conversation 3</span></button>
            </p>
            <li><span></span>The man<strong>(insist / reach) <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>a decision immediately.</li>
            <p>
              <button class="c-btn-Icon u-bgIconListen mt40" ng-audio="unit_2/module_8/assets/audios/test_5_4.mp3"><span class="ml20">Conversation 4</span></button>
            </p>
            <li><span></span>The man<strong>(be tired / wait)  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>for the doctor to answer the phone.</li>
            <p>
              <button class="c-btn-Icon u-bgIconListen mt40" ng-audio="unit_2/module_8/assets/audios/test_5_5.mp3"><span class="ml20">Conversation 5</span></button>
            </p>
            <li><span></span>They are<strong>(look forward / return)  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>to their normal activities.</li>
          </ol>
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