
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex">
        <h5><strong class="u-textColor_4">1. </strong> Identify if the following sentences are written in the active or passive voice. Drag them to the appropriate column.</h5>
        <div class="row flex align-items-center justify-center">
          <div class="col xs12 md3  showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_2_1.png"/></div>
          <div class="col xs12 md9">
            <div class="row-flex">
              <div class="col xs6">
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="2">An MP3 player is used for listening to music.</div>
                </div>
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="2">Fancy clothes are made in Envigado.</div>
                </div>
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="1">Sandra and Rosa always drink Colombian coffee.</div>
                </div>
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="1">They collect apples.</div>
                </div>
              </div>
              <div class="col xs6">
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="1">James drives a sports car.</div>
                </div>
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="2">Cacao is exported to Spain.</div>
                </div>
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="1">Elephants eat peanuts.</div>
                </div>
                <div class="dragCont row m-a mt10">
                  <div class="drag h50" rescon="2">Refrigerators are made in Korea.</div>
                </div>
              </div>
            </div>
            <div class="row mt40">
              <table class="c-table-estilo_dos row">
                <thead>
                  <tr>
                    <th class="w50">Active Voice</th>
                    <th class="w50">Passive Voice</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
                    <td>
                      <div class="drop centrado mb0"></div>
                    </td>
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

<div class="c-noticeAside e" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_2_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>