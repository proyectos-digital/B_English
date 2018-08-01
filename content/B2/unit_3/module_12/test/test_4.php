
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center"> 
          <div class="col xs12 md6 lh25 ">
            <div class="c-cardGreen">
              <div class=".c-cardGreencontent row flex align-items-center ta-c padding20 ">
                <p class="u-textWhite">The water cycle is the process of how water moves around the planet. <br/><br/> It has four phases: Evaporation: It happens when the Sun heats the Earth´s surface water, which becomes water vapor or steam. The vapor rises into the air and changes from a liquid state to gas.<br/><br/> Condensation: It is vapor that comes back to Earth in the form of rain. The process of vapor turning into liquid is called condensation. As evaporated water rises into the atmosphere, it becomes cold and forms water drops, which together form clouds.<br/><br/> Precipitation: It occurs when clouds become heavy with condensed water and the atmosphere can no longer hold them. Water then falls back to Earth in the form of rain, snow or ice. <br/><br/>Collection: Water landing on Earth moves across the land in what is known as runoffs. Water that soaks into the Earth and moves underground is known as infiltration. Water is collected on Earth in many places and eventually it evaporates again.</p>
              </div>
            </div>
          </div>
          <div class=" col xs12 md6 lh30">
            <table class="c-table mt30 row" data-ejercicio="table-truefalse">
              <thead>
                <tr>
                  <th> </th>
                  <th class="ta-c">
                    <h5 class="u-textColor_4">True</h5>
                  </th>
                  <th class="ta-c">
                    <h5 class="u-textColor_4">False</h5>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">1.</strong> The water cycle explains how water is produced.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_1" name="InputRadio_1" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_2" name="InputRadio_1" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">2.</strong>  Evaporation happens when water turns to gas.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_3" name="InputRadio_2" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_4" name="InputRadio_2" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">3.</strong>  Condensation happens when gas turns to liquid.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_5" name="InputRadio_3" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_6" name="InputRadio_3" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">4.</strong> Precipitation refers to water moving across land.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_7" name="InputRadio_4" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_8" name="InputRadio_4" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
                </tr>
                <tr>
                  <td>
                    <p><strong class="u-textColor_4-dark">5.</strong> Infiltration refers to water moving underground.</p>
                  </td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_9" name="InputRadio_5" value="1"/>
                      <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                  <td class="ta-c"><span class="c-textField">
                      <input class="c-inputRadio" type="radio" id="inputRadio_10" name="InputRadio_5" value="2"/>
                      <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()">      </button>
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