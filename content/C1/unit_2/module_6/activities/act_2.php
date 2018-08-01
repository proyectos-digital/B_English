
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
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>For a special purpose, presently under consideration.</td>
                  <td>The politician added a regulation banning older cars ad hoc to assist with his campaign to reduce emissions by next year.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>Having unusual characteristics.</td>
                  <td>The weather in Bogota is so quirky as it often changes spontaneously.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To struggle with.</td>
                  <td>Grappling with warmer temperatures will be difficult for world populations and could lead to shorter life expectancies.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To go through or cope with something.</td>
                  <td>Coastal cities will have a difficult time enduring rising water levels as they face land loss at shorelines.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To falsify.</td>
                  <td>Some people think that some scientific studies doubting climate change have been forged for financial gain, but no one can deny it’s getting warmer every year.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To display lack of interest.</td>
                  <td>How can you be so dismissive of climate change? You can personally feel how much hotter it’s getting every year!</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To take a firm, specific position on something.</td>
                  <td>Even if you don’t believe increasing sea levels are a threat, my stance will not change. It’s a severe situation that we must do something about!</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To accept or adopt.</td>
                  <td>Instead of ignoring environmental programs, we need to embrace ways of trying to minimize environmental damage such as recycling.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>Unable to be understood.</td>
                  <td>Although we have theories, the total impact of environmental damage is somewhat unknowable.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To stretch wide in influence</td>
                  <td>The effects of increasing temperatures don’t just affect some countries; the problems will be much more far-reaching. </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
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
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>An unfortunate event, often serious.</td>
                  <td>Rising sea levels will be a huge calamity for those living in coastal areas.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To prevent from seeing.</td>
                  <td>The media often shrouds the fact that more species of endangered animals are dying each year, but it’s well documented.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>Very large, almost endless.</td>
                  <td>It’s true, vast amounts of land are available, but not all is suitable for farming and must be protected.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>To learn slowly.</td>
                  <td>Although the politician wouldn’t say exactly, we were able to glean from the speech that he probably would not vote for the bill.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>A group of objects.</td>
                  <td>Automobile emissions have greatly been reduced in recent years, but there are still troves of older, poorly maintained vehicles on the world’s roads.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>The outer edge of something.</td>
                  <td>Environmental activists are sometimes thought to be on the fringe, but their actions are important to ensure the Earth remains a good place to live in the future.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>An indirect suggestion </td>
                  <td>The activist hinted at a protest tomorrow, but wouldn’t say exactly for fear the police may come.</td>
                </tr>
                <tr>
                  <td>
                    <select class="c-select ml5 mr5 mt5 mb5" name="act_1_2">
                      <option value="" disabled="disabled" selected="selected"> </option>
                      <option value="1">Ad-hoc</option>
                      <option value="2">Fringe</option>
                      <option value="3">Quirky</option>
                      <option value="4">Trove</option>
                      <option value="5">Hint</option>
                      <option value="6">Rage</option>
                      <option value="7">Endure</option>
                      <option value="8">Grapple</option>
                      <option value="9">Forge</option>
                      <option value="10">Stance</option>
                      <option value="11">Calamity</option>
                      <option value="12">Vast</option>
                      <option value="13">Dismissive</option>
                      <option value="14">Embrace</option>
                      <option value="15">Shroud</option>
                      <option value="16">Glean</option>
                      <option value="17">Far-reaching</option>
                      <option value="18">Unknowable</option>
                    </select>
                  </td>
                  <td>Extreme anger.</td>
                  <td>I don’t know how you can be so calm. When I see people throwing trash into the ocean, I have such rage!</td>
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