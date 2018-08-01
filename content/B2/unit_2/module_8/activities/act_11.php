
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img w90 ml20 mr20 showTo-md" src="unit_2/module_8/assets/images/act_11a.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <p>For each of the following short texts, write an appropriate short title, synthesizing their content and main idea.</p><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuario"/></span>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c ">Between 1986 and 2001, tourists could become “space tourists”. They could visit the Russian space station MIR, which operated during that period of time. In 2011, an American businessman paid 20 million dollars to go for ten days. Some people think that there will be different spaceplanes for tourists soon, and that a ride in these spaceplanes will be cheaper than going to the MIR space station.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <p>For each of the following short texts, write an appropriate short title, synthesizing their content and main idea.</p><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuariob"/></span>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> Different space agencies are planning on sending astronauts to the Moon again. The American, the Russian, the Chinese, the Indian, and the European Space Agencies all have plans for missions to the Moon. NASA is planning to build a camp at one of the lunar poles. They are conducting tests in Antartica to see how well it would work.</div>
              </div>
            </div>
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img w90 ml20 mr20 showTo-md" src="unit_2/module_8/assets/images/act_11c.png" alt=""/></div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img w90 ml20 mr20 showTo-md" src="unit_2/module_8/assets/images/act_11b.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <p>For each of the following short texts, write an appropriate short title, synthesizing their content and main idea.</p><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuarioc"/></span>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c ">Guinness World Records described Ranulph Fiennes as the world´s greatest living explorer. He has been on more than 30 expeditions. In 1979 he started an expedition around the world that took 3 years to finish. Another difficult expedition was when he walked across Antarctica in 1993. On this expedition, he pulled a sled carrying all the things he needed to cam.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>