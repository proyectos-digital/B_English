
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-j">
          <p class="mb50"><strong>Choose the heading that best describes the content of this passage.</strong></p>
          <p>Choosing a career is something that is not easy, particularly if there is no access to a vocational orientation service. This situation generates so much stress among students in high schools that many schools have implemented a serious counseling service with professionals in the fields of Social Work, Sociology or Psychology. The idea is that all students finishing their school years can identify their strengths and weaknesses and how those can help them choose the right field of study.</p>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
          <label class="c-CheckSelected flotantes ml10 mr10 col-flex mb10 mt10" for="inputRadio_1">Schools now investing in vocational orientation to reduce stress.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
          <label class="c-CheckSelected flotantes ml10 mr10 col-flex mb10 mt10" for="inputRadio_2">Social Work, Sociology and Psychology amongst favorite careers for high school students.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
          <label class="c-CheckSelected flotantes ml10 mr10 col-flex mb10 mt10 mr5" for="inputRadio_3">Dealing with stress when entering the university level.</label>
          <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
          <label class="c-CheckSelected flotantes ml10 mr10 col-flex mb10 mt10 mr5" for="inputRadio_4">How strengths and weaknesses can help manage stress amongst high school students.</label>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>