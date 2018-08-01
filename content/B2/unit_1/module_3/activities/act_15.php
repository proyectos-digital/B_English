
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5> </h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row-flex">
              <div class="col-flex-sm12 col-flex-md6 col-center">
                <div class="row-flex mt40">
                  <ul class="c-listDefault">
                    <li>
                       I <strong>want to buy </strong>a new house.</li>
                    <li class="mt20">
                       I'm <strong>learning to speak </strong>Italian.</li>
                    <li class="mt20">
                       He <strong>offered to give </strong>us a ride.</li>
                    <li class="mt20">
                       I <strong>enjoy traveling.</strong></li>
                    <li class="mt20">
                       I <strong>feel like going </strong>out tonight.</li>
                    <li class="mt20">I <strong>suggest renting </strong>a car.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row-flex mt30">
              <div class="col-flex-sm3 col-flex-md5 col-center mt20"><img class="u-responsive-img centrado w90" src="./unit_1/module_3/assets/images/act_15_1.png" alt="" srcset=""/></div>
              <div class="col-flex-sm3 col-flex-md5 col-center mt20"><img class="u-responsive-img centrado w90" src="./unit_1/module_3/assets/images/act_15_2.png" alt="" srcset=""/></div>
              <div class="col-flex-sm3 col-flex-md5 col-center mt20"><img class="u-responsive-img centrado w90" src="./unit_1/module_3/assets/images/act_15_3.png" alt="" srcset=""/></div>
              <div class="col-flex-sm3 col-flex-md5 col-center mt20"><img class="u-responsive-img centrado w90" src="./unit_1/module_3/assets/images/act_15_4.png" alt="" srcset=""/></div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt50">
              <table class="c-table-estilo_tres w100">
                <thead>
                  <tr>
                    <th>VERB + TO</th>
                    <th>VERB + ING</th>
                    <th>VERB + INFINITIVE OR ING</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="ta-c">
                    <td>Agree</td>
                    <td>Avoid</td>
                    <td>Begin</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Ask</td>
                    <td>Admit</td>
                    <td>Can't stand</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Decide</td>
                    <td>Complete</td>
                    <td>Continue</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Fail</td>
                    <td>Consider</td>
                    <td>Expect</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Get ready</td>
                    <td>Discuss</td>
                    <td>Forget</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Happen</td>
                    <td>Dislike</td>
                    <td>Go</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Hope</td>
                    <td>Don't mind</td>
                    <td>Hate</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Know how</td>
                    <td>Enjoy</td>
                    <td>Like</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Learn</td>
                    <td>Finish</td>
                    <td>Love</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Prepare</td>
                    <td>Keep</td>
                    <td>Plan</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Promise</td>
                    <td>Miss</td>
                    <td>Prefer</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Volunteer</td>
                    <td>Mention</td>
                    <td>Remember</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Wait</td>
                    <td>Practice</td>
                    <td>Start</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Want</td>
                    <td>Quit</td>
                    <td>Stop</td>
                  </tr>
                  <tr class="ta-c">
                    <td>Wish</td>
                    <td>Recommend</td>
                    <td>Try</td>
                  </tr>
                  <tr class="ta-c">
                    <td></td>
                    <td>Understand</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconAlert is-active openNotice" ng-click="idNotice = 1"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_3/activities/act_15_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>