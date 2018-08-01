<?php session_start();?>
<nav class="template-navigation template-navigation--footer o-nav">
  <div class="o-nav__block o-nav--Menu"><a class="template-navigationMenu--burguer c-btn-IconIndicator u-bgMenuModules" ng-click="triggerNavigationMenu('navModules')"></a></div>
  <div class="o-nav__block row">
    <ul class="row c-navigationModule">
      <li class="c-navigationModule-item" ng-repeat="lista in listasf" ng-if="lista.titpregunta != 'FINISH'" ui-sref-active="is-active" datoPag="{{lista.idPregunta}}" ui-sref="{{lista.titulocat}}({Unidad_id: lista.unidad_id, Module_id: lista.modulo_id, Activity_id: lista.orden})"><span class="c-navigationModule-link">{{$index+1}}</span></li>
      <li class="c-navigationModule-item" ng-repeat="lista in listasf" ng-if="lista.titpregunta == 'FINISH'" ui-sref-active="is-active" ng-click="triggerNavigationMenu('endSection')"><span class="c-navigationModule-link">End</span></li>
    </ul>
  </div><?php if($_SESSION['rol_id'] != 4){?>
  <button class="c-btn-IconAction u-bgIconChat u-bgColor_4 btn_chat"></button><?php }?>
  <div class="c-chat hide  u-bgColor_white" id="componentChatGlobal">
    <div class="chat__header padding10 pl20 u-bgColor_4">
      <h6 class="u-textWhite">CHAT</h6>
      <button class="c-btn-IconAction u-bgIconClose u-bgColor_4 chat__close"></button>
    </div>
    <div class="chat__content">
      <!-- mensaje-->
      <div class="chat__card" ng-repeat="chats in chatUser" ng-class="(<?php echo $_SESSION['id']?> == chats.idTrasmisor) ? 'send' : 'recived'">
        <div class="chat__msn">
          <div class="msn__info"><span class="msn__user">{{chats.nombre}} {{chats.apellido}}</span><span class="msn__time">{{chats.fecha}}</span></div>
          <p>{{chats.mensaje}}</p>
        </div><img class="chat__photo" src="./../user/profiles_images/user_<?php echo $_SESSION['id']?>.png" onerror="this.onerror=null; this.src='./../user/profiles_images/user_defaul.png';" alt="<?php echo $_SESSION['email'] ?>"/>
      </div>
    </div>
    <div class="chat__write">
      <textarea id="text" model="ngChatMensaje"></textarea>
      <button class="c-btn-IconAction u-bgIconSendChat" ng-click="enviarChat()"></button>
    </div>
  </div>
</nav>

