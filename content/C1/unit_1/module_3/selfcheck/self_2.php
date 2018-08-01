
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <h5>Listen to the news report and answer the questions that follow</h5>
      </div>
      <div class="row-flex align-items-center">
        <div class="col xs12 md8 col-center">
          <div class="row">
            <audio class="row" controls="controls">
              <source src="unit_1/module_3/assets/audios/self_2_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
          <div class="row mt20">
            <div class="c-cardGreen m-a">
              <div class="c-cardGreenContent u-textColor_1">
                <h5 class="ta-c">Brazilian Ministry of Education defends external control over Universities</h5>
                <p class="ta-c">Wikinews.org, Wednesday, February 2, 2005</p>
                <p class="ta-j mt20">Read the full article at: <a href="https://en.wikinews.org/wiki/Brazilian_Ministry_of_Education_defends_external_control_over_Universities" target="blank">https://en.wikinews.org/wiki/</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row col-center">
            <h6><strong class="u-textColor_4">•</strong> The government currently has...</h6>
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-c " for="selInput_1">No control of the universities.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">Limited control.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">More control.</label>
              <input class="js-select" type="hidden"/>
            </div>
            <h6 class="mt30"><strong class="u-textColor_4">•</strong> Complete the sentence</h6>
            <p class="ml10">The universities generally believe.</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-c " for="selInput_4">That universities need help with their finance</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_5">That the Ministry of Education needs to make universities completely independent.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_6">That universities do not need more oversight</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md5 col-center">
          <h6 class="mt30"> <strong class="u-textColor_4">•</strong> Fill in the blank space with appropriate person.
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th>For more external control</th>
                  <th>For less external control</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input class="c-input row js-escribir" type="text"/>
                  </td>
                  <td>
                    <input class="c-input row js-escribir" type="text"/>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input class="c-input row js-escribir" type="text"/>
                  </td>
                  <td>
                    <input class="c-input row js-escribir" type="text"/>
                  </td>
                </tr>
              </tbody>
            </table>
          </h6>
          <div class="row col-center">
            <h6><strong class="u-textColor_4">•</strong> Choose true or false.</h6>
            <p class="ml10">When a magazine in Brazil puts a donkey to represent someone it means they are a hard worker.</p>
            <div class="u-checkbox-responsive dos-columnas">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-c " for="selInput_7">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">False.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row col-center">
            <h6><strong class="u-textColor_4">•</strong> The academics are worried about...</h6>
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_9" value="1"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">Finances.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_10">The university Syllabi.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">Minority groups.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>