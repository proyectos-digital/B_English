<?php session_start();?>
<div ng-if="mensajeinactivo">
  <div class="row">
    <h1 class="u-textColor_4-dark ta-c">INACTIVATED FORUM BY THE TEACHER</h1>
  </div>
  <div class="row">
    <p class="ta-c">THE TEACHER WILL ACTIVATE THIS FORUM WHEN REQUIRED</p>
  </div>
</div>

<div class="c-foro" ng-if="foroactivo">
  <div class="c-foro__sec c-foro__users">
    <div class="c-foro__users--title">Group members</div>
    <div class="c-foro__users--people">
      <div class="c-foro__users--person" ng-repeat="grupouser in grupodocente">{{grupouser.nombreuser}} {{grupouser.apellidouser}}</div>
    </div>
  </div>
  
  <div class="c-foro__sec c-foro__topic">
    <div class="c-foro__top">
      <div class="c-foro__top--avatar"><img src="../assets/multimedia/images/app/foro_avatar.svg"/></div>
      <div class="c-foro__top--title">  FORUM<br/><small>({{nomdocente}} {{apedocente}})</small></div>
    </div>
    
    <div class="c-foro__middle">
      <div class="c-foro__middle--main-msj">
        <p ng-bind-html="tema"></p>
      </div>
      <div class="c-foro__middle--msj-cont" ng-repeat="resuser in respforo">
        <div class="c-foro__middle--msj" ng-repeat="respuesta in resuser.respuestasforo">
          <p class="ta-r"><small>{{respuesta.nombre}} {{respuesta.apellido}}</small></p>
          <p class="ta-r"><small>{{respuesta.fecha_env}}</small></p>
          <p class="mt10">{{respuesta.respuesta}}</p>
        </div>
      </div>
    </div>
    
    <div class="c-foro__bottom" ng-show="comentarioforo">
      <div class="c-foro__bottom--text-box">
        <textarea class="c-foro__text-box" ng-model="textoforo" placeholder="Writing your answer here ..."></textarea>
      </div>
      <div class="c-foro__bottom--submit" ng-click="EnviarForo()">
        <button class="c-btn-IconAction u-bgIconSendChat"></button>
      </div>
    </div>
  </div>
</div>