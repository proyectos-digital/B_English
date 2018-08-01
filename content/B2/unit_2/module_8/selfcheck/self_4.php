
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-j">
          <p class="ta-c mb50"><strong>BABY ORANGUTAN IS SAVED</strong></p>
          <p>This is Budi, a baby orangutan currently in intensive care at a rescue center, after suffering months of starvation and neglect.</p>
          <p>For the first year of his life, Budi was kept in a chicken cage and fed entirely on condensed milk. The milk provided basically no nourishment for him, causing his bones to become malformed in his tiny body, which is bloated with fluid from malnutrition.</p>
          <p>Budi is too frail to move or sit up on his own. He is fed from a bottle and has to be propped up on blankets and pillows.</p>
          <p>When vets from Animal Welfare Charity International Animal Rescue found Budi last month, they found him lonely, sick and afraid. They had to cut the chicken cage open and wait for quite a while before Budi was confident enough to come out.</p>
          <p>The vets have been nursing Budi back from the brink of death after he became victim of the illegal trade in primates in Indonesia. When asked about the rescue, they said they were very happy with the outcomes and that they had done it to continue protecting this species.</p>
          <p>They have said from now on, he will be given expert care and the best possible chance to return one day to his home in the forest.</p>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md"><img class="u-responsive-img ancho300 mb50 centrado" src="unit_2/module_8/assets/images/self_4.png" alt=""/>
          <p><strong>1. </strong>Who?  <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          <p><strong>2. </strong>When? <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          <p><strong>3. </strong>Where? <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          <p><strong>4. </strong>Why? <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
          <p><strong>5. </strong>How? <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
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