
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row mt40-md"></div>
      <div class="row mt40-md">
        <div class="col sm9 md7 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <div class="row-flex justify-center"><span>Look<strong class="mr10 ml10">| </strong></span><span>Put up<strong class="mr10 ml10">| </strong></span><span>Talk<strong class="mr10 ml10">| </strong></span><span>Go<strong class="mr10 ml10">| </strong></span></div>
              <div class="row-flex mt20 justify-center"><span>Complain<strong class="mr10 ml10">| </strong></span><span>Get on<strong class="mr10 ml10">| </strong></span><span>Take<strong class="mr10 ml10">| </strong></span><span>Think<strong class="mr10 ml10">| </strong></span><span> Do away</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex mt60-xs mt40-md">
        <div class="col-flex-md9 col-flex-sm11 col-center">
          <table class="c-table-estilo_dos row mb20">
            <thead>
              <tr>
                <th>About</th>
                <th>With</th>
                <th>After</th>
              </tr>
            </thead>
            <tbody></tbody>
            <tr></tr>
          </table>
          <table class="c-table-estilo_dos row mb20">
            <tbody>
              <tr>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
                <td>
                  <input class="w100 c-input ta-c js-escribir" type="text" placeholder=""/>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>