
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
        <h5>Choose the option that best matches the use and the meaning.</h5>
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
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>Taking something by force.</td>
                  <td>Because the accountant saw the company had cheated on their taxes, he warned them that there could be a seizure of their assets by the authorities.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>A small flash of fire such as from ignited wood, or metal scraping metal.</td>
                  <td>I wouldn’t start the car until it’s fixed, even a small spark could cause a fire.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>An invention or object used for a specific purpose.</td>
                  <td>If you depend on a device such as your phone for everyday tasks, you may forget how to live without it!</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>Something that must be done, not necessarily by choice.</td>
                  <td>Everyone has an obligation to vote for democracy to succeed. You should take the time to vote.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To restore or renew.</td>
                  <td>To revive that old record player, just use a cleaner and it will be like new again.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>Possibly, maybe.</td>
                  <td>Perhaps we should go for lunch now?</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To go beyond.</td>
                  <td>If you overstep your authority, you could lose your job.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To become unstable or disordered.</td>
                  <td>I wouldn’t unsettle Tom before the meeting, he’s been working hard to make his presentation perfect.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To wander without a destination.</td>
                  <td>If you use the GPS more, you’ll spend less time roving around.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To plant a seed.</td>
                  <td>Be sure to put the seed in the soil firmly when sowing to ensure the birds don’t eat it.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>The way something is happening.</td>
                  <td>The state of play of the election doesn’t look so good right now for the candidate. Maybe he should change his platform.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To support or be in favor of.</td>
                  <td>Since you like children, why don’t you advocate for more special programs at the school?</td>
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
          <div class="col-flex-xs12 col-flex-md11"><img class="u-responsive-img" src="unit_2/module_5/assets/images/act_2_1.png" alt=""/></div>
        </div>
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
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To be busy or occupied, often intensely.</td>
                  <td>To be successful in business, you must become engaged with your customer and learn everything about him.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To go beyond.</td>
                  <td>If you want to get promoted at your job, you must exceed what is already expected.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To look over something quickly.</td>
                  <td>Only giving the instruction manual a cursory look could be dangerous, you should read it more carefully.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Seizure</option>
                      <option value="2">Hunch</option>
                      <option value="3">Device</option>
                      <option value="4">Revive</option>
                      <option value="5">Advocate</option>
                      <option value="6">Cursory</option>
                      <option value="7">Sow</option>
                      <option value="8">Rove</option>
                      <option value="9">Unsettle</option>
                      <option value="10">Overstep</option>
                      <option value="11">Perhaps</option>
                      <option value="12">Exceed</option>
                      <option value="13">Obligation</option>
                      <option value="14">Engaged</option>
                      <option value="15">Spark</option>
                      <option value="16">State of play</option>
                    </select>
                  </td>
                  <td>To have a suspicion.</td>
                  <td>Just trust my hunch on this election, I know Mr. Smith is going to win. I can just feel it.</td>
                </tr>
              </tbody>
            </table>
          </div>
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