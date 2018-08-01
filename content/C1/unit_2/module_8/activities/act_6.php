
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Listen to the news report and complete the following activities.</h5>
      <div class="row row-flex justify-between align-items-center">
        <div class="col xs12 md8 col-center">
          <audio class="row" controls="controls">
            <source src="unit_2/module_8/assets/audios/act_6_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>Movies that empower women</h5>
              <h6>Breena Kerr posted Jan 27, 2017</h6>
              <p>Read the full story here: <a href="http://www.yesmagazine.org/happiness/10-films-to-keep-you-inspired-after-the-womens-march-20170127" target="blank"> www.yesmagazine.org</a></p>
            </div>
          </div>
        </div>
      </div>
      <h5>Now choose the best answer.</h5>
      <div class="row row-flex justify-between">
        <div class="col xs12 md5">
          <div class="row row-flex align-items-center">
            <div class="row mt30">
              <div class="row">
                <p><strong class="u-textColor_4">•</strong> The intention of the article is to...</p>
              </div>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_1">Entertain Women.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_2">Suggest entertainment for the women.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_3">Keep subject matter alive.</label>
              </div>
            </div>
            <div class="row mt30">
              <div class="row">
                <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
                <p> Frida Kahlo was played by Salma Hayek.</p>
              </div>
              <div class="row row-flex justify-around">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox w45" for="selInput_4">True</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox w45" for="selInput_5">False</label>
              </div>
            </div>
            <div class="row mt30">
              <div class="row">
                <p><strong class="u-textColor_4">•</strong> Complete the sentence.</p>
                <p>The movie about a boy who becomes a feminist is called 
                  <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_a"/> .
                </p>
              </div>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_6" ng-click="txtcaptura_a = '20th Century Women.'">20th Century Women.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_7" ng-click="txtcaptura_a = 'Mustang.'">Mustang.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_8" ng-click="txtcaptura_a = 'Whale Rider.'">Whale Rider.</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Fill in the blank space with the appropriate person.</p>
              <p>The main character in the movie called Whale Rider is 
                <input class="c-input" type="text" readonly="readonly" ng-model="txtcaptura_b"/> .
              </p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_9" ng-click="txtcaptura_b = 'Stellarly.'">Stellarly.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_10" ng-click="txtcaptura_b = 'Pai.'">Pai.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_11" ng-click="txtcaptura_b = 'Frida Kahlo.'">Frida Kahlo.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> Boys Don’t Cry is about...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_12" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_12">An abused boy in Nebraska.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_13">A man that was born as a woman.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="3"/>
              <label class="c-Checkbox row ta-l " for="selInput_14">A woman that was born as a man.</label>
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