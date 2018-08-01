
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="c-flickity">
          <div class="row mt10 mb30">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Page 1</button>
                <button class="c-flickity-button ">Page 2</button><span class="c-flickity--cell-total">2</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row ">
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1">
                    <div class="col xs12 md6">
                      <h5 class="ta-c">Some States Still Leave Low-Income Students Behind; Others Make Surprising Gains</h5>
                      <h6 class="ta-c">by Sharona Coutts and Jennifer LaFleur</h6>
                      <p class="ta-c">ProPublica, June 30, 2011, 8 a.m.</p>
                      <p class="ta-j"><strong>1</strong>. Florida is a state of <strong>stark</strong> contrasts. Travel a few miles from the <strong>opulent</strong> mansions of Miami Beach and you reach desperately poor neighborhoods. There’s the grinding poverty of sugar cane country and the growing middle class of Jacksonville. <strong> All told</strong>, half the public-school students in Florida qualify for subsidized lunches. Many are the first in their families to speak English or contemplate attending college. In many states, those economic differences are reflected in the classroom, with students in wealthy schools taking many more advanced courses.</p>
                      <p class="ta-j"><img class="u-responsive-img w40 ml10 mb10 " src="unit_1/module_3/assets/images/act_3_1.png" alt="" align="right"/>
                        But not in Florida. A ProPublica analysis of previously unreleased federal data shows that Florida leads the nation in the percentage of high-school students enrolled in high-level classes—Advanced Placement and advanced math. That holds true across rich and poor districts. <br/> Studies repeatedly have shown that students who take advanced classes have greater chances of attending and succeeding in college. Our analysis identifies several states that, like Florida, have leveled the field and now offer rich and poor students roughly equal access to high-level courses.
                      </p>
                      <p class="ta-j"><strong>2</strong>. In Kansas, Maryland and Oklahoma, by contrast, such opportunities are far less available in districts with poorer families.
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j">That <strong>disparity</strong> is part of what experts call the “opportunity gap.” “The opportunity to learn—the necessary resources, the curriculum opportunities, the quality teachers—that <strong>affluent</strong> students have, is what determines what people can do in life,” said Linda Darling-Hammond, a professor of education at Stanford University. <br/> Our analysis offers the first nationwide picture of exactly which advanced courses are being taken at which schools and districts across the country. Previous studies and surveys have <strong>tracked</strong> some of these courses, but never with so many variables and covering so many schools. (More than three-quarters of all public-school children are represented in our analysis.<br/> We have also created an interactive feature so you can search for your school and see how it compares, for example, with poorer and wealthier schools nearby. It also shows the percentage of inexperienced teachers in schools. Here’s Beverly Hills High compared to a much poorer school in Southern California. And here’s a stark example from New Jersey. The analysis was drawn from a nationwide survey by the Department of Education’s Office for Civil Rights, which collected school-by-school reports on a range of offerings, including physics, chemistry and Advanced Placement courses in high schools. The department did the survey to assess whether states and other localities are discriminating by race, gender or disability. State and local education administrators, of course, are responsible for most funding and policy decisions. We compared the <strong>survey</strong> results to poverty levels. (We measured that by looking at the percentage of students who receive free- or reduced-price lunch—which the government offers to students from low-income families.) While our analysis found a link between race and <strong>lack</strong> of access, poverty was the predominant factor in determining the proportion of students in a school or district who were <strong>enrolled</strong> in higher-level instruction.<br/> The department plans to make public additional data in the coming months on graduation rates and test scores for these schools. When it does so, we will publish additional stories pinpointing the states in which equal access has achieved the desired results and where it has not.
                        
                        
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1 ">
                    <div class="col xs12 md6">
                      <p class="ta-j"><strong>3</strong>. From the data released so far, Florida stands out. Its results follow a decade-long initiative to broaden educational opportunity launched by then-governor Jeb Bush and his Education Commissioner, and now fellow former governor, Charlie Crist. “The fact that some states have eliminated these disparities proves that if we make this a priority of policy it can be done,” said Pedro A. Noguera, an education professor at New York University.<br/> Other states show just how complex the problem is. While Maryland has been celebrated for the high percentage of students taking advanced classes, our analysis shows enrollment in such classes at high-poverty schools is much lower. Or take Mississippi: Richer and poorer schools there provide <strong>roughly</strong> equal access, but that <strong>masks</strong> the reality that very few students are enrolled in the classes overall. A Maryland official said enrollment of <strong>low-income</strong> students has been increasing recently, while a spokesman from Mississippi’s department of education was not immediately available for comment. While most experts agree about the value of giving students expanded opportunities, many <strong>cautions</strong> that offering advanced classes is not a solution on its own to deeper-rooted gaps in preparation and <strong>achievement</strong>. They say students often need additional support.</p>
                      <p class="ta-j"><img class="u-responsive-img w40 mr10 mb10 " src="unit_1/module_3/assets/images/act_3_2.png" alt="" align="left"/>
                        “We’re making AP a reform strategy in and of itself,” said Kristin Klopfenstein, director of the Education Innovation Institute at the University of Northern Colorado. “When it comes to a struggling <strong>turnaround</strong> school, why in the world would you think that somehow plunking down an AP program would improve that school?” But with the right support, even the most disadvantaged students can <strong>thrive</strong>, according to Jose Huerta, the principal at Garfield High School in East Los Angeles.
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10 mb10 " src="unit_1/module_3/assets/images/act_3_3.png" alt="" align="right"/>
                        <strong>4</strong>.The school was the basis for the 1980’s classic, Stand and Deliver, the story of a determined high-school math teacher, Jaime Escalante, whose single-minded conviction that kids from poor and minority <strong>backgrounds</strong> could succeed, led to many of his students passing the demanding Advanced Placement calculus exam. Garfield still provides many rigorous courses— with extra help for some students. And Huerta said that this year his students are heading to colleges such as Yale, Brown and Harvard. “This is an extremely poor area. These are kids whose parents can’t speak the language, and they’re going to the top college in the country,” said Huerta. “We raise the bar and our kids are going above it.”<br/><br/>
                        Read the full story here: <a href="https://www.propublica.org/article/opportunity-gap-schools-data">https://www.propublica.org/ </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:</h6>
        <div class="row">
          <p phrasal-column="column-xs1 column-md2">
            From the data released so far, Florida stands out. Its results follow a decade-long initiative
            to broaden educational opportunity launched by then-governor Jeb Bush and his Education
            Commissioner, and now fellow former governor, Charlie Crist. <br/><br/>
            “The fact that some states have eliminated these disparities proves that if we make this a priority
            of policy it can be done,” said Pedro A. Noguera, an education professor at New York University.
            Other states show just how complex the problem is. While Maryland has been celebrated for
            the high percentage of students taking advanced classes, our analysis shows enrollment in
            such classes at high-poverty schools is much lower. Or take Mississippi: Richer and poorer
            schools there provide  <strong>roughly</strong> equal access, but that  <strong>masks</strong> the reality that very few students
            are enrolled in the classes overall. A Maryland official said enrollment of  <strong>low-income</strong> students
            has been increasing recently, while a spokesman from Mississippi’s department of education
            was not immediately available for comment.<br/><br/>
            While most experts agree about the value of giving students expanded opportunities, many
                <strong>cautions</strong> that offering advanced classes is not a solution on its own to deeper-rooted gaps in
            preparation and  <strong>achievement</strong>. They say students often need additional support.
            “We’re making AP a reform strategy in and of itself,” said Kristin Klopfenstein, director of the
            Education Innovation Institute at the University of Northern Colorado. “When it comes to a
            struggling  <strong>turnaround</strong> school, why in the world would you think that somehow plunking down
            an AP program would improve that school?”<br/><br/>
            
            But with the right support, even the most disadvantaged students can  <strong>thrive</strong>, according to Jose Huerta, the principal at Garfield High School in East Los Angeles.
          </p>
          <div class="col xs12 md8 col-center">
            <div class="u-checkbox-responsive">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_1">Education in the State of Florida.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">Equal access to education.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">State education.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt30">
        <hr/>
      </div>
      <div class="row mt30">
        <div class="col xs12 md6">
          <h6><strong class="u-textColor_4">•</strong>
            Choose “true”, “false” or “information not given”
          </h6>
          <p>Poor students always have a worse outcome than wealthy students.</p>
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox row ta-c" for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox row ta-c " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox row ta-c " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
        <div class="col xs12 md6">
          <h6><strong class="u-textColor_4">•</strong>
            Match the information given with one of the paragraphs from the reading exercise.
          </h6>
          <p>You cannot tell if a student in Florida is poor based on the course he or she does in school.</p>
          <div class="u-checkbox-responsive">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox row ta-c" for="selInput_7">1.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox row ta-c " for="selInput_8">2.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox row ta-c " for="selInput_9">3</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex-center align-items-center">
        <div class="col xs12 md6">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words form the paragraph.  <br/><br/>
            </h6>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex justify-center align-items-center"><span>backgrounds | surveys | opulent | stark | hold true | achieved</span></div>
            </div>
            <p class="lh25">In some states, there is a 
              <input class="c-input js-escribir" type="text"/> contrast between 
              <input class="c-input js-escribir" type="text"/> neighborhoods and
              the poorer neighborhoods when it comes to the quality of education. This does not 
              <input class="c-input js-escribir" type="text"/>
              for all states, 
              <input class="c-input js-escribir" type="text"/> have shown that some states have 
              <input class="c-input js-escribir" type="text"/> some level of
              equality when it comes to the education of students from all 
              <input class="c-input js-escribir" type="text"/> .
            </p>
          </div>
          <div class="row mt40">
            <h6><strong class="u-textColor_4">•</strong>
              Choose the correct answer. <br/><br/>
            </h6>
            <p>   The availability of advanced placement courses.</p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_10">To both rich and poor students is a good measure of equality</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">To both rich and poor students is not a good measure of equality.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12">To poor student and rich student is the same in all states.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c showTo-md"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_3_4.png" alt=""/></div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()" ng-show="s_actividad == 2 || s_actividad == 3"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()" ng-show="s_actividad == 3"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '720');</script>