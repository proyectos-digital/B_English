
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c">Read the following extract and choose the correct answers.</h5>
      <div class="row">
        <div class="c-flickity">
          <div class="row mt10 mb30">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Exercises 1</button>
                <button class="c-flickity-button ">Exercises 2</button><span class="c-flickity--cell-total">2</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row mt50-sm ">
            <div class="c-flickity--cell">
              <div class="row" style="height:580px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1">
                    <div class="row">
                      <div class="col xs12 md6">
                        <h5 class="ta-c">Call for submissions: Science for the public good<br/><br/></h5>
                        <p class="ta-j">
                          If we think of science as curiosity in thoughtful action about the world and how it works,
                          then all humans are born scientists. How can we push that curiosity even further into
                          the public realm and turn it into a tool for advocacy and social change?<br/><br/>
                          Some subjects we’d like to explore in the Spring 2017 issue of YES!:<br/><br/>
                          <strong>Scientists as advocates:</strong> At the Paris climate talks we heard scientists raising their
                          voices in defense of climate science and then going further—advocating for policies
                          that could save the planet. What is the history and reasoning for keeping science out
                          of advocacy in the first place? How can scientists become even greater allies in activism
                          around climate and environmental justice?<br/><br/>
                          <strong>Every person a scientist:</strong> There are some powerful examples of citizen-led sciencebased
                          activism; the water poisoning in Flint,
                          Michigan, is one example. Public Lab teaches
                          people to investigate environmental concerns
                          using inexpensive DIY techniques. Any impacts
                          to report from their work? Crowdsourced
                          research on animal migration shifts and sea
                          <img class="u-responsive-img w40 ml10 mt10" src="unit_3/module_11/assets/images/test_1_1.png" alt="" align="right"/>
                          changes in coastal areas—how are citizens
                          engaging more as students and caretakers
                          of their physical world? Who are the citizen
                          scientists doing amazing work?<br/><br/>
                          <strong>Overcoming bad history:</strong> For many
                          communities of color, scientific research
                          has been something done to them, not for
                          them or by them. How can communities
                          and researchers overcome a history of
                          
                          
                          
                          
                        </p>
                      </div>
                      <div class="col xs12 md6">
                        <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10" src="unit_3/module_11/assets/images/test_1_2.png" alt="" align="right"/>
                          exclusion and concerns about unethical
                          research and find a way forward as partners?
                          The Community-Based/Tribally-Based
                          Participatory Research (CBPR/TPR) model
                          used at University of Washington, where
                          the researchers worked with the tribes, may
                          offer a new paradigm.<br/><br/>
                          <strong>Your DNA is everywhere:</strong> Inexpensive
                          genetic testing is allowing people to learn
                          more about their ancestry. What implications
                          does this testing have for our understanding
                          of racial and ethnic identity—and what does
                          it mean in the struggle for racial justice? And
                          the explosion in available genetic information,
                          data that can offer us new insights about health and genetics that could potentially
                          benefit many or be a tool for corporate instead of public gain—what are the ethics?
                          Who owns the data? What’s up with the big Iceland genetics project to decode DNA
                          for a massive population? What can we learn from that experience about the politics
                          of privacy in this new era?<br/><br/>
                          <strong>Corporations out of science:</strong> How do we make sure publicly funded research
                          benefits the public? When drug companies make buckets of money off pricey drugs
                          that were developed initially because of publicly funded research, something’s wrong.
                          But there may be a solution: National Institutes of Health can shorten the wait for
                          generic versions of drugs—if they can find the political will. How do we solve the “other”
                          drug money problems—drug companies funding their own research and distorting
                          outcomes to maximize profits? How can we ensure public-funded science is done in
                          the public interest—and reflects the needs and health concerns of a broad range of
                          people? Are there ethical models for corporate-funded research?
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row" style="height:580px; overflow-x: hidden; overflow-y:auto;">
                <div class="row row-flex align-items-center justify-center">
                  <div class="col colxs12 md6">
                    <div class="c-cardGreen">
                      <div class="c-cardGreenContent u-textColor_1">
                        <div class="row">
                          <p class="ta-j"><img class="u-responsive-img w40 mr10 mt10" src="unit_3/module_11/assets/images/test_1_3.png" alt="" align="left"/>
                            <strong>Strengthening the commons:</strong> When
                            publicly funded research is published in
                            expensive journals, people not connected to
                            wealthy institutions can’t afford access. Now
                            scientists are pushing back with open-source
                            publishing. What are the intellectual property
                            implications? What about the work we never
                            get to learn about—the failures and the “no
                            significant results”? In science, these are as
                            important as the successes when it comes to
                            advancing knowledge. New journals are offering
                            scientists a place to report these “failures.”<br/><br/>
                            We’re looking for stories that address
                            useful solutions at all levels, from policies to
                            communities to individuals. We’re especially interested in stories that show creative
                            solutions already in place. Do you have an idea for a reported feature, deeply researched
                            think piece, or personal essay that belongs in this issue of YES! Magazine? Send pitches
                            and leads to science@yesmagazine.org.
                          </p>
                          <p class="ta-l">Read the full story here:<a href="http://www.yesmagazine.org/people-power/call-for-submissions-science-for-the-public-good-20160826">www.yesmagazine.org/ </a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col colxs12 md5 offset-md1 ta-c">
                    <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:  <br/> <br/>
                      <strong>Every person a scientist:</strong> There are some powerful examples of citizen-led science-based
                      activism; the water poisoning in Flint, Michigan, is one example. Public Lab teaches people to
                      investigate environmental concerns using inexpensive DIY techniques. Any impacts to report
                      from their work? Crowdsourced research on animal migration shifts and sea changes in coastal
                      areas—how are citizens engaging more as students and caretakers of their physical world?
                      Who are the citizen scientists doing amazing work?
                      
                    </p>
                    <div class="row">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                      <label class="c-Checkbox w100 ta-l " for="selInput_1">Environmental concerns.</label>
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                      <label class="c-Checkbox w100 ta-l " for="selInput_2">Activism by everyday-people.</label>
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                      <label class="c-Checkbox w100 ta-l " for="selInput_3">Scientific techniques.</label>
                      <input class="js-select" type="hidden"/>
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
        <div class="col xs12 md6">
          <div class="xs12 md11 col-center">
            <h6><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”.</h6>
            <p class="ta-j mt30">African-American communities tend not to form an integral part of the understanding or solutions to issues affecting them.</p>
            <div class="u-responsive_check">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
              <input class="js-select" type="hidden"/>
            </div>
            <h6 class="mt30"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
            <p class="ta-j">Development of science in favor of public interests</p>
            <div class="u-responsive_check">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_7">2.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_8">4.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_9">6.</label>
              <input class="js-select" type="hidden"/>
            </div>
            <div class="row mt30">
              <h6><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>generic | will | ethics | ancestry | shifts</span></div>
              </div>
              <p class="mt30">Because of advances in DNA testing, people can now uncover information about their genetic 
                <input class="c-input js-escribir" type="text"/>.
              </p>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="xs12 md11 col-center">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong>
                Fill in the summary using the words from the paragraph. <br/><br/>
              </h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>engage | science-based | ally | overcome | realm | ethics</span></div>
              </div>
              <p class="mt30">The 
                <input class="c-input js-escribir" type="text"/>. of science has become a tool that has brought about social change and benefits
                for humanity itself. One of the key areas that is being pushed is to use science as an 
                <input class="c-input js-escribir" type="text"/>.
                in the provision of science-based knowledge for the average citizen. With this idea in mind,
                ordinary people could 
                <input class="c-input js-escribir" type="text"/>. certain problems experienced in their communities or
                
                <input class="c-input js-escribir" type="text"/>.in their possible solutions.
                
                
              </p>
            </div>
            <div class="row">
              <h6 class="mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer.</h6>
              <p class="ta-j">With publicly-funded research...</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">The general public will be able to access a wider range of information.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">Scientists are given a voice to fight against social injustice.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">Those who are privileged can access the information once it is in particular magazines.</label>
              <input class="js-select" type="hidden"/>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next','580');
  
</script>
