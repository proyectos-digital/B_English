
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
          <div class="row"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/test_4.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <table class="c-table-estilo_uno row ta-c">
              <thead>
                <tr>
                  <th>Adverb</th>
                  <th>Adjetive</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Name:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Profession:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Likes doing in spare time.</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Pets:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Favorite music:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Favorite room in the house:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Favorite sport:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td>Favorite book:</td>
                  <td><span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconInfoActivity" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_3/test/test_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>