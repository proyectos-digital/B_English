
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
        <div class="c-cardGreen">
          <div class="c-cardGreenContent u-textColor_1">
            <div class="row">
              <div class="col xs12 md6">
                <h5 class="ta-c">Why science can’t be silent</h5>
                <p class="ta-c"><i>Up against the White House’s “alternative facts” and attempts to hide climate data, new allies—citizens and science—can prevail against politicians and corporations</i></p>
                <p class="ta-c">Clo Copass Kim Eckart_Tracy Loeffeholz Dunn posted Feb 15, 2017</p>
                <p class="ta-j">
                  We didn’t know what the presidential election would bring when we started planning the
                  science issue. We did know that climate change was not getting the rapid response we
                  thought it merited from political leaders of every party. And we noticed more outspoken
                  scientists challenging the convenient magical thinking of energy corporations and unfazed
                  politicians. It made us consider the powerful alliance of a critical-thinking public and a
                  passionate science community advocating for the common good.<br/><br/>
                  That was then. Now Donald Trump is in the White House, and the leaders from the
                  fossil fuel industry pepper his team of advisers and Cabinet. The White House website’s
                  “Climate Change” page has been replaced with
                  an “America First Energy Plan” page. Trump has
                  frozen grants and contracts at the EPA. There
                  <img class="u-responsive-img w40 ml10 mt10" src="unit_3/module_11/assets/images/self_2_1.png" alt="" align="right"/>
                  are gag orders and media blackouts.<br/><br/>
                  
                  After the election, researchers at the University of
                  Toronto and University of Pennsylvania coordinated
                  a guerrilla archiving event to migrate public data
                  stored only on Environmental Protection Agency
                  computers to storage in Canada so that access
                  would not be cut off by an administration hostile
                  to climate research. Those scientists are scared for
                  their careers and for their data, and so are we.
                  
                  
                </p>
              </div>
              <div class="col xs12 md6">
                <p class="ta-j"><img class="u-responsive-img w40 ml10 mt10" src="unit_3/module_11/assets/images/self_2_2.png" alt="" align="right"/>
                  Climate science is looking like the front
                  line of a war, and scientists have become
                  freedom fighters. Researchers, who usually
                  communicate through scholarly journal
                  articles, are grabbing megaphones. In
                  December, during the American Geophysical
                  Union meeting in San Francisco, hundreds
                  of climate scientists put down their research
                  papers to march in the streets, a truly
                  unprecedented sight at a major academic
                  conference. Scientists have even formed a
                  PAC, 314 Action, to get into politics.<br/><br/>
                  When scientists are willing to risk their
                  professional reputations and futures to speak
                  up for people and planet—and truth—we’d better listen up and meet their courage with
                  our own. That requires participation. We all can dive into observing our world, gathering
                  information, and insisting that decisions at every level of government be based on our
                  best understanding of scientific fact. That’s where the democracy comes in. We the
                  people need to demand truth and then ensure that government and industry use such
                  fundamental research for the common good.<br/><br/>
                  Whether you’re someone who reads scientific journals in your spare time or has trouble
                  recalling the chemical formula for carbon dioxide, you can help. Count the birds in your
                  backyard, test your own water, join a citizen science group, hug a scientist. Whether we
                  think of ourselves as words people or numbers people, it’s a great big data-filled world
                  that desperately needs us all to deeply understand things like parts per billion. We are
                  all scientists now.
                </p>
                <p class="ta-l">Read the full story here:<a href="http://www.yesmagazine.org/issues/science/why-science-cant-be-silent-20170215" target="blank">www.yesmagazine.org/ </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 md6">
          <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:<br/><br/></h6>
          <p class="ta-j">
            Climate science is looking like the front line of a war, and scientists have become freedom
            fighters. Researchers, who usually communicate through scholarly journal articles, are grabbing
            megaphones. In December, during the American Geophysical Union meeting in San Francisco,
            hundreds of climate scientists put down their research papers to march in the streets, a truly
            unprecedented sight at a major academic conference. Scientists have even formed a PAC, 314
            Action, to get into politics.
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">The role of scientific researchers.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">The politics behind science.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">Proactive scientists.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/></h6>
          <p class="ta-j mt30">
            Scientists and researchers have armed groups to fight against the Trump administration
            to protect their professions and information on climate change.
            
          </p>
          <div class="u-responsive_check">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox" for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox" for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox" for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text. <br/> <br/></h6>
          <p class="ta-j mt30">
            The demands of the scientific world
            
          </p>
          <div class="u-responsive_check">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox" for="selInput_7">2.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox" for="selInput_8">5.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox" for="selInput_9">4.</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words from the paragraph.  <br/><br/>
            </h6>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>outspoken | merit | critical-thinking | unfazed | replace | advocate</span></div>
            </div>
            <p>The issue of climate change has become a battlefield, as a more 
              <input class="c-input js-escribir" type="text"/> populace
              and a science community that is very 
              <input class="c-input js-escribir" type="text"/> about its work, 
              <input class="c-input js-escribir" type="text"/> against
              decisions taken by the new Trump government that favors fossil fuel companies.
              
            </p>
          </div>
          <div class="row mt30">
            <h6><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the table below. <br/><br/>
            </h6>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items-center justify-center u-textWhite"><span>scholarly | deeply | challenging | unprecedented | convenient</span></div>
            </div>
            <p>When Neil Armstrong landed on the moon, it was an 
              <input class="c-input js-escribir" type="text"/> event in the history of mankind.
              
            </p>
          </div>
          <div class="row">
            <h6><strong class="u-textColor_4">•</strong> Choose the correct answer<br/><br/></h6>
            <p class="ta-j mt30">
              Scientists have decided to become vocal because...
              
            </p>
          </div>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">their careers are at risk.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">fuel tycoons have worsened the effects of climate change.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">they want to advocate for a common good.</label>
            <input class="js-select" type="hidden"/>
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
  flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');
  
</script>
