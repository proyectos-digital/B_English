
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Complete the examples below with the verbs in the box.</h5>
      <div class="row-flex">
        <div class="col-flex-xs10 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <h5>Read the following sentences:</h5>
            <p class="mt20">• Jair <strong>thanked </strong>Julio <strong>for making </strong>that suggestion. </p>
            <p class="mt20">• Henry is <strong>thinking  </strong>of <strong>going  </strong>to Fresno in August. </p>
            <p class="mt20">• He   <strong>kept  </strong>on  <strong>asking </strong>for money. </p>
            <p class="mt20">• Please, <strong>refrain from making </strong>that horrible noise! </p>
          </div>
        </div>
        <div class="col-flex-xs10 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <h5>Choose a verb from the list to complete the sentences. Use the right form.</h5>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center">
              <p>Depend on / keep on / apologize for / dream of / blamed for</p>
            </div>
          </div>
          <div class="row mb20 mt40">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span><span>being late to class yesterday.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>He</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span><span>playing basketball when he grows up.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>We have to</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span><span>working if we want to finish the report on time.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I was</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span><span>losing the game.</span></span></li>
            </ol>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>We</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span><span>getting help. Otherwise, we won’t be able to make it.</span></span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_8/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>