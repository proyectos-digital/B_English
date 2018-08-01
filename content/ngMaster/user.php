<?php session_start();?>
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  
  
  <div class="template-section">
    
    
    <div class="row-flex">
      <div class="col-flex-xs12 col-center">
        <div class="c-card" pseudo-bgimage="pseudo-bgimage" pseudo-bgcolor="color_5" pseudo-bgmix="multiply" style="background-image: url('./../assets/multimedia/images/app/user_currentActivity.png');">
          <section class="template-content posRelative">
            <div class="row-flex">
              <div class="c-user__details col-center">
                <!-- data-target="modalAvatar"-->
                <div class="c-user__details--Image">
                  <div class="c-figure-Rombo" figure-size="12">
                    <div class="c-figure-RomboRotate" style="background-color: white;"><img class="c-user__details--photo" src="./../user/profiles_images/user_defaul.png" onerror="this.onerror=null; this.src='./../user/profiles_images/&lt;?php echo $_SESSION['id']?&gt;.png';" alt="<?php echo $_SESSION['email'] ?>"/></div>
                  </div>
                </div>
                <div class="c-user__details--Data">
                  <div class="c-user__details--Data-name u-textWhite row"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?></div>
                  <ul class="u-textWhite row">
                    <li>User: <?php echo $_SESSION['email'] ?></li>
                    <li>Level: Level {{(<?php echo $_SESSION['nivel_id']?> == 5) ? 'C1' : 'B2'}}</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    
    <div class="row">
      <section class="template-content">
        <div class="col-flex-xs12 col-center">
          <div class="row">
            <ul class="collapsible popout c-accordion" data-collapsible="accordion">
              
              
              <li class="mt20">
                
                
                <div class="collapsible-header c-accordion__header waves-effect" style="background-image: url('./../assets/multimedia/images/app/user_header_level_1.jpeg');">
                  <div class="row c-accordion__header--Title u-textWhite">Level {{(<?php echo $_SESSION['nivel_id']?> == 5) ? 'C1' : 'B2'}}</div>
                  <div class="row c-accordion__header--Icon"><span class="col c-btn u-bgColor_transparent">Details<i class="material-icons">expand_more</i></span></div>
                  <ul class="row c-accordion__header--Detail">
                    <li class="c-accordion__header--Detail-data"><span> Correct answers: {{correctas}}</span></li>
                    <li class="c-accordion__header--Detail-data"><span> Wrong questions: {{incorrectas}}</span></li>
                    <li class="c-accordion__header--Detail-data"><span> Total questions: {{totalPreg}}</span></li>
                  </ul>
                </div>
                
                <div class="collapsible-body c-accordion__body">
                  <div class="c-accordion__body-content">
                    <div class="row">
                      <div class="col xs12 sm12 md4">
                        <div class="c-card c-cardDetail--Module mb20" pseudo-bgimage="pseudo-bgimage" pseudo-bgcolor="color_4" pseudo-bgmix="multiply" style="background-image: url('./../assets/multimedia/images/app/unit_bg_1.png');">
                          <div class="c-card-content m-a c-cardDetail--Module-title" module-name="UNIT 1" ng-init="listarPorcentajesModulos(1)"></div>
                          <div class="c-card-footer ta-c">
                            <button class="c-btn c-card-revealOpen u-bgColor_white u-textColor_5">Enter</button>
                          </div>
                          <div class="c-card-reveal">
                            <div class="row ta-r">
                              <button class="c-btn c-card-revealClose">x</button>
                            </div>
                            <div class="row pt20" ng-repeat="porcentajes in modulosUno">
                              <div class="c-progressBar" data-title="{{porcentajes.titulo}}" data-target="modalDetail" ui-sref="user.details({Unidad_id: 1, Module_id: porcentajes.idmod, Categoria_id: 1})">
                                <div class="c-progressBar__porcent" data-progress="{{porcentajes.porcentaje | number : 0}}%" data-identifier="true" style="width: {{porcentajes.porcentaje | number : 0}}%;"></div>
                                <div class="c-progressBar__action material-icons">info</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col xs12 sm12 md4">
                        <div class="c-card c-cardDetail--Module mb20" pseudo-bgimage="pseudo-bgimage" pseudo-bgcolor="color_2" pseudo-bgmix="multiply" style="background-image: url('./../assets/multimedia/images/app/unit_bg_1.png');">
                          <div class="c-card-content m-a c-cardDetail--Module-title" module-name="UNIT 2" ng-init="listarPorcentajesModulos(2)"></div>
                          <div class="c-card-footer ta-c">
                            <div class="c-btn c-card-revealOpen u-bgColor_white u-textColor_5">Enter</div>
                          </div>
                          <div class="c-card-reveal">
                            <div class="row ta-r">
                              <div class="c-btn c-card-revealClose">x</div>
                            </div>
                            <div class="row pt20" ng-repeat="porcentajes in modulosDos">
                              <div class="c-progressBar" data-title="{{porcentajes.titulo}}" data-target="modalDetail" ui-sref="user.details({Unidad_id: 2, Module_id: porcentajes.idmod, Categoria_id: 1})">
                                <div class="c-progressBar__porcent" data-progress="{{porcentajes.porcentaje | number : 0}}%" data-identifier="true" style="width: {{porcentajes.porcentaje | number : 0}}%;"></div>
                                <div class="c-progressBar__action material-icons">info</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col xs12 sm12 md4">
                        <div class="c-card c-cardDetail--Module mb20" pseudo-bgimage="pseudo-bgimage" pseudo-bgcolor="color_4" pseudo-bgmix="multiply" style="background-image: url('./../assets/multimedia/images/app/unit_bg_1.png');">
                          <div class="c-card-content m-a c-cardDetail--Module-title" module-name="UNIT 3" ng-init="listarPorcentajesModulos(3)"></div>
                          <div class="c-card-footer ta-c">
                            <div class="c-btn c-card-revealOpen u-bgColor_white u-textColor_5">Enter</div>
                          </div>
                          <div class="c-card-reveal">
                            <div class="row ta-r">
                              <div class="c-btn c-card-revealClose">x</div>
                            </div>
                            <div class="row pt20" ng-repeat="porcentajes in modulosTres">
                              <div class="c-progressBar" data-title="{{porcentajes.titulo}}" data-target="modalDetail" ui-sref="user.details({Unidad_id: 3, Module_id: porcentajes.idmod, Categoria_id: 1})">
                                <div class="c-progressBar__porcent" data-progress="{{porcentajes.porcentaje | number : 0}}%" data-identifier="true" style="width: {{porcentajes.porcentaje | number : 0}}%;"></div>
                                <div class="c-progressBar__action material-icons">info</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-flex-xs12 col-center">
          <div class="row">
            <ul class="collapsible popout c-accordion" data-collapsible="accordion">
              <li class="mt20">
                <div class="collapsible-header c-accordion__header waves-effect h80" style="background-image: url('./../assets/multimedia/images/app/user/feed.jpg');">
                  <div class="row c-accordion__header--Title u-textWhite">Feedback</div>
                  <div class="row c-accordion__header--Icon"><span class="col c-btn u-bgColor_transparent">New Messages({{cant_noview}})<i class="material-icons">expand_more</i></span></div>
                </div>
                <div class="collapsible-body c-accordion__body">
                  <div class="c-accordion__body-content">
                    <div class="row">
                      <div class="c-accordion__emptyStatus flex align-items-center justify-center" ng-show=" (notificaciones == '' ) ? true : false "><img class="w20" src="./../assets/multimedia/images/app/user/empty.svg"/></div>
                      <div class="c-accordion__feedback" ng-init="ListadoNotificacionesXEstudiante()">
                        <div class="row message" ng-repeat=" notif in notificaciones " ng-Click=" VerNotificacion(notif.id) " ng-class="(notif.estado == 0) ? 'unread' : '' ">
                          <div class="col xs2 md1"><i class="material-icons">message</i></div>
                          <div class="col xs7 md9 message__container"><span class="message__title">{{notif.tit_notif}} :</span><span class="message__content">{{notif.msg_notif}}</span></div>
                          <div class="col xs3 md2 ta-c"><span class="message__fecha">{{notif.fecha_notificacion}}</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>
