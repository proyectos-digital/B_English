
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent flex align-items-center justify-center ">
            <p>Get up | Get on | Get by | Drive off | Come back | Turn around | Break down | Look out | Take off</p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md ">
          <div class="mb20 row-flex mt20">
            <div class="col-flex">
              <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_1.mp3"></button><strong class="u-textColor_4-dark"> 1. </strong>We’ll <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> if we try to spend the least possible.
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">
              <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_2.mp3"></button><strong class="u-textColor_4-dark"> 2. </strong>He has a way of <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> a failing business.
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">
              <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_3.mp3"></button><strong class="u-textColor_4-dark"> 3. </strong>Walter practiced every day, hoping to <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> from his injury.
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">
              <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_4.mp3"></button><strong class="u-textColor_4-dark"> 4. </strong>When presented with the pile of files, the first thing he did was to <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> by month.
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">
              <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_5.mp3"></button><strong class="u-textColor_4-dark"> 5. </strong> By <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> early in the morning one also gets more time.
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md showTo-md"><img class="c-figure w80" src="unit_2/module_6/assets/images/act_2a.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent flex align-items-center justify-center ">
            <p>Get up | Get on | Get by | Drive off | Come back | Turn around | Break down | Look out | Take of</p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md showTo-md"><img class="c-figure w80" src="unit_2/module_6/assets/images/act_2a.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="mb20 row-flex mt20">
              <div class="col-flex">
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_6.mp3"></button><strong class="u-textColor_4-dark"> 6. <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>, there are dangers ahead.
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex">
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_7.mp3"></button><strong class="u-textColor_4-dark"> 7. </strong>The police car <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> after the drunken driver.
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex">
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_8.mp3"></button><strong class="u-textColor_4-dark"> 8. </strong>I don’t know how he’s going to <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> in life.
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex">
                <button class="c-btn-Icon u-bgIconListen mr10" ng-audio="unit_2/module_6/assets/audios/act_2_9.mp3"></button><strong class="u-textColor_4-dark"> 9. </strong>We <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> bugs <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> with fly traps.
              </div>
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