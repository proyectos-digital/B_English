
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
        <h5>In the exercise below are a few words that will appear in the reading exercise, how many do you know?</h5>
        <H6>Match each meaning and use with the correct word. </H6>
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
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Time available to do certain activities that one likes.</td>
                  <td>In her spare time, Gina always goes to the park with her dog.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Temporary substitute or means.</td>
                  <td>We made a makeshift table in the backyard to place the food on.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>A rounded stone.</td>
                  <td>In some parts of Paris, the streets are made of cobble.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Unable to move.</td>
                  <td>In Bogotá, it’s very common to get stuck in traffic at peak hours.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>A center of activity or interest.</td>
                  <td>The northern part of the island is a major hub for tourists.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>A period of sudden commotion.</td>
                  <td>There was a flurry of activity when the ship reached the port.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Excessively in support of one political party.</td>
                  <td>Many countries are today dominated by partisan politics.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Someone who is critical of another and tends to disagree.</td>
                  <td>There are many detractors regarding the issue of climate change.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>A group of secret of people plotting against a government or any authoritative body.</td>
                  <td>She became a member of a cabal wanting to overthrow the leader.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Very famous for a bad reputation.</td>
                  <td>Pablo Escobar was an infamous drug lord.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>A deception or an act to trick.</td>
                  <td>It is said that robbery at the supermarket was a hoax.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>To declare or engage in war or an argument with another country.</td>
                  <td>Thailand waged war on the United States and Great Britain in 1942.</td>
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
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>To bring back to life or consciousness, or to restore to use.</td>
                  <td>Luckily there was a nurse on the bus who helped to revive a woman that fainted.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>To urge, incite or stimulate.</td>
                  <td>The Minister of Finance said that the latest tax cuts will spur further investment in the country.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble</option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>A defender against illegal practices.</td>
                  <td>International watchdog Global Financial Company says that $21 billion was taken out of India in 2014.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="1">Makeshift (adj)</option>
                      <option value="2">Infamous</option>
                      <option value="3">Secondhand</option>
                      <option value="4">Revive</option>
                      <option value="5">Spur</option>
                      <option value="6">Hoax</option>
                      <option value="7">Wage war</option>
                      <option value="8">Cabal</option>
                      <option value="9">Stuck</option>
                      <option value="10">Watchdog</option>
                      <option value="11">Detractor</option>
                      <option value="12">Hub</option>
                      <option value="13">Flurry</option>
                      <option value="14">Cobble </option>
                      <option value="15">Partisan (politics)</option>
                      <option value="16">Spare time</option>
                    </select>
                  </td>
                  <td>Formerly owned and used by someone else.</td>
                  <td>Our organization normally collects secondhand clothing or toys to give to poor families.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 row-flex align-items-center">
          <div class="col-flex-xs12 col-flex-md11 ta-c row-flex align-items-center"><img class="u-responsive-img" src="unit_3/module_11/assets/images/act_2_1.png" alt=""/></div>
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