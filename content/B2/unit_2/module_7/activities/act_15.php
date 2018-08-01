
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_15">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row">
        <h5>Classify the verbs. </h5>
        <h6>Drag and drop the verbs into the right preposition column.</h6>
        <div class="row mt40">
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="4">believe</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="1">go</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="2">cope</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="5">admit</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="3">concentrate</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="4">specialize</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="2">put up</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="5">confess</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="3">depend</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="4">succeed</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="5">look forward</div>
            </div>
          </div>
          <div class="col xs3 md2">
            <div class="dragCont">
              <div class="drag" rescon="3">insist</div>
            </div>
          </div>
        </div>
        <div class="row mt40">
          <table class="c-table-estilo_uno col xs12">
            <thead>
              <tr>
                <th>into</th>
                <th>with</th>
                <th>on                               </th>
                <th>in</th>
                <th>to</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
              </tr>
              <tr>
                <td></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
              </tr>
            </tbody>
          </table>
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