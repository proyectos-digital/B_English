
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
                        <h5 class="ta-c">Is it time to tax the Internet?</h5>
                        <p class="ta-c">I how our communities can stop losing out on business and tax revenue.</p>
                        <p class="ta-c">Jay Walljasper posted Mar 06, 2012</p>
                        <p class="ta-j"><strong>1</strong> In an ongoing recession, many analysts predicted lackluster spending during 2011’s
                          holiday shopping season. But you wouldn’t know it online. Last year was a recordbreaking
                          one for Internet spending: the most money spent online in a single day ($1.25
                          billion on Cyber Monday), the most money spent online in a single week (nearly $6.3
                          billion during the week ending on Dec. 18), the most money spent online during any
                          holiday shopping season, ever (more than $37 billion).<br/>
                          This represents a huge shift in the American economy—one that will have a major
                          influence on our local economies and communities.<br/>
                          <img class="u-responsive-img w40 ml10 mt10" src="unit_2/module_7/assets/images/self_2_1.png" alt="" align="right"/>
                          <strong>2</strong> Convenience and limitless inventory are part
                          of the reason shoppers are flocking online,
                          but that’s not all. In most places, Internet
                          businesses are generally free from sales taxes,
                          while brick-and-mortar stores must tack 4 to 9
                          percent on to each order. This not only hinders
                          chain stores and big boxes, but also the many
                          shops that enliven our neighborhoods while
                          meeting our needs.<br/>
                          Any way you look at it, this is patently unfair—a
                          government-sanctioned bribe to buy from
                          Amazon instead of your local book dealer,
                          from e-Bay rather than that cool vintage store
                          around the corner.
                          
                          
                        </p>
                      </div>
                      <div class="col xs12 md6">
                        <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10" src="unit_2/module_7/assets/images/self_2_2.png" alt="" align="right"/>
                          In tough times like these, a lot of independent
                          businesses are already balanced precariously
                          on the edge of insolvency, and a few more
                          cents added to every dollar in sales might
                          push them right over.<br/>
                          Fifteen years ago, this naked favoritism toward
                          Internet sales was viewed as a justifiable way
                          to nurture a promising new economic sector,
                          and to help encourage the overall growth of
                          the worldwide web. Well, that’s ancient history
                          now. Big web-based retailers need this kind
                          of public largesse like Exxon needs a small
                          business loan.<br/>
                          No one likes to pay taxes, and it’s true that
                          sales taxes hit poor people much harder than
                          the wealthy. But it’s also important to remember that sales taxes bankroll a lot of state
                          and local services we depend upon—from public transit to public education to police
                          protection.<br/><br/>
                          <strong>3</strong> A recent analysis by USA Today found that, in 2011, a smaller percentage of consumer
                          dollars went to sales tax than at any time since 1967. Less sales tax revenues mean
                          less public assets and services that benefit us all. In short, the commons in our local
                          communities lose out when e-retailers duck taxes.<br/>
                          And to make matters worse, empty storefronts foreshadow a plunge in property tax
                          revenues, the mainstay of many local governments. Local and state budgets have
                          already been clobbered by rising deficits coming out of the Great Recession, and further
                          leaks in their tax bases will mean even more draconian cuts to critical public programs.
                          In Arizona, state legislators voted to send a bill to Amazon for sales tax on purchases
                          made by state residents (Amazon says it has no plans to pay).
                          
                          
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
                          A number of states—including California, New York, Rhode Island, Connecticut, North
                          Carolina, Illinois, and Arkansas—have passed laws requiring sales tax if Internet retailers’
                          affiliates are based within their borders. In Minnesota, where taxpayers must make
                          up for $149 million in tax revenues lost to out-of-state e-retailers, the legislature is
                          considering a bill to apply a modest tax to e-commerce—and winning support even
                          from some fervent “no-new-tax” Republicans.<br/>
                          <img class="u-responsive-img w40 mr10 mt10 mb10 f-l" src="unit_2/module_7/assets/images/self_2_3.png" alt=""/>
                          Taxes on Internet sales may be one way to raise more revenues for needed government
                          services, in an era when Republican fanaticism rules out most other sensible proposals.<br/><br/>
                          <strong>4</strong> The Main Street Fairness Act, introduced in Congress by Sen. Richard Durbin (IL), Rep.
                          John Conyers (MI) and Rep. Peter Welch (VT) would level the playing field between stores
                          in our community and Internet merchandisers. According to the New Rules Project,
                          the law “would allow states, provided they have met certain conditions, to require large
                          Internet and mail-order retailers to collect state and local taxes.”<br/>
                          The legislation states, “As a matter of economic policy and basic fairness, similar sales
                          transactions should be treated equally.”<br/>
                          The National Conference of State Legislatures
                          points out that states could eliminate $23.3
                          billion of their combined budget gaps if the
                          online retailers collected sales taxes in 2012.<br/><br/>
                        </p>
                        <p class="ta-j">Read the full story here:<a href="http://www.yesmagazine.org/new-economy/is-it-time-to-tax-the-internet" target="_blank">www.yesmagazine.org </a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col colxs12 md6">
                  <div class="w90 m-a">
                    <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/> <br/>
                      A recent analysis by USA Today found that, in 2011, a smaller percentage of consumer dollars
                      went to sales tax than at any time since 1967. Less sales tax revenues mean less public assets
                      and services that benefit us all. In short, the commons in our local communities lose out when
                      e-retailers duck taxes.<br/>
                      And to make matters worse, empty storefronts foreshadow a plunge in property tax revenues,
                      the mainstay of many local governments. Local and state budgets have already been clobbered
                      by rising deficits coming out of the Great Recession, and further leaks in their tax bases will
                      mean even more draconian cuts to critical public programs.<br/>
                      In Arizona, state legislators voted to send a bill to Amazon for sales tax on purchases made by
                      state residents (Amazon says it has no plans to pay). A number of states—including California,
                      New York, Rhode Island, Connecticut, North Carolina, Illinois, and Arkansas—have passed laws
                      requiring sales tax if Internet retailers’ affiliates are based within their borders. In Minnesota,
                      where taxpayers must make up for $149 million in tax revenues lost to out-of-state e-retailers,
                      the legislature is considering a bill to apply a modest tax to e-commerce—and winning support
                      even from some fervent “no-new-tax” Republicans.<br/>
                      Taxes on Internet sales may be one way to raise more revenues for needed government
                      services, in an era when Republican fanaticism rules out most other sensible proposals.
                    </p>
                    <div class="row">
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
                      <label class="c-Checkbox w100 ta-l " for="selInput_1">Republicans against taxes.</label>
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
                      <label class="c-Checkbox w100 ta-l " for="selInput_2">The negative side of the non-payment of sales tax.</label>
                      <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
                      <label class="c-Checkbox w100 ta-l " for="selInput_3">Internet sales affected by tax programs.</label>
                      <input class="js-select" type="hidden" ng-model="valorinputa"/>
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
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The Main Street Fairness Act.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_4">Would cause a balance between internet merchandisers and community stores.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_5">Would allow stores the opportunity to build more stores on playing field.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_6">Would affect the New Rules Project.</label>
            <input class="js-select" type="hidden" ng-model="valorinputb"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text. <br/> <br/>
            Online spending resulting in changes for local economies.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">4.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">3.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">1.</label>
            <input class="js-select" type="hidden" ng-model="valorinputc"/>
          </div>
          <p class="mt30"><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent"><span>clobbered | deficits | taxes | affiliates | hindered | mainstay</span></div>
          </div>
          <p>The 
            <input class="c-input js-escribir" type="text"/> of numerous local governments is the collection of property taxes, which can
            be affected if people are not making store purchases. As a result of increasing 
            <input class="c-input js-escribir" type="text"/>
            following the Great Recession, local and state budgets were 
            <input class="c-input js-escribir" type="text"/> . To combat this,
            several States have passed laws to have e-retailers pay internet sales tax in the event they
            have 
            <input class="c-input js-escribir" type="text"/> on such States where in law is in vogue.
            
            
            
            
            
          </p>
        </div>
        <div class="col xs12 md6">
          <p class="mt30"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent"><span>bribe | clobber | plunge | rule out | duck</span></div>
          </div>
          <p>There are many citizens who continue to 
            <input class="c-input js-escribir" type="text"/> serious issues related to the non-payment of taxes.
            
          </p>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong>Choose the correct answer for the following question. <br/> <br/>
            Why do shoppers make online purchases in great numbers?
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">Because it’s cheaper.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">Because it’s less stressful.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">Because they pay less taxes on items bought online.</label>
            <input class="js-select" type="hidden" ng-model="valorinputd"/>
            <div class="row ta-c mt30"><img class="u-responsive-img w80 m-a" src="unit_3/module_7/assets/images/act_2_1.png" alt=""/></div>
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
<script>
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '680');
  
</script>
