
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
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>The act of getting or obtaining something.</td>
                  <td>The procurement of the new constructions materials will be done by next week.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>The direct sale of goods to customers in small quantities.</td>
                  <td>My younger brother works in retail in the capital.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>Located in or related to places across the sea.</td>
                  <td>The U.N. has several overseas aids programs.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>Be under obligation to pay someone.</td>
                  <td>Michael owed me 10,000 pesos last month, but he managed to pay it.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>Sum of money due to an employee based on length of employment.</td>
                  <td>How were you given for your severance pay?</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <opOion value="17">Darn</opOion>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>Skill in an occupation or trade.</td>
                  <td>The Craftsmanship of these clothes are impeccable.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>To have the financial means to do something.</td>
                  <td>Many people can’t afford basic.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>In every part of.</td>
                  <td>There are several athletics competitions throughout the year.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>A system whereby people are trusted to be honest and not take advantage of others.</td>
                  <td>The honor system in place at the prison has been largely successful.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>A list of some things one would like to achieve.</td>
                  <td>Karen’s wishlist for her 50th birthday included a trip to The Bahamas.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>The process of going out of use.</td>
                  <td>The obsolescence of gas operated vehicles is fast becoming a reality.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>To fix and repair.</td>
                  <td>My parents mended their broken relation.</td>
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
          <div class="col-flex-xs12 col-flex-md11 ta-c"><img class="u-responsive-img" src="unit_3/module_9/assets/images/act_2_1.png" alt=""/></div>
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
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>To join or unite.</td>
                  <td>The agreement soldered the two belligerent countries.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>A body of water controlled by a barrier.</td>
                  <td>The dam burst and caused a huge flood.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>The work or craft done by a joiner, carpenter or woodworker.</td>
                  <td>Marcus’ joinery is perfect.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>The craft or art of making earthenware such as plates, bowls or vases.</td>
                  <td>That shop sells some beautiful pottery.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"></option>
                      <option value="2">Retail</option>
                      <option value="5">Overseas</option>
                      <option value="6">Severance pay</option>
                      <option value="3">Pottery</option>
                      <option value="1">Owe</option>
                      <option value="7">Obsolescence</option>
                      <option value="4">Abruptly</option>
                      <option value="8">Solder</option>
                      <option value="12">Wishlist</option>
                      <option value="9">Joinery</option>
                      <option value="11">Afford</option>
                      <option value="17">Darn</option>
                      <option value="16">Craftsmanship</option>
                      <option value="10">Procurement</option>
                      <option value="14">Mend</option>
                      <option value="15">Throughout</option>
                      <option value="13">Honor system</option>
                    </select>
                  </td>
                  <td>Quick and without warning</td>
                  <td>The car stopped abruptly when the traffic lights turned red.</td>
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