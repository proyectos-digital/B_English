
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex mt10-xs mt10-md mt10-sm align-items-center">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-j">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent"> 
              <p>Last week, you went to a restaurant in Montería, famous for the quality of the beef. When you arrived there, the place was full of people. It took them around 40 minutes to find a table for you and your friend. When you got the table, it was dirty. You called the waiter but he went to your table 20 minutes late. He cleaned the table and took your order. Almost two hours later, he came with the order, but he brought the wrong plates. He apologized and came back 10 minutes later with your food. The food was absolutely delicious! When you asked for the bill, they informed you that they only accepted cash, not credit cards. You had to go to a nearby ATM and get money to pay the bill. With this information , evaluate the restaurant in this Evaluation Form:</p>
              <p>YOUR NAME <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center "><img class="u-responsive-img ancho220 centrado" src="unit_2/module_8/assets/images/self_9.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5>Now, using the information in the Evaluation Form below, you are going to write a review of the restaurant for TripAdvisor.</h5>
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-j">
          <table class="c-table" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th> </th>
                <th>Totally agree</th>
                <th>Agree</th>
                <th>Totally Disagree</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. The restaurant was very clean.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_1"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_2"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_3"> </label></span></td>
              </tr>
              <tr>
                <td>2. The time to deliver the order was acceptable.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_4"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_5"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_6"> </label></span></td>
              </tr>
              <tr>
                <td>3. The waiter was available for you all the time.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_7"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_8"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_9"> </label></span></td>
              </tr>
              <tr>
                <td>4. He brought exactly what you had ordered.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_10" type="radio" name="selInputRadio_4" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_10"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_11" type="radio" name="selInputRadio_4" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_11"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_12" type="radio" name="selInputRadio_4" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_12"> </label></span></td>
              </tr>
              <tr>
                <td>5. The food was good.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_13" type="radio" name="selInputRadio_5" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_13"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_14" type="radio" name="selInputRadio_5" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_14"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_15" type="radio" name="selInputRadio_5" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_15"> </label></span></td>
              </tr>
              <tr>
                <td>6. The payment methods were very convenient.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_16" type="radio" name="selInputRadio_6" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_16"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_17" type="radio" name="selInputRadio_6" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_17"></label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_18" type="radio" name="selInputRadio_6" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_18"> </label></span></td>
              </tr>
              <tr>
                <td>7. I would definitely recommend this restaurant to my friends.</td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_19" type="radio" name="selInputRadio_7" value="1"/>
                    <label class="c-Checkbox ml10" for="inputRadio_19"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_20" type="radio" name="selInputRadio_7" value="2"/>
                    <label class="c-Checkbox ml10" for="inputRadio_20"> </label></span></td>
                <td><span class="col-center">
                    <input class="c-inputRadio ml10" id="inputRadio_21" type="radio" name="selInputRadio_7" value="3"/>
                    <label class="c-Checkbox ml10" for="inputRadio_21"> </label></span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md ta-j">
          <div class="row-flex">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 1" ng-click="seleccionMulti()"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-show="s_actividad == 2" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>