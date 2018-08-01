
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_12">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <h5>Let’s continue with more expressions to keep your conversations moving. </h5>
      <h6>Match the phrases in the box to their use in the table.</h6>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md10 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="dragCont">
              <div class="drag" rescon="2">How do you feel about the whole thing?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="3">Why don’t you share what you think with us?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="3">Would you like to add anything, Claire?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">I’d like you to tell me some more.</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">What about you?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Is that true?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="3">Has anyone else got anything to contribute?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="1">Is that so?</div>
            </div>
            <div class="dragCont">
              <div class="drag" rescon="2">Do you agree?   </div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md10 col-center mt10-sm mt20-md">
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
                <td class="ta-c"> <span class="drop"> </span></td>
                <td class="ta-c"> <span class="drop"> </span></td>
                <td class="ta-c"> <span class="drop"> </span></td>
              </tr>
              <tr>
                <td class="ta-c"> <span class="drop"> </span></td>
                <td class="ta-c"> <span class="drop"> </span></td>
                <td class="ta-c"> <span class="drop"> </span></td>
              </tr>
              <tr>
                <td class="ta-c"> <span class="drop"> </span></td>
                <td class="ta-c"> <span class="drop"> </span></td>
                <td class="ta-c"> <span class="drop"> </span></td>
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