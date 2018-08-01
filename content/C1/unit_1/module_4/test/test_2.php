
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex align-items-center justify-between">
            <div class="col xs12 md5 row-flex align-items-center">
              <audio class="col-center" controls="controls">
                <source src="unit_1/module_4/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
              </audio>
            </div>
            <div class="col xs12 md6"> 
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h5>Nurseries not harmful to children, says new UK study</h5>
                  <h6>Wikinews.org, Tuesday, June 8, 2010</h6>
                  <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Nurseries_not_harmful_to_children,_says_new_UK_study" target="blank"> https://en.wikinews.org/</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row-flex align-items-center justify-between">
          <div class="col xs12 md6">
            <div class="xs12 md11 col-center">
              <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> The study is focused on...
                
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox w100 ta-c " for="selInput_1">Parents of children under two years old who when to the nursery.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox w100 ta-c " for="selInput_2">Children in elementary School</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox w100 ta-c " for="selInput_3">Children under two years old who went to daycare.</label>
                <input class="js-select" type="hidden"/>
              </div>
              <p class="mt30"><strong class="u-textColor_4">•</strong> Kathy Sylva believes all children who attend a nursery when they are less than 2 years old 
                <input class="c-input min-w260" type="text" ng-model="ngModel_sel_input_2"/>
                
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_4" ng-click="ngModel_sel_input_2 = 'Suffer no consequences.'">Suffer no consequences.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_5" ng-click="ngModel_sel_input_2 = 'Suffer consequences.'">Suffer consequences.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_6" ng-click="ngModel_sel_input_2 = 'Tend to have minor or no consequences.'">Tend to have minor or no consequences.</label>
                <input class="js-select" type="hidden"/>
              </div>
              <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false.  <br/> <br/>
                The professor believes that aggression shown by some children is a minor issue.
                
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_7">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_8">False</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="xs12 md11 col-center">
              <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Fill in the blank space with the correct words.</p>
              <div class="col xs10 col-center">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent flex align-items-center justify-center"><span>the wake of | findings | impaired | vast | contrast</span></div>
                </div>
              </div>
              <p class="lh20">A Professor at Oxford University believes that based on the 
                <input class="c-input js-escribir" type="text"/>  of her study,
                a  
                <input class="c-input js-escribir" type="text"/> proportion of the children who attend nursery under the age of two are not 
                <input class="c-input js-escribir" type="text"/>
                 by the experience. The opinion of many experts and contributors to the topic are
                in 
                <input class="c-input js-escribir" type="text"/> to the professor’s. This is in 
                <input class="c-input js-escribir" type="text"/> an effort to get mothers of toddlers
                back to work.
                
                
              </p>
              <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> The professor concedes that...
                
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_9">Boys are always more aggressive than girls.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_10">Parents that are wealthier have better outcomes.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_11">The quality of the nursery plays role in the outcome.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>