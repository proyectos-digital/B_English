
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <div class="col xs12 md7">
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/test_5_1.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="3">Example 1</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/test_5_2.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="2">Example 2</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/test_5_3.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="1">Example 3</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/test_5_4.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="2">Example 4</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/test_5_5.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="1">Example 5</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/test_5_6.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="3">Example 6</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <table class="c-table-estilo_uno col xs12">
            <thead>
              <tr>
                <th>INTEREST</th>
                <th>SYMPATHY</th>
                <th>SURPRISE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop h35 centrado"></span></td>
                <td><span class="drop h35 centrado"></span></td>
                <td><span class="drop h35 centrado"></span></td>
              </tr>
              <tr>
                <td><span class="drop h35 centrado"></span></td>
                <td><span class="drop h35 centrado"></span></td>
                <td><span class="drop h35 centrado"></span></td>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>