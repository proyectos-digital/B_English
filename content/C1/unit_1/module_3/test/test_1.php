
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c lh25 u-textColor_1">
              <h5>British schools to inform parents of overweight children</h5>
              <p>Wikinews.org Tuesday, August 5, 2008</p>
              <p class="ta-l"><strong>1</strong> Starting in September, British schools will inform parents of their child’s weight in an attempt to deal with the growing issue of obesity, according to an announcement by the Department of Health (DoH).</p>
              <p class="ta-l"><strong>2</strong> Nearly 23% of children aged 4-5 are overweight or obese, with that figure growing to nearly 32% for children aged 10-11. Standard procedures in schools involve weighing and measuring children in schools to determine their body mass index (BMI). The information is passed on to the National Health Service (NHS) to determine the extent of obesity in the area.</p>
              <p class="ta-l"><strong>3</strong> Parents will soon be sent a letter of their child’s weight, including advice on what to do if the child is overweight. However, government ministers have ruled that “offensive” language, such as “obese” or “fat” will not be allowed to be used in the letters, with words such as “overweight” being used instead.</p>
              <p class="ta-l"><strong>4</strong> The letters will provide useful information to parents, such as the problems caused by obesity like diabetes, and how to overcome these problems. Research has shown that parents often do not realize their child is overweight, and the letters will be a “wake-up call” to them.</p>
              <p class="ta-l">“We have to get the balance right between being a nanny state and a neglectful state,” said Will Cavendish, the director of health and wellbeing at the DoH.</p>
            </div>
          </div>
          <h6><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below.</h6>
          <div class="col xs12">
            <div class="c-cardGreen mt10">
              <div class="c-cardGreenContent ta-c">
                <p>heathy | athetic | obese | skinny</p>
              </div>
            </div>
          </div>
          <p>Jimmy is extremely overweight, he might be 
            <input class="c-input js-escribir" type="text"/>
          </p>
        </div>
        <div class="col xs12 md6">
          <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:</h6>
          <p>Nearly 23% of children aged 4-5 are overweight or obese, with that figure growing to nearly 32% for children aged 10-11. Standard procedures in schools involve weighing and measuring children in schools to determine their body mass index (BMI). The information is passed on to the National Health Service (NHS) to determine the extent of obesity in the area.</p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_1">The NHS.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_2">Children and the NHS.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_3">Childhood health.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6 class="mt30"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”.</h6>
          <p>Parents will be held accountable for their children’s weight.</p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_4">True.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_5">False.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_6">Information not given.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6 class="mt30"><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
          <p>The government does not want to over reach on the issue of weight.</p>
          <div class="row row-flex justify-around">
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox xs12 md3 " for="selInput_7">1.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox xs12 md3 " for="selInput_8">3.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox xs12 md3 " for="selInput_9">4.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <h6 class="mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer for the following question.</h6>
          <p>The main purpose of weighting students is…</p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox row ta-l " for="selInput_10">To determine the level of obesity for the NHS data.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox row ta-l " for="selInput_11">To inform parents about the health of their children.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox row ta-l " for="selInput_12">As part of the school curriculum</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>