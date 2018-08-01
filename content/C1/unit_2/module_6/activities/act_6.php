
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5 row-flex algin-items-center">
          <h5>Listen to the news report and answer the questions that follow.</h5>
          <audio class="mt30 col-center" controls="controls">
            <source src="unit_2/module_6/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
          </audio>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>The Planet is Saved ... Pass it on</h5>
              <h6>Posted by Sarah van Gelder at Jun 18, 2009 12:30 PM</h6>
              <p>Read the full story here: <a href="http://www.yesmagazine.org/blogs/sarah-van-gelder/the-planet-is-saved-...-pass-it-on" target="blank"> www.yesmagazine.org</a></p>
            </div>
          </div>
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The Yes Men 
                <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_a"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1" ng-click="txtcaptura_a =' is related to Yes Magazine.'">is related to Yes Magazine.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2" ng-click="txtcaptura_a =' produce fake newspaper.'">produce fake newspaper.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3" ng-click="txtcaptura_a =' is a part of Greenpeace.'">is a part of Greenpeace.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>  Complete the sentence.</p>
              <p>The International Herald Tribune 
                <input class="c-input w50	" type="text" readonly="readonly" ng-model="txtcaptura_b"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4" ng-click="txtcaptura_b = 'is a wing of Greenpeace.' ">is a wing of Greenpeace.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5" ng-click="txtcaptura_b = 'is a reliable source of information.' ">is a reliable source of information.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_b = 'is faux news.' ">is faux news.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Fill in the blank space with the appropriate organization.</p>
              <p>BeyondTalk.net. software was developed in conjunction with 
                <input class="c-input w50" type="text" readonly="readonly" ng-model="txtcaptura_c"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_c = 'The International Herald Tribune.' ">The International Herald Tribune.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8" ng-click="txtcaptura_c = 'Greenpeace.' ">Greenpeace.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_9" ng-click="txtcaptura_c = 'The Yes Men.' ">The Yes Men.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.</p>
              <p>The Yes Men and YES! Magazine are a collaboration</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">False.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> BeyondTalk.net promotes 
                <input class="c-input w50" type="text" readonly="readonly" ng-model="txtcaptura_d"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_12" ng-click="txtcaptura_d = 'protests.' ">protests.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_13" ng-click="txtcaptura_d = 'Non-violent civil disobedience.' ">Non-violent civil disobedience.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_14" ng-click="txtcaptura_d = 'violent action.' ">violent action.</label>
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