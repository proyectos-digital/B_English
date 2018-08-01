
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row">
          <div class="row">                  
            <div class="col-center col xs12 md11 lh30 ta-j">
              <table class="c-table mt30 row" data-ejercicio="table-truefalse">
                <thead>
                  <tr>
                    <th> </th>
                    <th class="ta-c">
                      <h5 class="u-textColor_4">Formal</h5>
                    </th>
                    <th class="ta-c">
                      <h5 class="u-textColor_4">Informal</h5>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">1.</strong> I am sorry to have to inform you that …</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_1" name="InputRadio_1" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_1"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_2" name="InputRadio_1" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_2"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">2.</strong>  Oh, that’s too bad.</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_3" name="InputRadio_2" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_3"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_4" name="InputRadio_2" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_4"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">3.</strong>  Are you feeling any better?</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_5" name="InputRadio_3" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_5"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_6" name="InputRadio_3" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_6"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">4.</strong>  I hope that we can overcome this difficulty.</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_7" name="InputRadio_4" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_7"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_8" name="InputRadio_4" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_8"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">5.</strong>  I hope you’re OK again now.</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_9" name="InputRadio_5" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_9"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_10" name="InputRadio_5" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_10"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">6.</strong>  It is with regret that I must …</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_11" name="InputRadio_6" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_11"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_12" name="InputRadio_6" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_12"></label></span></td>
                  </tr>
                  <tr>
                    <td>
                      <p><strong class="u-textColor_4-dark">7.</strong>  Can you let me know if...</p>
                    </td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_13" name="InputRadio_7" value="1"/>
                        <label class="c-Checkbox" for="inputRadio_13"></label></span></td>
                    <td class="ta-c"><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_14" name="InputRadio_7" value="2"/>
                        <label class="c-Checkbox" for="inputRadio_14"></label></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>