
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8" ng-init="girarCartas()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">       
    <section class="template-content u-animationFadeDown">
      <div class="col-flex-sm12 col-flex-md12 col-center mt40-sm mt10-md mt10-xs m-a">
        <h5>Match the sentences with the non-defining relative clause that best completes them.</h5>
        <div class="flip_card-container mt40-md">
          <div class="flip_card-row flipFlexible">
            <div class="flip_card col-center" pareja="1">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">Russell Crowe, ______________ , was born in New Zealand.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="2">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">He likes shopping between one and three, ____________ , because of the relative calm.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="3">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">Mr. Kemp, ______________ , is going to retire next year.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="4">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">who I talked to about my problems.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="5">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">where many successful companies such as Microsoft and Boeing are located.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="6">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">whose brother is a singer.</p>
              </div>
            </div>
          </div>
          <div class="flip_card-row flipFlexible">
            <div class="flip_card col-center" pareja="6">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">Emily _____________, is an actress herself.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="4">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">The local branch manager, ______________ , was very helpful.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="1">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">who starred in Gladiator.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="5">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">I come from the Seattle area, ______________ , and I often go home during the summer.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="2">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">when most people are at home.</p>
              </div>
            </div>
            <div class="flip_card col-center" pareja="3">
              <div class="flip_front"></div>
              <div class="flip_back">
                <p class="flip_card-content">Who teaches physics.</p>
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