
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
          <div class="row ">
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen">
                  <div class="c-cardGreenContent u-textColor_1">
                    <div class="col xs12 md6">
                      <h5 class="ta-c">Organizing in the Internet Age</h5>
                      <h6 class="ta-c">How online activism can help us understand how real change is made.</h6>
                      <p class="ta-c">Mark Engler posted Nov 02, 2010</p>
                      <p class="ta-j"><strong>1</strong>. The Internet is no <strong>substitute</strong> for person-to-person organizing. But it is a tool that
                        can be used by activists. And it is potentially a rather powerful tool.<br/>
                        This is the not-so-<strong>novel</strong> conclusion I presented recently when writing about “The
                        Limits of Internet Organizing.” The piece was a follow-up on a much-discussed article by
                        Malcolm Gladwell in the New Yorker. I was generally sympathetic to Gladwell, but many
                        others haven’t been. His article has sparked widespread conversation and criticism in
                        many corners of the Internet.<br/>
                        Based on the discussions I’ve had with people on this topic, I think we need to clarify
                        some <strong>terms</strong>. For those who believe that social movements are the <strong>bedrock</strong> of social
                        change, it is important to come to some
                        agreement about what “organizing” is.<br/>
                        <img class="u-responsive-img w40 ml10  " src="unit_2/module_7/assets/images/act_3_1.png" alt="" align="right"/>
                        When I am talking about organizing, I am
                        referring to activity that mobilizes collective
                        action around an <strong>issue</strong> with the goal of
                        building popular power—the power of social
                        movements and democratic constituencies,
                        as opposed to that of established elites
                        or moneyed interests. Ideally, as the word
                        implies, organizing leaves behind some level
                        of social movement organization.<br/><br/>
                        <strong>2</strong> I am not trying to reinvent the wheel here or
                        make up some new, official definition. A basic
                        <strong>tenet</strong> of understanding social movements
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j">
                        is to distinguish the work of organizing from that of, say, social service. The two
                        are different things. Likewise, there are lots of other <strong>pursuits</strong> that might count as
                        “activism”—<strong>broadly</strong> understood as actions which engage a person in issues of public
                        significance—that don’t fit into a narrower understanding of “organizing.”<br/>
                        Aaron Schutz offers a more <strong>in-depth</strong> discussion of what organizing is and isn’t in
                        his “Core Dilemmas of Community Organizing” series at OpenLeft. Schutz operates
                        within a pretty strict Alinskyite <strong>framework</strong>, so there are some movement-building
                        activities that he does not count as “community organizing” that I would include within
                        the scope of what I am addressing. But he makes some good general distinctions.<br/><br/>
                        
                        <strong>3</strong> In short: giving out food at a soup kitchen is not organizing. Filing a lawsuit against a
                        racist <strong>slumlord</strong> or an exploitative corporation is not organizing. Making environmentally
                        conscious lifestyle choices is not organizing. Running for office is not organizing.
                        And education or raising public awareness, <strong>in and of itself</strong>, is not organizing. These
                        things might broadly be considered “activism,” but by themselves they do not produce
                        social movements.<br/>
                        That is not to say that any of these are bad things. In some cases, they can be vital.
                        Nor am I trying to be <strong>holier than thou</strong> on this point. As a writer, I would certainly not
                        call myself an organizer. I hope that my work can be helpful to social movements and
                        to those who are doing the <strong>rubber-meets-the-road</strong> work of building them, but my
                        writing by itself is not doing that. Again, if you believe that such movements are the
                        essential ingredient for progressive social change, it is important to make the distinction.
                        So how does the Internet fit into all this?<br/><br/>
                        
                        <strong>4</strong> There’s obviously a lot of online activity (Facebook status updates, online petitions)
                        that does not qualify as social movement organizing. To the extent that people believe
                        these things are sufficient to produce social change, I think they are quite problematic.
                        To the extent that people <strong>harness</strong> these activities in pursuit of actual organizing,
                        I think they can be much more helpful.
                        
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
                      <p class="ta-j">Consider three examples that illustrate a range of online <strong>endeavors</strong>—and that show
                        widely varying potentials.<br/>
                        First, there is the story in Gladwell’s article of how one person used Internet networking
                        to retrieve a lost phone.<br/>
                      </p>
                      <p class="ta-j"><strong>5</strong> The bible of the social-media movement is Clay Shirky’s Here Comes Everybody. Shirky,
                        who teaches at New York University, sets out to demonstrate the organizing power of
                        the Internet, and he begins with the story of Evan, who worked on Wall Street, and his
                        friend Ivanna, after she left her smartphone, an expensive Sidekick, on the back seat
                        of a New York City taxicab. The telephone company transferred the data on Ivanna’s
                        lost phone to a new phone, whereupon she and Evan discovered that the Sidekick was
                        now in the hands of a teenager from Queens, who was using it to take photographs of
                        herself and her friends.<br/>
                        
                        When Evan emailed the teenager, Sasha, asking for the phone back, she replied that his
                        “white ass” didn’t deserve to have it back. Miffed, he set up a Web page with her picture
                        and a description of what had happened. He
                        
                        forwarded the link to his friends, and they
                        forwarded it to their friends. Someone found
                        the MySpace page of Sasha’s boyfriend, and a
                        
                        link to it found its way onto the site. Someone
                        found her address online and took a video of
                        <img class="u-responsive-img w40 mr10 mt10" src="unit_2/module_7/assets/images/act_3_2.png" alt="" align="left"/>
                        her home while driving by; Evan posted the
                        video on the site. The story was picked up
                        by the news filter Digg. Evan was now up to
                        ten e-mails a minute. He created a bulletin
                        board for his readers to share their stories,
                        but it crashed under the weight of responses.
                        Evan and Ivanna went to the police, but the
                        police filed the report under “lost,” rather than
                        “stolen,” which essentially closed the case. “By
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10  " src="unit_2/module_7/assets/images/act_3_3.png" alt="" align="right"/>
                        this point millions of readers were watching,”
                        Shirky writes, “and dozens of <strong>mainstream</strong>
                        news outlets had covered the story.” Bowing
                        to the pressure, the N.Y.P.D. reclassified the
                        item as “stolen.” Sasha was arrested, and Evan
                        got his friend’s Sidekick back.<br/>
                        While there are some interesting aspects to
                        this type of networking, Gladwell correctly
                        notes that examples along these lines—“things
                        like helping Wall Streeters get phones back
                        from teenage girls”—do not represent social
                        movement organizing that challenges status
                        quo power relations.
                      </p>
                      <p class="ta-j">Read the full story here:<a href="http://www.yesmagazine.org/people-power/organizing-in-the-internet-age">https://www.propublica.org/ </a>
                        
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
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <h5>Answer the following question based on the text you have read.</h5>
          <div class="row">
            <p class="ta-j"><strong class="u-textColor_4">•</strong>
              Choose the most appropriate heading for the following excerpt:<br/><br/>
              There’s obviously a lot of online activity (Facebook status updates, online petitions) that does
              not qualify as social movement organizing. To the extent that people believe these things are
              sufficient to produce social change, I think they are quite problematic. To the extent that people
              harness these activities in pursuit of actual organizing, I think they can be much more helpful.
              Consider three examples that illustrate a range of online endeavors—and that show widely
              varying potentials.<br/>
              First, there is the story in Gladwell’s article of how one person used Internet networking to
              retrieve a lost phone.<br/>
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_1">The use of Internet networking.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">Social movement organizing.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">The problems related to social change.</label>
              <input class="js-select" type="hidden" ng-model="valorinputa"/>
            </div>
          </div>
          <div class="row mt30">
            <p class="ta-j"><strong class="u-textColor_4">•</strong>
              Choose “true”, “false” or “information not given”.   <br/><br/>
              According to the author, social service and social movement organizing are largely related.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_4">True</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_5">False</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_6">Information not given</label>
              <input class="js-select" type="hidden" ng-model="valorinputb"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Match the information given with one of the paragraphs from the text.  <br/><br/>
              The potentials of the internet.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">2</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">5</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">1</label>
              <input class="js-select" type="hidden" ng-model="valorinputc"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words form the paragraph.  <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent row-flex justify-center u-textWhite"><span>issue | term | substitute | novel | bedrock</span></div>
            </div>
            <p class="ta-j">
              The internet is an effective tool that can be used by activists, but which cannot act as a
              
              <input class="c-input js-escribir" type="text"/> for one on one organizing. Firstly, there ought to be a clarification of the
               
              <input class="c-input js-escribir" type="text"/> “organizing” before considering it as the 
              <input class="c-input js-escribir" type="text"/>  of social change. Organizing has to do with
              the mobilization of collective action concerning an 
              <input class="c-input js-escribir" type="text"/> so as to gain popular power.
              
            </p>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the table below.  <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex justify-center u-textWhite"><span>broadly | mainstream | endeavor | harness | tenet | slumlord</span></div>
            </div>
            <p>The fans of 
              <input class="c-input js-escribir" type="text"/> social media are constantly creating memes.
              
            </p>
            <div class="row mt30">
              <p><strong class="u-textColor_4">•</strong>
                Choose the correct answer.   <br/><br/>
                Clay Shirky’s ‘Here Comes Everybody’ shows...
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
                <label class="c-Checkbox row ta-c" for="selInput_10">How the Sidekick can be used to take great selfies.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
                <label class="c-Checkbox row ta-c " for="selInput_11">How the internet can be used as a means of organization.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
                <label class="c-Checkbox row ta-c " for="selInput_12">How the internet can be used to organize social services.</label>
                <input class="js-select" type="hidden" ng-model="valorinputd"/>
              </div>
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
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '720');</script>