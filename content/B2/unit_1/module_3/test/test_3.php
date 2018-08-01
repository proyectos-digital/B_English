
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex justify-around">
            <div class="dragCont">
              <div class="drag" rescon="1">Stop</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Decide</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Need</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Plan</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Enjoy</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Avoid</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Promise</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Look forward to</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Mind</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Invite someone</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Want</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Finish</div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center">
          <div class="row">
            <table class="c-table-estilo_uno w100">
              <thead>
                <tr>
                  <th>+ING</th>
                  <th>+ INFINITE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="drop w80 centrado"></span></td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td><span class="drop w80 centrado"></span></td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td><span class="drop w80 centrado"></span></td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td><span class="drop w80 centrado"></span></td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td><span class="drop w80 centrado"></span></td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td><span class="drop w80 centrado"></span></td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>