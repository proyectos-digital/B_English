
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p class="ta-c">
           The <strong>past perfect continuous </strong>is used to describe an action that started in the past and was still in progress when a second action started. <br/>Both actions began and ended in the past.</p>
        <div class="row-flex mt40 align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
            <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/grm_2.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="row">
              <table class="c-table-estilo_tres w100">
                <tbody>
                  <tr>
                    <td> <strong>Affirmative</strong></td>
                    <td>
                       Had + been + ing</td>
                  </tr>
                  <tr>
                    <td> <strong>Negative</strong></td>
                    <td>Had + not + been + ing</td>
                  </tr>
                  <tr>
                    <td><strong>Question</strong></td>
                    <td>Had + subject + been + ing</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <p><strong>Examples:</strong></p>
                <p>Ben<strong>had been working</strong>for three hours when Rachel came home.</p>
                <p>Ben<strong>hadn't been working</strong>for hours whe Rachel came home.</p>
                <p><strong>Had Ben been working </strong>for hours when Rachel came home?</p>
              </div>
            </div>
          </div>
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
