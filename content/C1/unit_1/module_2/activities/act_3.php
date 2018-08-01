
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_3" ng-init="s_actividad = 1; DragandDropMultiple()">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <article class="row u-animationFadeDown" ng-show="s_actividad == 1">
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
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen mt0 mb0" height-cardGreen="auto">
                  <div class="c-cardGreenContent u-textColor_1">
                    <div class="col xs12 md6">
                      <h5 class="ta-c">Alberto Salazar Disputes Allegations — Some of Which Were Never Made</h5>
                      <h6 class="ta-c">In a lengthy response to stories by ProPublica and the BBC, Salazar addresses the allegations of former athletes and staff that he broke drug rules.</h6>
                      <p class="ta-c">by David Epstein <br/> ProPublica, June 24, 2015, 11:03 p.ta-j.m.</p>
                      <p class="ta-j"><strong>1</strong>. Three weeks after ProPublica and the BBC reported allegations that Alberto Salazar,
                        the iconic coach of the Nike Oregon Project, had experimented with testosterone and
                        broken drug rules, Salazar posted a detailed, two-part response on the group’s website.
                        Salazar disputed several allegations that were not made in the stories, or inaccurately
                        described allegations that were. He also confirmed others, admitting, for example, he
                        tested testosterone gel on both of his sons. Salazar said the claims in the ProPublica
                        and BBC stories are based on lies by disgruntled former athletes and employees or
                        misunderstandings of his recommendations or conduct. “I will never permit doping.
                        Oregon Project athletes must fully comply with the WADA Code and IAAF Rules,” Salazar
                        said in the lengthy post.
                      </p>
                      <p class="ta-j"><strong>2</strong>. The three-time winner of the New York City Marathon said he had pushed himself so
                        hard as an athlete that “I still suffer today the negative physical effects of my excessive
                        training … but will not hurt my athletes like I hurt myself.” His athletes, he said, have
                        appropriate documentation for any medications, and he has never helped an athlete
                        gain a medical exemption or prescription they didn’t need. Salazar reserved particular
                        ire for Steve Magness, a former Oregon Project assistant coach and current head crosscountry
                        coach at the University of Houston, who made several of the most contentious
                        allegations. Magness told ProPublica and the BBC that he left the Oregon Project in
                        2012 by mutual agreement with Salazar after he became disillusioned with the coach’s
                        approach to medicine.
                        
                        
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p class="ta-j"><img class="u-responsive-img w40 mr10 " src="unit_1/module_2/assets/images/act_3_1.png" alt="" align="left"/>
                        <strong>3</strong>.  In his response, Salazar said “Magness did not leave the Oregon Project. The Oregon Project terminated his contract in 2012.” Prior to the publication of the initial stories, Magness provided ProPublica and the BBC with a “Mutual Termination of Contract” letter from Nike. The letter, dated June 27, 2012, starts: “Dear Steve, as discussed, both you and NIKE have decided to terminate your NIKE contract … As such, this letter shall acknowledge the mutual decision to terminate the contract, effective immediately.” The short letter ends with: “We would like to thank you for your association with NIKE. Should an opportunity present itself to work together again in the future, NIKE would welcome consideration of such an opportunity.” Emails from Salazar, provided by Magness, express “complete confidence” in him just one month earlier. Yesterday, the Associated Press reported that the U.S. Anti-Doping Agency is investigating Salazar and that “more than a dozen witnesses have been interviewed and USADA is actively pursuing documents and other evidence from Salazar.” Salazar was provided with an extensive list of questions a month prior to the initial ProPublica and BBC stories. He only answered a select group of them.
                      </p>
                      <p class="ta-j"><strong>4</strong>. Salazar began today’s rebuttal by addressing an allegation about Salazar’s star athlete,
                        Galen Rupp, that neither ProPublica nor the BBC made: “The claims that Galen has been
                        on prednisone continuously since he was 15 are absolutely false.”
                        ProPublica and the BBC published a document showing that Rupp, who won the silver
                        medal in the 2012 Olympics, had apparently taken prednisone during one-time period
                        when he was 16. The story did not report allegations of continuous use nor cite the age 15.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="row" style="height:720px; overflow-x: hidden; overflow-y:auto;">
                <div class="c-cardGreen mt0 mb0" height-cardGreen="auto">
                  <div class="c-cardGreenContent u-textColor_1 ">
                    <div class="col xs12 md6">
                      <p class="ta-j ta-j"><img class="u-responsive-img w40 ml10 " src="unit_1/module_2/assets/images/act_3_2.png" alt="" align="right"/>
                        Salazar also said the article falsely reported that Rupp had received therapeutic use exemptions [TUE] by manipulating the TUE system and that he had received “numerous TUEs for multiple different treatments.” TUEs are exemptions that are granted to allow athletes to use otherwise restricted drugs or treatments. No such assertions were made in the story. <br/> ProPublica and the BBC gave no accounting of TUEs given to Rupp in an elite running career that spans more than a decade. Salazar stressed that Rupp “has only received two TUEs in his running career since 2010.” Salazar also noted that TUEs “are a rare occurrence in the Oregon Project.” No allegation about the prevalence of TUEs among Oregon Project athletes was made.
                      </p>
                      <p class="ta-j"><strong>5</strong>. One of the most controversial elements of the ProPublica and BBC stories was an allegation
                        that Rupp, Salazar’s longtime star, may have used testosterone while still in high school.
                        Magness provided a photograph of a Nike Lab document that included a 2002 notation by
                        a scientist that said Rupp was “presently on prednisone and testosterone medication.”
                        Prior to the initial stories, Salazar told ProPublica and the BBC that the notation was a mistake,
                        and that Rupp was actually taking a legal dietary supplement meant to boost testosterone
                        called Testoboost. In his current response, Salazar says that Rupp “does not recall exactly
                        which supplement he took in 2002. It could have been Testoboost, Alpha Male, Tribex, or
                        ZMA.” All are supplements meant to naturally boost testosterone.
                        Magness told ProPublica and the BBC that when he asked Salazar at the time to explain
                        the document, Salazar called Loren Myhre, the scientist who made the notation, “crazy” and
                        said he would get it clarified. Magness said he never did. Myhre died in 2012 from ALS.
                      </p>
                    </div>
                    <div class="col xs12 md6">
                      <p><strong>6</strong>. In his response, Salazar questioned why Magness didn’t ask Myhre for an explanation
                        at the time. Magness told ProPublica Wednesday that he didn’t know Myhre and that it
                        was unfair to imply that it was his responsibility to investigate. Magness said there had
                        been “no mention of the word ‘Testoboost.’” <br/><br/>
                        “I came to my superior, Salazar, and asked for answers,” Magness said. “It would have
                        been a simple clarification to make at the time by Salazar to contact Myhre, someone
                        who he had worked with for at least a decade, to clear up the confusion. Salazar admits
                        that he did not make this simple request, and instead blames it on me for not searching
                        out Myhre.”<br/><br/>
                        ProPublica contacted Mauro DiPasquale, the owner of Testoboost, who said that
                        Salazar had recently contacted him in the hope that he would confirm that Rupp was
                        taking Testoboost. DiPasquale told ProPublica he had no records regarding Salazar and
                        Testoboost prior to 2004, and had no way of knowing whether Rupp was taking it in
                        2002. A number of Oregon Project athletes have told ProPublica they took Testoboost
                        at various times. Adam Goucher says that he took Testoboost, but does not believe any
                        of his lab documents indicated that he was taking testosterone medication. Salazar’s
                        current response says that Rupp cannot remember what he told Myhre. “[Rupp]
                        believes that he referred to his supplements as his testosterone supplements, stuff,
                        pills or medication.”<br/><br/>
                        Read the full story here: <a href="https://www.propublica.org/article/alberto-salazar-disputes-allegations-some-of-which-were-never-made" target="blank">https://www.propublica.org/ </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      
      <article class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h5>Answer the following question based on the text you have read.</h5>
        <div class="row align-items-center row-flex">
          <div class="col xs12 md6">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following extract:</h6>
              <p>
                ProPublica contacted Mauro DiPasquale, the owner of Testoboost, who said that Salazar had
                recently contacted him in the hope that he would confirm that Rupp was taking Testoboost.
                DiPasquale told ProPublica he had no records regarding Salazar and Testoboost prior to 2004,
                and had no way of knowing whether Rupp was taking it in 2002. A number of Oregon Project
                athletes have told ProPublica they took Testoboost at various times. Adam Goucher says that
                he took Testoboost, but does not believe any of his lab documents indicated that he was
                taking testosterone medication. Salazar’s current response says that Rupp cannot remember
                what he told Myhre. “[Rupp] believes that he referred to his supplements as his testosterone
                supplements, stuff, pills or medication.”
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-c" for="selInput_1">The Salazar controversy.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-c " for="selInput_2">Rupp and Testoboost.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-c " for="selInput_3">The use of Testoboost in athletics.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”</h6>
              <p>Salazar was accused of using performance-enhancing drugs.</p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox row ta-c" for="selInput_4">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox row ta-c " for="selInput_5">False.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox row ta-c " for="selInput_6">Information not given.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
              <p>Salazar was really angry with some individuals he used to work with many years ago</p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox row ta-c" for="selInput_7">1.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox row ta-c " for="selInput_8">2.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                <label class="c-Checkbox row ta-c " for="selInput_9">3</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
            <div class="row mt40">
              <h6><strong class="u-textColor_4">•</strong>
                Fill in the summary using the words form the paragraph. <br/><br/>
                
              </h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex justify-center align-items-center"><span>blames | former | allegations | admits | dispute</span></div>
              </div>
              <div class="row">
                <p class="lh25">Mr. Salazar is in the middle of a 
                  <input class="c-input js-escribir" type="text"/> with Propublica and the BBC over 
                  <input class="c-input js-escribir" type="text"/>
                  of misconduct. While Mr. Salazar 
                  <input class="c-input js-escribir" type="text"/> to some of the accusations in the articles also he 
                  <input class="c-input js-escribir" type="text"/>
                  some of the claims of misconduct on his 
                  <input class="c-input js-escribir" type="text"/> colleagues and disgruntled
                  former athletes. He believes he is being judged unfairly.
                </p>
              </div>
            </div>
          </div>
        </div>
      </article>
      
      <article class="row u-animationFadeDown" ng-show="s_actividad == 3">
        <div class="row-flex-center">
          <div class="col xs12 md6">
            <div class="row">
              <p><strong class="u-textColor_4">•</strong>
                Complete the sentence with a word from the table below. <br/><br/>
              </p>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex justify-center align-items-center"><span>blames | former | dispute | allegations</span></div>
              </div>
              <p class="lh25">in the hospital board meeting there was a 
                <input class="c-input js-escribir" type="text"/> over 
                <input class="c-input js-escribir" type="text"/> that a doctor had acted
                inappropriately towards a 
                <input class="c-input js-escribir" type="text"/> patient. The worker’s union 
                <input class="c-input js-escribir" type="text"/> the hospital for its
                poor regulations and claims the doctor is being sacrificed to appease the regulators.
                The hospital executives say that union’s claim was unfair and that they stand by their decision
                on the matter.
              </p>
            </div>
            <div class="row mt40">
              <p><strong class="u-textColor_4">•</strong>
                Choose the correct answer. <br/><br/>
                Mr. Salazar has regrets about his time as an athlete one which is...
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                <label class="c-Checkbox row ta-c" for="selInput_10">Using Test boost.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                <label class="c-Checkbox row ta-c " for="selInput_11">Not working hard enough.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                <label class="c-Checkbox row ta-c " for="selInput_12">Overworking himself.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <p><strong class="u-textColor_4">•</strong>
              Complete the table by using the correct person from the passage. <br/><br/>
            </p>
            <div class="col-xs12 md10 col-center">
              <div class="row row-flex justify-center align-items-center"><span class="dragCont"><span class="drag" rescon="1">Loren Myhre</span></span><span class="dragCont"><span class="drag" rescon="2">Adam Goucher</span></span><span class="dragCont"><span class="drag" rescon="1">Alberto Salazar</span></span><span class="dragCont"><span class="drag" rescon="2">Galen Rupp</span></span><span class="dragCont"><span class="drag" rescon="1">Steve Magness</span></span></div>
              <div class="row mt20">
                <table class="c-table-estilo_tres m-a">
                  <thead>
                    <tr>
                      <th class="w33">Employees</th>
                      <th class="w33">Athletes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ta-c"><span class="drop js-drop"></span></td>
                      <td class="ta-c"><span class="drop js-drop"></span></td>
                    </tr>
                    <tr>
                      <td class="ta-c"><span class="drop js-drop"></span></td>
                      <td class="ta-c"><span class="drop js-drop"></span></td>
                    </tr>
                    <tr>
                      <td class="ta-c"><span class="drop js-drop"></span></td>
                      <td class="ta-c"><span class="drop js-drop"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2 || s_actividad == 3" ng-click="reloadEscribSelectDrag()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2 || s_actividad == 3" ng-click="CompTxt_SelectMult_Drag()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', '720');</script>