
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <h5>Listen to the news report and complete the activities that follow.</h5>
          <div class="row-flex justify-center">
            <audio class="mt30" controls="controls">
              <source src="unit_2/module_7/assets/audios/act_6_1.mp3" type="audio/mpeg"/>
            </audio>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>The Internet: A Beautiful Place to Be a Harbinger of Awesome</h5>
              <h6>Shannon Hickey posted Dec 06, 2014</h6>
              <p>Read the full story here: <a href="http://www.yesmagazine.org/for-teachers/writing-competition-essays/fall-2014/fall-2014-college-winner-shannon-hickey-1" target="blank"> www.yesmagazine.org</a></p>
            </div>
          </div>
          <h5>Now choose the best answer.</h5>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The internet is...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">A great tool to foster gay relationships.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">A means of getting rid of the bourgeoisie.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">A way to promote environments and disseminate information.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Complete the sentence.</p>
              <p>People from the transgender community 
                <input class="c-input row" type="text" readonly="readonly" ng-model="txtcaptura_a"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4" ng-click="txtcaptura_a = 'can use the internet to report on child abuse made by the Church.' ">can use the internet to report on child abuse made by the Church.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_5" ng-click="txtcaptura_a = 'can use the internet the fight against discriminatory jokes.' ">can use the internet to fight against discriminatory jokes.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_a = 'can use the internet to promote matriarchal influences.' ">can use the internet to promote matriarchal influences.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Queer Housing is...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">On Tumblr.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">On Facebook.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_9">On many social networks.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Choose true or false.</p>
              <p>Christopher Zumski Finke had problems while growing up because of his sexuality.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_10">True</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_11">False</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Being queer or trans 
                <input class="c-input row" type="text" readonly="readonly" ng-model="txtcaptura_b"/>
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_13" ng-click="txtcaptura_b ='means many people can now express themselves freely.'">means many people can now express themselves freely.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_14" ng-click="txtcaptura_b ='is now supported by many people, although there are those who have issues with it.'">is now supported by many people, although there are those who have issues with it.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_15" ng-click="txtcaptura_b ='is no different from being a feminist.'">is no different from being a feminist.</label>
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