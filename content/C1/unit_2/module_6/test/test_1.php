
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c"> Read the following extract and choose the correct answers:</h5>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent u-textColor_1"> 
          <div class="row">
            <div class="col xs12 md6">
              <h5 class="ta-c">How we saved the climate (and Ourselves)</h5>
              <p class="ta-c"><i>Bill McKibben imagines himself in the year 2100, looking back at a century of climate chaos and asking: What did it take to save the world? </i></p>
              <p class="ta-c">Bill McKibben posted Dec 06, 2010</p>
              <p class="ta-j">
                Let’s imagine for a moment that we’re at 2100, and the atmospheric CO2 level is slowly
                subsiding back toward 350, and the worst is over. Let’s try to figure out how we got
                there—reverse-engineer a century of halting but ultimately decisive progress.<br/>
                The first decision, clearly, was the most important. In 2011, after 22 years of hemming
                and hawing and circling, the world’s governments—moved by a series of devastating
                floods on every continent that galvanized the already growing climate movement around
                the globe—grudgingly took the initial steps toward imposing a cap on carbon emissions.
                The fight was by no means easy: developing countries insisted, with reason, that the cap
                couldn’t hit them yet, and China insisted that it was still a developing country. Still, the
                climactic political battle with big oil and bigger coal ended decisively—it would be many
                years before they ceased to be powerful parts of the economy, but the fossil fuel era
                began to end on that day when the parties signed on at the Nairobi conference center.
                A few things happened, and more quickly than anyone but the economists had
                dared hope. For one, anyone looking at a spreadsheet quickly figured out that future
                investment had better be green—that coal-fired power was going to get steadily more
                expensive until it made no sense at all. And so the trajectory of the future began to
                shift: money started to fall in the direction of the new economic gravity. It started to
                pool around railroads, and insulation manufacturers, and all the other businesses that
                featured relatively low energy costs as a selling point.<br/>
                The effect on consumers was not quite as strong, since few households had CFOs
                charged with plotting the bottom line return of future expenditures. Still, every family
                was now getting a rebate check each month for its share of the permits for putting
                CO2 into the atmosphere, which meant a steady flow of capital. Some of it went for flatscreen
                TVs,
                
                
              </p>
            </div>
            <div class="col xs12 md6">
              <p class="ta-j">
                but a nontrivial amount ended up buying solar hot-water heaters, plug-in
                hybrids, and local tomatoes.<br/>
                Meanwhile, governments started figuring out where the future was headed too, and
                the political demand for greater investment in basic research began to grow. Helpfully,
                with each passing legislative session, the pockets of the wind and solar barons got a little
                deeper, and they began to exert more and more pressure for switching subsidies away
                from the “technologies of the past.” None of it, though, happened anywhere near fast
                enough to slow down the momentum of the heating. Year after year saw catastrophe
                after catastrophe. Human-caused temperature change, barely one degree when the
                decade began, edged toward two degrees, and the toll of damage steadily mounted.
                Some of it was insidious and daily—like the steady drip-drip of lost agricultural yield as
                temperatures climbed and water evaporated and the continuing spread of diseasebearing
                mosquitoes, which damaged not only ever-larger populations but also the
                development budgets of one nation after another.<br/>
                As time went on, it became increasingly clear that there was no way simply to pull the
                internal combustion engine out of the world’s economy, toss in a few solar panels, and
                continue on as before. Not only was the drag on old economies from changes in the
                weather creating real friction, but the logic of renewable energy began to assert itself.
                Sun and wind were everywhere, but diffuse. And so a new kind of power grid began to
                grow—based on many million rooftops, not a few thousand centralized power stations.
                Other commodities began to go in the same direction. After a century of agricultural
                consolidation, for instance, local food networks were spreading fast, replacing much
                of the oil-starved, monocultural, industrial food system that had dominated the planet
                since World War II.<br/>
                Read the full story here: <a href="http://www.yesmagazine.org/planet/how-we-saved-the-climate-and-ourselves">www.yesmagazine.org</a>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following extract: <br/> <br/>
            The first decision, clearly, was the most important. In 2011, after 22 years of hemming and
            hawing and circling, the world’s governments—moved by a series of devastating floods on
            every continent that galvanized the already growing climate movement around the globe—
            grudgingly took the initial steps toward imposing a cap on carbon emissions. The fight was
            by no means easy: developing countries insisted, with reason, that the cap couldn’t hit them
            yet, and China insisted that it was still a developing country. Still, the climactic political battle
            with big oil and bigger coal ended decisively—it would be many years before they ceased to
            be powerful parts of the economy, but the fossil fuel era began to end on that day when the
            parties signed on at the Nairobi conference center.
            
            
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">Developing countries’ fight for development.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">The fight for global unification.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">The reluctant halt on carbon emissions.</label>
            <input class="js-select" type="hidden" ng-model="valorinputa"/>
          </div>
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The families receiving rebate checks as an extra flow of income would use them to buy lavish home accessories in addition to certain green-energy equipment.
            
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
        </div>
        <div class="col xs12 md5">
          <p class="ta-j mt20"><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center"><span>subsidies | slow down | exert | baronsl | barely | insidious</span></div>
          </div>
          <p class="lh25">With the political demand for increased investment in basic research, 
            <input class="c-input js-escribir" type="text"/>
            wning wind and solar operations became even richer with legislative session passed,
            thus enabling them to 
            <input class="c-input js-escribir" type="text"/> influence to divert 
            <input class="c-input js-escribir" type="text"/> from past technologies.
            This, nonetheless, failed to 
            <input class="c-input js-escribir" type="text"/> the pace at which the earth was warming, which was 
            <input class="c-input js-escribir" type="text"/>
            one degree 10 years prior. This, in addition to other 
            <input class="c-input js-escribir" type="text"/> damage occurring
            on a daily basis, also affecting increasingly populated countries and their development budgets.
            
          </p>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center"><span>issue | effect | burden | consequence | drag | solution</span></div>
          </div>
          <p class="lh25">Not only was the 
            <input class="c-input js-escribir" type="text"/> on old economies from changes in the weather creating real friction, but the logic of renewable energy began to assert itself.
            
          </p>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.  <br/> <br/>
            Some effects of slow action towards more modern technology.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">5.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">3.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">2.</label>
            <input class="js-select" type="hidden" ng-model="valorinputc"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer for the following question.   <br/> <br/>
            Solar and wind energy came to be...
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">More concentrated in many cities worldwide.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">An increasingly prominent concept of renewable energy.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">A great source of energy for the production of agricultural crops.</label>
            <input class="js-select" type="hidden" ng-model="valorinputd"/>
          </div>
        </div>
        <div class="col xs12 md6 ta-c mt30"><img class="u-responsive-img" src="unit_2/module_6/assets/images/test_1_1.png" alt=""/></div>
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
