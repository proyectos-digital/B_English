
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c"> Read the following excerpt and choose the correct answers.</h5>
      <div class="justify-around align-items-center row row-flex">
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <div class="row">
                <h5 class="ta-c">Fall ‘08 styles at New York Fashion Week: the miniskirt is back again</h5>
                <p class="ta-c">Sunday, February 3, 2008</p>
                <p class="ta-j">
                  The first two days of New York Fashion Week have debuted fashions similar to past
                  years. Since Friday’s opening of what is the world’s largest fashion show, many designers
                  have unveiled their newest designs. These include turtleneck sweaters and miniskirts.
                  However, the ubiquitous fashion staple seen on the runway has been incorporated in
                  designs that are even shorter than in past years.<br/>
                  Major labels like Nicole Miller, Lacoste, BCBG, and Baby Phat debuted their styles in the first
                  two days of the week-long extravaganza, nominally the official unveiling of the Fall 2008
                  styles and leading up to similar fashion shows in Los Angeles, London, Paris and Milan.
                  If the first two days of Fashion Week are any indication, another year of miniskirts are in
                  vogue, partnered with tights, which were widely expected to go out of fashion for 2008.
                  Day one kicked off with a Red Dress Campaign fashion show, aimed at educating people
                  on the dangers of heart disease. Among the celebrities to walk in red gowns for the Red
                  Dress fashion show were Rita Moreno and Liza Minnelli.<br/>
                  Talk of a budding recession in the United States has sparked fears in the couture world,
                  in which a lackluster fashion season can make or break many designers, both up-and-comers
                  and established names. New York designer Nanette Lepore has led the charge
                  to save money by only debuting two different collections a year.<br/>
                  New York Fashion Week runs until Friday. Designers yet to unveil their fall lines include
                  Oscar de la Renta, Anna Sui, Bill Blass, Michael Kors, Vera Wang, and Diane von
                  Fürstenberg.<br/><br/>
                  
                  Read the full story here: <a href="https://en.wikinews.org/wiki/Fall_%2708_styles_at_New_York_Fashion_Week:_the_miniskirt_is_back_again" target="blank">en.wikinews.org</a>
                  
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_9/assets/images/test_1_1.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <div class="col xs12 md11 col-center">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:</h6>
              <p class="ta-j">
                Talk of a budding recession in the United States has sparked fears in the couture world, in
                which a lackluster fashion season can make or break many designers, both up-and-comers and
                established names. New York designer Nanette Lepore has led the charge to save money by
                only debuting two different collections a year.
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_1">Designers’ unsuccessful collections.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_2">The fashion industry’s big fear.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_3">Change for progress.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”.</h6>
              <p class="ta-j">New designers are going to show their collection the same day as other already established designers.</p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
              <p class="ta-j">Fashion pieces to bring awareness.</p>
              <div class="row row-flex justify-around">
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_19" value="1"/>
                <label class="c-Checkbox xs3 " for="selInput_19">5.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_20" value="2"/>
                <label class="c-Checkbox xs3 " for="selInput_20">2.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_21" value="3"/>
                <label class="c-Checkbox xs3 " for="selInput_21">3.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="col xs12 md11 col-center">
            <div class="row">
              <h6><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.</h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>lackluster | couture | kick off | ubiquitous | budding | debut</span></div>
              </div>
              <p class="lh25">New York Fashion Week is very well known as it is a week when 
                <input class="c-input js-escribir" type="text"/> designers as well as
                those whose are known to the fashion world, go to 
                <input class="c-input js-escribir" type="text"/> their new collections. However, there is
                the fear of a recession in the US, which could seriously affect designers and their businesses,
                especially if they 
                <input class="c-input js-escribir" type="text"/> their season with a 
                <input class="c-input js-escribir" type="text"/> collection.
              </p>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</h6>
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center"><span>kick off | spark | unveil | partner with | nominally</span></div>
              </div>
              <p class="lh25">Samsung plans to 
                <input class="c-input js-escribir" type="text"/> its latest phone model in March at a televised event.
              </p>
            </div>
            <div class="row mt20">
              <h6><strong class="u-textColor_4">•</strong> Choose the correct answer for the following question.</h6>
              <p class="ta-j">
                Some designers now simply unveil two collections annually due to...
                
              </p>
              <div class="row">
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_22" value="1"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_22">Poor sales.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_23" value="2"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_23">The stress of having to participate in several fashion shows around the world.</label>
                <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_24" value="3"/>
                <label class="c-Checkbox w100 ta-l " for="selInput_24">A possible economic decline.</label>
                <input class="js-select" type="hidden"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
