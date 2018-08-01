
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md9 col-center">
          <h5><strong class="u-textColor_4">1. </strong>  Modal verbs are used to say how sure we are about something.</h5>
          <p>Look at the picture. What can you guess about him?</p>
        </div>
      </div>
      <div class="row">
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
            <div class="row mt50"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_7_1.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <h6 class="mt20">Drag the sentences to match the possibilities.</h6>
            <div class="row-flex justify-around mt40">
              <div class="dragCont">
                <div class="drag">He can't be a dentist.</div>
              </div>
              <div class="dragCont">
                <div class="drag">He must be a chef.</div>
              </div>
              <div class="dragCont">
                <div class="drag">He should be a nice person.</div>
              </div>
              <div class="dragCont">
                <div class="drag">He could be famous.</div>
              </div>
            </div>
            <table class="c-table-estilo_uno w100 mt40">
              <thead>
                <tr>
                  <th>Asking for Opinions</th>
                  <th>Outlining Facts</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ta-c w50">99% sure it is possible.</td>
                  <td class="w50"><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td class="ta-c">99% sure it is impossible.</td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td class="ta-c">50% possible.</td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
                <tr>
                  <td class="ta-c">We use should when we expect something to happen.</td>
                  <td><span class="drop w80 centrado"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>