
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <p>Sometimes bad things happen. When we hear about bad things that happen to other people it’s a good idea to express sympathy. We use the first set of expressions to express our concern.</p><br/>
        <p>It’s also common to express sympathy in writing. The second set are some common phrases you can use when writing a sympathy note.</p>
        <h5 class="ta-c mt30 mb60 row">Listen to the examples and classify them according to their use.</h5>
        <div class="col xs12 md8">
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_4_1.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="1">Example 1</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_4_2.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="2"> Example 2</div>
              </div>
            </div>
          </div>
          <div class="col xs12 md4">
            <div class="col xs4 md12 mb15 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_4_3.mp3"></button>
            </div>
            <div class="col xs8 md12 mb15">   
              <div class="dragCont">
                <div class="drag" rescon="3">Example 3</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md4">
          <table class="c-table-estilo_uno col xs12">
            <thead>
              <tr>
                <th>Expressing Condolences</th>
                <th>Sympathizing</th>
                <th>Expressing Concern</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop h50 centrado"></span></td>
                <td><span class="drop h50 centrado"></span></td>
                <td><span class="drop h50 centrado"></span></td>
              </tr>
            </tbody>
          </table>
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
  <article class="c-noticeAside-body" ng-include="'unit_3/module_12/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>