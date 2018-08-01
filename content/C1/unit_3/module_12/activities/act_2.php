
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <h5>Choose the word that best suits the meaning and use.</h5>
      </div>
      <div class="row row-flex">
        <div class="col-flex-xs12 m-a mt20">
          <div class="col-flex-xs12 col-flex-md11">
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th class="w20">Word</th>
                  <th class="w40">Meaning</th>
                  <th class="w40">Use</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>Owed or immediately payable.</td>
                  <td>The gas bill is due this month.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>A research organization in charge of resolving particular issues.</td>
                  <td>They’ve launched a new Joint Pakistan-China Think Tank dedicated solely to research and development of the China-Pakistan Economic Corridor.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>The number of people that participate in or attend a particular event.</td>
                  <td>The Independence Day Celebrations attracted a large turnout.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>To vote.</td>
                  <td>It is said that over three million people casted their ballot in yesterday’s election.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>Fair and impartial, pertaining to equity.</td>
                  <td>Our country’s constitution guarantees the equitable treatment of all citizens.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>The right to vote and freedom from political subjugation.</td>
                  <td>Feminism played a key role in women’s enfranchisement.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>In prison.</td>
                  <td>The suspect will be incarcerated until further evidence is obtained.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>The act of arguing for or supporting a cause.</td>
                  <td>Advocacy for environmental care and protection is now common across the world.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>To cause to become emotional or excited.</td>
                  <td>The presidential candidate fired up the crowd with his speech.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>A different aspect or side to something, often times negative.</td>
                  <td>I can definitely see some advantages to these proposed policies. The flip side, however, is that we will have to pay more taxes.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>To increase in amount.</td>
                  <td>The factory ramped up its production to meet the increased demand.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>The mental attitude of thought process of an individual.</td>
                  <td>If Sarah enters the race with a clear mindset, she could win.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex">
        <div class="col-flex-xs12 col-flex-md6 m-a mt20">
          <div class="col-flex-xs12 col-flex-md11">
            <table class="c-table-estilo_tres m-a">
              <thead>
                <tr>
                  <th class="w20">Word</th>
                  <th class="w40">Meaning</th>
                  <th class="w40">Use</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>An ostentatious public display.</td>
                  <td>When the Colombian football team returned, it was an absolute fanfare.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>To divide into new districts either for administrative or electoral purposes.</td>
                  <td>After the elections, the winning party is going to redistrict this zone.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>A proposed law presented for approval to a legislative body.</td>
                  <td>Government passed a new bill last week regarding child abuse.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>The casting of votes at an election.</td>
                  <td>Polling will be in three weeks.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>Responsibility or obligation.</td>
                  <td>As parents, the onus is on us to raise our children in the right way.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Think Tank</option>
                      <option value="2">Enfranchisement</option>
                      <option value="3">Pitch (speech)</option>
                      <option value="4">Cast a ballot</option>
                      <option value="5">Due</option>
                      <option value="6">Fanfare</option>
                      <option value="7">Redistrict</option>
                      <option value="8">Ramp up</option>
                      <option value="9">Mindset</option>
                      <option value="10">Turnout</option>
                      <option value="11">The flip side</option>
                      <option value="12">Incarcerated</option>
                      <option value="13">Advocacy</option>
                      <option value="14">Equitable</option>
                      <option value="15">Fire up</option>
                      <option value="16">Polling</option>
                      <option value="17">Bill (law)</option>
                      <option value="18">Onus</option>
                    </select>
                  </td>
                  <td>A line of talk designed to persuade someone.</td>
                  <td>Mark’s sales pitch went well this morning.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row-flex col-flex-xs12 col-flex-md6 m-a mt20">
          <div class="col-flex-xs12 col-flex-md11 col-center"><img class="u-responsive-img row-flex col-center m-a" src="unit_3/module_12/assets/images/act_2_1.png" alt=""/></div>
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