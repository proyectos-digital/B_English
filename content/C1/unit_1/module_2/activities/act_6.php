
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_6" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex justify-between align-items-center">
        <div class="col xs12 md7">
          <h5>Listen to the news report and answer the questions that follow.</h5>
          <div class="row-flex justify-center align-items-center">
            <audio class="mt30 row" controls="controls">
              <source src="unit_1/module_2/assets/audios/act_6_1.mp3"/>Your browser does not support the audio element.
            </audio>
          </div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <h5>A fifth of American kids projected to become obese</h5>
              <h6>Saturday, September 16, 2006</h6>
              <p>Read the full story here: <a href=" https://en.wikinews.org/wiki/A_fifth_of_American_kids_projected_to_become_obese" target="blank"> https://en.wikinews.org/</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <h5>Now choose the best answer.</h5>
        <div class="row ">
          <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:</h6>
          <p>Dr. Risa Lavizzo-Mourey, president of Robert Wood Johnson Foundation, the organization that funded the report, said “if we do not reverse the epidemic of childhood obesity, millions of kids and our society will be robbed of a healthy and hopeful future”. The percentage of children who are overweight or obese has been increasing worldwide in recent years. Food Consumer reports that according to the World Health Organization (WHO), childhood overweight and obesity is a “global pandemic”.</p>
        </div>
        <div class="row">
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox " for="selInput_1"> The Robert Wood Johnson foundation</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox " for="selInput_2">The World Health Organization report.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox " for="selInput_3">The childhood obesity epidemic.</label>
          </div>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex justify-between align-items-center">
        <div class="col xs12 md5">
          <div class="row mt30">
            <h6>Choose “true”, “false” or “information not given”</h6>
            <div class="row">
              <p><strong class="u-textColor_4">•</strong> The Institute of health is 100% behind the results of the study.</p>
            </div>
            <div class="row">
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_4">True</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_5">False.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_6">Information not given.</label>
              </div>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Complete the sentence.</h6>
              <p>The percentage of children that are overweight is...</p>
            </div>
            <div class="row">
              <div class="u-checkbox-responsive">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_7"> will be over 20 % if something not done soon.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_8">is over 30%.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_9">is decreasing.</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> According to the report,</h6>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-c " for="selInput_10"> obesity causes cancer.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">obesity is more common in African Americans.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12">obesity increases the risk of stroke.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> The report suggests that...</h6>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
              <label class="c-Checkbox row ta-c " for="selInput_13">latinos are genetically predisposed to become obese.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_14">asians are genetically predisposed to become obese.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_15">the Latino population is growing faster than the white population.</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row ta-c showTo-md"><img class="u-responsive-img mt30 m-a" src="unit_1/module_2/assets/images/act_6_1.png" alt=""/></div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>