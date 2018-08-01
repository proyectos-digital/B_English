
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_15">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_1/module_2/assets/images/act_15_1.png" alt=""/></div>
        <div class="col xs12 md6">
          <h5>Remember is when you think of a memory.</h5>
          <ul class="lh25">
            <li><strong class="u-textColor_4">•</strong> I remembered the last time we had a lunch meeting, it was very productive.</li>
            <li><strong class="u-textColor_4">•</strong> I remember playing football as a teenager.</li>
          </ul>
          <h5>Remind is when someone or something makes us think about something.</h5>
          <ul class="lh25">
            <li><strong class="u-textColor_4">•</strong> The football shoes you are wearing remind me of the ones I have at home.</li>
            <li><strong class="u-textColor_4">•</strong> The secretary reminded me of the meeting today.</li>
          </ul>
          <h5>Complete the sentence with remember or remind.</h5>
          <ul class="lh25">
            <li><strong class="u-textColor_4">•</strong> John 
              <input class="c-input js-escribir" type="text"/> Sarah to turn off the light.
            </li>
            <li><strong class="u-textColor_4">•</strong> Frankie 
              <input class="c-input js-escribir" type="text"/> to reschedule the meeting on Wednesday.
            </li>
            <li><strong class="u-textColor_4">•</strong> Martin was 
              <input class="c-input js-escribir" type="text"/> of his trip to Cartagena by the smell of the sea.
            </li>
            <li><strong class="u-textColor_4">•</strong> Juan  
              <input class="c-input js-escribir" type="text"/> that his sister was alone at home so he had to hurry home.
            </li>
            <li><strong class="u-textColor_4">•</strong> 
              <input class="c-input js-escribir" type="text"/> to bring the movie tickets!
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