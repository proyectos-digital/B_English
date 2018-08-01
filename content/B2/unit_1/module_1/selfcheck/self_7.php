
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section" ng-init="girarCartas();">
    <section class="template-content"><span class="cronometro" id="cronometro">60</span>
      <div class="flip_card-container mt40-md">
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">She will have bought a whole new wardrobe</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="1">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">by the time her husband picks her up.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">We won't be leaving the premises</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">by the end of this module.</p>
            </div>
          </div>
        </div>
        <div class="flip_card-row flipFlexible">
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">by the end of the month.</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="2">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">The house renovations will be finished</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="4">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">I will have learned a lot of things</p>
            </div>
          </div>
          <div class="flip_card col-center" pareja="3">
            <div class="flip_front"></div>
            <div class="flip_back">
              <p class="flip_card-content">until everyone has been evacuated.</p>
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
<script>
  var Contcrono = $("#cronometro");
              var segundos = Contcrono.text();
              var cronometro = parseInt(segundos);
  
              var cronometrocarta= setInterval(function () {
                  cronometro--;
                  console.log(cronometro);
                  Contcrono.text(cronometro);
  
                  if (cronometro == 0) {
                      Contcrono.text(0);
                      $("#cronometro").hide();
                      alertify.alert('Alert', '<b>Time finished!</b> <br><br>You must start again',
                          function () {
                              cronometro = 61;
                              $('.flip_card').flip(false);
                              $('.flip_card').removeClass('is-good');
                              $('.flip_card').removeClass('is-wrong');
                              $('.flip_card').removeClass('is-prevDefault');
                              $('.flip_card').attr('seleccion', '');
                              $("#cronometro").show();
                          });
                  }
  
              }, 1000)
  
      $(document).on('click','.c-navigationModule-item',function(){
          clearInterval(cronometrocarta);
      })
</script>