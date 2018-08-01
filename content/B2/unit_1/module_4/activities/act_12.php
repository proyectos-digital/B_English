
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="row-flex align-items-center">
          <h6><strong class="u-textColor_4">Part I: </strong>  Read and listen to the movie review.</h6>
          <button class="c-btn-Icon u-bgIconListen ml20" ng-audio="unit_1/module_4/assets/audios/act_12.mp3"></button>
        </div>
        <div class="row mt40 flex align-items-center">
          <div class="col xs12 md8">
            <div class="col xs12 md10 col-center">
              <div class="c-cardBlue">
                <div class="c-cardBlueContent padding30">
                  <p>“Sunlight and Me” is the story of a girl and her horse. The story was written by Emily Parker and it’s directed by Lara Peterson. It’s Ms. Peterson’s first movie and she did a great job. I’m sure she will be really successful in the future. Martin Jackson and Sharon Moore are the stars of the movie. Young Sharon plays Jeanie, the 12-year-old girl who raises the horse, Sunlight. Martin Jackson plays her father. Sharon Moore is very good in her role, but Martin Jackson doesn’t seem believable. The costumes were designed by Janet Davis. I think they’re boring and ugly. The sets were designed by Samantha Logan, and they’re beautiful.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col xs4 showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_12_1.png" alt=""/></div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <h5>Complete the table.</h5>
          <table class="c-table-estilo_dos mt60-md mt20-sm row">
            <tbody>
              <tr>
                <td><strong>Name of the Movie</strong></td>
                <td><span class="c-textField w90">
                    <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td><strong>Written by</strong></td>
                <td><span class="c-textField w90">
                    <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td><strong>Actors/actresses</strong></td>
                <td><span class="c-textField w90">
                    <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td><strong>Directed by</strong></td>
                <td><span class="c-textField w90">
                    <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td><strong>Costumes design by</strong></td>
                <td><span class="c-textField w90">
                    <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></td>
              </tr>
              <tr>
                <td><strong>Sets design by</strong></td>
                <td><span class="c-textField w90">
                    <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt30-sm mt10-md mt10-xs">
          <h5> <strong class="u-textColor_4">Part II: </strong></h5>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent padding20">
              <p>Now use the information on the left column of the table to make your own review of a movie you´ve watched recently.</p>
              <p>Record your review.</p>
            </div>
          </div>
          <div class="row">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod4_act12',1)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting"> 
                <p>Please wait while we process your recording</p>
              </div>
              <div class="c-ngRecorder-canvas" canvas-sizer="canvas-sizer">
                <div class="c-ngRecorder-canvasRecorder" ng-show="recorder.status.isRecording">
                  <ng-audio-recorder-analyzer max-width="100%" max-height="70px" width="400" height="50" wave-color="white"></ng-audio-recorder-analyzer>
                </div>
                <div class="c-ngRecorder-canvasAudio" ng-show="!recorder.status.isRecording && recorder.audioModel">
                  <ng-audio-recorder-wave-view wave-color="silver" bar-color="red"></ng-audio-recorder-wave-view>
                </div>
              </div>
              <div class="c-ngRecorder-alert" ng-if="!recorder.isAvailable">
                <p>
                  Your browser does not support this feature natively, please use latest version of 
                  <a href="https://www.google.com/chrome/browser" target="_blank">Google Chrome</a>
                  or 
                  <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Mozilla Firefox</a>. 
                  If you're on Safari or Internet Explorer, you can install 
                  <a href="https://get.adobe.com/flashplayer/" target="_blank"></a> Adobe Flash to use this feature.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_12_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>