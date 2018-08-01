
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md8 col-center mt10-md">
          <table class="c-table-estilo_tres">
            <thead>
              <tr>
                <th> </th>
                <th>Examples</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>accuse of</strong></td>
                <td>The man was accused of driving under the influence of alcohol.</td>
              </tr>
              <tr>
                <td><strong>apologize for</strong></td>
                <td>Arturo apologized for coming late.</td>
              </tr>
              <tr>
                <td><strong>approve of</strong></td>
                <td>The teacher approved of presenting papers after the deadline.</td>
              </tr>
              <tr>
                <td><strong>blame for</strong></td>
                <td>She can’t blame me for listening to her conversation! She speaks too loud!</td>
              </tr>
              <tr>
                <td><strong>carry on</strong></td>
                <td>You can carry on telling us your story.</td>
              </tr>
              <tr>
                <td><strong>congratulate on</strong></td>
                <td>My teacher congratulated me on improving my writing.</td>
              </tr>
              <tr>
                <td><strong>care for</strong></td>
                <td>Most students care for getting good grades.</td>
              </tr>
              <tr>
                <td><strong>concentrate on</strong></td>
                <td>Keep concentrated on understanding the verbs.</td>
              </tr>
              <tr>
                <td><strong>consist of</strong></td>
                <td>The exam consisted of writing a long composition.</td>
              </tr>
              <tr>
                <td><strong>depend on</strong></td>
                <td>My trip depends on getting the money.</td>
              </tr>
              <tr>
                <td><strong>dream of</strong></td>
                <td>Most students dream of studying their Masters abroad.</td>
              </tr>
              <tr>
                <td><strong>forgive for</strong></td>
                <td>Please forgive me for forgetting your birthday!</td>
              </tr>
              <tr>
                <td><strong>keep on</strong></td>
                <td>Are you going to keep on driving so fast? It is raining!</td>
              </tr>
              <tr>
                <td><strong>prevent from</strong></td>
                <td>Vaccinations prevent kids from getting diseases.</td>
              </tr>
              <tr>
                <td><strong>rely on</strong></td>
                <td>She has to rely on working with others.</td>
              </tr>
              <tr>
                <td><strong>spend time on</strong></td>
                <td>Judith spent some time on organizing her photo album.</td>
              </tr>
              <tr>
                <td><strong>suspect of</strong></td>
                <td>Rolando was suspected of taking the books without authorization.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md8 col-center mt10-md">
          <table class="c-table-estilo_tres">
            <thead>
              <tr>
                <th> </th>
                <th>Examples</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>think of</strong></td>
                <td>I am thinking of building a country house!</td>
              </tr>
              <tr>
                <td><strong>die of</strong></td>
                <td>My grandmother died of a heart attack.</td>
              </tr>
              <tr>
                <td><strong>escape from</strong></td>
                <td>She escaped from the traffic jam by taking a shortcut.</td>
              </tr>
              <tr>
                <td><strong>insist on</strong></td>
                <td>Tutors insist on having the meetings with students.</td>
              </tr>
              <tr>
                <td><strong>pay for</strong></td>
                <td>In Colombia, you have to pay for renewing your drivers’ license.</td>
              </tr>
              <tr>
                <td><strong>protect from</strong></td>
                <td>The law is suppose to protect citizens from injustice.</td>
              </tr>
              <tr>
                <td><strong>spend money on</strong></td>
                <td>Men spend money on eating in expensive places.</td>
              </tr>
              <tr>
                <td><strong>suffer from</strong></td>
                <td>She has suffered from dealing with the disease.</td>
              </tr>
              <tr>
                <td><strong>thank for</strong></td>
                <td>I always thank people for being so helpful.</td>
              </tr>
              <tr>
                <td><strong>use for</strong></td>
                <td>This tool is used for carving the stone.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>