
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="s_actividad = 1">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex mt30 align-items-center">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent ta-c u-textColor_1">
            <div class="col xs12">
              <h5>Mt Healthy High School</h5>
              <p class="ta-c">2046 Adams Rd. cincinnati, ohio, 45231 | grades 9-12</p>
              <div class="row"><img class="u-responsive-img mt30 m-a" src="unit_1/module_2/assets/images/test_1_1.jpg" alt=""/></div>
            </div>
            <div class="col xs12">
              <div class="row mt30" phrasal-column="column-xs1 column-md2">
                <h6 class="ta-c">Mt Healthy High School, in Cincinnati, Ohio, is part of the Mt Healthy City district. The school reports enrolling 940 students in grades nine through 12, and it has 63 teachers on staff.</h6>
                <p class="ta-j"> <strong>1</strong> Mt Healthy High School is above the state average but below the district average in terms of the percentage of students eligible for free or reduced-price lunches. On average, 37 percent of students in Ohio are eligible for free or reduced-price lunch programs, whereas 49 percent of Mt Healthy High School students do. At the district level, 68 percent of students are eligible.</p>
                <p class="ta-j"> <strong>2</strong> ProPublica’s analysis found that all too often, states and schools provide poor students fewer educational programs like Advanced Placement, gifted and talented programs, and advanced math and science classes. Studies have linked participation in these programs with better outcomes later in life. Our analysis uses free and reduced-price lunch to estimate poverty at schools. We based our findings on the most comprehensive data set of access to advanced classes and special programs in U.S. public schools — known as the Civil Rights Data Set— released by the U.S. Department of Education Office for Civil Rights.</p>
                <p class="ta-j"><strong>3</strong> Mt Healthy High School offers four AP courses, and 7 percent of students participate in those classes.</p>
                <p class="ta-j">Mt Healthy High School’s enrollment rates in chemistry, physics and advanced math subject areas are 6 percent, 5 percent and 5 percent, respectively. Gifted and talented at the school has an enrollment rate of 7 percent.</p>
                <p class="ta-j">Dublin Jerome High School, in Dublin, Ohio, is a lower-poverty school than Mt Healthy High School, with 1 percent of its students qualifying for free or reduced-price lunch. The school offers 14 AP courses, and 35 percent of students are enrolled in those classes.</p>
                <p class="ta-j">These data points were reported by schools and districts to the Office for Civil Rights.</p>
                <p class="ta-j">Read the full story here: <a href="https://projects.propublica.org/schools/schools/390444101346">https://projects.propublica.org</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md10 col-center">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following extract:</h6>
            <p>ProPublica’s analysis found that all too often, states and schools provide poor students fewer educational programs like Advanced Placement, gifted and talented programs, and advanced math and science classes. Studies have linked participation in these programs with better outcomes later in life. Our analysis uses free and reduced-price lunch to estimate poverty at schools. We based our findings on the most comprehensive data set of access to advanced classes and special programs in U.S. public schools — known as the Civil Rights Data Set— released by the U.S. Department of Education Office for Civil Rights.</p>
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox" for="selInput_1">The analysis of poor student’s education.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox" for="selInput_2">The Civil rights data.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox" for="selInput_3">U. S. Department of Education.</label>
              <input class="js-select" type="hidden" ng-model="valorinputa"/>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt30">
        <div class="col xs12 md6">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Answer “true”, “false” or “information not given”.</h6>
            <p>MT Healthy High School is the poorest in the district?</p>
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row w100" for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row w100" for="selInput_5">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row w100" for="selInput_6">Information not given.</label>
              <input class="js-select" type="hidden" ng-model="valorinputb"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.</h6>
            <div class="col-center col xs10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>outcomes | findings | average | poverty</span></div>
              </div>
            </div>
            <p><strong class="u-textColor_4">•</strong> The analysis of  
              <input class="c-input js-escribir" type="text"/> from research published by Propublica finds that the 
              <input class="c-input js-escribir" type="text"/> student facing 
              <input class="c-input js-escribir" type="text"/> will have less successful 
              <input class="c-input js-escribir" type="text"/> than students from wealthier areas.
            </p>
          </div>
        </div>
      </div>
      <div class="row mt30">
        <div class="col xs12 md6">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
            <p>MT Healthy High School is the poorest in the district?</p>
            <div class="xs12 md8 col-center row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox" for="selInput_7">1.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox" for="selInput_8">2.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox" for="selInput_9">3.</label>
              <input class="js-select" type="hidden" ng-model="valorinputc"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</h6>
            <div class="col-center col xs10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>outcomes | finding | average | poverty</span></div>
              </div>
            </div>
            <p>Research has shown that students who are more disciplined in their studies have better 
              <input class="c-input js-escribir" type="text"/> that student who aren’t.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>