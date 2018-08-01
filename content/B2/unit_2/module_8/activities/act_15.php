
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_15a.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> 
                  <h5>Indigo Hotel - Yopal</h5>
                  <p>I don’t think my review will be any different from the others. Let me briefly state what this hotel is. It’s boutique. It’s in a great location. Rooms are small. Beds are good. We were located on the back side so not street facing. Quiet at night. Located near the main square. There is a coffee shop on the corner for early coffee. Very easy to find good restaurants and simply walk to the hotel. Fair rooftop bar with an adequate restaurant on ground floor. WIFI not super-fast. Very friendly staff. We used this hotel for simplicity and location since we were out exploring life in Yopal. I would definitely consider staying here again.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> 
                  <h5>Avalon Hotel – Villa de Leyva</h5>
                  <p>The hotel is in an excellent location. We had a 2 queen bed suite, the room also had a sofa bed. Adequate for us, a family of four. The room is also very spacious. I would stay here for the location; other than that, the hotel is fairly average, since it doesn´t offer any amenities. The staff was never around or available when needed. Air conditioning was not working. Our room was always at 80 degrees during the day and very cold at nights. Had to open the windows for the room to cool down, very uncomfortable and cold at night.</p>
                </div>
              </div>
            </div>
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_15b.png" alt=""/></div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10"><img class="u-responsive-img showTo-md w90 ml20 mr20" src="unit_2/module_8/assets/images/act_15c.png" alt=""/></div>
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "> 
                  <h5>Royal Suites - Espinal</h5>
                  <p>The check-in process was excellent, although I have to say the gentleman on reception wasn’t especially friendly. The room itself was ok, I thought it would benefit from a refurbishment of the décor and the furniture were quite worn. Not really what I would expect for a four star. We didn’t take breakfast, as we wanted to eat out, although I believe it is available. Besides the restaurant, there is a gym. The room was big; long and narrow, there wasn’t much natural light. For us, the location was excelent, it was exactly where we wanted to be and pretty central.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4">
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <h5>Complete the table using the scale below.</h5>
          <div class="c-blue-text mt30 ta-c ancho350 m-a"> 
            <p>1 = Good | 2 = Not so good | 3 = Bad</p>
          </div>
          <table class="c-table-estilo_uno mt30 m-a">
            <thead>
              <tr>
                <th>Hotel</th>
                <th>Location</th>
                <th>Staff</th>
                <th>Amenities</th>
                <th>Rooms</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Indigo</td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td>Avalon</td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td>Royal Suites</td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
                <td><span class="c-textField mt10 mb10">
                    <input class="c-input js-escribir" type="number" maxlength="1" placeholder="Text here..."/></span></td>
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