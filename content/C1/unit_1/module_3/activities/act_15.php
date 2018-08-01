
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_15">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex justify-between align-items-center">
        <div class="col xs12 md6 ta-c mb30"><img class="u-responsive-img mt30 m-a" src="unit_1/module_3/assets/images/act_15_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>What does it mean to remind?</h5>
          <p>It is to make someone remember something they would have forgotten.</p>
          <h6>Look at the following example:</h6>
          <ul class="lh25">
            <li><strong class="u-textColor_4">•</strong> Juan: You need to send the email later today. <br/> Peter: I will not remember. Can you remind me to send it later?</li>
            <li><strong class="u-textColor_4">•</strong> Sandy reminded her mother that she needs to pick her up after school today</li>
            <li><strong class="u-textColor_4">•</strong> I forgot the name of the doctor. Can you remind me?</li>
          </ul>
          <h6> Fill in the blanks with “remind” or “remember”.</h6>
          <ul class="lh25">
            <li><strong class="u-textColor_4">•</strong> 
              <input class="c-input js-escribir" type="text"/> to turn off the lights.
            </li>
            <li><strong class="u-textColor_4">•</strong> 
              <input class="c-input js-escribir" type="text"/> Angie to turn off the lights.
            </li>
            <li><strong class="u-textColor_4">•</strong> I always forget to shut down my computer. Please 
              <input class="c-input js-escribir" type="text"/> me next time.
            </li>
            <li><strong class="u-textColor_4">•</strong> 
              <input class="c-input js-escribir" type="text"/> to tell your friends about the event tomorrow.
            </li>
            <li><strong class="u-textColor_4">•</strong> Could you 
              <input class="c-input js-escribir" type="text"/> me of the address? I keep forgetting.
            </li>
          </ul>
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