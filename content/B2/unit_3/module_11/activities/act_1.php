
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center padding10">
          <h5>Watch the video about paying taxes in Colombia. </h5>
          <h6>Pay attention to the use of the words <strong>“whose”, “whom”, “where”, </strong>and <strong>“when”.</strong></h6>
          <div class="row-flex justify-center mt20 mb20">
            <div class="col md11">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls">
                  <source src="unit_3/module_11/assets/videos/act_1.mp4" type="video/mp4"/>
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center padding10">
          <h5>Listen again and pay attention to these sentences and the words in bold:</h5>
          <p class="ml30 mt30">• People <strong>whose</strong> salary is over six minimum monthly salaries have to declare.</p>
          <p class="ml30 mt30">• There are people <strong>who </strong>pay taxes before the deadline.</p>
          <p class="ml30 mt30">• People <strong>whose</strong> ID number ends in digits from 00 to 09 have to pay the first week.</p>
          <p class="ml30 mt30"><strong>• When </strong>preparing your statement, you need to know <strong>who</strong> paid you money and <strong>who</strong> owes you money.</p>
          <p class="ml30 mt30">• You have to know <strong>where </strong>is the DIAN office that is closest to your home.</p>
        </div>
        <div class="col-flex-sm12 col-flex-md12 col-center">
          <table class="c-table-estilo_tres m-a mt30">
            <thead>
              <tr>
                <th colspan="2">PEOPLE</th>
                <th rowspan="2">POSSESSION</th>
                <th rowspan="2">PLACES</th>
                <th rowspan="2">TIME</th>
              </tr>
              <tr>
                <th>Subject</th>
                <th>Object</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span></td>
                <td> <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span></td>
                <td> <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span></td>
                <td> <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span></td>
                <td> <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td> </td>
                <td> <span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..."/></span></td>
                <td> </td>
                <td> </td>
                <td> </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconAlert openNotice is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_11/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>