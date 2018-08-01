
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md4 mt30-md mt30-sm">
          <div class="row-flex">
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="1">That´s great!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">How sad!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">Oh, no!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="1">Lovely!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">I am sorry to hear that!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">I can´t believe it! Sorry!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="1">What? Marvelous!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">Terrible!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="1">Really? Super!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">That´s too bad!</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="1">Wow. Super</div>
            </div>
            <div class="dragCont m-a mt10">
              <div class="drag" rescon="2">That´s awful!</div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 mt30-md mt30-sm">
          <table class="c-table-estilo_dos">
            <thead>
              <tr>
                <th>REACTION WHEN SOMETHING GOOD HAPPENS</th>
                <th>REACTION WHEN SOMETHING BAD HAPPENS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="drop"></div>
                </td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="drop"></div>
                </td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="drop"></div>
                </td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="drop"></div>
                </td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="drop"></div>
                </td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="drop"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction is-active openNotice u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/selfcheck/self_5_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>