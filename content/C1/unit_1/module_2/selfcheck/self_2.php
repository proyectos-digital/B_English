
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <h5> Read the following extract and choose the correct answers.</h5>
          <div class="row ta-c">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent u-textColor_1">
                <h5 class="ta-c">Vitamin D deficiency more common, serious, than thought</h5>
                <p class="ta-c">Friday, November 2, 2007</p>
                <p class="ta-j mt20"><strong>1</strong>. Two scientists working at McGill University in Canada, reporting on their <strong>research</strong> and the research of other scientists, state in Scientific American that Vitamin D may have many uses in the human body besides building strong bones.</p>
                <p class="ta-j mt20"><strong>2</strong>. According to the scientists, Luz E. Tavera-Mendoza and John H. White, Vitamin D  <strong>intake</strong> may also be beneficial in the prevention of cancer, multiple sclerosis, diabetes, and fighting tuberculosis, influenza and inflammatory bowel disease. The researchers say that there is an  <strong>emerging</strong> “widespread  <strong>consensus</strong>” among experts that a large part of the population has levels of Vitamin D in their bodies that is well below optimal concentrations for health, particularly in  <strong>temperate regions</strong>, due to decreased sunlight and or less time outdoors, and during or just after the winter months. One study indicated that as many as 92% of adolescent girls in Northern Europe may have deficient levels of Vitamin D and 37% have severely deficient levels.</p>
                <p class="ta-j mt20"><strong>3</strong>. The problem is far worse among African-Americans than Americans with lighter skin. Almost half of African-American women may be seriously Vitamin D deficient, with presumably still another fraction deficient. Furthermore, the authors say researchers at Harvard University and elsewhere believe the FDA minimum recommended daily allowance of Vitamin D is far too low. The Recommended Dietary Allowance (RDA) ranges from 200 to 600 International Units (IU). In fact, the authors themselves take Vitamin D supplements. The first author takes 1000 IU during wintertime and the second author takes 5,000 IU in wintertime. They do caution, however, that there is a level at which Vitamin D becomes toxic.</p>
                <p class="ta-j mt20"><strong>4</strong>. Similar research has also been recently performed by researchers at the Queensland University of Technology who found that many elderly were likely not getting sufficient Vitamin D due in part to insufficient exposure to the sun.</p>
                <p class="ta-j mt20">Read the full story here: <a href="https://en.wikinews.org/wiki/Vitamin_D_deficiency_more_common,_serious,_than_thought" target="blank">https://en.wikinews.org/wiki/</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5 col-center">
          <h5>Answer the following question based on the reading above.</h5>
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following extract:</p>
            <p>The problem is far worse among African-Americans than Americans with lighter skin. Almost half of African-American women may be seriously Vitamin D deficient, with presumably still another fraction deficient. Furthermore, the authors say researchers at Harvard University and elsewhere believe the FDA minimum recommended daily allowance of Vitamin D is far too low. The Recommended Dietary Allowance (RDA) ranges from 200 to 600 International Units (IU). In fact, the authors themselves take Vitamin D supplements. The first author takes 1000 IU during wintertime and the second author takes 5,000 IU in wintertime. They do caution, however, that there is a level at which Vitamin D becomes toxic.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_1">The FDA rules.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_2">African Americans vs light skin American.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_3">Recommended vitamin C levels.</label>
                <input class="js-select" type="hidden" ng-model="valorinputa"/>
              </div>
            </p>
          </div>
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> Answer “true”, “false” or “information not given”.</p>
            <p>Only a small percentage of the population has sufficient levels of vitamin D to be considered healthy.
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_4">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_5">False.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_6">Information not given.</label>
                <input class="js-select" type="hidden" ng-model="valorinputb"/>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content " ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 md6">
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</p>
            <p>Due to the conditions of the winter months some people do not get enough vitamins.
              <div class="row row-flex justify-around">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                <label class="c-Checkbox xs12 md3" for="selInput_7">1.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                <label class="c-Checkbox xs12 md3" for="selInput_8">2.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                <label class="c-Checkbox xs12 md3" for="selInput_9">3.</label>
                <input class="js-select" type="hidden" ng-model="valorinputc"/>
              </div>
            </p>
          </div>
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>intake | research | emerging | temperate climates | consensus</span></div>
              </div>
              <div class="row">
                <p class="lh25">There is 
                  <input class="c-input js-escribir" type="text"/> information  based on  
                  <input class="c-input js-escribir" type="text"/> conducted by scientists that caused them to reach a 
                  <input class="c-input js-escribir" type="text"/> that people in countries with 
                  <input class="c-input js-escribir" type="text"/> do not have sufficient 
                  <input class="c-input js-escribir" type="text"/> of vitamin D.
                </p>
              </div>
            </p>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row col-center mt30">
            <p><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>intake | research | emerging | temperate climate | consensus</span></div>
              </div>
              <div class="row">
                <p class="lh25">The 
                  <input class="c-input js-escribir" type="text"/> trend in fitness today is the use of apps to monitor performance.
                </p>
              </div>
            </p>
          </div>
          <div class="row col-center">
            <p><strong class="u-textColor_4">•</strong> Choose the correct answer.</p>
            <p>Vitamin D…
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                <label class="c-Checkbox row ta-l " for="selInput_10">Levels in most people are at a healthy level.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                <label class="c-Checkbox row ta-l " for="selInput_11">The FDA recommends 1000 IU per day.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                <label class="c-Checkbox row ta-l " for="selInput_12">Can be poisonous.</label>
                <input class="js-select" type="hidden" ng-model="valorinputd"/>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
