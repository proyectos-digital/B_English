
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col xs12 md6">
            <div class="col-center col xs12 md11 lh-20 ta-j">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c "><span><strong>Some people wish they could live in warm climates all year round. These places get very hot during certain months of the year. In fact, studies show that heat can lead to greater crime. Do you think that people in warm climates lead happier lives or not? State your opinion and provide reasons for your view. <br/> Speak for 90 seconds. </strong></span></div>
              </div>
              <div class="row ta-c"></div>
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_sel_10',1)">
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
              </div>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/self_9.png" alt="act_12"/></div>
          </div>
        </div>
      </div>
    </section>
  </div>               
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>