
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_2" ng-init="s_actividad = 1">
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
                        <h5 class="ta-c">The Wall Street money machine Margin Call: A small movie unveils big truths about wall street</h5>
                        <p class="ta-c">by Jake Bernstein<br/>ProPublica, Nov. 23, 2011, 6 a.m</p>
                        <p class="ta-j"><strong>1</strong> J.C. Chandor has embraced Rahm Emanuel’s dictum “never let a serious crisis go to
                          waste.” The 37-year-old writer and director used the financial crisis as a springboard
                          to create the most insightful Wall Street movie ever filmed. Margin Call captures a day
                          in the life of a Lehman Brothers-like bank as it scrambles to avoid falling into the first
                          cracks of the financial crisis. Briskly paced and marvelously acted, the movie reveals
                          how large financial institutions operate and the motivations of the people who work
                          within them.<br/><br/>
                          <strong>2</strong> Margin Call should not be confused with journalism. It is not a precise overlay of
                          the financial crisis. You’ll never hear the words collateralized debt obligations uttered
                          in the movie. As the reporting I did with my colleague Jesse Eisinger showed, the Wall
                          Street behavior that helped create the financial crisis was often much worse than what’s
                          depicted in the movie. Chandor isn’t looking for villains or lengthy explanations. He’s
                          mining deeper truths than the intricacies of credit default swaps. The societal costs
                          of high finance, the power of self-rationalization, and the easy embrace of personal
                          corruption is his terrain.<br/>
                          As reporters covering the beat know, Wall Street is a reluctant participant in introspection.
                          Journalists investigating the Street have to pierce a code of omertà, borne of the fear
                          of lawsuits and federal investigations. No one wants to have the reputation of being a
                          snitch in an industry where hiring and bonuses are based on relationships as much
                          as quarterly results. The truth is even more tightly held when it hides the origins of
                          financial disaster, but even in the best of times, these are not, by nature, navel gazers.
                          Traders and market makers are like sharks, always wanting to move forward, onto the
                          next deal. There is no percentage in looking back.
                          
                          
                        </p>
                      </div>
                      <div class="col xs12 md6">
                        <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10" src="unit_2/module_8/assets/images/self_2_1.png" alt="" align="right"/>
                          <strong>3</strong> All you need to know about the moral
                          universe Margin Call inhabits is on display in
                          the opening scene of the movie. The downturn
                          has begun. The firing squad -- represented
                          by two women in identical business suits
                          -- arrives on the trading floor trailed by
                          underlings carrying cardboard boxes to cart
                          away personal effects. When they come into
                          view, a series of swift reactions plays across
                          the face of Will Emerson, a senior trader acted
                          brilliantly by Paul Bettany. First fear. Then
                          dismay. And finally, relief and dismissal. After
                          80 percent of the floor is axed, Emerson’s
                          boss, Sam, a wan Kevin Spacey, gives a pep
                          talk to the traders left standing. “They were
                          good. You are better. Now they are gone.
                          They are not to be thought of again.”<br/>
                          Among the casualties is the risk manager for the trading group, Eric Dale, played by
                          Stanley Tucci. On the way, out the door, Dale tells his young protege, Peter Sullivan,
                          that he has been working on something important. As the elevator closes, he hands
                          Sullivan a zip drive and says cryptically, “Be careful.”<br/><br/>
                          <strong>4</strong> Sullivan, played by Zachary Quinto, who also helped produce the movie, waits until
                          the office clears for the night and then dives into the figures. To his horror, he discovers
                          the bank is massively overleveraged. If trends continue, projected losses are much
                          greater than the value of the firm. Upon learning how dire the situation has become,
                          the CEO John Tuld, portrayed by a scene-chewing Jeremy Irons, says, “So what you are
                          telling me is that the music is about to stop and we are going to be left holding the
                          biggest bag of odorous excrement ever assembled in the history of capitalism.”
                          
                          
                          
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
                <div class="col colxs12 md6">
                  <div class="c-cardGreen">
                    <div class="c-cardGreenContent u-textColor_1">
                      <div class="row">
                        <p class="ta-j">
                          Sullivan is the questioning heart of Margin Call. He has a doctorate in engineering with
                          a speciality in propulsion -- literally a rocket scientist. And like so many of the best and
                          brightest of his generation, he turned to Wall Street, where Chandor clearly believes
                          his gain is society’s loss. When one of his superiors asks Sullivan why he has forsaken
                          engineering, he responds: “It’s all just numbers really, just changing what you are adding
                          up, and to speak freely, the money here is considerably more attractive.”
                          Sullivan operates in the constricted space of the Wall Street risk manager. Risk managers
                          and accountants are among the few who actually know what the numbers mean. They
                          see the whole picture. It’s a running joke through the movie that Sullivan’s bosses, right
                          up to the CEO, don’t understand the financial wizardry behind the products they make
                          and sell. When confronted with Sullivan’s analysis, Sam says, “Oh Jesus, you know I can’t
                          read these things. Just speak to me in English.”<br/><br/>
                          <strong>5</strong> The risk manager is not in sales, which is the heart and soul of the institution. He
                          or she only offers recommendations. Throughout Margin Call there are a number of
                          <img class="u-responsive-img w40 mr10 mt10" src="unit_2/module_8/assets/images/self_2_2.png" alt="" align="left"/>
                          references to warnings unheeded. And indeed,
                          in the real world, the success of investment
                          
                          banks at subverting their risk management
                          rules correlated nicely with how badly they
                          fared when the crisis hit. In the ultimate irony,
                          when it’s time for someone to take the fall
                          for the firm’s risk taking, it’s the head of risk
                          management, played by Demi Moore who is
                          pushed to the scaffold.<br/><br/>
                        </p>
                        <p class="ta-j">Read the full story here:<a href="https://www.propublica.org/article/margin-call-a-small-movie-unveils-big-truths-about-wall-street">https://en.wikipedia.org/ </a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col colxs12 md5 offset-md1">
                  <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/> <br/>
                    All you need to know about the moral universe Margin Call inhabits is on display in the opening
                    scene of the movie. The downturn has begun. The firing squad -- represented by two women in
                    identical business suits -- arrives on the trading floor trailed by underlings carrying cardboard
                    boxes to cart away personal effects. When they come into view, a series of swift reactions plays
                    across the face of Will Emerson, a senior trader acted brilliantly by Paul Bettany. First fear. Then
                    dismay. And finally, relief and dismissal. After 80 percent of the floor is axed, Emerson’s boss,
                    Sam, a wan Kevin Spacey, gives a pep talk to the traders left standing. “They were good. You are
                    better. Now they are gone. They are not to be thought of again.”<br/>
                    Among the casualties is the risk manager for the trading group, Eric Dale, played by Stanley
                    Tucci. On the way out the door, Dale tells his young protégé, Peter Sullivan, that he has been
                    working on something important. As the elevator closes, he hands Sullivan a zip drive and says
                    cryptically, “Be careful.”
                  </p>
                  <div class="row">
                    <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
                    <label class="c-Checkbox w100 ta-l " for="selInput_1">Margin Call, the first scene.</label>
                    <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
                    <label class="c-Checkbox w100 ta-l " for="selInput_2">Margin Call, the plot.</label>
                    <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
                    <label class="c-Checkbox w100 ta-l " for="selInput_3">Margin Call, the actors</label>
                    <input class="js-select" type="hidden" ng-model="valorinputa"/>
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
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The movie is a very accurate representation of the financial crisis.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden" ng-model="valorinputb"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text. <br/> <br/>
            In the movie, only 20% of employees were not fired in the first scene.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">3.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">4.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">5.</label>
            <input class="js-select" type="hidden" ng-model="valorinputc"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer.  <br/> <br/>
            The author of the article is...
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">An actor.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">A reporter.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">Works in the financial sector.</label>
            <input class="js-select" type="hidden" ng-model="valorinputd"/>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row">
            <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the table by using the correct person from the passage. <br/> <br/></p>
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th class="w33">Actors</th>
                  <th class="w33">Not Actors</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir w150" type="text" placeholder="Text here..."/></span></td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir w150" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir w150" type="text" placeholder="Text here..."/></span></td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir w150" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir w150" type="text" placeholder="Text here..."/></span></td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir w150" type="text" placeholder="Text here..."/></span></td>
                </tr>
              </tbody>
            </table>
            <div class="row ta-c mt30"><img class="u-responsive-img w80 m-a" src="unit_2/module_8/assets/images/self_2_3.png" alt=""/></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 1" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 1" ng-click="CompTxt_SelectMult()"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next','680');
  
</script>
