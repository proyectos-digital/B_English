
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Read the following text and complete the activities that follow.</h5>
      <div class="row">
        <div class="c-flickity">
          <div class="row">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Page 1</button>
                <button class="c-flickity-button ">Page 2</button><span class="c-flickity--cell-total">2</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row mt20">
            <div class="c-flickity--cell h_auto">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1">
                  <div class="row">
                    <div class="col xs12 md6">
                      <h5 class="ta-c">What the Oscars can teach us about elections that work</h5>
                      <p class="ta-c"><i>Academy Award-winners are selected by algorithms that allow voters to rank candidates in order of preference, selecting backups if their first choices lose. What if we elected our leaders that way?</i></p>
                      <p class="ta-c">Rob Richie posted Feb 25, 2013</p>
                      <p class="ta-j"><strong>1</strong> With traditional <strong>governance</strong> in Washington <strong>grinding</strong> to a <strong>halt</strong> and with election
                        campaigns often shutting out alternative perspectives, a growing number of Americans
                        <strong>resent</strong> the <strong>constraints</strong> of our dominant two-choice, two-party voting system. It
                        contributes directly to political <strong>gamesmanship</strong> inside the Beltway, reinforces the
                        power of political <strong>insiders</strong> and restricts the impact of independent candidates and
                        voters because voters are discouraged from <strong>backing</strong> their preferred candidates when
                        not seen as “viable.”<br/>
                        So where can we turn for answers? Surprisingly,
                        part of the answer lies in Hollywood.<br/>
                        Starting with the 2009 Best Picture, the
                        Academy of Motion Pictures and the Producers
                        <img class="u-responsive-img w40 ml10 mt10  " src="unit_2/module_8/assets/images/act_3_1.png" alt="" align="right"/>
                        Guild of America have been using a better
                        voting method: ranked choice voting (RCV,
                        which is also called “instant runoff voting” and
                        “preferential voting”). It builds on the choice
                        voting rules used since the1930s to choose
                        nominees in nearly all categories. Thus, nearly
                        all Academy voters help play a role in selecting
                        the winners.<br/>
                        In 2009, the Academy decided to nominate
                        more than the typical five movies for Best
                        Picture. But with up to ten movies on the final
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j">
                        ballot, it wanted to make sure the final winner was representative of majority opinion
                        among Academy voters: with a simple <strong>plurality</strong> vote, a less popular movie could win
                        with as little as 12 percent support.<br/>
                        Enter ranked choice voting. You can see how RCV works in Fair Vote Minnesota’s short
                        video (below) that explains how the system works with a true “change” election. (It’s a
                        nifty educational tool for the use of RCV in the mayoral elections in Minneapolis and St.
                        Paul this fall.)<br/><br/>
                         <strong>2 Here's how it works:</strong><br/>
                        In the Best Picture election, Academy voters didn’t vote for just one movie. They gained
                        the power to rank the nine nominated movies from their favorite to least favorite in
                        order of preference, from one to nine. Those rankings were <strong>tallied</strong> according to an
                        “American Idol” kind of algorithm. Every voter had one vote, and their ballot never
                        counted for more than one movie at a time. But their rankings allowed them to help
                        elect a backup choice if their first choice couldn’t win.<br/>
                        With a field of nine strong movies that all had strong advocates, Argo almost certainly
                        was not the first choice of more than half the voters. As a result, lower rankings were
                        used in a series of “instant <strong>runoffs</strong>.”<br/>
                        In each round of counting, the movie with the fewest votes was eliminated, and that
                        movie’s <strong>backers</strong> had their votes added to the totals of their next ranked choice.
                        These instant runoffs continued until Argo won with a majority of the vote against
                        the remaining movies. You can see how it might have gone with this round-by-round
                        example from The Washington Post, which created a fun online tool allowing you to
                        rank the movies, then showed the results.<br/>
                        RCV <strong>ensures</strong> that the Best Picture Oscar won’t go to a movie that might lead in first
                        choices, but which most voters see as undeserving. Instead, a movie will need to do
                        well enough in first choices to stay in the running, but also keep building support
                        as weaker movies are eliminated. The winning movie will be more likely to be the
                        consensus choice.
                        
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell h_auto">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1">
                  <div class="col xs12 md6">
                    <h6><strong>3</strong> What Oscar Can Teach Us About Choosing Leaders. <br/></h6>
                    <p class="ta-j">Oscar elections are <strong>headline-grabbing</strong>, but what’s even more exciting is the prospect
                      of similar changes in the way we choose our elected leaders. There, RCV can have a truly
                      transformational impact, <strong>upholding</strong> majority rule and encouraging fair consideration of
                      third parties by addressing the <strong>spoiler</strong> problem (famously illustrated by Ralph Nader’s
                      2000 presidential campaign, which helped tip the race away from Al Gore).<br/><br/>
                    </p>
                    <p class="ta-j"><strong>4</strong> RCV is still a winner-take-all voting system. As a result, it doesn’t represent political
                      minorities as a fair voting system of proportional representation (for that reform, see
                      our fair voting plans). But RCV allows <strong>longshot</strong> candidates to make their case—and
                      to demonstrate their real levels of support—without results being <strong>skewed</strong> by fears of
                      spoiling elections.<br/>
                      RCV is a proven system, and has been used to elect Australia’s House of Representatives
                      for nearly a century. In 2007, Australian House races had an average of seven
                      candidates, including small parties like the Greens running in every district. With RCV,
                      no one complained about “spoilers.” <strong> Instead</strong>,
                      the Greens have increased their vote, gaining
                      more influence in the electoral process, and
                      with fair voting rules for the Senate, turning
                      that increased vote share into seats.<br/>
                      <img class="u-responsive-img w40 mr10 mt10  " src="unit_2/module_8/assets/images/act_3_2.png" alt="" align="left"/><br/>
                      <strong>5</strong> Here in the United States, cities electing
                      mayors with RCV include St. Paul and
                      Minneapolis in Minnesota; Oakland, San
                      Francisco, and two other California cities;
                      Maine’s largest city, Portland; and a few
                      other cities in Maryland, North Carolina, and
                      Colorado. Voters in Memphis, Sarasota, and
                      Santa Fe have approved it on the ballot and are
                      awaiting implementation. Some 60 colleges
                    </p>
                  </div>
                  <div class="col xs12 md6">
                    <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10  " src="unit_2/module_8/assets/images/act_3_3.png" alt="" align="right"/>
                      and universities now elect student leaders
                      with RCV, as do many large associations like
                      the American Political Science Association.<br/>
                      It’s only a matter of time before we see a
                      statewide win for RCV. One particularly strong
                      state effort is in Maine, where eight of the past
                      ten gubernatorial races were won with less
                      than half the vote. With Democrats finishing
                      third in the 2010 governor’s race and 2012
                      Senate race, a major party is getting a taste
                      of the “spoiler” <strong>epithet</strong> so often <strong>hurled</strong> at
                      minor parties. New legislation to adopt RCV
                      for governor and other state offices is backed
                      by dozens of state legislators from across the
                      spectrum.<br/>
                      Such advances will help us get over perhaps the biggest hurdle faced by advocates:
                      current voting machines not making it easy to implement RCV. Fortunately, the newest
                      paper-based systems are starting to add readiness to use RCV as an option. Once that’s
                      the norm, jurisdictions can debate RCV without uncertainty about how to implement it.
                      
                      Of course, RCV is not the only election reform that’s necessary; other ideas for fairer
                      elections are also generating energy and excitement. Efforts to <strong>overturn</strong> Citizens
                      United have breathed new life into campaign finance reform drives, the<strong> filibuster</strong>
                      rule in the Senate looks increasingly vulnerable, universal voter registration is gaining
                      growing support, and the National Popular Vote plan for president continues its stateby-state
                      progress toward effectively <strong>sidelining</strong> the Electoral College.<br/>
                      Change breeds change, and we believe the 2010s promise to be a decade of reform.
                      In this case, Hollywood is setting an example we all can follow.
                    </p>
                    <p>Read the story here: <a href="http://www.yesmagazine.org/people-power/if-it-s-good-enough-for-argo-it-s-good-enough-for-america">www.yesmagazine.org</a>
                      
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
      <h4>Answer the following question based on the text you have read.</h4>
      <div class="row mt20">
        <div class="col xs12 md10 col-center">
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:<br/><br/></h6>
            <p>
              RCV is still a winner-take-all voting system. As a result, it doesn’t represent political minorities as
              a fair voting system of proportional representation (for that reform, see our fair voting plans).
              But RCV allows <strong>longshot</strong> candidates to make their case—and to demonstrate their real levels
              of support—without results being <strong>skewed</strong> by fears of spoiling elections.<br/>
              RCV is a proven system, and has been used to elect Australia’s House of Representatives for
              nearly a century. In 2007, Australian House races had an average of seven candidates, including
              small parties like the Greens running in every district. With RCV, no one complained about
              “spoilers.” <strong>Instead</strong>, the Greens have increased their vote, gaining more influence in the electoral
              process, and with fair voting rules for the Senate, turning that increased vote share into seats.
            </p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
              <label class="c-Checkbox" for="selInput_1">The electoral system.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
              <label class="c-Checkbox " for="selInput_2">The Australian parliament</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
              <label class="c-Checkbox " for="selInput_3">Minority parties.</label>
              <input class="js-select" type="hidden" ng-model="valorinputa"/>
            </div>
          </div>
        </div>
        <div class="row mt20 mb20">
          <hr/>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/><br/></h6>
            <p>The RVC has is the perfect voting system.</p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
              <label class="c-Checkbox" for="selInput_4">True</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
              <label class="c-Checkbox " for="selInput_5">False</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
              <label class="c-Checkbox " for="selInput_6">Information not given</label>
              <input class="js-select" type="hidden" ng-model="valorinputb"/>
            </div>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.  <br/><br/></h6>
            <p>The RCV makes sure that the weaker movies are eliminated early from the Oscar.</p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
              <label class="c-Checkbox" for="selInput_7">1</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
              <label class="c-Checkbox" for="selInput_8">2</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
              <label class="c-Checkbox" for="selInput_9">3</label>
              <input class="js-select" type="hidden" ng-model="valorinputc"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the table below.  <br/><br/>
            </h6>
            <div Class="col xs12 md10 col-center">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex justify-center align-items-center u-textWhite"><span>longshot | skewed | hurled</span></div>
              </div>
            </div>
            <p>Pedro had no chance of winning his class president election, it was a 
              <input class="c-input js-escribir" type="text"/> but he decided to run anyway.
              
            </p>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> Choose the correct answer.   <br/><br/></h6>
            <p>RCV is used by...</p>
            <div class="row row-flex">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
              <label class="c-Checkbox" for="selInput_10">Some U.S. cities.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
              <label class="c-Checkbox " for="selInput_11">The Federal government.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
              <label class="c-Checkbox " for="selInput_12">No one. It is only an experiment.</label>
              <input class="js-select" type="hidden" ng-model="valorinputd"/>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>