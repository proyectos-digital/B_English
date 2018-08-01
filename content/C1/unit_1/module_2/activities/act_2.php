
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <h5 class="ta-c">In the exercise below there are a few words that will appear in the reading exercise, how many do you know?</h5>
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
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>Allegations of fraud were made against the lawyer but no one could prove anything.</td>
                  <td>A claim that someone has done something wrong, usually without any evidence.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>There is a dispute about the origin of life. One side believes in creation and the other in evolution.</td>
                  <td>To argue.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The statement the governor made was inaccurate. He quoted the numbers from the previous year not this year.</td>
                  <td>Incorrect.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The doctor admitted to his mistake and apologized to the patient.</td>
                  <td>Confess.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>He claims that he was at home alone watching TV but he cannot prove it.</td>
                  <td>To say something is true without evidence.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The disgruntled employees went on strike outside the factory gates.</td>
                  <td>Dissatisfied.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>There was a misunderstanding with security guard. He did not know that they were employees.</td>
                  <td>A disagreement.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The accusation of misconduct provoked the ire of the candidate.</td>
                  <td>Anger.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The former director of the department returned for a visit yesterday.</td>
                  <td>Use to be something previously.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>Religion is a very contentious topic especial among dedicated believers.</td>
                  <td>Controversial , like to cause an argument.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>I was disillusioned by the mayor, I expected so much more from him.</td>
                  <td>A disappointment in someone or something.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>I acknowledge the fact that I was late for work but that is not a reason to fire me.</td>
                  <td>Accept or admit something.</td>
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
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>Nancy’s rebuttal to the accusation was that it was all lies and she could prove it.</td>
                  <td>A statement saying that something previous said is not true</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The young man was falsely accused of stealing a radio.</td>
                  <td>Not truthful.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The research projects span is of 5 years and 7 countries. It will be complete in 3 years.</td>
                  <td>The length of time something lasts.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>Janet is the most careful person I know. It is rare when she makes an error.</td>
                  <td>Something that is not very common.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The manager was blamed for all the problems at the factory and then he was fired.</td>
                  <td>To say that someone is responsible for a wrong doing.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">rebuttal</option>
                      <option value="2">acknowledge</option>
                      <option value="3">blames</option>
                      <option value="4">contentious</option>
                      <option value="5">former</option>
                      <option value="6">ire</option>
                      <option value="7">disillusioned</option>
                      <option value="8">disgruntled</option>
                      <option value="9">claims</option>
                      <option value="10">admits</option>
                      <option value="11">misunderstanding</option>
                      <option value="12">dispute</option>
                      <option value="13">allegations</option>
                      <option value="14">unfair</option>
                      <option value="15">inaccurate</option>
                      <option value="16">rare</option>
                      <option value="17">spans</option>
                      <option value="18">falsely</option>
                    </select>
                  </td>
                  <td>The athlete thought that it was unfair the way the judges removed him from the race.</td>
                  <td>Unjust.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 m-a mt20">
          <div class="col-flex-xs12 col-flex-md11 ta-c"><img class="u-responsive-img mt80-md" src="unit_1/module_2/assets/images/act_2_1.png" alt=""/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()"></button>
  </aside>
</section>


<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>