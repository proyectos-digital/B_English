
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col sm12 md6 col-center">
          <div class="row-flex align-items-center"> <img class="u-responsive-img m-a" src="unit_3/module_10/assets/images/act_3.png" alt="act_2"/>
            <div class="col xs10 col-center">
              <div class="c-cardBlue">
                <div class="c-cardBlueContent">
                  <p>As studied before, you use “be going to” when you decided BEFORE and “will” when it occurs to you and you decide at the moment of speaking. Classify the statements according to their meaning.<br/> <br/></p>
                  <p>Read the following dialogue and classify the sentences in bold into “intentions” (or something planned BEFORE) and “spontaneous decisions” (something that you have just decided at the moment of speaking).</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 col-center">
          <div class="row">
            <div class="row mt40">
              <div class="col xs12 sm6">
                <div class="dragCont">
                  <div class="drag" rescon="2">What are you going to do this weekend?</div>
                </div>
              </div>
              <div class="col xs12 sm6">
                <div class="dragCont">
                  <div class="drag" rescon="2">I think I am finally going to pass my driving test.</div>
                </div>
              </div>
              <div class="col xs12 sm6">
                <div class="dragCont">
                  <div class="drag" rescon="1">How long will it take you to finish the report?</div>
                </div>
              </div>
              <div class="col xs12 sm6">
                <div class="dragCont">
                  <div class="drag" rescon="1">I think I will go to visit my grandparents this weekend.</div>
                </div>
              </div>
              <div class="col xs12 sm6">
                <div class="dragCont">
                  <div class="drag" rescon="2">I think that I am also going to buy that other pair of shoes.</div>
                </div>
              </div>
              <div class="col xs12 sm6">
                <div class="dragCont">
                  <div class="drag" rescon="2">I´m going to have lunch in half an hour.</div>
                </div>
              </div>
            </div>
            <div class="row mt40">
              <table class="c-table-estilo_uno col xs12">
                <thead>
                  <tr>
                    <th>Spontaneous Decisions</th>
                    <th>Intentions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="drop h50 centrado"></span></td>
                    <td><span class="drop h50 centrado"></span></td>
                  </tr>
                  <tr>
                    <td><span class="drop h50 centrado"></span></td>
                    <td><span class="drop h50 centrado"></span></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="drop h50 centrado"></span></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><span class="drop h50 centrado"></span></td>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>