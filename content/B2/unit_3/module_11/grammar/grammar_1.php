
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10" ng-init="listenImage = 1; s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Pronouns in Defining Relative Clauses:</h5>
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <table class="c-table-estilo_tres w100">
            <thead>
              <tr>
                <th> </th>
                <th>PEOPLE</th>
                <th>THINGS</th>
                <th>PLACE</th>
                <th>TIME</th>
                <th>REASON</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>SUBJECT</strong></td>
                <td>who, that</td>
                <td>which, that</td>
                <td> </td>
                <td> </td>
                <td> </td>
              </tr>
              <tr>
                <td><strong>OBJECT</strong></td>
                <td>that, who, whom</td>
                <td>which, that</td>
                <td>where</td>
                <td>when</td>
                <td>what/why</td>
              </tr>
              <tr>
                <td><strong>POSSESSIVE</strong></td>
                <td>whose</td>
                <td>whose, of which</td>
                <td> </td>
                <td> </td>
                <td> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <h5>Pronouns in Non-defining Relative Clauses:</h5>
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <table class="c-table-estilo_tres w100">
            <thead>
              <tr>
                <th> </th>
                <th>PEOPLE</th>
                <th>THINGS</th>
                <th>PLACE</th>
                <th>TIME</th>
                <th>REASON</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>SUBJECT</strong></td>
                <td>who</td>
                <td>which</td>
                <td> </td>
                <td> </td>
                <td> </td>
              </tr>
              <tr>
                <td><strong>OBJECT</strong></td>
                <td>who, whom</td>
                <td>which</td>
                <td>where</td>
                <td>when</td>
                <td>why</td>
              </tr>
              <tr>
                <td><strong>POSSESSIVE</strong></td>
                <td>whose</td>
                <td>whose, of which</td>
                <td> </td>
                <td> </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h6>Formality Scales:</h6>
      </div>
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-sm10 col-center">
          <table class="c-table-estilo_dos row">
            <tbody>
              <tr>
                <td class="showTo-sm xs3" rowspan="4" style="background-color: #86CFF2; border-right: 2px solid white;"><img class="u-responsive-img min-h120 u-ob_fit-cover" src="unit_3/module_11/assets/images/gra_1.png" alt=""/></td>
                <td class="ancho130" style="border-right: 20px solid white;">Whom</td>
                <td><strong class="u-textColor_3 mr10">Example:</strong><br/><strong>The people whom I call can enter the room.</strong></td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">Who</td>
                <td>The people who I call can enter the room.</td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">That</td>
                <td>The people that I call can enter the room.</td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">No Pronoun</td>
                <td>The people I call can enter the room.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-sm10 col-center mt20">
          <table class="c-table-estilo_dos row">
            <tbody>
              <tr>
                <td class="showTo-sm xs3" rowspan="3" style="background-color: #86CFF2; border-right: 2px solid white;"><img class="u-responsive-img min-h120 u-ob_fit-cover" src="unit_3/module_11/assets/images/gra_1.png" alt=""/></td>
                <td class="ancho130" style="border-right: 20px solid white;">Which</td>
                <td>This is the book which I chose.</td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">That</td>
                <td>This is the book that I chose.</td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">No Pronoun</td>
                <td>This is the book I chose.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-sm10 col-center mt20">
          <table class="c-table-estilo_dos row">
            <tbody>
              <tr>
                <td class="showTo-sm xs3" rowspan="3" style="background-color: #86CFF2; border-right: 2px solid white;"><img class="u-responsive-img min-h120 u-ob_fit-cover" src="unit_3/module_11/assets/images/gra_1.png" alt=""/></td>
                <td class="ancho130" style="border-right: 20px solid white;">In which</td>
                <td>This is the building in which I teach my class.</td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">Where</td>
                <td>This is the building where I teach my class.</td>
              </tr>
              <tr>
                <td style="border-right: 20px solid white;">No Pronoun</td>
                <td>This is the building I teach my class.</td>
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