
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent u-textColor_1">
            <h5 class="ta-c"> Time magazine names Ahmed Mohamed to ‘Most Influential Teens of 2015’</h5>
            <p class="ta-c">Wikinews.org, Wednesday, October 28, 2015</p>
            <p><strong>1</strong> Time magazine named 14-year-old Ahmed Mohamed yesterday to its list of “30 Most Influential Teens of 2015”. He was made famous after being taken into custody by police when a teacher thought a clock he brought to his Texas school looked like a bomb. Mohamed joins the ranks of influential teens including US President Barack Obama’s daughter Malia Obama, and Nobel Peace Prize winner Malala Yousafzai. Time said of Mohamed in announcing the news: “Not many people make national news by bringing a homemade clock to school. But the ninth-grader’s arrest, after teachers and authorities mistook said clock for a bomb, kicked off a national debate over racial profiling”.</p>
            <p><strong>2</strong> Mohamed traveled to the White House last week where he met with US President Barack Obama. His family said last week that they would move from Texas to Qatar, where Mohamed was offered a full-scholarship to a well-respected school in the country. The September 14 incident in Irving, Texas triggered a wider discussion about Islamophobia within the community. The Twitter hashtag #IStandWithAhmed became part of a social movement in support of the youth. After news of the police response was reported, Mohamed received support online ranging from US President Barack Obama to Facebook creator Mark Zuckerberg. Mohamed brought the digital clock he made to school on September 14, and a teacher mistakenly thought it resembled a bomb. Police arrested and questioned the student. Images of the boy wearing a NASA T-shirt and handcuffed by the police were quickly posted and reposted online.</p>
            <p><strong>3</strong> The Twitter attention led to outreach from Google and Mohamed was invited to their Google Science Fair. Mohamed was a VIP guest at the Google Science Fair, and met finalists at the event held at Google’s headquarters located in Mountain View, California. Co-founder of Google, Sergey Brin, personally met with Mohamed during his visit to Google. US President Barack Obama tweeted using his @POTUS account: “Cool clock, Ahmed. Want to bring it to the White House? We should inspire more kids like you to like science. It’s what makes America great.” Twitter gave Mohamed the option to come to their company for an internship. Facebook co-founder Mark Zuckerberg tweeted to Mohamed and said the boy was welcome to come and tour the company. Both the Irving Independent School District and the Irving Police Department have asserted that the boy’s religion and name were not a factor in the manner in which they approached the situation.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:</h6>
          <h6>Mohamed is from Qatar.</h6>
          <p class="ta-j">Mohamed traveled to the White House last week where he met with US President Barack Obama. His family said last week that they would move from Texas to Qatar, where Mohamed was offered a full-scholarship to a well-respected school in the country. The September 14 incident in Irving, Texas triggered a wider discussion about Islamophobia within the community. The Twitter hashtag #IStandWithAhmed became part of a social movement in support of the youth. After news of the police response was reported, Mohamed received support online ranging from US President Barack Obama to Facebook creator Mark Zuckerberg. Mohamed brought the digital clock he made to school on September 14, and a teacher mistakenly thought it resembled a bomb. Police arrested and questioned the student. Images of the boy wearing a NASA T-shirt and handcuffed by the police were quickly posted and reposted online.</p>
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_1">The Qatar Scholarship.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_2">Mohamed Gets support.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_3">The kid from NASA.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6 class="mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”.</h6>
          <p>Mohamed is from Qatar.</p>
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
        <div class="col xs12 md6">
          <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
          <p class="ml10">Mohamed got invited to the White House.</p>
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox mr10" for="selInput_7">1.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox mr10" for="selInput_8">2.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox" for="selInput_9">3.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="mt20 ml10">Mohamed visited</p>
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_10">The Facebook office.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_11">NASA headquarter.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_12">Google headquarter.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6 class="mt30"><strong class="u-textColor_4">•</strong> Complete the table by using the correct organization from the passage.
            <table class="c-table-estilo_tres m-a mt30">
              <thead>
                <tr>
                  <th>Offered Mohamed a prize</th>
                  <th>Offered Mohamed a tour</th>
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
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
