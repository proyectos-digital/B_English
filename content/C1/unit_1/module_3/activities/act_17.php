
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_17">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p class="ta-c">Depending on the social context, it is always important to use appropriate language to initiate conversation. For office, work settings or with people you do not know, formal language is more appropriate. With friends, family or with people you know quite well, a more informal tone can be used.</p>
        <h6>With the following expressions, identify which would be formal or informal by writing them in the table provided.</h6>
      </div>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent row-flex justify-around padding20">
          <ul class="col xs4">
            <li>• Good morning / afternoon / evening.</li>
            <li>• Hey. What’s up?</li>
            <li>• Ok. So, I’ll see you.</li>
            <li>• How’s everything?</li>
          </ul>
          <ul class="col xs4">
            <li>• How’s it going?</li>
            <li>• It was really nice meeting you.</li>
            <li>• Hello. How are you doing?</li>
            <li>• So long.</li>
          </ul>
          <ul class="col xs4">
            <li>• Good day Mr / Mrs / Ms.</li>
            <li>• Enjoy the rest of your day.</li>
            <li>• Take it easy.</li>
            <li>• Pleased to meet you.</li>
          </ul>
        </div>
      </div>
      <table class="c-table-estilo_tres m-a">
        <thead>
          <tr>
            <th>Formal</th>
            <th>Informal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <h5>To start a conversation</h5>
            </td>
            <td>
              <h5>To start a conversation</h5>
            </td>
          </tr>
          <tr>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
          </tr>
          <tr>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
          </tr>
          <tr>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
          </tr>
          <tr>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>
              <h5>To end a conversation</h5>
            </td>
            <td>
              <h5>To end a conversation</h5>
            </td>
          </tr>
          <tr>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
          </tr>
          <tr>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input class="c-input row js-escribir" type="text"/>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>