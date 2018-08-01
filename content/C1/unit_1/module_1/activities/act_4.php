
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <main class="theNews">
        <div class="paperNews" layout="grid" paperNews="1">
          <figure class="paperNews-block"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_4_1.jpg" alt="" img-fit="cover h100 w100"/>
            <figcaption>Argentinian workers preparing to defend control of factory</figcaption>
          </figure>
          <div class="paperNews-block"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_4_2.png" alt="" img-fit="cover w100"/>
            <p>Thirty workers travelled the 1,200 kilometers from Neuquén to protest outside the central courthouse in Buenos Aires.<br/><br/><strong class="mr10">A. </strong>   Factory workers at a ceramic factory in 
              <u>Neuquén</u>, 
              <u>Argentina</u> are preparing to defend their autonomous running of their <strong>workplace</strong>, as the courts start to look at <strong>appointing</strong> an owner.  The workers have been running the factory strong since the Argentinian government <strong>meltdown</strong> in 2001, and say they are more effective working independently.
            </p>
          </div>
          <div class="paperNews-block"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_4_3.jpg" alt="" img-fit="cover h100 w100"/></div>
          <div class="paperNews-block">
            <p><strong class="mr10">B.</strong>There are now 410 workers at 
              <u>FaSinPat</u> ('Fabrica sin Patrones' or 'Factory without Bosses'), having hired over 170 new workers in four years of autonomous control. The factory is <strong>widely known</strong> as Zanon, the name under the previous owner, Luis Zanon, who <strong>accumulated</strong> some US$170 million in <strong>debt</strong>, and <strong>shut down</strong> the factory, <strong>firing</strong> the workers.
            </p>
            <p><strong class="mr10">C.</strong>Argentinian government and businesses were in chaos at the time, with the government dissolving repeatedly and defaulting on $88 billion of debt, inflation <strong>skyrocketing</strong> and people demanding money from banks who had closed their doors.</p>
          </div>
          <div class="paperNews-block">
            <p><strong class="mr10">D.</strong> Like over 200 Argentinian workplaces facing similar conditions, the workers chose spontaneously to run the factory themselves, and continued maintenance and production, to keep trading on their own behalf.</p>
            <p><strong class="mr10">E.</strong> Now thirty workers have travelled the 1,200 kilometers to Buenos Aires, presenting a <strong>petition</strong> containing thousands of signatures from all over the world at the central courthouse, and mobilizing outside.</p>
            <p><strong class="mr10">F.</strong> "With these actions we are marking a playing ground for the judge," said Raul Godoy, Zanon worker and General Secretary of the Ceramists' Union.</p>
          </div>
        </div>
        <div class="paperNews" layout="grid" paperNews="2">
          <div class="paperNews-block">
            <p><strong class="mr10">G.</strong>As the government has continued its legal <strong>assault</strong> upon the Zanon factory, at least one factory employee has been reported to have suffered repeated threats and violence at the hand of unknown attackers.</p>
            <p><strong class="mr10">H.</strong>Esteban Magnani, author of El Cambio Silencioso (The Silent Change), a book about worker cooperatives in Argentina told  <i>UpsideDownWorld.org</i>, "In Neuquen you have Jorge Sobisch, a right-wing governor who wants to be the new [President] 
              <u>Carlos Menem</u> ... wants to show how tough he is ... Zanon is very <strong>politicized</strong> and famous, which is bad for a governor who wants to be seen as a right-wing savior. Sobisch feels the need to <strong>crack down</strong> now, because the longer he waits, the more powerful Zanon becomes." Some of the workers feel that Sobisch may be approving the attacks or may be guilty in failing to defend the workers.
            </p>
            <p><strong class="mr10">I.</strong>Magnani indicates incumbent President 
              <u>Néstor  Kirchner</u>, described by Wikipedia as "a 
              <u>Peronist</u> with <strong>leftist</strong> leanings", might defend Zanon. "One of Kirchner’s flags is human rights. Now with this kidnapping and the continued threats, Kirchner shouldn’t have any excuse to not do something about this."
            </p>
          </div>
          <div class="paperNews-block">
            <p><strong class="mr10">J.</strong>"Subway workers, train workers, airline workers, other recuperated businesses and many other sectors have made it clear that the employees at Zanon will not be alone." Says one Zanon worker, "We are willing to defend the factory with our lives."</p>
            <p><strong class="mr10">K.</strong>It may not come to that. Governor Sobisch has been attempting to <strong>evict</strong> the workers of Zanon in an <strong>ongoing</strong>, highly politicized legal battle for several years. Sobisch has been ordered by the Federal Supreme Court of Argentina to evict the workers as soon as possible.</p>
            <p><strong class="mr10">L.</strong>Other sources consulted about the past record of behavior by Sobisch do not reflect a record of <strong>overt</strong> violence against the workers.  At least one source from October 2004 said that Sobish wants the workers to leave the Zanon factory and work instead in a government-sponsored micro-enterprise project for unemployed workers, constructing prefabricated houses.</p>
            <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Argentinian_workers_preparing_to_defend_control_of_factory" target="_blank">https://en.wikinews.org/wiki/Argentinian_workers_preparing_to_defend_control_of_factory</a></p>
          </div>
          <div class="paperNews-block"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_4_4.jpg" alt="" img-fit="cover h100 w100"/></div>
        </div>
      </main>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h5>Answer the following questions based on the text you have read.</h5>
      </div>
      <div class="row row-flex mt30">
        <div class="col-flex-xs12 col-flex-md5 ma-r">
          <div class="row mt20">
            <h6>Choose the most appropriate heading for the following extract:</h6>
            <p>Factory workers at a ceramic factory in 
              <u>Neuquén</u>, 
              <u>Argentina</u> are preparing to defend their autonomous running of their <strong>workplace</strong>, as the courts start to look at <strong>appointing</strong> an owner. The workers have been running the factory themselves since the Argentinian government meltdown in 2001, and say they are more effective working independently.
            </p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1" ng-click="valorinputa=1"/>
                  <label class="c-Checkbox " for="selInput_1"><span>Argentina.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2" ng-click="valorinputa=2"/>
                  <label class="c-Checkbox " for="selInput_2"><span>Worker’s rights in today’s workplace.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3" ng-click="valorinputa=3"/>
                  <label class="c-Checkbox " for="selInput_3"><span>The worker managed company.</span></label>
                  <input class="js-select" type="hidden" ng-model="valorinputa"/>
                </div>
              </li>
            </ul>
          </div>
          <div class="row mt20">
            <h6>Mark the following statement “true”, “false” or “information not given”.</h6>
            <p>The workers at the Zanon plant are left-wing activists.</p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1" ng-click="valorinputb=1"/>
                  <label class="c-Checkbox " for="selInput_4"><span>True.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2" ng-click="valorinputb=2"/>
                  <label class="c-Checkbox " for="selInput_5"><span>False.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3" ng-click="valorinputb=3"/>
                  <label class="c-Checkbox " for="selInput_6"><span>Information not given.</span></label>
                  <input class="js-select" type="hidden" ng-model="valorinputb"/>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 ma-l">
          <div class="row mt20">
            <h6>Match the information given with one of the paragraphs from the reading exercise.</h6>
            <p>Showing your authority and iron will to the people.</p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1" ng-click="valorinputc=1"/>
                  <label class="c-Checkbox " for="selInput_7"><span>Paragraph B.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2" ng-click="valorinputc=2"/>
                  <label class="c-Checkbox " for="selInput_8"><span>Paragraph D.</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3" ng-click="valorinputc=3"/>
                  <label class="c-Checkbox " for="selInput_9"><span>Paragraph H.</span></label>
                  <input class="js-select" type="hidden" ng-model="valorinputc"/>
                </div>
              </li>
            </ul>
          </div>
          <div class="row mt20">
            <h6>Choose the correct answer for the following sentences.</h6>
            <p>The Zanon factory hired <span class="c-textField">
                <input class="c-input ta-c" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span> in four years.</p>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1" ng-click="valorinputd=1"/>
                  <label class="c-Checkbox " for="selInput_10" ng-click="txtcaptura_a = 'a new owner'"><span>a new owner</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2" ng-click="valorinputd=2"/>
                  <label class="c-Checkbox " for="selInput_11" ng-click="txtcaptura_a = 'over 410 workers'"><span>over 410 workers</span></label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3" ng-click="valorinputd=3"/>
                  <label class="c-Checkbox " for="selInput_12" ng-click="txtcaptura_a = 'more than 100 new employees'"><span>more than 100 new employees</span></label>
                  <input class="js-select" type="hidden" ng-model="valorinputd"/>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row row-flex mt20">
        <div class="col-flex-xs12 col-flex-md5 ma-r">
          <div class="row mt20">
            <h6>Fill in the summary using the words form the paragraph.</h6>
            <div class="row">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent row-flex justify-center align-items-center">skyrocketing | meltdown | accumulated | workplace</div>
              </div>
            </div>
            <div class="row">
              <p>
                The workers from the Zanon factory have taken over their
                <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span> .
                The country had a political
                <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                resulting
                <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                price increase. The previous owners had to shut down the factory due to large debt that was
                <span class="c-textField">
                  <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                over the years.
              </p>
            </div>
          </div>
          <div class="row mt20">
            <h6>Complete the sentences with a word from the box below.</h6>
            <div class="row">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent row-flex justify-center align-items-center">debt | shut down | fire | accumulated | skyrocket</div>
              </div>
            </div>
            <div class="row">
              <ul class="c-listDefault">
                <li>
                  When there is hyperinflation, the price of common goods and services
                  <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span> .
                </li>
                <li>
                  When
                  <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                  is
                  <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                  to a certain level, there is no other option than to
                  <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                  the factory and
                  <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder=""/></span>
                  the works.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 ma-l">
          <div class="row mt20">
            <h6>Complete the table by using the correct person from the passage.</h6>
            <div Class="row row-flex justify-center">
              <table class="c-table-estilo_tres">
                <thead>
                  <tr>
                    <th class="xs6">Leftist</th>
                    <th class="xs6">Right wing</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></td>
                    <td><span class="c-textField">
                        <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></td>
                  </tr>
                </tbody>
              </table>
              <div Class="row ta-c mt30"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_4_5.png"/></div>
            </div>
          </div>
        </div>
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