
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10" ng-init="girarCartas()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5 class="ta-c"><strong class="u-textColor_4">1. </strong> Click on the cards to pair a situation with a deduction.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_10_1.png"/>
              <p class="flip_back-text">Your neighbor is leaving the house running.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_10_2.png"/>
              <p class="flip_back-text">You walk into the library and all the books have disappeared.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_10_3.png"/>
              <p class="flip_back-text">Your class/work mate is selling all his/her furniture.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">It’s Sunday. There is a knock on your door.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">There is a person sitting across from a hotel filming everyone who goes in and out.</p>
            </div>
          </div>
        </div>
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_10_4.png"/>
              <p class="flip_back-text">He could be a private detective.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">He/She must be very late for work.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_10_5.png"/>
              <p class="flip_back-text u-fz1">It can’t be the postman.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">They must be taking the library to another building.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">He/She might be moving to a new apartment.</p>
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