<script>
  $(document).ready(function(){
  
  	$('.collapsible').collapsible();
  
  	$(document).on('click.c-card', '.c-card', function (e) {
  
  		if ($(this).find('> .c-card-reveal').length) {
  
  			var $card = $(e.target).closest('.c-card');
  			$card.addClass('on-action');
  
  			if ($card.data('initialOverflow') === undefined) {
  				$card.data('initialOverflow', $card.css('overflow') === undefined ? '' : $card.css('overflow'));
  			}
  			if ($(e.target).is($('.c-card-reveal .c-card-revealClose')) || $(e.target).is($('.c-card-revealClose'))) {
  
  				$card.removeClass('on-action');
  
  				// Make Reveal animate down and display none
  				$(this).find('.c-card-reveal').velocity({ translateY: 0 }, {
  					duration: 225,
  					queue: false,
  					easing: 'easeInOutQuad',
  					complete: function () {
  					$(this).css({ display: 'none' });
  					$card.css('overflow', $card.data('initialOverflow'));
  					}
  				});
  			} else if ($(e.target).is($('.c-card.on-action .c-card-content')) || $(e.target).is($('.c-card.on-action .c-card-footer')) || $(e.target).is($('.c-card.on-action .c-card-revealOpen'))) {
  				$card.css('overflow', 'hidden');
  
  				$(this).find('.c-card-reveal')
  				.css({ display: 'flex' })
  				.velocity("stop", false)
  				.velocity({ translateY: '-100%' }, {
  					duration: 300,
  					queue: false,
  					easing: 'easeInOutQuad'
  				});
  			}
  		}
  	});
  	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  	$('.modal').modal()
  	//.trigger('openModal');
  });
  
</script>

<div class="modal mini" id="modalAvatar">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam minus quaerat animi ad, ipsam fugit et veniam ipsa maiores praesentium autem iusto asperiores dolores quas, corrupti id nam accusamus dicta?</div>
<div class="modal bottom-sheet min-vh35" id="modalDetail">
  <div ui-view="detailModule"></div>
</div>
<div class="modal" id="modalMessage">
  <div class="modal-content w90 m-a">
    <div class="modalMessageTitle mt30 mb20 flex align-items-center justify-between"></div>
    <div class="cargNotif ta-c"><span class="fa fa-spinner fa-spin fa-lg fa-4x"></span><img class="w10" src="../assets/multimedia/images/app/carga_user_1.gif"/></div>
    <div class="infoNotif">
      <h4>{{tit_notif}}</h4><span class="fecha u-textColor_1-light u-fz08">{{fecha_notificacion}} - {{hora}}</span>
      <div class="modalMessageContent mb30">
        <p>{{msg_notif}}</p>
      </div>
    </div>
  </div>
</div>