
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
                      <h5 class="ta-c">There Are Lots of Climate Uncertainties. Let’s Acknowledge and Plan for Them with Honesty</h5>
                      <h6 class="ta-c">A New York Times column on the climate set off yet another dangerous tempest of exaggeration and simplification.</h6>
                      <p class="ta-c">by Andrew Revkin ProPublica, May 2, 2017, 2:18 p.m.</p>
                      <p class="ta-j"><strong>1</strong>.  Last fall, I attended a meeting of the Society for Decision Making Under Deep Uncertainty,
                        hosted by the World Bank. The small, somewhat <strong>ad-hoc</strong> organization has a <strong>quirky</strong>
                        name but an urgent goal — helping governments, companies and international agencies
                        <strong>grapple</strong> with complicated problems with enormous and <strong>enduring</strong> consequences,
                        from <strong>forging</strong> climate change policy to avoiding the collapse of a financial system.<br/><br/>
                        <strong>2</strong> Given that the workshop took place one week after the 2016 election, and given the
                        <strong>dismissive stance</strong> on climate change of the president-elect, climate policy was a big
                        theme, as were the limits of predictability.<br/><br/>
                        What was rare about the conversations and presentations was a full <strong>embrace</strong> of the
                        <strong>unknowable</strong> along with the known, even amid demands for immediate and <strong>far-reaching</strong>
                        policies. Think of that in the context of three decades of the public climate
                        debate, in which discourse has so often been bracketed by proclamations of certain
                        <strong>calamity</strong> — either environmental (the planet will overheat) or economic (regulations
                        aimed at limiting carbon emissions will strangle businesses).
                        Of course, no one there questioned the basic science identifying a growing human
                        impact on climate from the buildup of carbon dioxide and other greenhouse gases
                        in the atmosphere. But as is well known in the scientific community, while the climate
                        basics have long been clear, many of the most consequential aspects of climate change
                        remain <strong>shrouded</strong> in uncertainty.
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10  " src="unit_2/module_6/assets/images/act_3_1.png" alt="" align="right"/>
                        Despite three decades of intensifying analysis
                        using ever more sophisticated computer
                        simulations and observing systems and
                        <strong>vast troves</strong> of data <strong>gleaned</strong> through
                        the passage of time, two of the most basic
                        questions remain enduringly unclear: the
                        pace and extent of warming from a given rise
                        in CO2 and the resulting rate of sea-level rise
                        as ice sheets deteriorate. Through 2100 or
                        so, either could be disastrous or manageable.<br/>
                        <strong>3</strong> There are also important, if more granular
                        questions to which the answer, with
                        increasing confidence, is essentially we don’t
                        know. Here are just two:
                      </p>
                      <p class="ta-j ml20"><strong>•</strong> Will the deeply vulnerable African nations along the southern <strong>fringe</strong> of the
                        Sahara get wetter or drier as CO2 levels build? The last two reports of the
                        Intergovernmental Panel on Climate Change, in 2007 and 2014, said it’s unclear.<br/>
                        <strong>•</strong> Will hurricanes pose a bigger threat to U.S. coastlines in 2100 than today?
                        The IPCC reports and more recent research hold a mix of results. Of course
                        rising seas, with only the rate uncertain, will worsen any storm’s impact.
                      </p>
                      <p class="ta-j">I’ve seen no evidence <strong>hinting</strong> that clarity is likely to emerge on these questions in the
                        next decade. Does this mean the world should let that African region — which other
                        studies show is vulnerable to mega-droughts with or without global warming — sweat
                        it out as populations double in coming decades? Should coastal cities ignore hurricane
                        <strong>hazards</strong> and rising seas, whatever the rate, when they plan urban development on
                        coasts? Hardly.
                        
                        
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
                      <p class="ta-j"><strong>4</strong> In a <strong>surge</strong> of internet <strong>rage</strong> over the weekend, what could appropriately be called
                        the “uncertainty monster” surfaced once again in the climate debate, in a flood of
                        oversimplification, misinterpretation and correctives. (The phrase was coined in
                        2005 by Jeroen P. Van der Sluijs, a University of Bergen researcher whose focus is
                        “contested science.”)
                        The <strong>trigger</strong> was the <strong>inaugural</strong> New York Times opinion column by Bret Stephens, the
                        Pulitzer-winning conservative columnist who has variously <strong>enraged</strong> and <strong>enthralled</strong>
                        the left and right in political commentary but, until recently, consistently framed “global
                        warming as mass neurosis.”
                        His piece, “Climate of Complete Certainty,” centered on the <strong>failure</strong> of the environmental
                        (and political) left to <strong>galvanize</strong> climate concern and action and blamed that failure on
                        over adherence to certain models and lots of overstatement. “We live in a world in which
                        data convey authority,” he wrote. “But authority has a way of descending to certitude,
                        and <strong>certitude begets hubris.”</strong>
                        In some ways, the column made clear Stephens had come a distance in his views.
                      </p>
                      <p class="ta-j"><img class="u-responsive-img w35 mr10" src="unit_2/module_6/assets/images/act_3_2.png" alt="" align="left"/>
                        And he <strong>flirted</strong> with some thoughtfulness
                        about the <strong>perils</strong> of certainty. But his prime
                        conclusion amounted to a defense of
                        <strong>forestalling</strong> action on climate change while
                        awaiting more certitude.<br/><br/>
                        <strong>5</strong> The column prompted <strong>outrage</strong> and
                        criticism from environmental commentators
                        and readers of the Times, upset inflamed
                        even further by the timing — the day of the
                        People’s Climate March that flooded streets in
                        Washington and dozens of other cities.
                        The resulting debate has born little resemblance
                        to that among the risk managers gathered at
                        the bank. Most likely the result will be more
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10" src="unit_2/module_6/assets/images/act_3_3.png" alt="" align="right"/>
                        public confusion than <strong>enlightenment</strong>.
                        I had written to Stephen's last week before
                        his column ran. I was curious to get a sense
                        of the roots of his stance on climate issues.
                        I included a link to a 2016 magazine essay in
                        which I described my 30-year learning curve
                        on the topic.<br/><br/>
                        We had a pleasant, brief back and forth. I noted
                        that some climate insights involved important
                        “known unknowables.” I also said, “The climate
                        arena is rife with overstatement, but it’s at
                        both ends.”<br/><br/>
                        Stephens wound up using parts of my writing.
                        “As Andrew Revkin wrote last year about his
                        storied career as an environmental reporter
                        at The Times, ‘I saw a widening gap between what scientists had been learning about
                        global warming and what advocates were claiming as they pushed ever harder to pass
                        climate legislation.’”<br/><br/>
                        At around 800 words, columns inevitably involve <strong>trimming</strong>. But I wouldn’t have minded
                        if he’d included the rest of my paragraph: “Mind you, there was usually a much bigger
                        gap between the science and the views of industry supporters defending fossil fuels
                        or fighting environmental regulations or taxes. But to me, the monumental nature of
                        the task facing those trying to move the world away from fossil fuels called for extra
                        attention to detail.”
                      </p>
                      <p class="ta-j">Read the full story here:<a href="https://www.propublica.org/article/climate-change-uncertainties-bret-stephens-column">https://www.propublica.org/ </a></p>
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
      <div class="row row-flex">
        <h5>Complete the following activities based on the text you have read. </h5>
        <div class="col xs12 md6">
          <div class="xs12 md11 col-center">
            <h6> <strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following extract:</h6>
            <div class="row">
              <p class="ta-j">Given that the workshop took place one week after the 2016 election, and given the <strong>dismissive stance</strong>
                on climate change of the president-elect, climate policy was a big theme, as were the
                limits of predictability.
                What was rare about the conversations and presentations was a full <strong>embrace</strong> of the
                <strong>unknowable</strong> along with the known, even amid demands for immediate and <strong>far-reaching</strong>
                policies. Think of that in the context of three decades of the public climate debate, in which
                discourse has so often been bracketed by proclamations of certain <strong>calamity</strong> — either
                environmental (the planet will overheat) or economic (regulations aimed at limiting carbon
                emissions will strangle businesses).
                Of course, no one there questioned the basic science identifying a growing human impact on
                climate from the buildup of carbon dioxide and other greenhouse gases in the atmosphere.
                But as is well known in the scientific community, while the climate basics have long been clear,
                many of the most consequential aspects of climate change remain <strong>shrouded</strong> in uncertainty.
                Despite three decades of intensifying analysis using ever more sophisticated computer
                simulations and observing systems and <strong>vast troves</strong> of data <strong>gleaned</strong> through the passage
                of time, two of the most basic questions remain enduringly unclear: the pace and extent of
                warming from a given rise in CO2 and the resulting rate of sea-level rise as ice sheets deteriorate.
                Through 2100 or so, either could be disastrous or manageable.
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
                <label class="c-Checkbox row ta-c" for="selInput_1">The president and climate change</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
                <label class="c-Checkbox row ta-c " for="selInput_2">The uncertainty of climate change</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
                <label class="c-Checkbox row ta-c " for="selInput_3">Climate change dangers</label>
                <input class="js-select" type="hidden" ng-model="valorinputa"/>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="xs12 md11 col-center">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong>
                Match the information given with one of the paragraphs from the text.
              </h6>
              <p>Information gives you the reins on a topic.</p>
              <div class="row-flex justify-center">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
                <label class="c-Checkbox xs3 padding0 mr10 ml10 ta-c" for="selInput_4">2.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
                <label class="c-Checkbox xs3 padding0 mr10 ml10 ta-c " for="selInput_5">4.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
                <label class="c-Checkbox xs3 padding0 mr10 ml10 ta-c " for="selInput_6">5.</label>
                <input class="js-select" type="hidden" ng-model="valorinputb"/>
              </div>
            </div>
            <div class="row mt30">
              <h6><strong class="u-textColor_4">•</strong>
                Complete the sentence with a word from the table below.
              </h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items center justify-content-center u-textWhite"><span>calamity | dismissive | trove | far-reaching | galvanized | enthralled</span></div>
              </div>
              <p>Global warming is a very contentious topic with many 
                <input class="c-input js-escribir" type="text"/> consequences for both
                the environment and politics. But even the 
                <input class="c-input js-escribir" type="text"/> of information about climate change,
                scientist and politicians are still 
                <input class="c-input js-escribir" type="text"/> in a battle over the effects. Some people are
                very 
                <input class="c-input js-escribir" type="text"/> of the 
                <input class="c-input js-escribir" type="text"/> that will occur while others are 
                <input class="c-input js-escribir" type="text"/> in their
                belief of certain doom of the planet.
                
                
              </p>
            </div>
            <div class="row mt30">
              <h6><strong class="u-textColor_4">•</strong>
                Complete the sentence with a word from the table below.
              </h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items center justify-content-center u-textWhite"><span>calamity | dismissive | trove | far-reaching | galvanized | enthralled</span></div>
              </div>
              <p>Carbon Dioxide emissions have 
                <input class="c-input js-escribir" type="text"/> consequences for the planet.
                
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row align-items-center row-flex">
        <div class="col xs12 md6">
          <div class="row">
            <p><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”.  <br/>
              Based on the text you have read, scientist have come to a unanimous conclusion about the
              effects of climate change.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">Information not given.</label>
              <input class="js-select" type="hidden" ng-model="valorinputc"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Choose the correct answer to the following question.  <br/>
              The times article...
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_10">Was the result of the climate change march in Washington?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11">Prompted the climate march in Washington</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12">Was a cause of anger because of the date it was published.</label>
              <input class="js-select" type="hidden" ng-model="valorinputd"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 row-flex align-items-center mt30"><img class="u-responsive-img col-center" src="unit_2/module_6/assets/images/act_3_4.png" alt="" align="left"/></div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="CompTxt_SelectMult()"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 3" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 3" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '720');</script>