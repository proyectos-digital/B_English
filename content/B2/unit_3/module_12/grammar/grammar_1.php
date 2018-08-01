
<gylp></gylp>
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <table class="c-table-estilo_tres row">
          <thead>
            <tr>
              <th>Modal Verb</th>
              <th>Use</th>
              <th>Example</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ta-c" rowspan="2">Must</td>
              <td class="ta-c">Strong obligation</td>
              <td class="ta-c">You must repect the elderly. </td>
            </tr>
            <tr>
              <td class="ta-c">Logical conclusion / certainty</td>
              <td class="ta-c">She must be sick. She had a fever yesterday.</td>
            </tr>
            <tr>
              <td class="ta-c">Must not</td>
              <td class="ta-c">Prohibition</td>
              <td class="ta-c">You musn’t drive without a drivers’ license </td>
            </tr>
            <tr>
              <td class="ta-c" rowspan="3">Can</td>
              <td class="ta-c">Ability</td>
              <td class="ta-c">I can swim very well.</td>
            </tr>
            <tr>
              <td class="ta-c">Permission</td>
              <td class="ta-c">Yes, you can use the dictionary in the test.</td>
            </tr>
            <tr>
              <td class="ta-c">Possibility</td>
              <td class="ta-c">When you are in Cali, you can go to the Pance river.</td>
            </tr>
            <tr>
              <td class="ta-c" rowspan="3">Could</td>
              <td class="ta-c">Ability in the past</td>
              <td class="ta-c">I could roller skate when I was a kid.</td>
            </tr>
            <tr>
              <td class="ta-c">Polite permission</td>
              <td class="ta-c">Could I ask you a question?</td>
            </tr>
            <tr>
              <td class="ta-c">Possibility</td>
              <td class="ta-c">We could go to the disco instead.</td>
            </tr>
            <tr>
              <td class="ta-c" rowspan="2">May</td>
              <td class="ta-c">Permission</td>
              <td class="ta-c">May I answer the mobile?</td>
            </tr>
            <tr>
              <td class="ta-c">Possibility, probability</td>
              <td class="ta-c">It may rain tonight.</td>
            </tr>
            <tr>
              <td class="ta-c" rowspan="2">Might</td>
              <td class="ta-c">Polite permission</td>
              <td class="ta-c">Might I take the book now?</td>
            </tr>
            <tr>
              <td class="ta-c">Possibility, probability</td>
              <td class="ta-c">They might have forgotten.</td>
            </tr>
            <tr>
              <td class="ta-c" rowspan="3">Should / ought to</td>
              <td class="ta-c">50 % obligation</td>
              <td class="ta-c">You should pay before spending.</td>
            </tr>
            <tr>
              <td class="ta-c">Advice</td>
              <td class="ta-c">You should go to the doctor.</td>
            </tr>
            <tr>
              <td class="ta-c">Logical conclusion</td>
              <td class="ta-c">That should be the reason!</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>