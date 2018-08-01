
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row flex align-items-center justify-center">
        <div class="col xs12 md6 col-center ta-c showTo-md "><img class="c-figure" src="unit_1/module_4/assets/images/act_4a.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md6 col-center ">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong> Complete the sentences.</h5>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>It’s your turn to <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> the dishes today.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>I will <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> a list of the things we need.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>Ok, I will <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> an exception for you.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>Please, don’t <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> mistakes.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>I need to go out now, it’s urgent. I have to <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> a phone call.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 6. </strong>The workers I hire always <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> a good job.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="u-textColor_4 mb30">Do and Make are two verbs that can be difficult to learn because they translate the same in Spanish: HACER.</h5>
      <h6>The following are the most common cases where we use do and make:</h6>
      <div class="row-flex align-items-center mt50">
        <div class="col xs12 sm6 md4">
          <ul class="u-bgColor_4-light padding20 lh25 col xs8 col-center">
            <li>Do me a favor</li>
            <li>Do the cooking</li>
            <li>Do the dishes</li>
            <li>Do the housework</li>
            <li>Do the shopping</li>
            <li>Do a good job</li>
            <li>Do the washing up</li>
            <li>Do your best</li>
            <li>Do your hair</li>
          </ul>
        </div>
        <div class="col xs4 ta-c showTo-md"><img class="c-figure" src="unit_1/module_4/assets/images/act_4.png" alt=""/></div>
        <div class="col xs12 sm6 md4">
          <ul class="u-bgColor_4-light padding20 lh25 col xs8 col-center">
            <li>Make a difference</li>
            <li>Make a mess</li>
            <li>Make a mistake</li>
            <li>Make a noise</li>
            <li>Make an effort</li>
            <li>Make money</li>
            <li>Make exceptions</li>
            <li>Make calls</li>
            <li>Make a list</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice u-bgIconAlert" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>