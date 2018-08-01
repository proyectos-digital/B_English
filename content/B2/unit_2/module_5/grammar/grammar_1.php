
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <p>The <strong>past perfect </strong>can be used to communicate something before the past, or looking back from a past moment in time.</p>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p> <strong>Examples:</strong></p>
              <p>She <strong>had left </strong>the party when he arrived.</p>
              <p>She<strong> hadn't left </strong>the party when he arrived.</p>
              <p><strong>Had she left </strong>the party when he arrived?</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center"> 
          <table class="c-table-estilo_tres w100 ta-c">
            <tbody>
              <tr>
                <td> <strong>Affirmative</strong></td>
                <td>
                   Had + past participle</td>
              </tr>
              <tr>
                <td><strong>Negative</strong></td>
                <td>Had + not + past participle</td>
              </tr>
              <tr>
                <td><strong>Question</strong></td>
                <td>Had + subject + past participle</td>
              </tr>
            </tbody>
          </table><img class="u-responsive-img centrado mt50" src="./unit_2/module_5/assets/images/grm_1.png" alt="" srcset=""/>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
