
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a"> 
    <section class="template-content"> 
      <div class="row row-flex justify-content-center">
        <h5><strong>Read the following text:</strong> <br/><br/></h5>
        <div class="col xs12 col-center" phrasal-column="column-xs1 column-md2">
          <p class="ta-j"><strong>86% of Colombia’s ethnic minority children lack access to adequate education</strong> <br/><br/>
            <strong>by Craig Corbett September 24, 2014</strong> <br/><br/>
            A Colombian children’s rights group reported on Monday that recent Ministry of Education figures show that 86% of children from ethnic minority groups have no access to
            adequate education.<br/>
            The dooming report claims that people from Indigenous groups, afro-Colombians and gypsies are not being provided with education centers for their children which can
            teach them in a culturally appropriate manner.<br/>
            NGO PANDI reported that 10,674,609 Colombians were enrolled in public education in 2012. Only 1.9% (212,953) attended an ethno-educative center, in which education
            was molded to be culturally appropriate to their needs.<br/>
            According to the Ministry of Culture, some 5.8 million people belong to ethnic minority groups in Colombia. Of the total population of 47 million, 10.6% are Afro-Colombian,
            3.4% Indians and 0.01% Gypsies.<br/><br/>
            <strong>Effects on the young people and communities </strong> <br/><br/>
            For Angela Rosales, director of SOS Children, this poses a massive concern as areas which have lower levels of primary education have much higher levels of socioeconomic
            based problems, such as teenage pregnancy, high levels of infant mortality, malnutrition, child labor and cases of abuse of youngsters.<br/><br/>
            Rosales said “the gradual deterioration of the principles and ancestral knowledge of these groups within the current educational models is putting young people in a kind
            of cultural limbo”.<br/>
            Child welfare groups PANDI and SOS children argue that a basic primary education for ethnic minority children is essential as it can teach them basic life skills, but continue
            to teach the traditions and history of their cultures, which they can in turn teach to future generations.<br/>
            According the Rosales, the government is failing to provide a relevant curriculum which takes into account gender roles and traditional approaches to life in the diverse
            ethnic minority communities. Rosales argues that to ensure a better education the state and civil societies need to come together to achieve the goals, organise budgets
            and policies and monitor their progress as a means of ensuring a basic education and basic human rights for these children and teenagers.<br/><br/>
            <strong>Constitutional obligations </strong> <br/><br/>
            PANDI’s report noted that the Colombian constitution commits the government to protect the ethnic diversity of its people through education.<br/>
            Aside from a constitutional obligation to protecting and preserving indigenous cultures, Colombia is also failing to meet the U.N Millennium Development goals for 2015
            which were agreed to combat world poverty.<br/>
            The UN goals for 2015 state than 100 percent of children should have access to at least primary level education. According to the UN, worldwide primary education
            attendance has reached 90 %, which still leaves 58 million young people with no access to basic education worldwide.<br/>
            In its report, PANDI said that according to 2011 Ministry of Education data, 30.1% of indigenous, 11.2 % of Afro-Colombians and 6.2 % of Roma has not received any formal
            education.
          </p>
        </div>
        <div class="col xs12 sm10 md11 col-center">
          <div class="row mt20">
            <hr/>
          </div>
          <div class="row mt20">
            <p><strong>The term minority is used to refer to…</strong></p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_1">Afro-Colombians.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_2">Mestizas.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_3">Foreigners.</label>
            </div>
          </div>
          <div class="row mt20">
            <p><strong>According to the author some socioeconomic issues are linked to…</strong></p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_4">University education being really bad.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_5">Teen pregnancy.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_6">Low-quality primary schools.</label>
            </div>
          </div>
          <div class="row mt20">
            <p><strong>Education for Colombians is protected by… </strong></p>
            <div class="row row-flex justify-around">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_7">The United Nations.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_8">by PANDI.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox xs12 sm3" for="selInput_9">The constitution.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"> </button>
  </aside>
</section>
<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>