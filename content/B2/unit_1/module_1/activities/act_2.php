
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Select a verb from the box and complete the dialogues using the correct form.</h5>
      <div class="row">
        <div class="col xs10 md8 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p class="space-between"><span>watch</span> <span>wash</span> <span>stay</span> <span>wait</span> <span>have</span> <span>dance</span> <span>pick</span></p>
              <p class="space-between"><span>complain</span> <span>stand</span> <span>sit</span> <span>call</span> <span>make</span> <span>do</span> <span>tidy up</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center ">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img xs8 centrado" src="unit_1/module_1/assets/images/act_2.png" alt=""/></div>
          <div class="row-flex">
            <ol class="c-listReset mb30" data-ejercicio="">
              <p>
                <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_2_1.mp3"><span class="ml20">Conversation 1</span></button>
              </p>
              <li><span><strong>Woman</strong>: Where is your brother going to meet us?</span></li>
              <li><span><strong>Man</strong>: He (1) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  for us when our train arrives in Pamplona. I am sure he (2) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  on the platform when we get to the station. </span></li>
              <li><span><strong>Woman</strong>: And then what? </span></li>
              <li><span><strong>Man</strong>: We (3) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  Mary up at work and go out to dinner.</span></li>
            </ol>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center">
          <div class="row-flex">
            <ol class="c-listReset mb30" data-ejercicio="">
              <p>
                <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_2_2.mp3"><span class="ml20">Conversation 2</span></button>
              </p>
              <li><span><strong>Man</strong>: When we get to the party, Penelope
                   (4) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  TV, Sam
                   (5) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> 
                  drinks, Beth (6) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  by herself, and Aaron (7) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  about his day at work.</span></li>
              <li><span><strong>Woman</strong>: Maybe, this time they won’t be doing the same things.</span></li>
              <li><span><strong>Man</strong>: I am absolutely positive they (8)
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  the same things; they always do the same things.</span></li>
            </ol>
          </div>
          <div class="row-flex">
            <ol class="c-listReset mb30" data-ejercicio="">
              <p>
                <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_2_3.mp3"><span class="ml20">Conversation 3</span></button>
              </p>
              <li><span><strong>Woman</strong>: Oh, look at that mountain of dirty dishes! Who (9) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  all of those?</span></li>
              <li><span><strong>Man</strong>: I promise I (10) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  when I get home from work.</span></li>
              <li><span><strong>Woman</strong>: Thanks.</span></li>
              <li><span><strong>Man</strong>: When you get home this evening, that mountain will be gone and nice stacks of sparkling clean dishes (11) 
                  <span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>
                  in the cabinets.
                  </span></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>