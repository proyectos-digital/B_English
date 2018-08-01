
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="girarCartas()">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Find the two activities that go together.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Before the kids went outside to make a snowman</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">because she had been driving for 12 straight hours.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Columbus had been sailing for more than 2 months</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content"> Her eyes were itchy.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">The doctor had been training for 4 years</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content"> I had been studyng French for 2 years</p>
            </div>
          </div>
        </div>
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Before he opened his own office.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">She had been watching TV all afternoon.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">it had been snowing all morning</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">she had an accident</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">I finally visited France</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">before he and his 90 sailors saw North America.</p>
            </div>
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