<aside class="c-modal c-modal--MenuHeader" id="endSection">
  <nav class="template-navigation o-nav c-modal--MenuHeader-Wrapper">
    
    
    <div class="o-nav__block o-nav--Menu c-modal--MenuHeader-BurgueMenu">
      <div class="o-nav--Menu-burguer" ng-click="triggerNavigationMenu('endSection', false)">
        <div class="c-menuBurguer" id="burguerClose">
          <div class="c-menuBurguer--Item"></div>
          <div class="c-menuBurguer--Item"></div>
          <div class="c-menuBurguer--Item"></div>
        </div>
        <h6>Exit of {{ sectionName }}</h6>
      </div>
    </div>
    
    <section class="template-section m-a c-modal--MenuHeader-Info" ng-click="triggerNavigationMenu('container_endSection', false)">
      <article class="template-content row-flex justify-center">
        <figure class="c-figure-Rombo is-alert">
          <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" ng-src="unit_{{unidadid}}/module_{{moduloid}}/assets/images/obj_1.png" alt=""/></div>
          <div class="c-figure-message">
            <h2 class="c-figure-message--title" ng-if="currentLevel &lt; 5"><span>
                {{ (sectionName == 'activities') ? ' You have finished all the ' + sectionName + ', please continue with the Self-check.'
                    : (sectionName == 'selfcheck') ? ' You have finished all self-check, please continue with the test.'
                    : (sectionName == 'test') ? ' You have finished all ' + sectionName + ', please continue with My Colombia.'
                    : (sectionName == 'mycolombia') ? ' You have finished all My Colombia, please continue with the Grammar.'
                    : (sectionName == 'grammar') ? ' You have finished the module.' : ''}}</span></h2>
            <h2 class="c-figure-message--title" ng-if="currentLevel == 5"><span>
                {{ (sectionName == 'activities') ? ' You have finished all the ' + sectionName + ', please continue with the Self-check.'
                    : (sectionName == 'selfcheck') ? ' You have finished all self-check, please continue with the test.'
                    : (sectionName == 'test') ? ' You have finished all ' + sectionName + ', please continue with the My Colombia.'
                    : (sectionName == 'mycolombia') ? ' You have finished the module.' : ''}}</span></h2>
            <button class="c-btn c-figure-message--action" ng-if="sectionName == 'activities'" ui-sref="selfcheck({Unidad_id: unidadid, Module_id: moduloid, Activity_id: 1})"><span>go to self-check</span></button>
            <button class="c-btn c-figure-message--action" ng-if="sectionName == 'selfcheck'" ui-sref="test({Unidad_id: unidadid, Module_id: moduloid, Activity_id: 1})"><span>go to test</span></button>
            <button class="c-btn c-figure-message--action" ng-if="sectionName == 'test'" ui-sref="mycolombia({Unidad_id: unidadid, Module_id: moduloid, Activity_id: 1})"><span>go to my Colombia</span></button>
            <button class="c-btn c-figure-message--action" ng-if="sectionName == 'mycolombia' && currentLevel < 5" ui-sref="grammar({Unidad_id: unidadid, Module_id: moduloid, Activity_id: 1})"><span>go to grammar</span></button>
            <button class="c-btn c-figure-message--action" ng-if="sectionName == 'mycolombia' && currentLevel == 5" ui-sref="units"><span>go to units</span></button>
            <button class="c-btn c-figure-message--action" ng-if="sectionName == 'grammar' && currentLevel < 5" ui-sref="units"><span>go to units</span></button>
          </div>
        </figure>
      </article>
    </section>
  </nav>
</aside>
<aside class="c-modal c-modal--MenuHeader" id="navModules">
  <nav class="template-navigation o-nav c-modal--MenuHeader-Wrapper">
    
    
    <div class="o-nav__block o-nav--Menu c-modal--MenuHeader-BurgueMenu">
      <div class="o-nav--Menu-burguer" ng-click="triggerNavigationMenu('navModules', false)">
        <div class="c-menuBurguer" id="burguerClose">
          <div class="c-menuBurguer--Item"></div>
          <div class="c-menuBurguer--Item"></div>
          <div class="c-menuBurguer--Item"></div>
        </div>
        <h6>Navigate into modules</h6>
      </div>
    </div>
    
    <ul class="o-nav__block o-nav--Info c-modal--MenuHeader-Info" ng-click="triggerNavigationMenu('container_navModules', false)">
      <li class="c-modal--MenuHeader-Item " ng-repeat="module in modulosUser"><a class="o-nav--Data-Link  c-btn-IconNavigation {{module.icono}}" data-title="MODULE" before-content="{{module.modulo_id}}" ng-class="(module.estado == 0 && <?php echo $_SESSION['rol_id']?> == 3) ? 'is-disabled' : 'is-active'" ui-sref="objectives({Unidad_id: module.unidad_id, Module_id: module.modulo_id})"></a></li>
    </ul>
  </nav>
</aside>

<script>
  //close chat
  $('.chat__close').click(function(){
      $('.c-chat').addClass('hide')
  })
  
  //open chat
  $('.btn_chat').click(function(){
      $('.c-chat').removeClass('hide')
      $(".chat__content").animate({ scrollTop: $(".chat__content")[0].scrollHeight });
  })
  
  
  //resize textarea chat
  var observe;
  if (window.attachEvent) {
      observe = function (element, event, handler) {
          element.attachEvent('on'+event, handler);
      };
  }
  else {
      observe = function (element, event, handler) {
          element.addEventListener(event, handler, false);
      };
  }
  function init () {
      var text = document.getElementById('text');
      function resize () {
          text.style.height = 'auto';
          text.style.height = text.scrollHeight+'px';
      }
      /* 0-timeout to get the already changed text */
      function delayedResize () {
          window.setTimeout(resize, 300);
      }
      observe(text, 'change',  resize);
      observe(text, 'cut',     delayedResize);
      observe(text, 'paste',   delayedResize);
      observe(text, 'drop',    delayedResize);
      observe(text, 'keydown', delayedResize);
  
      text.focus();
      text.select();
      resize();
      }
  init();
</script>