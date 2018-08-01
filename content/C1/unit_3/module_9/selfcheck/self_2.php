
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Read the following extract and choose the correct answers.</h5>
      <div class="row">
        <div class="c-cardGreen">
          <div class="c-cardGreenContent u-textColor_1">
            <div class="row">
              <div class="col xs12 md6">
                <h5 class="ta-c">French ban on face covering</h5>
                <p>
                  taThe French ban on religious garb (French: LOI n° 2010-1192: Loi interdisant la
                  dissimulation du visage dans l’espace public,[1] “Law of 2010-1192: Act prohibiting
                  concealment of the face in public space”) is an act of parliament passed by the Senate
                  of France on 14 September 2010, resulting in the ban on the wearing of face-covering
                  headgear, including masks, helmets, balaclavas, niqābs and other veils covering the face
                  in public places, except under specified circumstances.[2] The ban also applies to the
                  burqa, a full-body covering, if it covers the face. Consequently, full body costumes and
                  Zentais (skin-tight garments covering entire body) were banned. The bill had previously
                  been passed by the National Assembly of France on 13 July 2010.[3]<br/>
                  Arguments supporting this proposal include that religious garb prevent the clear
                  identification of a person (which is both a security risk, and a social hindrance within
                  a society which relies on facial recognition and expression in communication), that
                  forcing women to cover their faces (as happens in some Muslim cultures) is sexist,
                  and that Muslims who continue this practice should be forced to assimilate traditional
                  French social norms. Argument against include that the ban encroaches on individual
                  freedoms,[4] and that it discriminates against interpretations of Islam that require or
                  encourage women to wear face coverings, that it takes away the choice of women to
                  decide whether to dress according to a particular standard of modesty, and prevents
                  anonymity in situations where it might be socially or personally desirable. (Islamic
                  scholars differ on whether there is a religious requirement for a full face covering as
                  was required under the Taliban regime and practiced elsewhere, or merely for a head
                  and hair covering such as a hijab, which is practiced widely and legally mandated in Iran,
                  Saudi Arabia, and parts of Indonesia. Some Muslims follow neither rule.)<br/>
                  As of 11 April 2011, it is illegal to wear a face-covering veil or other masks in public places
                  such as the street, shops, museums, public transportation, and parks. Veils such as the
                  chador, scarves and other headwear that do not cover the face, are not affected by this
                  law and can be worn.[5] The law applies to all citizens, including men and non-Muslims,
                </p>
              </div>
              <div class="col xs12 md6">
                <p class="ta-j"><img class="u-responsive-img w50 ml10 mt10 f-l" src="unit_3/module_9/assets/images/self_2_1.png" alt=""/>
                  who may not cover their face in public except
                  where specifically provided by law (such as
                  motor-bike riders and safety workers) and
                  during established occasional events (such
                  as some carnivals). The law imposes a fine of
                  up to €150, and/or participation in citizenship
                  education, for those who violate the law.[6][7]
                  The bill also penalises, with a fine of €30,000
                  and one year in prison, anyone who forces (by
                  violence, threats, or abuse of power) another
                  to wear face coverings; these penalties may be
                  doubled if the victim is under the age of 18.[2]
                  [6][8]<br/>
                  As a result of the law, the only exceptions to
                  a woman wearing a niqāb in public will be if
                  she is travelling in a private car or worshiping in a religious place.[9] French police say
                  that while there are five million Muslims in France, fewer than 2,000 are thought to
                  fully cover their faces with a veil.[3] The wearing of all conspicuous religious symbols
                  in public schools was previously banned in 2004 by a different law, the French law on
                  secularity and conspicuous religious symbols in schools. This affected the wearing of
                  Islamic veils and headscarves in schools, as well as turbans and other distinctive items
                  of dress.<br/>
                  The law was challenged and taken to the European Court of Human Rights which upheld
                  the French law on 1 July 2014, accepting the argument of the French government that
                  the law was based on “a certain idea of living together”.[10]<br/><br/>
                  <strong>Read the full story here:</strong> <a href="https://en.wikipedia.org/wiki/French_ban_on_face_covering" target="blank"> en.wikipedia.org</a>
                  
                  
                  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/> <br/>
            As a result of the law, the only exceptions to a woman wearing a niqāb in public will be if she
            is travelling in a private car or worshiping in a religious place.[9] French police say that while
            there are five million Muslims in France, fewer than 2,000 are thought to fully cover their faces
            with a veil.[3] The wearing of all conspicuous religious symbols in public schools was previously
            banned in 2004 by a different law, the French law on secularity and conspicuous religious
            symbols in schools. This affected the wearing of Islamic veils and headscarves in schools, as
            well as turbans and other distinctive items of dress.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">School ban on religious symbols.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">Freedom of religious practices.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">The rule of secularism.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            The National Assembly of France is responsible for passing laws regarding religion.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text. <br/> <br/>
            Points for and against the public wearing of religious garb.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_7">1.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_8">2.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_9">3.</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Fill in the summary using the words from the paragraph.</p>
          <div class="row">
            <div class="col col-center xs12 md10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>violate | veil | covering | garb | hindrance | conspicuous</span></div>
              </div>
            </div>
          </div>
          <p class="lh25">With the passing of the latest French law that puts a ban on the wearing of religious
            <input class="c-input js-escribir" type="text"/>
            or head
            <input class="c-input js-escribir" type="text"/> in public spaces for all citizens, there are those who have divergent
            arguments on the issue. Opposers say that the law will
            <input class="c-input js-escribir" type="text"/> their religious faith and be
            a
            <input class="c-input js-escribir" type="text"/> to them. On the other hand, supporters say it will allow the easy identification
            of individuals.
            
          </p>
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</p>
          <div class="row">
            <div class="col col-center xs12 md10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>assimilate | cover | discriminate | encroach | violate</span></div>
              </div>
            </div>
          </div>
          <p class="lh25">Many people are of the opinion that laws passed to suppress their sense of fashion will  
            <input class="c-input js-escribir" type="text"/> on their right to freedom of expression.
            
          </p>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer.    <br/> <br/>
            Why doesn’t the new law only affect women?
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox w100 ta-c " for="selInput_10">Because women are more at risk for being forced to cover their faces.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox w100 ta-c " for="selInput_11">Because men, whether religious or not, also wear clothing that can conceal their faces.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox w100 ta-c " for="selInput_12">Because both women and men generally cover their faces.</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>
