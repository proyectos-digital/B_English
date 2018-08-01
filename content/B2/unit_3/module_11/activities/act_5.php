
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5" ng-init="DragandDropMultiple()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <p>Participating in a meeting requires speakers to know how to interact, when to speak, when to invite others to speak, when to finish your intervention. </p>
      <h6>Classify the phrases in the box according to their use in the table below.</h6>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md10 col-center mt10-sm mt20-md">
          <div class="row-flex"><span class="dragCont"><span class="drag" rescon="2">I´m sorry. I didn´t hear that last thing you said. Can you repeat it, please?</span></span><span class="dragCont"><span class="drag" rescon="1">Carol, can you please start by reading the minutes of our previous session?</span></span><span class="dragCont"><span class="drag" rescon="1">Is everyone ready? Let´s get started then.</span></span><span class="dragCont"><span class="drag" rescon="3">Please, let´s stick to the agenda. We don´t have much time left.</span></span><span class="dragCont"><span class="drag" rescon="3">That´s not really what we are here for, today.</span></span><span class="dragCont"><span class="drag" rescon="2">Tom, could you share the findings of your research with us?</span></span></div>
        </div>
        <div class="col-flex-xs12 col-flex-md10 col-center mt10-sm mt20-md">
          <table class="c-table-estilo_tres m-a mt30">
            <thead>
              <tr>
                <th class="xs4">Starting a Meeting</th>
                <th class="xs4">Interaction during Meeting</th>
                <th class="xs4">Keeping participants on topic</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop"></span></td>
                <td><span class="drop"></span></td>
                <td><span class="drop"></span></td>
              </tr>
              <tr>
                <td><span class="drop"></span></td>
                <td><span class="drop"></span></td>
                <td><span class="drop"></span></td>
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