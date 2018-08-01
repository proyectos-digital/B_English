
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5 class="ta-c">Read the following extract and choose the correct answers.</h5>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent">
          <div class="row">
            <div class="col xs12 md6">
              <h5 class="ta-c u-textWhite">Mothers around the world on Mother’s Day</h5>
              <p class="ta-c">Wikinews.org, Sunday, May 10, 2009</p>
              <p class="ta-j"><strong>1</strong> Mother’s Day was established on the second Sunday in May by Anna Jarvis after her
                mother passed away. Former United States President Woodrow Wilson <strong>proclaimed</strong>
                the inaugural Mother’s Day in 1914.<br/>
                “Miss Jarvis thought Mother’s Day should be a day you spend with your mother, or a day
                when you do something special for her like fix her dinner or repair her broken stairs,”
                said an archivist at Mary Baldwin College. “Mother’s Day has nothing to do with candy,”
                said Jarvis, “It’s really a shame to waste flowers for Mother’s Day.”<br/>
                This year again, the American congress approved the observance and requested the
                president to call upon citizens to <strong>partake</strong> in the time honored recognition of this
                tradition. “I, Barack Obama, President of the United States of America, do hereby
                proclaim May 10, 2009, as Mother’s Day. I urge all Americans to express their love,
                respect, and gratitude to mothers everywhere, and I call upon all citizens to observe this
                day with appropriate programs, ceremonies, and activities.”<br/>
                Tara McDonald, the mother of abducted Woodstock, Ontario eight year old, Victoria (Tori)
                Stafford, said “I would really hope to have my child home for Mother’s Day.” McDonald
                said that dealing with Tori’s absence since April 8 has resulted in “times when I sit in my
                house and bawl my eyes out and I <strong>curl</strong> up into a ball and I sob.”<br/>
                
              </p>
              <p class="ta-j"><strong>2</strong> 61 year old Lynda McDade graduated Saturday from the University of Detroit along
                with her two daughters.<br/>
                A mother under court order forbidding her access to her three children for three years
                was thrown in jail for approaching her child and telling him she loved him. The mother
                has been accused of turning the children against the father, a rich City financier who
                now has custody of the family’s children.<br/>
                Gloria Steele, Acting Assistant Administrator for Global Health honors the 20th
                anniversary of the United States Agency for International Development (USAID),
                
                
              </p>
            </div>
            <div class="col xs12 md6">
              <p class="ta-j">
                “Women make extraordinary contributions as caregivers and caretakers, as well as
                breadwinners and bread-makers. By averting maternal death and disability that cost
                families and communities so much, we can improve the productive capacity of women
                in their own nations”.<br/>
                Nadya Suleman, known as Octomom is spending this Mother’s Day weekend in a
                California hospital undergoing uterine surgery. This operation will also make Suleman’s
                family complete with fourteen children as she will no longer be able to physically
                conceive a child following the surgery.<br/>
                
              </p>
              <p class="ta-j"><strong>3</strong> Mary Ann Wright, known as “Mother Wright”, died Thursday in Oakland, California,
                but not before achieving renown as advocate for the poor, and feeding the hungry.
                She founded the Mother May Ann Wright Foundation from her modest beginnings
                sparing meals to others while subsisting herself on Social Security checks.
                Maree Vaile is a mother of three who was humbled by New Zealand’s Mother of
                the Year award. Her husband and children recognized the adversity the family has
                overcome and wanted to show their appreciation by nominating her in the “Mums on
                Top” online competition.<br/>
                In Taiwan, students from South Taiwan who attend University in North Taiwan could
                board a special train provided by the Taiwan Railway Administration so they could
                visit their mothers on Mother’s Day. “Give your mother a hug, a big and strong hug,
                because love is not only a noun, it is also a verb,” President Ma Ying-jeou said, “The
                older mothers grow, the greater is their need to feel needed. So we should show our
                love for our mother.”<br/>
              </p>
              <p>Read the full story here: <a href="https://en.wikinews.org/wiki/Mothers_around_the_world_on_Mother%27s_Day" target="blank">https://en.wikinews.org/wiki</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <div Class="row">
            <h6><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt:</h6>
            <p class="ta-j">
              61-year-old Lynda McDade graduated Saturday from the University of Detroit along with her
              two daughters.<br/>
              A mother under court order forbidding her access to her three children for three years was
              thrown in jail for approaching her child and telling him she loved him. The mother has been
              accused of turning the children against the father, a rich City financier who now has custody of
              the family’s children.<br/>
              Gloria Steele, Acting Assistant Administrator for Global Health honors the 20th anniversary of
              the United States Agency for International Development (USAID), “Women make extraordinary
              contributions as caregivers and caretakers, as well as breadwinners and bread-makers. By
              averting maternal death and disability that cost families and communities so much, we can
              improve the productive capacity of women in their own nations”.<br/>
              Nadya Suleman, known as Octomom is spending this mother’s day weekend in a California
              hospital undergoing uterine surgery. This operation will also make Suleman’s family complete with
              fourteen children as she will no longer be able to physically conceive a child following the surgery.
              
            </p>
            <div Class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_1">Family troubles.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_2">Strong women.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_3">Mothers of all kind.</label>
            </div>
          </div>
          <div Class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> Answer “true”, “false” or “information not given”.</h6>
            <p class="ta-j">
              Mother’s day is only celebrated in South Taiwan.
              
            </p>
            <div Class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_4">True.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_5">False.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_6">Information not given.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div Class="row">
            <h6><strong class="u-textColor_4">•</strong> Match the information given with one of the paragraphs from the text.</h6>
            <p class="ta-j">
              A young girl was kidnapped in Canada.
              
            </p>
            <div Class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_10">1.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_11">2.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_12" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_12">3.</label>
            </div>
          </div>
          <div Class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> Complete the sentence with the correct word.</h6>
            <p class="ta-j">The boys really enjoyed 
              <input class="c-input js-escribir" type="text" readonly="readonly" ng-model="completeTextoa"/> in the events this last weekend.
              
            </p>
            <div Class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_13" ng-click="completeTextoa = 'proclaiming' " value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_13">proclaiming</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_14" ng-click="completeTextoa = 'partaking' " value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_14">partaking</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_15" ng-click="completeTextoa = 'curl up' " value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_15">curl up</label>
            </div>
          </div>
          <div Class="row mt30">
            <h6><strong class="u-textColor_4">•</strong> Choose the correct answer.</h6>
            <p class="ta-j">
              The celebration of Mother’s Day is...
              
            </p>
            <div Class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_16" value="1"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_16">a permanent national holiday in the United States.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_17" value="2"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_17">decided annually by the President of the United States.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_18" value="3"/>
              <label class="c-Checkbox w100 ta-l " for="selInput_18">is only celebrated in southern Taiwan.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
