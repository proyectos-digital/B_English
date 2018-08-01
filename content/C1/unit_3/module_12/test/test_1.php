
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
              <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1">
                    <div class="row">
                      <div class="col xs12 md6">
                        <h5 class="ta-c">The senate just voted to keep big money in politics. Three reasons to celebrate anyway</h5>
                        <p class="ta-c"><i>The fact that the issue reached the Senate floor is a huge victory for the American people, who overwhelmingly say they want something done about corporate influence in elections.</i></p>
                        <p class="ta-c">Fran Korten posted Sep 11, 2014</p>
                        <p class="ta-j">
                          It was no surprise that the Senate’s proposed “Democracy for All” amendment to the
                          constitution did not pass on Thursday. It takes 67 votes to pass an amendment in the
                          Senate. So Thursday’s vote of 54 in favor and 42 against spelled defeat. But the vote
                          represents a giant leap on the road to overturning the Supreme Court’s Citizens United
                          decision, which opened the floodgates to money in elections. Here are three reasons
                          for advocates to celebrate.<br/><br/>
                          <strong>1. The vote demonstrates the power of grassroots activism</strong>.<br/>
                          The Senate’s 54 to 42 on the “Democracy for
                          All” amendment was widely attributed to the
                          activism in towns, cities, and states across
                          the country. Since January 21, 2010, when
                          <img class="u-responsive-img w40 mr10 mt10" src="unit_3/module_12/assets/images/test_1_1.png" alt="" align="left"/>
                          the Supreme Court handed down its decision
                          in Citizens United, 16 states and more than
                          550 towns and cities have passed resolutions
                          recommending a constitutional amendment.
                          Advocates are undaunted by the Senate’s
                          failure to pass the amendment. John Bonifaz,
                          president of the nonprofit Free Speech for
                          People, noted, “It’s just a matter of time. We
                          will get the 28th Amendment.”
                          
                        </p>
                      </div>
                      <div class="col xs12 md6">
                        <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10" src="unit_3/module_12/assets/images/test_1_2.png" alt="" align="right"/>
                          <strong>2. It puts pressure on politicians across party lines</strong>.<br/><br/>
                          At the national level, regulating money in
                          politics is a highly partisan issue. Not a
                          single Republican voted for the proposed
                          amendment, introduced by Democrat
                          Tom Udall of New Mexico. But among the
                          public, that partisan division disappears.
                          The public advocacy group Public Citizen
                          recently released a poll conducted by leading
                          Democratic and Republican pollsters.
                          The numbers showed that Republicans,
                          Democrats, and Independents all share
                          disgust at the outsized influence of moneyed
                          interests in our politics. Of the sample of
                          800 “likely voters,” 61 percent opposed the
                          Citizens United Decision, including 58 percent of Republicans. A whopping 78 percent
                          (including 71 percent of Republicans) said reducing the influence of money in politics
                          and elections was important. In response to arguments that restricting money in
                          politics and elections is an assault on free speech, just 25 percent (including 38 percent
                          of Republicans) agreed. The Senate vote puts 100 senators on record. Those voting
                          against the amendment will need to explain their actions to their constituents.<br/><br/>
                          <strong>3. It provides language that empowers the states and defines corporations as artificial legal entities</strong>.
                          The proposed amendment specifies that not only the Congress but also the states may
                          regulate “the raising and spending money in politics.” If this version of the amendment
                          were to become law, it would mean that states would be able to move ahead, regardless
                          of stalemates at the national level. It seems likely that many states would do so. Already,
                          16 of them have recommended a constitutional amendment to restrict money in politics.
                          
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
                <div class="row row-flex align-items-center justify-center">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent u-textColor_1">
                      <div class="row">
                        <div class="col colxs12 md6 ta-c">
                          <p class="ta-j">
                            The amendment also defines the nature of a corporation. Currently, nowhere in the
                            Constitution or in any of its 27 amendments does the word “corporation” appear. The
                            Senate’s amendment would introduce the word for the first time and in doing so define the
                            corporation as an artificial legal entity. The amendment states: Congress and the States
                            … may distinguish between natural persons and corporations or other artificial entities
                            created by law, including prohibiting such entities from spending money to influence
                            elections. Most of us have never doubted that humans are different from corporations.
                            But all the way up to the Supreme Court, some judges have treated corporations as though
                            they have the same constitutional rights granted to natural persons. If this amendment
                            eventually passes, the distinction between natural persons and corporations would be
                            written into the highest law of the land.<br/>
                            Not everyone feels the amendment goes far enough. While the Senate’s “Democracy for
                            All” amendment is backed by many organizations working to get big money out of politics,
                            the advocacy group Move to Amend wants wording that specifies that corporations do
                            not have constitutionally protected rights. Senator Jon Tester, a Democrat from Montana,
                            has introduced a “People’s Rights” amendment
                            (SJR-18), to do just that. It is meant as a
                            companion to the Udall amendment just voted
                            <img class="u-responsive-img w40 mr10 mt10" src="unit_3/module_12/assets/images/test_1_3.png" alt="" align="left"/>
                            on, but so far it has not garnered the same
                            level of support. In the House, a parallel pair
                            of amendments have been introduced by Jim
                            McGovern, a Democrat from Massachusetts.<br/>
                            No one expects two-thirds of the House to
                            pass an amendment in the short term. But the
                            pressure is on. As The New York Times stated
                            in an op-ed about the issue, a constitutional
                            amendment “…is a last resort to fix a grave civic
                            problem. But the backers of this amendment
                            recognize that the nature of American
                            democracy is at stake.”<br/>
                            
                          </p>
                        </div>
                        <div class="col colxs12 md6 ta-c">
                          <p class="ta-j"><img class="u-responsive-img w40 mr10 mt10" src="unit_3/module_12/assets/images/test_1_4.png" alt="" align="left"/>
                            The framers of the Constitution made sure
                            it would not be easy to pass a constitutional
                            amendment. They specified that two-thirds
                            of the House and Senate must vote for one,
                            which then must be ratified by three-fourths of
                            the state legislatures. And we know moneyed
                            interests do not want their power curtailed
                            and will fight the amendment tooth and nail.
                            So there is a long road ahead.<br/>
                            The struggle will not be led by the Senate. It
                            will be led by the people. I like to remember
                            that the fight for women’s right to vote began
                            at Seneca Falls in 1848. The 19th Amendment
                            giving women the franchise passed in 1920. It
                            took 72 long years. In an age of instant mass
                            communications, this campaign is moving far faster than that one. But it’s helpful to keep
                            in mind that we’re just over four years down the road. We’ve come a long way. Time to
                            take a moment to celebrate.
                          </p>
                          <p class="ta-l">Read the full story here:<a href="http://www.yesmagazine.org/people-power/senate-voted-to-keep-big-money-in-politics-three-reasons-to-celebrate" target="blank">www.yesmagazine.org/ </a>
                            
                          </p>
                        </div>
                      </div>
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
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:  <br/> <br/>
            The proposed amendment specifies that not only the Congress but also the states may
            regulate “the raising and spending money in politics.” If this version of the amendment were to
            become law, it would mean that states would be able to move ahead, regardless of stalemates
            at the national level. It seems likely that many states would do so. Already, 16 of them have
            recommended a constitutional amendment to restrict money in politics.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">The power of money in politics.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">Political stalemate.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">Congress versus States.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The “Democracy For All” amendment was unsuccessful as a result of grassroots activism.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text. <br/> <br/>
            Finding a legal distinction.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">9.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">7.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">5.</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words from the paragraph.  <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>leap | attribute | stalemate | failure | pass | curtail</span></div>
            </div>
            <p>The attempt by people activism across the country to pass a vote to 
              <input class="c-input js-escribir" type="text"/> the influence of
              money in the American democratic process turned out to be a 
              <input class="c-input js-escribir" type="text"/> given that the votes
              needed for its passing were insufficient. In spite of this, advocates for the amendment see a
              reason to celebrate, stating that the votes signify a successful 
              <input class="c-input js-escribir" type="text"/> towards challenging the
              practice of money in elections.
              
            </p>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the table below. <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>constituent | stalemate | amendment | assault | record</span></div>
            </div>
            <p>The border negotiations ended in a 
              <input class="c-input js-escribir" type="text"/> between both countries.
              
            </p>
          </div>
          <div class="row">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer.<br/><br/>
              The fight for women’s rights is mentioned...
              
            </p>
          </div>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">So as to draw comparisons between different groups of individuals and their struggles.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">To show that success is possible regardless of how long it takes.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">To show that history will always be repeated.</label>
            <input class="js-select" type="hidden"/>
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
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next','680');
  
</script>
