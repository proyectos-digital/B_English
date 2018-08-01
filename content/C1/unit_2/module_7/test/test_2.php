
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="row">
          <h5 class="ta-c">Listen to the following report and answer the questions that follow.</h5>
        </div>
        <div class="row-flex justify-between">
          <div class="col xs12 md5">
            <audio class="mt30 xs12" controls="controls">
              <source src="unit_2/module_7/assets/audios/test_2_1.mp3" type="audio/mpeg"/>
            </audio>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent ta-c">
                <h5>FCC supports an open Internet</h5>
                <p class="ta-c">A victory in the fight to protect public, democratic access to the Internet</p>
                <h6>Megan Tady posted Sep 03, 2009</h6>
                <p>Read the full story here: <a href="http://www.yesmagazine.org/people-power/fcc-supports-an-open-internet" target="blank">www.yesmagazine.org</a></p>
              </div>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> The audio centers on...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">The pros and the cons of net neutrality.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">Support for net neutrality by cable companies.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">The fight to protect net neutrality.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose true or false. <br/> <br/>
              The Freedom Preservation Act allows open internet on all networks.
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">False.</label>
            </div>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence. <br/> <br/>
              Comcast was penalized in 2008 because...
              
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">It violated the basic right to internet access.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">It impeded with internet users’ ability to access certain online content.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">It denied actively restricting access to popular online videos.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Internet gatekeepers can... <br/> <br/>
              
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">Allow some web users to pay to get a faster delivery of content.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">Lobby for changes to the internet.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">Buy any online content and resell to web users.</label>
            </div>
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Over the last 3 years...
              
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">Thousands of people have been talking about the importance of net neutrality to their lives.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">Billions of dollars have been given to fake grassroots organizations.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_15">500 lobbyists have been killed for their support of net neutrality.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>