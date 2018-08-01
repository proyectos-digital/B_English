
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
        <h5>Read the following text:</h5>
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
                      <h5 class="ta-c">Can Customs and Border Officials Search Your Phone? These Are Your Rights</h5>
                      <h6 class="ta-c">Patrick G. Lee</h6>
                      <p class="ta-c">ProPublica, March 13, 2017, 12:55 p.m.</p>
                      <p class="ta-j"><strong>1</strong>. Recent detentions and <strong>seizures</strong> of phones and other material from travelers to
                        the United States have <strong>sparked</strong> alarm. We detail what powers Customs and Border
                        Protection officials have over you and your <strong>devices</strong>.
                        A NASA scientist heading home to the U.S. said he was detained in January at a Houston
                        airport, where Customs and Border Protection officers pressured him for access to his
                        work phone and its potentially sensitive contents.
                        Last month, CBP agents checked the identification of passengers leaving a domestic
                        flight at New York’s John F. Kennedy Airport during a search for an immigrant with a
                        deportation order.
                      </p>
                      <p class="ta-j"><img class="u-responsive-img w40 ml10  " src="unit_2/module_5/assets/images/act_3_1.png" alt="" align="right"/>    And in October, border agents seized phones and other work-related material from a Canadian photo journalist. They blocked him from entering the U.S. after he refused to unlock the phones, citing his <strong>obligation</strong> to protect his <strong>sources</strong>. These and other recent incidents have <strong>revived</strong> confusion and alarm over what powers border officials actually have and, <strong>perhaps</strong> more importantly, how to know when they are <strong>overstepping</strong> their authority. <strong>2</strong> The <strong>unsettling</strong> fact is that border officials have long had broad powers — many people just don’t know about them. Border officials,
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j">
                        for instance, have search powers that extend 100 air miles inland from any external
                        boundary of the U.S. That means border agents can stop and question people at
                        fixed checkpoints dozens of miles from U.S. borders. They can also pull over motorists
                        whom they suspect of a crime as part of <strong>“roving”</strong> border patrol operations.
                        <strong>Sowing</strong> even more uneasiness, ambiguity around the agency’s search powers —
                        especially over electronic devices — has persisted for years as courts nationwide
                        address legal challenges raised by travelers, privacy <strong>advocates</strong> and civil-rights groups.
                        We’ve dug out answers about the current <strong>state-of-play</strong> when it comes to border
                        searches, along with links to more detailed resources.<br/><br/>
                        <strong>3 Doesn’t the Fourth Amendment protect us from “unreasonable searches and seizures”?</strong> <br/>
                        Yes. The Fourth Amendment to the Constitution articulates the “right of the people to
                        be secure in their persons, houses, papers, and effects, against unreasonable searches
                        and seizures.” However, those protections are lessened when entering the country at
                        international terminals at airports, other ports of entry and subsequently any location
                        that falls within 100 air miles of an external U.S. boundary.<br/><br/>
                        <strong>4 How broad is Customs and Border Protection’s search authority?</strong><br/>
                        According to federal statutes, regulations and court decisions, CBP officers have the
                        authority to inspect, without a warrant, any person trying to gain entry into the country
                        and their belongings. CBP can also question individuals about their citizenship or
                        immigration status and ask for documents that prove admissibility into the country.
                        This blanket authority for warrantless, routine searches at a port of entry ends when
                        CBP decides to undertake a more invasive procedure, such as a body cavity search.
                        For these kinds of actions, the CBP official needs to have some level of suspicion that
                        a particular person is <strong>engaged</strong> in illicit activity, not simply that the individual is trying
                        to enter the U.S.
                        
                        
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
                      <p class="ta-j"><strong>5 Does CBP’s search authority cover electronic devices like smartphones and laptops?</strong> <br/>
                        Yes. CBP refers to several statutes and regulations in justifying its authority to examine
                        “computers, disks, drives, tapes, mobile phones and other communication devices,
                        cameras, music and other media players, and any other electronic or digital devices.”
                        According to current CBP policy, officials should search electronic devices with a
                        supervisor in the room, when feasible, and also in front of the person being questioned
                        “unless there are national security, law enforcement, or other operational considerations”
                        that take priority. For instance, if allowing a traveler to witness the search would reveal
                        sensitive law enforcement techniques or compromise an investigation, “it may not be
                        appropriate to allow the individual to be aware of or participate in a border search,”
                        according to a 2009 privacy impact assessment by the Department of Homeland
                        Security.
                        CBP says it can conduct these searches “with or without” specific suspicion that the
                        person who possesses the items is involved in a crime.<br/><br/>
                      </p>
                      <p class="ta-j"><img class="u-responsive-img w40 mr10 mb10" src="unit_2/module_5/assets/images/act_3_2.png" alt="" align="left"/>
                        <strong>6</strong> With a supervisor’s sign-off, CBP officers
                        can also seize an electronic device — or a
                        copy of the information on the device — “for
                        a brief, reasonable period of time to perform
                        a thorough border search.” Such seizures
                        typically shouldn’t <strong>exceed</strong> five days, although
                        officers can apply for extensions in up to one week
                        increments, according to CBP policy. If
                        a review of the device and its contents does
                        not turn up probable cause for seizing it, CBP
                        says it will destroy the copied information and
                        return the device to its owner.
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 ml10  " src="unit_2/module_5/assets/images/act_3_3.png" alt="" align="right"/>
                        <strong>7 Can CBP really search my electronic devices without any specific suspicion that I might have committed a crime?</strong>
                        The Supreme Court has not directly ruled on
                        this issue. However, a 2013 decision from the
                        U.S. Court of Appeals for the Ninth Circuit
                        — one level below the Supreme Court —
                        provides some guidance on potential limits to
                        CBP’s search authority.
                        In a majority decision, the court affirmed
                        that <strong>cursory</strong> searches of laptops — such as
                        having travelers turn their devices on and then
                        examining their contents — does not require
                        any specific suspicions about the travelers to
                        justify them.
                      </p>
                      <p class="ta-j">
                        The court, however, raised the bar for a “forensic examination” of the devices, such as
                        using “computer software to analyze a hard drive.” For these more powerful, intrusive
                        and comprehensive searches, which could provide access to deleted files and search
                        histories, password-protected information and other private details, border officials
                        must have a “reasonable suspicion” of criminal activity — not just a <strong>hunch</strong>.<br/><br/>
                        Read the full story here:<a href="https://www.propublica.org/article/can-customs-border-protection-search-phone-legal-rights">https://www.propublica.org/ </a>
                        
                        
                        
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
      <div class="row align-items-center row-flex">
        <div class="col xs12 md6">
          <h5>Answer the following question based on the text you have read.</h5>
          <div class="row">
            <p><strong class="u-textColor_4">•</strong>
              With a supervisor’s sign-off, CBP officers can also seize an electronic device — or a copy of
              the information on the device — “for a brief, reasonable period of time to perform a thorough
              border search.” Such seizures typically shouldn’t exceed five days, although officers can apply
              for extensions in up to one-week increments, according to CBP policy. If a review of the device
              and its contents does not turn up probable cause for seizing it, CBP says it will destroy the
              copied information and return the device to its owner.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_1">The CBP.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_2">Electronic devices.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_3">Confiscation procedures.</label>
              <input class="js-select" type="hidden" ng-model="valorinputa"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Choose “true”, “false” or “information not given” <br/><br/>
              Your rights are different at a border crossing than when you are at home.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_5">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_6">Information not given.</label>
              <input class="js-select" type="hidden" ng-model="valorinputb"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Match the information given with one of the paragraphs from the text.   <br/><br/>
              The Authorities can conduct warrantless inspections.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_7">2.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_8">3.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_9">4</label>
              <input class="js-select" type="hidden" ng-model="valorinputc"/>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Fill in the summary using the words form the paragraph  <br/><br/>
            </p>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent flex align-items center justify-content-center u-textWhite"><span>overstepping | exceeding | seize | obligation | device | advocates</span></div>
            </div>
            <p>The border officials can 
              <input class="c-input js-escribir" type="text"/> any 
              <input class="c-input js-escribir" type="text"/> whether it's a cellphone or laptop.
              The authorities say it's 
              <input class="c-input js-escribir" type="text"/> to protect the nation and they are not 
              <input class="c-input js-escribir" type="text"/>
              their authority with such seizures. Many civil rights 
              <input class="c-input js-escribir" type="text"/> however believe the customs
              officers are 
              <input class="c-input js-escribir" type="text"/> the limits of their authority.
              
              
              
            </p>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Complete the sentence with a word from the options below  <br/><br/>
              When travelling overseas, tourists should always try to avoid 
              <input class="c-input ta-c" type="text" ng-model="js_opcionRespuesta"/> in illegal activities.
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_10" ng-click="js_opcionRespuesta = 'engaging'">engaging</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_11" ng-click="js_opcionRespuesta = 'exceeding'">exceeding</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_12" ng-click="js_opcionRespuesta = 'sowing'">sowing</label>
              <input class="js-select" type="hidden" ng-model="valorinputd"/>
            </div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong>
              Choose the correct answer.   <br/><br/>
              The border officials...
            </p>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1" ng-click="valorinpute=1"/>
              <label class="c-Checkbox row ta-c" for="selInput_13">can search you based on a hunch.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2" ng-click="valorinpute=2"/>
              <label class="c-Checkbox row ta-c " for="selInput_14">cannot search your belongs without a warrant.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3" ng-click="valorinpute=3"/>
              <label class="c-Checkbox row ta-c " for="selInput_15">can conduct inspections over 90 miles from the port of entry.</label>
              <input class="js-select" type="hidden" ng-model="valorinpute"/>
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