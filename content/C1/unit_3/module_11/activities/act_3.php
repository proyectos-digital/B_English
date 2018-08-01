
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
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
          <div class="c-flickity--cell">
            <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1">
                  <div class="col xs12 md6">
                    <h5 class="ta-c">Science isn’t just for scientists—we can all take part</h5>
                    <h6 class="ta-c"><i>The internet and new technology are reviving the role citizens can play in documenting the world around us.</i></h6>
                    <p class="ta-c">Madeline Ostrander posted Feb 14, 2017</p>
                    <p class="ta-j"><strong>1</strong> After he moved to London in his early 20s, Luke Howard became obsessed with the
                      weather. Howard had a day job running a pharmacy business in the 1790s and early 1800s,
                      but he spent a lot of his <strong>spare</strong> time staring at the sky. He collected a set of <strong>makeshift</strong>
                      weather instruments—glass thermometers; a hygrometer (to measure moisture in the
                      air) <strong>cobbled</strong> together from a wire spring and a strip of whalebone; and a barometer
                      attached to an old astronomical clock that he bought <strong>secondhand</strong> and repaired himself.
                      He and his business partner, William Allen, started a science club of a dozen or so
                      members, all men, who met in each other’s houses to give talks about a range of subjects
                      like chemistry, astronomy, and mineralogy.<br/>
                      When he was 30, Howard presented to the
                      group three names he had come up with for
                      different types of clouds—cirrus (from the
                      <img class="u-responsive-img w40 ml10 mt10  " src="unit_3/module_11/assets/images/act_3_1.png" alt="" align="right"/>
                      Latin for “curl of hair”), cumulus (referring to
                      a pile), and stratus (a “horizontal sheet”). The
                      talk was a hit, and he published a version of the
                      lecture a year later in a science magazine. And
                      the names <strong>stuck</strong>: Howard’s cloud categories
                      are still used by professional meteorologists.<br/><br/>
                      <strong>2</strong> This was science in the late 18th and early
                      19th centuries—a buzzing world of nerds and
                      amateurs trying to document the workings
                      of the world in their spare time. It was less
                      
                      
                      
                    </p>
                  </div>
                  <div class="col xs12 md6">
                    <p class="ta-j pb30"><img class="u-responsive-img w40 ml10 mt10  " src="unit_3/module_11/assets/images/act_3_2.png" alt="" align="right"/>
                      an institution than a labor of love, like
                      sculpture or poetry. London was a kind of
                      <strong>hub</strong>, full of scientific societies and clubs—
                      they were like the <strong>maker faires</strong>, the do-ityourself
                      collectives, the hack-a-thons of the
                      Enlightenment. In the United States, there
                      was a <strong>flurry</strong> of interest in collecting plant
                      and animal specimens and documenting
                      the natural history of North America. The
                      barriers of the time kept certain people out
                      of science. (There were few scientists of color,
                      although women managed to push their way
                      into influential scientific circles in Europe and
                      America, and Black inventors made important
                      technological contributions in the United
                      States.) Still, the technology for making scientific observations was cheap, much was
                      unknown, and nearly anyone with the means available could make a major contribution.
                      Then, somewhere between the late 19th and mid-20th centuries, science <strong>took a</strong>
                      <strong>turn</strong>. As it became more powerful, sophisticated, complicated, and better funded,
                      it disappeared behind the walls of ivory towers and corporate labs. Since the 1970s,
                      support for science has become a <strong>partisan</strong> issue in the United States, as conservatives’
                      faith in science keeps declining. Fifty-eight percent of Europeans say they can’t trust
                      scientists because they are too influenced by corporate money. Science culture is now
                      elitist, say its <strong>detractors</strong>. Have we forgotten what science is actually for?<br/><br/>
                      <strong></strong> During the U.S. election campaign, some politicians and talking heads spoke as if
                      science were not a means of gathering knowledge but some kind of <strong>cabal</strong>.
                      Then-presidential candidate Donald Trump met with leaders of a discredited antivaccination
                      group and <strong>infamously</strong> called global warming a <strong>hoax</strong> “created by and for
                      the Chinese in order to make U.S. manufacturing non-competitive.”
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1 ">
                  <div class="col xs12 md6">
                    <p class="ta-j">
                      Matt Drudge, editor of the far-right Drudge Report, on Twitter accused the National
                      Hurricane Center of exaggerating Hurricane Matthew’s intensity, even as it killed more
                      than 1,000 people in Haiti. U.S. Rep. Lamar Smith from Texas used the House Committee
                      on Science, Space, and Technology to hurl unfounded accusations at the researchers of
                      the National Oceanic and Atmospheric Administration, accusing them of altering data.
                      If federal politicians <strong>wage war</strong>  on scientific institutions, can the public take ownership of
                      science again? There are signs that the internet and global technology are <strong>reviving</strong> the
                      role of citizens in documenting how the world around us is changing. Not to undermine
                      the knowledge of experts. Not to engage in some elitist project or define some new
                      kind of geekdom. But to build collective insight—millions of little observations about the
                      now-warming climate, the now-shrinking numbers of species of animals and plants, the
                      chemistry of air and oceans and minerals—that might just help us survive and adapt to
                      the next century.<br/><br/>
                      <strong>4</strong> Though many of the tools we associate with modern science emerged during the
                      Enlightenment, science itself is arguably as
                      old as human existence. Take, for example,
                      the fields of meteorology and climatology.
                      Indigenous people have kept oral histories
                      spanning thousands of years of past climates.
                      <img class="u-responsive-img w40 mr10 mt10 " src="unit_3/module_11/assets/images/act_3_3.png" alt="" align="left"/>
                      Written a few thousand years ago in India, the
                      Upanishads discussed the process of cloud
                      formation. In 1500 B.C., the Chinese engraved
                      weather data on bones. Aristotle wrote a book
                      called Meteorology in 350 B.C. that described
                      the hydrologic cycle.<br/>
                      But meteorology and climatology emerged
                      as serious scientific professions more
                      than a century after Howard named the
                      clouds, especially after these fields received
                      
                      
                      
                    </p>
                  </div>
                  <div class="col xs12 md6">
                    <p class="ta-j">
                      government funding during World War II. In the United States, the National Weather
                      Service has relied on citizen observers to track weather since the mid-19th century. But
                      once the study of the weather became institutionalized, meteorologists, climatologists,
                      and atmospheric scientists developed their own subcultures, their own publications and
                      meetings, and a kind of separate language, defined by jargon and technical concepts.<br/><br/>
                      <strong>5</strong> In the mid-20th century, scientists like Rachel Carson and Aldo Leopold popularized the
                      findings of the emerging field of ecology. Public concern about the environment <strong>spurred</strong>
                      the passage of America’s most important environmental laws and the establishment
                      of the Environmental Protection Agency, which functions as both a <strong>watchdog</strong> and a
                      scientific agency monitoring the water and the air for chemicals that harm public health
                      and ecosystems. The National Park Service turned to ecosystem science to redefine its
                      work as the nation’s lead conservation agency.<br/>
                      NASA took on the role of atmospheric monitoring, and meteorological research
                      surged forward. Satellites floated overhead to capture images of land and cloud and
                      ocean; supercomputers spun three-dimensional models of weather moving across
                      the entire globe.
                      
                    </p>
                    <p class="ta-j pb20">Read the full story here:<a href="http://www.yesmagazine.org/issues/science/science-doesnt-have-to-be-elitist-we-can-take-it-back-20170214">www.yesmagazine.org </a>
                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row align-items-center row-flex">
        <div class="col xs12 md6">
          <h5>Complete the activities based on the text you have read.</h5>
          <div class="row">
            <p><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/><br/>
              During the U.S. election campaign, some politicians and talking heads spoke as if science were
              not a means of gathering knowledge but some kind of <strong>cabal</strong>. Then-presidential candidate
              Donald Trump met with leaders of a discredited anti-vaccination group and <strong>infamously</strong> called
              global warming a <strong>hoax</strong> “created by and for the Chinese in order to make U.S. manufacturing
              non-competitive.” Matt Drudge, editor of the far-right Drudge Report, on Twitter accused the
              National Hurricane Center of exaggerating Hurricane Matthew’s intensity, even as it killed more
              than 1,000 people in Haiti. U.S. Rep. Lamar Smith from Texas used the House Committee
              on Science, Space, and Technology to hurl unfounded accusations at the researchers of the
              National Oceanic and Atmospheric Administration, accusing them of altering data.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_1">Chinese and U.S. political battles.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">The war against Science.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">The infamy of Donald Trump.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Choose “true”, “false” or “information not given”  <br/><br/>
              The birth of Science was in the early 1800s with the publishing of a lecture on cloud types.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_5">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_6">Information not given.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Match the information given with one of the paragraphs from the text.  <br/><br/>
              The age of science.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">2.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">5.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">4.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words from the paragraph. <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>partisan | watchdog | wetractors | took a turn | wage war | spur</span></div>
            </div>
            <p class="mt20">The early work of Luke Howard came to 
              <input class="c-input js-escribir" type="text"/> interest in what we consider today as
              science. However, many of its 
              <input class="c-input js-escribir" type="text"/> describe science and many of its studies as a hoax,
              claiming that scientists form part of elitist groups funded by big corporations. In the U.S. for
              example, science is a 
              <input class="c-input js-escribir" type="text"/> subject, which has caused conservatives to 
              <input class="c-input js-escribir" type="text"/> on the
              field of study and its institutions.
              
            </p>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the table below.  <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>detractor | secondhand | hoax | flare | hub</span></div>
            </div>
            <p class="mt20">Recent images of Big Foot are said to be nothing but a  
              <input class="c-input js-escribir" type="text"/> .
              
            </p>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Choose the correct answer.   <br/><br/>
               In light of the work done by Luke Howard...
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox row ta-c" for="selInput_10">Climatology, as a field of science, started to experience development.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">The field of science began to gain serious recognition.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12">The United States institutionalized professions having to do with the study of the weather.</label>
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
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '680');</script>