
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <p class="ta-j">Continuing with the topic of keeping the conversation moving, here are some expressions to keep a conversation flowing, to invite someone to add something to the conversation, express thoughts and opinions, and to include people in a group in an interaction. The expression “one-to-one” means one person asking another person, not the group.</p>
      <div class="row">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm mt20-md">
          <p><strong>Listen and classify the expressions according to their use..</strong></p>
          <div class="mb20 row-flex mt20">
            <div class="col-flex-xs12 col-flex-md2 col-center mt10-sm mt20-md">
              <div class="col-flex-xs4 col-flex-md12 col-center mt10-sm mt20-md">
                <div class="row-flex mb5">
                  <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_11/assets/audios/act_11_1.mp3"></button>
                  <div class="dragCont f-l centrado">
                    <div class="drag" rescon="1"><span>Example 1</span></div>
                  </div>
                </div>
                <div class="row-flex mb5">
                  <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_11/assets/audios/act_11_2.mp3"></button>
                  <div class="dragCont f-l centrado">
                    <div class="drag" rescon="2"><span>Example 2</span></div>
                  </div>
                </div>
                <div class="row-flex mb5">
                  <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_3/module_11/assets/audios/act_11_3.mp3"></button>
                  <div class="dragCont f-l centrado">
                    <div class="drag" rescon="3"><span>Example 3</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-flex-xs12 col-flex-md8 col-center mt10-sm mt20-md">
              <table class="c-table-estilo_tres m-a mt30">
                <thead>
                  <tr>
                    <th class="xs4">To continue</th>
                    <th class="xs4">Invitation in one-to-one interaction</th>
                    <th class="xs4">Invitation in group interaction</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="ta-c"> <span class="drop m-a"> </span></td>
                    <td class="ta-c"> <span class="drop m-a"> </span></td>
                    <td class="ta-c"> <span class="drop m-a"> </span></td>
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
    <button class="c-btn-IconAction u-bgIconAlert openNotice is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_11/activities/act_11_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>