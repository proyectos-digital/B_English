
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md9 col-center mt10-sm mt10-md">
          <h5>Write a conclusion for each of the situations.</h5><img class="u-responsive-img ancho200 ml10 mb10 mt30 centrado" src="unit_2/module_6/assets/images/act_4.png" alt=""/>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt10-md">
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• This window must be replaced.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• The tourists could be lost.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuariob"></textarea>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• You can´t be serious.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuarioc"></textarea>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm">
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• Our cousins might join us for lunch today.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuariod"></textarea>
            </div>
          </div>
          <div class="mb20 row-flex mt20">
            <div class="col-flex">• That salesman may be here to see you.</div>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea" placeholder="Write here..." ng-model="textousuarioe"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>