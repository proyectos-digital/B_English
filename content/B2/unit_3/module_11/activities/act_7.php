
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Choose a verb from the box to complete the sentences. Make sure you use the correct form.</h5>
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-sm10  col-flex-md12 col-center mt10-sm mt20-md">
          <table class="c-table-estilo_tres m-a">
            <tbody>
              <tr>
                <td>EARN</td>
                <td>RAISE</td>
                <td>DONATE</td>
                <td>STEAL</td>
                <td>WIN</td>
              </tr>
              <tr>
                <td>LOSE</td>
                <td>SPEND</td>
                <td>SAVE</td>
                <td>LEND</td>
                <td>FIND</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-sm10 col-flex-md12 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="col-flex-xs10 col-flex-md6 col-center mt10-sm mt20-md padding10">
              <p class="mt30">  <strong class="u-textColor_4-dark"> 1. </strong>We have started to <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> money so we can buy the house we want.</p>
              <p class="mt30">  <strong class="u-textColor_4-dark"> 2. </strong>I got a promotion, which means I will <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> more money than I used to.</p>
              <p class="mt30">  <strong class="u-textColor_4-dark"> 3. </strong>Big corporations usually <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> money to charity.</p>
              <p class="mt30"><strong class="u-textColor_4-dark"> 4. </strong>Can you <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> some money? I´ll pay you back as soon as possible.</p>
            </div>
            <div class="col-flex-xs10 col-flex-md6 col-center mt10-sm mt20-md padding10">
              <p class="mt30">  <strong class="u-textColor_4-dark"> 5. </strong>We have to <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> more money if we want to pull off the event.</p>
              <p class="mt30">  <strong class="u-textColor_4-dark"> 6. </strong>My sister usually <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> a lot on shoes and make-up.</p>
              <p class="mt30">  <strong class="u-textColor_4-dark"> 7. </strong>All my money got <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> in the robbery.</p>
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

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_8/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>