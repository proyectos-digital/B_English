
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center justify-between"></div>
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <h5>Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex justify-center">
            <audio class="mt30" controls="controls">
              <source src="unit_3/module_10/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
            </audio>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>Painting the Town Prosperous</h5>
              <h6><i>Urban artists revive our neighborhoods and show us how to share our gifts</i></h6>
              <p class="ta-c">James Trimarco posted Nov 16, 2011</p>
              <p>Read the full story here: <a href="http://www.yesmagazine.org/issues/new-livelihoods/painting-the-town-prosperous" target="blank"> www.yesmagazine.org</a></p>
            </div>
          </div>
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Often times artists lack...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">emotional and financial support.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">an outlet to express themselves.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">resources to help develop their craft.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>  Complete the sentence.</p>
              <p>Artists play a major role in terms of 
                <input class="c-input" type="text" readonly="readonly"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">painting murals in neighborhoods.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">building communities through social relationships.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">teaching community youth how to negotiate.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.<br/><br/> Art can serve as a means of stability in some challenged communities.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_9">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">False.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> In Philadelphia 
                <input class="c-input" type="text" readonly="readonly"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_11" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">there are no museums or art galleries.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">art murals are ubiquitous.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_13">many poor neighborhoods depend on the economic support of the Mural Arts Program (MAP).</label>
            </div>
          </div>
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