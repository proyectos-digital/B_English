
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c"> Read the following excerpt and choose the correct answers.</h5>
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
            <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1">
                  <div class="row">
                    <div class="col xs12 md6">
                      <h5 class="ta-c">Obama wants you to have cheap, fast internet, but many cities aren’t allowed to provide it</h5>
                      <p class="ta-c">Obama hailed the benefits of an open Internet in his State of the Union address. Here’s what it is and how he’s trying to make it happen.</p>
                      <p class="ta-c">by Leticia Miranda<br/>ProPublica, Jan. 23, 2015, 1:12 p.m.</p>
                      <p class="ta-j"><strong>1</strong> On Tuesday evening during the State of the Union address, President Obama
                        <strong>pledged</strong> “to protect a free and open Internet, extend its reach to every classroom, and
                        every community, and help folks build the fastest networks.” Obama is <strong>calling</strong> on the
                        Federal Communications Commission to challenge a wave of state laws blocking the
                        construction of municipal broadband networks, which are high-speed Internet services
                        run by local communities.<br/>
                        Here’s what you need to know about the
                        president’s proposal and what it might mean
                        for consumers.
                      </p>
                      <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10 showTo-md" src="unit_2/module_7/assets/images/test_1_1.png" alt="" align="right"/>
                        <strong>2 Why can’t cities just build their own broadband networks?</strong>
                        Although there are about <strong>300</strong> municipal
                        broadband networks across the country, laws in
                        about 20 states create multiple administrative
                        and financial hurdles for new networks to
                        get off the ground. Such legislation makes it
                        difficult, for example, for communities to issue
                        <strong>bonds</strong> to cover the upfront costs of building
                        a network or to <strong>lease</strong> out unused fiber as a
                        way to offset their costs. In Florida, residential
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10" src="unit_2/module_7/assets/images/test_1_2.png" alt="" align="right"/>
                        broadband networks must demonstrate how
                        they plan to turn a profit within four years, a
                        tall order. According to The Baller Herbst Law
                        Group, so-called fiber-to-the-home networks
                        often take much <strong>longer</strong> to become profitable.
                        In Nevada, there are population restrictions.
                        Municipalities are prohibited from providing
                        broadband if the population <strong>exceeds</strong> 25,000;
                        for counties, it is 55,000 or <strong>more</strong>. <br/><br/>
                        <strong>3 Why have some states put these restrictions on municipal broadband networks?</strong> <br/>
                        The cable lobby and some conservatives
                        believe that the business of Internet service
                        should stay in the private sector. Last week, Nebraska Sen. Deb Fischer <strong>called</strong>
                        Obama’s plan “a new federal takeover of state laws governing broadband and the
                        Internet.” Telecom industry groups such as the National Cable & Telecommunications
                        Association have <strong>argued</strong> that these networks are risky investments that could drive
                        cities into debt. Telecom companies have <strong>donated</strong> millions of dollars to state and
                        federal politicians on both sides of the aisle. Besides contributions, the cable lobby
                        has directly submitted legislation to restrict municipal broadband networks and taken
                        fledgling networks to court. Last year, <strong>according</strong> to a report by Ars Technica, the
                        Kansas Legislature squashed a bill to limit municipal broadband networks that was
                        drafted and submitted by the Kansas Cable Telecommunications Association. When
                        Lafayette Utilities System in Louisiana announced its intention to build a municipal
                        broadband network, they faced three years of court battles with two incumbent
                        Internet providers, costing them $4 million, <strong>according</strong> to a report from the Center
                        for Public Integrity.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="c-flickity--cell">
            <div class="row" style="height:680px; overflow-x: hidden; overflow-y:auto;">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent u-textColor_1">
                  <div class="row">
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 mr10 mt10" src="unit_2/module_7/assets/images/test_1_3.png" alt="" align="left"/>
                        <strong>4 How is Obama going to get around these restrictions to expand municipal broadband?</strong><br/>
                        The Obama administration is <strong>urging</strong> the
                        FCC “to ensure that communities have the
                        tools necessary to satisfy their citizens’
                        demand for broadband.” Section 706 of the
                        1996 Telecommunications Act <strong>charges</strong>
                        the commission with encouraging “the
                        deployment on a reasonable and timely basis
                        of advanced telecommunications capability
                        to all Americans.” In its <strong>letter</strong> to the FCC, the
                        administration argues that “where private
                        investment has not resulted in adequate
                        broadband infrastructure, communities can
                        and should play a leading role in expanding broadband access.” In addition, the U.S.
                        Department of Agriculture will <strong>revamp</strong> its broadband loan program to offer financing
                        to eligible high-speed broadband carriers in unserved and underserved rural areas. The
                        Department of Commerce will <strong>launch</strong> a new initiative to provide online and in-person
                        technical assistance to communities that will help them address challenges in planning
                        and implementing broadband networks.<br/><br/>
                        <strong>5 What obstacles does Obama face?</strong> <br/>
                        With a Republican Congress, it’s likely Obama will face opposition. Sen. John Thune,
                        R-S.D., drafted a net neutrality <strong>bill</strong> that would strip the FCC of Section 706 authority.
                        He <strong>argues</strong> that this change is “necessary to update FCC authority for the Internet Age.”
                        Moreover, FCC Commissioner Ajit Pai has said the Commission does not have the
                        authority to preempt state bans on municipal broadband. In a <strong>statement</strong> last week,
                        Pai recommended that the commission “focus on removing regulatory barriers to
                        broadband deployment by the private sector.”
                        
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j">
                        But it’s still possible for Obama’s proposal to have an effect. New Jersey Sen. Cory
                        Booker introduced a <strong>bill</strong> on Thursday that would amend the Telecommunications Act
                        to make it illegal for states to restrict or prohibit municipal broadband networks. And
                        FCC Chairman Tom Wheeler has already seemed to express his support for using the
                        FCC’s authority to remove barriers for municipal broadband networks in Tennessee
                        and in North Carolina, which have submitted <strong>petitions</strong> to lift restrictions on their
                        networks. “I believe that it is in the best interests of consumers and competition that
                        the FCC exercises its power to preempt state laws that ban or restrict competition
                        from community broadband,” he <strong>wrote</strong> in a blog post in June.
                        
                      </p>
                      <p class="ta-j">Read the story here:  <a href="https://www.propublica.org/article/obama-wants-you-to-have-cheap-fast-internet-but-many-cities-arent-allowed-t">www.propublica.org</a>
                        
                        
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
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following extract: <br/> <br/>
            Although there are about <strong>300</strong> municipal broadband networks across the country, laws in about
            20 states create multiple administrative and financial hurdles for new networks to get off the
            ground. Such legislation makes it difficult, for example, for communities to issue <strong>bonds</strong> to
            cover the upfront costs of building a network or to <strong>lease</strong> out unused fiber as a way to offset
            their costs. In Florida, residential broadband networks must demonstrate how they plan to
            turn a profit within four years, a tall order. According to The Baller Herbst Law Group, so-called
            fiber-to-the-home networks often take much <strong>longer</strong> to become profitable. In Nevada,
            there are population restrictions. Municipalities are prohibited from providing broadband if the
            population <strong>exceeds</strong> 25,000; for counties, it is 55,000 or <strong>more</strong>.
            
            
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">Prohibition of broadband networks create issues.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">New broadband networks face legislative challenges.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">Residents not able to afford broadband internet</label>
            <input class="js-select" type="hidden" ng-model="valorinputa"/>
          </div>
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The business of Internet service is not profitable and is risky. Therefore, it should be controlled by the private sector.
            
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
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.  <br/> <br/>
            Possible support for the implementation of municipal broadband networks.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">3</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">2</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">5</label>
            <input class="js-select" type="hidden" ng-model="valorinputc"/>
          </div>
        </div>
        <div class="col xs12 md5">
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center"><span>high-speed | adequate | timely | technical | ensure | leading role</span></div>
          </div>
          <p class="lh25">It is the hope of the Obama administration to 
            <input class="c-input js-escribir" type="text"/> that all Americans obtain advanced
            telecommunications in a 
            <input class="c-input js-escribir" type="text"/> manner. The administration also states that communities
            should be able to play a 
            <input class="c-input js-escribir" type="text"/> in the expansion of broadband access. This, in cases
            where there is no 
            <input class="c-input js-escribir" type="text"/> broadband infrastructure provided by private investment.
            
            
          </p>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center"><span>ensure | propose | launch | preempt | provide</span></div>
          </div>
          <p class="lh25">Increased online security measures will 
            <input class="c-input js-escribir" type="text"/> fraudsters from stealing sensitive personal information.
            
          </p>
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Choose the correct answer for the following question.  <br/> <br/>
            Sen. John Thune plans to...
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">Make necessary changes to the internet sphere.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">Deny Barack Obama of the right to provide free internet.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">Draw up a net neutrality bill.</label>
            <input class="js-select" type="hidden" ng-model="valorinputd"/>
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

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next','680');</script>