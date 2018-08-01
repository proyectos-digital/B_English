
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropClonable()">
    <section class="template-content">
      <div class="row mt40">
        <div class="col-flex-xs12 col-flex-sm9 col-center">
          <div class="row-flex mt40">
            <div class="col xs6 sm4 md3 col-center">
              <div class="dragCont">
                <div class="drag">Expressing Opinions</div>
              </div>
            </div>
            <div class="col xs6 sm4 md3 col-center">
              <div class="dragCont">
                <div class="drag">Agreeing with ideas</div>
              </div>
            </div>
            <div class="col xs6 sm4 md3 col-center">
              <div class="dragCont">
                <div class="drag">Partial Agreement</div>
              </div>
            </div>
            <div class="col xs6 sm4 md3 col-center">
              <div class="dragCont">
                <div class="drag">Disagreeing</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt40">                         
        <div class="row-flex mt40">
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">This is absolutely right.<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">I agree with this opinion.<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">As far as I’m concerned...<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">I agree with this point of view, but...<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont"> I think...<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">I can’t agree with you.<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">This idea is right, but...<span class="drop centrado"></span></div>
          </div>
          <div class="col-flex-xs6 col-flex-sm4 col-flex-md3 col-center mt40">
            <div class="_dropCont">I’m afraid…<span class="drop centrado"></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropClonable()"></button>
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