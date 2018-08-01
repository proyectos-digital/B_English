
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
        <div class="col-flex-xs12 col-flex-md12 col-center pb30">
          <div class="row mt50">
            <h5 class="ta-c"><strong class="u-textColor_4-dark">Part I:</strong>  Match the sentences to the right picture.</h5>
          </div>
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md8 col-center">
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected"></option>
                  <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                  <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                  <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                  <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                  <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                  <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                  <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                  <option class="opc opc8" data="8" value="1">They may have been over speeding. </option>
                </select>
              </div>
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected">
                    <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                    <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                    <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                    <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                    <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                    <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                    <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                    <option class="opc opc8" data="8" value="1">They may have been over speeding. </option>
                  </option>
                </select>
              </div>
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected">
                    <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                    <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                    <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                    <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                    <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                    <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                    <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                    <option class="opc opc8" data="8" value="1">They may have been over speeding. </option>
                  </option>
                </select>
              </div>
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected"></option>
                  <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                  <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                  <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                  <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                  <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                  <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                  <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                  <option class="opc opc8" data="8" value="1">They may have been over speeding. </option>
                </select>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md4 col-center"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_13_1.png" alt="" srcset=""/></div>
          </div>
          <div class="row-flex align-items-center mt60">
            <div class="col-flex-sm12 col-flex-md8 col-center">
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected"></option>
                  <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                  <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                  <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                  <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                  <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                  <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                  <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                  <option class="opc opc8" data="8" value="1">They may have been over speeding.</option>
                </select>
              </div>
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected"></option>
                  <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                  <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                  <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                  <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                  <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                  <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                  <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                  <option class="opc opc8" data="8" value="1">They may have been over speeding.</option>
                </select>
              </div>
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected"></option>
                  <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                  <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                  <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                  <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                  <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                  <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                  <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                  <option class="opc opc8" data="8" value="1">They may have been over speeding.</option>
                </select>
              </div>
              <div class="row">
                <select class="c-select c-textField col xs12 md10 mt30" ng-click="validarListadoSelect()">
                  <option disabled="disabled" selected="selected"></option>
                  <option class="opc opc1" data="1" value="2">They must have caught him committing a crime.</option>
                  <option class="opc opc2" data="2" value="1">The car must have crashed</option>
                  <option class="opc opc3" data="3" value="2">He can’t have escaped.</option>
                  <option class="opc opc4" data="4" value="1">They can’t have been hurt. </option>
                  <option class="opc opc5" data="5" value="1">They should have been more careful. </option>
                  <option class="opc opc6" data="6" value="2">They may have sent him to prison for a long time.</option>
                  <option class="opc opc7" data="7" value="2">He should have considered the possibility of being caught.</option>
                  <option class="opc opc8" data="8" value="1">They may have been over speeding.</option>
                </select>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md4 col-center"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_13_2.png" alt="" srcset=""/></div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="col-flex-xs11 col-flex-md11 col-center pb30">
          <div class="row mt50">
            <h5 class="ta-c"><strong class="u-textColor_4-dark">Part II:</strong> Now it is your turn to make deductions and speculations. Look at the pictures again and write 2 new deductions for each one.</h5>
          </div>
          <div class="row mt30">   
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h300" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 1" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 1" ng-click="selectOption()"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-show="s_actividad == 2" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>