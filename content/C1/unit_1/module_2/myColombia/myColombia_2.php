
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="5" ng-click="s_actividad = 5" ng-class="(s_actividad == 5) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="girarCartas()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <h5>Find the two activities that go together.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipGrid">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_1.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_2.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Grate</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_3.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Simmer</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content"> Slice</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Chop</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_4.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Grill</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_5.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_6.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">carve</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h5>Find the two activities that go together.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipGrid">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_7.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_8.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Knead</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_9.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">cut</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content"> measure</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Layer</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_10.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Dip</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_11.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_12.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Spread</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row">
        <h5>Find the two activities that go together.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipGrid">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_13.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_14.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">fry</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_15.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Melt</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content"> Stir</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Blend</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_16.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Pinch</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_17.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_18.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Sift</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4">
      <div class="row">
        <h5>Find the two activities that go together.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipGrid">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_19.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_20.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Pour</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_21.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">squeeze</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content"> Mince</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">mash</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_22.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Boil</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_23.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_24.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Steam</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 5">
      <div class="row">
        <h5>Find the two activities that go together.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipGrid">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_25.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_26.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Strain</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Roll</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Broil</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_27.png" alt="myColombia"/></div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Scramble</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img flip_card-content" src="unit_1/module_2/assets/images/col_2_28.png" alt="myColombia"/></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadCartas()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarWordFind"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script src="./../assets/js/librerias/jquery.flip.min.js"></script>