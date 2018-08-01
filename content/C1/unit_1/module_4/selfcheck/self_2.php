
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Read the following extract and choose the correct answers.</h5>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent">
          <div class="row">
            <div class="col xs12 md6">
              <h5 class="ta-c u-textWhite">New South Wales to introduce ‘parenting contracts’</h5>
              <p class="ta-c">Wikinews.org, Monday, February 6, 2006</p>
              <p class="ta-j"><strong>1</strong> New South Wales Premier Morris Iemma announced Sunday that his government
                would be introducing “parenting contracts” for parents of children who are at <strong>risk</strong>
                of neglect. The contracts are the next element of the government’s “respect and
                responsibility” reforms announced last month.
                Premier Iemma believes that the contracts will help to reduce <strong>juvenile crime</strong> by
                forcing parents to take responsibility for their children’s actions.
              </p>
              <p class="ta-j"><strong>2</strong> Parents would be forced to sign the contracts by the children’s court. They could
                require parents to attend <strong>parenting</strong> classes, undergo counselling, stop drug use or
                stop consuming excessive amounts of alcohol depending on the situation. The NSW
                Department of Community Services would be allowed to apply to the court for the
                contracts to be drawn up.
              </p>
              <p class="ta-j"><img class="u-responsive-img w50 mr15" src="unit_1/module_4/assets/images/self_2_1.png" alt="" align="left"/>
                If parents failed to <strong>comply</strong> with the contracts
                their children would be removed by authorities.
                The Department of Community Services would
                be able to apply to the court for contracts to
                be drawn up.<br/>
                The plan follows the murder of a taxi driver
                in Sydney by two 14-year-old girls last week.
                Following the arrest of the girls, Mr. Iemma said
                he was concerned about the whereabouts of the
                girl’s parents. Mr. Iemma denies that the contracts
                are a <strong>knee-jerk</strong> reaction to that incident.<br/><br/>
                <strong>3</strong> Speaking of the plan Mr. Iemma said, “We know the majority of people naturally take
              </p>
            </div>
            <div class="col xs12 md6">
              <p class="ta-j">their responsibilities as parents very seriously.” <br/>
                “However, those children who are failed in this regard by their parents are at risk of
                becoming adolescents and adults without respect.” <br/>
                NSW Community Services minister, Reba Meagher referred to studies showing that
                out of 1,000 neglected children, 256 came into contact with the juvenile justice system.
                “There is plenty of evidence to show that children who are failed by their parents are
                more likely not to complete their schooling, to become involved in crime and to abuse
                their own children.” said Ms. Meagher.<br/>
                A similar proposal has been made in South Australia by the opposition. The Liberals
                have promised a similar system of contracts in South Australia if they are elected.  <br/><br/>
                
                <strong>4</strong> Child welfare advocates claim that it is not clear whether or not the plan is the best
                solution to the problem.
                Jane Woodruff from the Association of Child Welfare Agencies said “Do we know that this
                is the right strategy and if we do, where’s that evidence, where’s that research, where’s
                that practice experience so we don’t make mistakes in such an important area?”.
                “If parents are going to be required to attend a certain range of services, who’s actually
                going to provide those services?” she said.
                Tasmania’s Human Services minister, David Llewellyn said that he has not been able to
                look at the proposal in detail, but felt that “on the surface it does not seem appropriate
                legislation for Tasmania”.
                
              </p>
              <p>Read the full story here: <a href="https://en.wikinews.org/wiki/New_South_Wales_to_introduce_%27parenting_contracts%27">https://en.wikinews.org/wiki</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 md6">
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose the most appropriate heading for the following excerpt: <br/> <br/>
            Parents would be forced to sign the contracts by the children’s court. They could require parents
            to attend parenting classes, undergo counselling, stop drug use or stop consuming excessive
            amounts of alcohol depending on the situation. The NSW Department of Community Services
            would be allowed to apply to the court for the contracts to be drawn up. <br/>
            If parents failed to comply with the contracts their children would be removed by authorities.
            The Department of Community Services would be able to apply to the court for contracts to be
            drawn up. <br/>
            The plan follows the murder of a taxi driver in Sydney by two 14-year-old girls last week.
            Following the arrest of the girls, Mr. Iemma said he was concerned about the whereabouts of
            the girl’s parents. Mr. Iemma denies that the contracts are a knee-jerk reaction to that incident.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_1">The taxi driver murder.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_2">The Sydney Family court.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_3">Contract parenting.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="ta-j"><strong class="u-textColor_4">•</strong> Choose “true”, “false” or “information not given”. <br/> <br/>
            According to the premier, the new law is not a knee-jerk reaction.
            
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
            Some children that are neglect end up in the court system.
            
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
          <p><strong class="u-textColor_4">•</strong> Fill in the summary using the words form the paragraph.</p>
          <div class="row">
            <div class="col col-center xs12 md10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent flex align-items-center justify-center">
                  <p>undergo | juvenile crimes | knee-jerk | comply | risk</p>
                </div>
              </div>
            </div>
          </div>
          <p class="lh20">
            The local government in Australia is introducing a new law, calling for parents to sign
            parenting contracts. This applies to parents who children are at 
            <input class="c-input js-escribir" type="text"/> of committing
            
            <input class="c-input js-escribir" type="text"/> . Parent must 
            <input class="c-input js-escribir" type="text"/> with the contracts and 
            <input class="c-input js-escribir" type="text"/>
            counselling where necessary. The premier says this new law is based on facts and is not just a
            
            <input class="c-input js-escribir" type="text"/> reaction.
            
          </p>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the sentence with a word from the table below. <br/> <br/>
            Doing something in response to something that just happened is considered a ........................ reaction.
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_10">knee-jerk</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_11">juvenile</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_12">comply</label>
            <input class="js-select" type="hidden"/>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md5 ta-c"><img class="u-responsive-img" src="unit_1/module_4/assets/images/self_2_2.png" alt=""/></div>
        <div class="col xs12 md6">
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Choose the correct answer.  <br/> <br/>
            The parenting contract is...
            
          </p>
          <div class="row">
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_13">considered a good idea by some other politicians.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_14">all the other politicians think it is a bad idea.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
            <label class="c-Checkbox w100 ta-l " for="selInput_15">the courts are against the parenting contract law.</label>
            <input class="js-select" type="hidden"/>
          </div>
          <p class="ta-j mt30"><strong class="u-textColor_4">•</strong> Complete the table by using the correct person from the text.
            
          </p>
          <table class="c-table-estilo_tres m-a">
            <thead>
              <tr>
                <th>For the parenting contract</th>
                <th>Against the parenting contract</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="padding15">
                  <input class="c-input row js-escribir" type="text"/>
                </td>
                <td class="padding15">
                  <input class="c-input row js-escribir" type="text"/>
                </td>
              </tr>
              <tr>
                <td class="padding15">
                  <input class="c-input row js-escribir" type="text"/>
                </td>
                <td class="padding15">
                  <input class="c-input row js-escribir" type="text"/>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2 || s_actividad == 3" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2 || s_actividad == 3" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>