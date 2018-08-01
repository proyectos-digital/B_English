
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt30-md mt10-sm">
        <div class="col-flex-md4 col-flex-sm12 col-flex-xs12 col-center padding10">
          <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
          <label class="c-CheckSelected col-flex mb10 mt10" for="inputRadio_1">OPTION 1</label><img class="u-responsive-img centrado" src="unit_2/module_8/assets/images/self_6_1.png" alt=""/>
        </div>
        <div class="col-flex-md4 col-flex-sm12 col-flex-xs12 col-center padding10">
          <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
          <label class="c-CheckSelected col-flex mb10 mt10" for="inputRadio_2">OPTION 2</label><img class="u-responsive-img centrado" src="unit_2/module_8/assets/images/self_6_2.png" alt=""/>
        </div>
        <div class="col-flex-md4 col-flex-sm12 col-flex-xs12 col-center padding10">
          <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
          <label class="c-CheckSelected col-flex mb10 mt10" for="inputRadio_3">OPTION 3</label><img class="u-responsive-img centrado" src="unit_2/module_8/assets/images/self_6_3.png" alt=""/>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside  is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_8/selfcheck/self_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>