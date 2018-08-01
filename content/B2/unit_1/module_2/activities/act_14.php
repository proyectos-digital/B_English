
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md10 col-center">
          <h5><strong class="u-textColor_4">1. </strong>  Complete the table with the correct form of the verbs.</h5>
          <div class="row-flex mt20">
            <table class="c-table-estilo_tres">
              <thead>  
                <tr>
                  <th class="xs3 md4 showTo-md"> </th>
                  <th class="xs3 sm4 md2">Future tense</th>
                  <th class="xs3 sm4 md3">Active</th>
                  <th class="xs3 sm4 md3">Passive will + have been + participle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="showTo-md"><img class="u-responsive-img w100" src="unit_1/module_2/assets/images/act_14-a.jpg" alt=""/></td>
                  <td class="ta-c">Future Continuous</td>
                  <td>
                    <div class="row"> 
                      <div class="col-flex ta-c">At 8:00 PM tonight, John <strong>(1. wash) </strong><span class="c-textField">
                          <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><br/>the dishes.</div>
                    </div>
                  </td>
                  <td>
                    <div class="row"> 
                      <div class="col-flex ta-c">At 8:00 PM tonight, the dishes<strong>(2. Wash) </strong><span class="c-textField">
                          <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><br/>by John.</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="showTo-md"><img class="u-responsive-img w100" src="unit_1/module_2/assets/images/act_14-b.jpg" alt=""/></td>
                  <td class="ta-c">Future Perfect</td>
                  <td>
                    <div class="row"> 
                      <div class="col-flex ta-c">They <strong>(3. complete) <span class="c-textField">
                            <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong><br/>the assignment before the class ends.</div>
                    </div>
                  </td>
                  <td>
                    <div class="row"> 
                      <div class="col-flex ta-c">The assignment<strong>(4. complete)</strong><span class="c-textField">
                          <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><br/>before the class ends.</div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="showTo-md"><img class="u-responsive-img w100" src="unit_1/module_2/assets/images/act_14-c.jpg" alt=""/></td>
                  <td class="ta-c">Future Perfect Continuous</td>
                  <td>
                    <div class="row">
                      <div class="col-flex ta-c">The famous artist<strong>(5. paint) <span class="c-textField">
                            <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong><br/>the mural for over six months by the time it is finished.</div>
                    </div>
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-flex ta-c">The mural<strong>(6. paint) <span class="c-textField">
                            <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong><br/>by the famous artist for over six months by the time it is finished.</div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice u-bgIconAlert is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_14_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>