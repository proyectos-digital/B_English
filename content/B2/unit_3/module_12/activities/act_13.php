
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex col-center align-items-center">
        <div class="row">
          <table class="c-table-estilo_tres col xs12">
            <thead>
              <tr>
                <th>SHOWING INTEREST</th>
                <th>EXPRESSING APPRECIATION</th>
                <th>RESPONDING TO APPRECIATION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p class="lh30">What are you working on? <br/> How’s it coming along? <br/> I think you did a nice/great job. <br/> with/on ___. <br/> What’s going on with you?</p>
                </td>
                <td>
                  <p class="lh30">Thanks for all your help. <br/> Thanks for everything you’ve done. <br/> Thanks a million. I owe you big time. <br/> I really appreciate your help (with that). <br/> You’ve been very helpful. <br/> I couldn’t have done it without you.</p>
                </td>
                <td>
                  <p class="lh30">You’re welcome. <br/> (It was) My pleasure. <br/> Don’t mention it. <br/> Anytime. <br/> If you need ___, just let me know. <br/> No problem. <br/> Not at all.</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <h5 class="mb40 mt50">Listen to the examples and classify them according to what they express.</h5>
        <div class="row mt30">
          <div class="col xs12 md7">
            <div class="col xs12 md4">
              <div class="col xs4 md12 mb15 ta-c">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_13_1.mp3"></button>
              </div>
              <div class="col xs8 md12 mb15">   
                <div class="dragCont">
                  <div class="drag" rescon="1">Example 1</div>
                </div>
              </div>
            </div>
            <div class="col xs12 md4">
              <div class="col xs4 md12 mb15 ta-c">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_13_2.mp3"></button>
              </div>
              <div class="col xs8 md12 mb15">   
                <div class="dragCont">
                  <div class="drag" rescon="2">Example 2</div>
                </div>
              </div>
            </div>
            <div class="col xs12 md4">
              <div class="col xs4 md12 mb15 ta-c">
                <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_13_3.mp3"></button>
              </div>
              <div class="col xs8 md12 mb15">   
                <div class="dragCont">
                  <div class="drag" rescon="3">Example 3</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs12 md5">
            <table class="c-table-estilo_uno col xs12">
              <thead>
                <tr>
                  <th>Expressing Appreciation</th>
                  <th>Showing Interest</th>
                  <th>Responding to Appreciation</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="drop h40 centrado"></span></td>
                  <td><span class="drop h40 centrado"></span></td>
                  <td><span class="drop h40 centrado"></span></td>
                </tr>
              </tbody>
            </table>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_12/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>