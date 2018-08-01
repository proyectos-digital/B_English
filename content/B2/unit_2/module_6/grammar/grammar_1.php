
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt100-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md9 col-center mt30-md">
          <p>Phrasal verbs are usually two-word phrases consisting of <strong>verb + adverb </strong>or <strong>verb + preposition.</strong></p>
          <table class="c-table-estilo_tres">
            <thead>
              <tr>
                <th class="xs1">Verb</th>
                <th class="xs8">Meaning</th>
                <th class="xs3">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Get up</td>
                <td>To get out of bed after sleeping</td>
                <td>I get up at 6:00.</td>
              </tr>
              <tr>
                <td>Get in</td>
                <td>To get into a bus, plane or train. / To continue doing something, especially with more effort or more quickly than before.</td>
                <td>The bus was full but I could get in.</td>
              </tr>
              <tr>
                <td>Get by</td>
                <td>To have just enough of something such as money or knowledge so that you can do what you need to do.</td>
                <td>I can get by with my English in Miami.</td>
              </tr>
              <tr>
                <td>Drive off</td>
                <td>When a vehicle or driver drives off, the vehicle starts moving and leaves. / To force someone to go away, especially when they are attacking or threatening you.</td>
                <td>The police drove off the suspect car.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt100-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md9 col-center mt30-md">
          <p>Phrasal verbs are usually two-word phrases consisting of <strong>verb + adverb </strong>or <strong>verb + preposition.</strong></p>
          <table class="c-table-estilo_tres">
            <thead>
              <tr>
                <th class="xs1">Verb</th>
                <th class="xs8">Meaning</th>
                <th class="xs3">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Come back</td>
                <td>To return to a place.</td>
                <td>Please, come back when you finish.</td>
              </tr>
              <tr>
                <td>Turn around</td>
                <td>To stop being unsuccessful and to start being successful, or to make something do this. / To complete a piece of work, process, or activity within a particular time.</td>
                <td>He used to have a lot of money. Now things turned around and he is very poor.</td>
              </tr>
              <tr>
                <td>Break down</td>
                <td>When a machine or vehicle breaks down, it stops working. / To divide something such as a total amount into separate parts.</td>
                <td>My car broke down. I need to take it to the mechanic.</td>
              </tr>
              <tr>
                <td>Look out</td>
                <td>Used for warning someone to be careful, especially because they are likely to have an accident.</td>
                <td>Look out! A car is coming!</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt100-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md9 col-center mt30-md">
          <p>Phrasal verbs are usually two-word phrases consisting of <strong>verb + adverb </strong>or <strong>verb + preposition.</strong></p>
          <table class="c-table-estilo_tres">
            <thead>
              <tr>
                <th class="xs1">Verb</th>
                <th class="xs8">Meaning</th>
                <th class="xs3">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Take off</td>
                <td>To remove something, especially a piece of clothing. / When an aircraft takes off, it leaves the ground and starts flying.</td>
                <td>My plane took off right on time.</td>
              </tr>
              <tr>
                <td>Come in</td>
                <td>To enter a room.</td>
                <td>Hi, come in and sit down!</td>
              </tr>
              <tr>
                <td>Cut down on something</td>
                <td>To start doing less of something, especially because it is bad for your health</td>
                <td>You need to cut down in sugar!</td>
              </tr>
              <tr>
                <td>Fill in</td>
                <td>To add information such as your name or address in the empty spaces on an official document</td>
                <td>Fill in your first name and family name here.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4">
      <div class="row-flex mt100-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md9 col-center mt30-md">
          <p>Phrasal verbs are usually two-word phrases consisting of <strong>verb + adverb </strong>or <strong>verb + preposition.</strong></p>
          <table class="c-table-estilo_tres">
            <thead>
              <tr>
                <th class="xs1">Verb</th>
                <th class="xs8">Meaning</th>
                <th class="xs3">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jot down</td>
                <td>To write something in a quick informal way</td>
                <td>I jot down some notes about the lecture.</td>
              </tr>
              <tr>
                <td>Look into</td>
                <td>To try to discover the facts about something such as a problem or a crime</td>
                <td>The police will look into the accident and will send a report later.</td>
              </tr>
              <tr>
                <td>Talk over</td>
                <td>To discuss a problem or a plan</td>
                <td>I don’t like what you said. We need to talk it over!</td>
              </tr>
              <tr>
                <td>Work out</td>
                <td>To solve a problem by doing a calculation. / To solve a problem by considering the facts. / To deal with a problem in a satisfactory way.</td>
                <td>I am sure I can work out this math problem.</td>
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