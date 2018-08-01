
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Read the following extract and choose the correct answers.</h5>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent u-textColor_1">
          <div class="row">
            <div class="col xs12 md6">
              <h5 class="ta-c">When hospitality was the norm and multiculturalism was a good thing</h5>
              <p class="ta-c">Ariel Sophia Bardi posted Jun 20, 2017</p>
              <p class="ta-j"><strong>1</strong> Despite border walls and travel bans, the Middle East is still a region where the weary
                traveler is welcomed and embraced.<br/>
                For much of human history, kindness to foreigners has been a cherished trait. “The
                stranger who sojourns with you shall be to you as the native among you, and you shall
                love him as yourself,” commanded the Old Testament. In Homer’s epic, Odysseus
                traveled at the mercy of strangers, seeking out shelter in unknown lands. All throughout
                the ancient texts, divine beings masquerade as vagabonds, their disguises designed to
                test the mercy of their hosts. Graciousness is summarily rewarded, while hostility or
                indifference leads to carnage and despair. Hospitality narratives highlight the rules of
                etiquette that once bound host to guest.
                
              </p>
              <p class="ta-j"><img class="u-responsive-img w50 ml10" src="unit_2/module_5/assets/images/self_2_1.png" alt="" align="right"/>
                <strong>2</strong> The beginnings of Western civilization were
                shaped by these same codes of conduct.
                But now, at least throughout much of the
                developed world, hospitality—that safe
                harbor for weary travelers—is in danger of
                disappearing.
                One of the lingering cruelties of President
                Trump’s proposed travel bans is that they
                target some of the regions of the globe where
                hospitality is still sacrosanct. In disdaining
                places where culture is still defined by
                generosity, the U.S. is not only imperiling
                its public image, but upending the basic
                humanity that once governed the world.
              </p>
            </div>
            <div class="col xs12 md6">
              <p class="ta-j">
                “The industrialized countries, obedient to a cold rationality, have had to unlearn hospitality,”
                observes the Moroccan-French writer Tahar Ben Jelloun, chronicling the rise of bigotry
                in France. “Time is precious and space limited,” he laments. “Doors are shut, and so are
                hearts.” The ancient Greek concept of “xenia” originally signaled friendship between
                strangers—usually from distant foreign lands. Today, it survives in the English-speaking
                world as the prefix to xenophobia. But despite decades of geopolitical strain, hospitality
                still remains a crowning feature of the contemporary Middle East.<br/><br/>
                <strong>3</strong> On a solo backpacking trip across North Africa and the Levant, I once disembarked,
                hot and disheveled, from a bumpy shared taxi in Irbid, an industrial city in northern
                Jordan not far from the Syrian border. Dust streaked my face; I was wracked with
                thirst. Suddenly, I found myself greeted with an unexpected act of welcome: A stranger
                appeared, handed me a chunk of juicy watermelon, then vanished back into the crowd.
                “It’s something in our hearts. We can’t help it,” a Syrian grad student told me recently,
                explaining Middle Eastern hospitality while swatting away mosquitos at a Delhi rooftop
                party. It was in considering how frequently and blithely I had already tromped around
                Muslim-majority countries that Trump’s proposed bans struck me not only as illegal,
                but also as intolerably unfair. In the age of Trump, Brexit, and the resurgence of
                nationalism around the world, pining for unified, pre-immigrant cultures has become
                a common conservative refrain. But it is nationalism—not multiculturalism—that
                remains the modern and alien invention. Long before walls, bans, and border control
                regulated and restricted mobility, territories were still fuzzy, and diversity in languages,
                religions, and ethnicities was the norm. The medieval world was, above all, overrun with
                travelers: Merchants, pilgrims, bureaucrats, missionaries, and vagrants all crisscrossed
                adjacent lands. Traveling was seen not only as a privilege, but also an inalienable right.
                
              </p>
              <p>Read the full story here: <a href="http://www.yesmagazine.org/issues/sanctuary/shelter-and-safety-the-oldest-of-ideas-20170620">http://www.yesmagazine.org/</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h6>Do the following activities based on the text you have read.</h6>
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/> <br/>
            One of the lingering cruelties of President Trump’s proposed travel bans is that they target
            some of the regions of the globe where hospitality is still sacrosanct. In <strong>disdaining</strong> places
            where culture is still defined by generosity, the U.S. is not only imperiling its public image,
            but upending the basic humanity that once governed the world. “The industrialized countries,
            obedient to a cold rationality, have had to unlearn hospitality,” observes the Moroccan-French
            writer Tahar Ben Jelloun, chronicling the rise of bigotry in France. “Time is precious and space
            limited,” he laments. “Doors are shut, and so are hearts.” The ancient Greek concept of “xenia”
            originally signaled friendship between strangers—usually from distant foreign lands. Today,
            it survives in the English-speaking world as the prefix to xenophobia. But despite decades of
            geopolitical strain, hospitality still remains a crowning feature of the contemporary Middle East.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">The hospitality industry</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">The Donald Trump presidency.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">Hospitality and modern society.</label>
            <input class="js-select" type="hidden" ng-model="valorinputa"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The writer believes that hospitality is more important than building borders.
            
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
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.  <br/> <br/>
            The author had a conversation with a Syrian national at an event in India.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">1.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">2.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">3.</label>
            <input class="js-select" type="hidden" ng-model="valorinputc"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</p>
          <div class="row">
            <div class="col col-center xs12 md10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>generosity | disdain | sacrosanct</span></div>
              </div>
            </div>
          </div>
          <p class="lh20">The millionaire tourist looked at the beggar on the beach with 
            <input class="c-input js-escribir" type="text"/> , he believes people should not beg but work for what they want.
          </p>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer for the following question.  <br/> <br/>
            The author is probably...
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">a supporter of president Trump.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">travelled around the world.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">a politician.</label>
            <input class="js-select" type="hidden" ng-model="valorinputd"/>
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
