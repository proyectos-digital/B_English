
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="girarCartas()">
    <section class="template-content">
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" seleccion="seleccion" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">A large number of people want to buy cars.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">I think he might be sick.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Damage was estimated at around $ 5 million.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">It could be more or less 50.000 people.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Not exactly 3 o´clock.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">It could be more or less $ 5 million.</p>
            </div>
          </div>
        </div>
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" seleccion="seleccion" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">It is about 3 o´clock.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">About 40 people died in the explosion.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Approximately 50.000 people filled the stadium.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Many people want to buy cars.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">The exact number of people may be slightly more or less.</p>
            </div>
          </div>
          <div class="flip_card col-center" seleccion="seleccion" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">I am sort of worried about his health. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck js-validarWordFind"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadCartas()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
 
<script src="./../assets/js/librerias/jquery.flip.min.js"></script>