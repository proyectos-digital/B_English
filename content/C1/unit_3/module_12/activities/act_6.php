
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex justify-between align-items-center">
        <h5>Listen to the news report and answer the questions that follow.</h5>
        <div class="row row-flex align-items-center justify-center">
          <div class="col xs12 md8 row-flex">
            <audio class="mt30 col-center xs12 md8" controls="controls">
              <source src="unit_3/module_12/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
            </audio>
            <div class="row">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c">
                  <h5>Building “political power” for black americans where voter suppression is highest</h5>
                  <p><i>This election will be the first in 50 years not to offer full protections under the Voting Rights Act of 1965. But the Movement for Black Lives is hopeful.</i></p>
                  <p class="ta-c">Liza Bayless posted Nov 07, 2016 <br/> This article is the fifth of a series of conversations with contributors to the demands of the Movement for Black Lives.</p>
                  <p>Read the full story here: <a href="http://www.yesmagazine.org/peace-justice/building-political-power-for-black-americans-where-voter-suppression-is-highest-20161107" target="blank"> www.yesmagazine.org</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h5>Now choose the best answer.</h5>
      </div>
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <div class="row">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Some states do not need federal approval for changes in their electoral laws since</h6>
            </div>
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox" for="selInput_1">2008</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox" for="selInput_2">2013</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox" for="selInput_3">1965</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong>  Complete the sentence.</h6>
              <p><br/> Brennan Center for Justice is...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4">An African American think tank.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">Supreme Court think tank.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">In New York City</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
              <p>Trupania Bonner is a supporter of greater control of the voting system by local government.</p>
            </div>
            <div class="u-checkbox-responsive two-columns">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">True</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">False</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Louisiana has...</h6>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_9">Less voting locations open since 2013.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">More voting locations since 2013.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">Has not change the number of voting locations.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> In Louisiana, a 16-year-old can...</h6>
            </div>
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">Pre-register to vote</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_13">Register to vote.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_14">Vote.</label>
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