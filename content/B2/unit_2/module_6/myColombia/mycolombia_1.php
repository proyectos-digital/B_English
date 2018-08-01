
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_8" ng-init="girarCartas()">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">       
    <section class="template-content">
      <h5>Match the sentences with the non-defining relative clause that best completes them</h5>
      <h6 class="u-textColor_3">Part {{s_actividad}}</h6>
      <div class="row  u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt10-md mt10-xs m-a">
          <div class="flip_card-container mt40-md">
            <div class="flip_card-row flipFlexible">
              <div class="flip_card col-center" pareja="5">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_5.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="2">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Get up</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="1">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_2.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="3">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_3.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="5">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Break down</div>
                </div>
              </div>
            </div>
            <div class="flip_card-row flipFlexible">
              <div class="flip_card col-center" pareja="3">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Come back</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="4">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_4.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="1">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Get into</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="2">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_1.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="4">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Turn around</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt10-md mt10-xs m-a">
          <div class="flip_card-container mt40-md">
            <div class="flip_card-row flipFlexible">
              <div class="flip_card col-center" pareja="6">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Look out</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="10">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_10.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="7">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Come in</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="8">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_7.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="7">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_8.png"/></div>
                </div>
              </div>
            </div>
            <div class="flip_card-row flipFlexible">
              <div class="flip_card col-center" pareja="9">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_9.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="8">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Take off</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="9">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Fill in</div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="6">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content"><img class="u-responsive-img" src="./unit_2/module_6/assets/images/col_1_6.png"/></div>
                </div>
              </div>
              <div class="flip_card col-center" pareja="10">
                <div class="flip_front"></div>
                <div class="flip_back">
                  <div class="flip_card-content">Talk over</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadCartas()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
 
<script src="./../assets/js/librerias/jquery.flip.min.js"></script>