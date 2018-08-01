
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <h5>Choose the option that best matches the use and the meaning.</h5>
      </div>
      <div class="row row-flex">
        <div class="col-flex-xs12 m-a mt20">
          <div class="col-flex-xs12 col-flex-md11">
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th class="w20">Word</th>
                  <th class="w40">Use</th>
                  <th class="w40">Meaning</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>There is a stark difference between a physical state of a couch potato and an athlete.</td>
                  <td>Severe in comparison.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>The opulent communities usually have private security and their own recreational facilities.</td>
                  <td>Rich, wealthy.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>All told, there are seven new students including the absentees.</td>
                  <td>In total.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>The analysis of the shoe company was very thorough and the same holds true for the all the other analysis that were done this year.</td>
                  <td>Valid, applicable.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>The disparity between education of the wealthy and the poor is getting larger.</td>
                  <td>A great difference.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>Beverly Hills is a very affluent neighborhood in California.</td>
                  <td>Having a lot of money (group or area).</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>I tracked the career of James Rodriguez since he was a teenager.</td>
                  <td>To follow something.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>I want to survey the working condition in our office.</td>
                  <td>To look closely at.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>There is a lack of support for my plan to have a meeting every Friday.</td>
                  <td>To not have or not have sufficient.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>I will enroll in the university this month.</td>
                  <td>To officially register.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>Normally you study for roughly four years at a university, give or take a year.</td>
                  <td>Approximately.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>John tried to mask the failure of his project by pretending the results were inconclusive.</td>
                  <td>To hide</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex align-items-center">
        <div class="col-flex-xs12 col-flex-md6 m-a mt20">
          <div class="col-flex-xs12 col-flex-md11">
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th class="w20">Word</th>
                  <th class="w80">Use</th>
                  <th class="w80">Meaning</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>The monthly income of a middle-class family is about 60,000 dollars.</td>
                  <td>Wages or salary earned.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>My greatest achievement will be to finish my Ph.D.</td>
                  <td>Something completed successfully.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>He was cautioned against missing classes. Too many absences and he would fail the course.</td>
                  <td>Warn.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>After a very poor quarter at the beginning of 2017, there was a turnaround and sales went through the roof.</td>
                  <td>Drastic change.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>Students with a good attitude and the support of their parents tend to thrive in the advanced academic programs.</td>
                  <td>To succeed.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">All told</option>
                      <option value="2">Stark</option>
                      <option value="3">Affluent</option>
                      <option value="4">Background</option>
                      <option value="5">Mask</option>
                      <option value="6">Turnaround</option>
                      <option value="7">Enroll</option>
                      <option value="8">Roughly</option>
                      <option value="9">Thrive</option>
                      <option value="10">Income</option>
                      <option value="11">Survey</option>
                      <option value="12">Caution</option>
                      <option value="13">Lack</option>
                      <option value="14">Achievement</option>
                      <option value="15">Track</option>
                      <option value="16">Disparity</option>
                      <option value="17">Opulent</option>
                      <option value="18">Holds true</option>
                    </select>
                  </td>
                  <td>The background of the new candidate includes, three years of university, six months of internship and two years of professional experience.</td>
                  <td>The circumstance or situation before the current time.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 mt20 row-flex justify-center align-items-center">
          <div class="col-flex-xs12 ta-c"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_2_1.png" alt=""/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>