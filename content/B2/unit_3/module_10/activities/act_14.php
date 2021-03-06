
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_14">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <h5><strong class="u-textColor_4">1. </strong> One point in giving opinions is to understand that sometimes you agree, disagree or choose to give a neutral opinion (you don’t agree or disagree), especially when you don’t want to compromise your views. </h5>
        <h6>Read and listen to the expressions and classify the expressions according to their use.</h6>
        <div class="row row-flex justify-center">
          <div class="col xs6 sm4 md3 mt20 row-flex justify-center">
            <div class="f-l _dropCont">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_14_1.mp3"></button>
              <div class="dragCont mt20">
                <div class="drag" rescon="2">That´s a good point. I think we should consider following these steps.</div>
              </div>
            </div>
          </div>
          <div class="col xs6 sm4 md3 mt20">
            <div class="f-l _dropCont">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_14_3.mp3"></button>
              <div class="dragCont mt20">
                <div class="drag" rescon="3">I´m not so sure about that. Maybe we should consider a second opinion.</div>
              </div>
            </div>
          </div>
          <div class="col xs6 sm4 md3 mt20">
            <div class="f-l _dropCont">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_14_5.mp3"></button>
              <div class="dragCont mt20">
                <div class="drag" rescon="1">Yes, but don´t you think we could also give him a call?</div>
              </div>
            </div>
          </div>
          <div class="col xs6 sm4 md3 mt20">
            <div class="f-l _dropCont">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_14_2.mp3"></button>
              <div class="dragCont mt20">
                <div class="drag" rescon="3">As far as I´m concerned, this is not allowed by the administration.</div>
              </div>
            </div>
          </div>
          <div class="col xs6 sm4 md3 mt20">
            <div class="f-l _dropCont">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_14_4.mp3"></button>
              <div class="dragCont mt20">
                <div class="drag" rescon="1">In my opinion, the new design is better.</div>
              </div>
            </div>
          </div>
          <div class="col xs6 sm4 md3 mt20">
            <div class="f-l _dropCont">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_10/assets/audios/act_14_6.mp3"></button>
              <div class="dragCont mt20">
                <div class="drag" rescon="2">I don´t think so either.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <table class="c-table-estilo_uno row">
            <thead>
              <tr>
                <th class="xs4"> Express Facts</th>
                <th class="xs4"> Explain Causes</th>
                <th class="xs4"> Express something <br/> differently</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
                <td><span class="drop centrado"></span></td>
              </tr>
              <tr>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>