
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_17">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="girarCartas()">
    <section class="template-content">
      <div class="row">
        <h5 class="ta-c">Match the direct and reported speech sentences.</h5>
      </div>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">We asked where the shoe store was.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Wilma said she would make some food for Tim.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">“Was it tested for safety?”</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">“Does the phone have Wi-Fi?”</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">I asked Ivan if he could help me.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">He asked her if she had all the ingredients.</p>
            </div>
          </div>
        </div>
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">Marco asked if the phone had Wi-Fi.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">“Where is the shoe store?”</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="5">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">“Can you help me, Ivan?”</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">“I’ll make some food for you, Tim.”</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">The man asked if it had been tested for safety.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="6">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">“Do you have all the ingredients?”</p>
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