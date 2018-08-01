
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="s_actividad = 1">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/col_2.png" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md7 col-center">
            <div class="row">
              <table class="c-table" data-ejercicio="table-truefalse">
                <thead>
                  <tr>
                    <th> </th>
                    <th>true</th>
                    <th>false</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">1. </strong> High-performance athletes train in Tunja because of its strategic location.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">2. </strong> Despite having been a success, the Extreme Sports Festival has not grown.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">3. </strong> Rollerblading is now part of the Extreme Sports Festival, thanks to its success.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">4. </strong> The variety of extreme sports available for practice in Tunja attracts tourists.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">5. </strong> Only the locals practice extreme sports in Tunja.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row s-actividad u-animationFadeDown" ng-show="s_actividad == 2">  
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/col_2.png" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md7 col-center"> 
            <div class="row">
              <table class="c-table" data-ejercicio="table-truefalse">
                <thead>
                  <tr>
                    <th> </th>
                    <th>true</th>
                    <th>false</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">6. </strong> There is only one professional stadium in Tunja.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_11"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_12"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">7. </strong> The stadium holds only 20,000 people.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_13"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_14"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">8. </strong> The City was host to 2008 under 20 football tournament.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_15" name="tfInputRadio_8" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_15"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_16" name="tfInputRadio_8" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_16"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">9. </strong> The Coliseum can hold more than 5,000 Fans.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_17" name="tfInputRadio_9" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_17"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_18" name="tfInputRadio_9" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_18"></label></span></td>
                  </tr>
                  <tr>
                    <td> <strong class="u-textColor_4-dark">10. </strong> There at least two national teams.</td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_19" name="tfInputRadio_10" value="1"/>
                        <label class="c-CheckTrue" for="inputRadio_19"></label></span></td>
                    <td><span class="c-textField">
                        <input class="c-inputRadio" type="radio" id="inputRadio_20" name="tfInputRadio_10" value="2"/>
                        <label class="c-CheckFalse" for="inputRadio_20"></label></span></td>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>