
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">           
      <div class="row-flex col-center align-items-center">
        <h5 class="mt20">Listen to different reactions and classify them according to a type of reaction they express.</h5>
        <div class="row mt40">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img m-a" src="unit_3/module_12/assets/images/act_15.png" alt="act_5"/></div>
          <div class="col xs12 md6">
            <div class="row mt30">
              <div class="row">
                <div class="col xs12 sm6 md3">
                  <div class="col xs4 md12 mb15 ta-c">
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_16_3.mp3"></button>
                  </div>
                  <div class="col xs8 md12 mb15">   
                    <div class="dragCont ">
                      <div class="drag" rescon="1">Example 1</div>
                    </div>
                  </div>
                </div>
                <div class="col xs12 sm6 md3">
                  <div class="col xs4 md12 mb15 ta-c">
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_16_4.mp3"></button>
                  </div>
                  <div class="col xs8 md12 mb15">   
                    <div class="dragCont">
                      <div class="drag" rescon="2">Example 2</div>
                    </div>
                  </div>
                </div>
                <div class="col xs12 sm6 md3">
                  <div class="col xs4 md12 mb15 ta-c">
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_16_1.mp3"></button>
                  </div>
                  <div class="col xs8 md12 mb15">   
                    <div class="dragCont">
                      <div class="drag" rescon="2">Example 3</div>
                    </div>
                  </div>
                </div>
                <div class="col xs12 sm6 md3">
                  <div class="col xs4 md12 mb15 ta-c">
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_16_2.mp3"></button>
                  </div>
                  <div class="col xs8 md12 mb15">   
                    <div class="dragCont">
                      <div class="drag" rescon="1">Example 4</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <table class="c-table-estilo_uno col xs12">
                  <thead>
                    <tr>
                      <th>Positive Reaction</th>
                      <th>Negative Reaction</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="drop h40 centrado"></span></td>
                      <td><span class="drop h40 centrado"></span></td>
                    </tr>
                    <tr>
                      <td><span class="drop h40 centrado"></span></td>
                      <td><span class="drop h40 centrado"></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_12/activities/act_16_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>