
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_17">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <p>When you wish to interrupt a speaker to ask for clarification or at a point in the conversation, it is always important to do it politely.</p>
      <h5>Look at the following situations and then choose the correct way to interrupt the speaker.</h5>
      <div class="row">
        <div class="col xs12 md8">
          <div class="row mt20">
            <h5>Situation 1</h5>
            <p>Your boss is making a very important point but you did not hear it clearly. How would you interrupt him?</p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_1">I am sorry, would you mind repeating that for me?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_2">I am sorry what do you mean by that?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row w100" for="selInput_3">Can you clarify that for me?</label>
            </div>
          </div>
          <div class="row mt20">
            <h5>Situation 2</h5>
            <p>Your friend used a word you have not heard before. How would you ask for clarification of the meaning?</p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_4">Could you say that again please?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_5">I didn’t hear you well?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row w100" for="selInput_6">I am not sure what you mean by that could explain?</label>
            </div>
          </div>
          <div class="row mt20">
            <h5>Situation 3</h5>
            <p>Someone is speaking and you want to add to the point that they are making. How would you interrupt to add your point?</p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_7">I have a point to make…</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_8">Here is what I think…</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row w100" for="selInput_9">I agree with what you are saying and I would like to add to that…</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md4 mt30-xs mt50-md showTo-md">
          <div class="xs12 md11 col-center ta-c"><img class="u-responsive-img" src="unit_1/module_2/assets/images/act_17_1.png" alt=""/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>