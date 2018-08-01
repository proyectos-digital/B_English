
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <h5 class="mt30 mb60 row">Look at the picture. Use modal verbs to speculate about what could have happened. <br/> Here are some modal verbs you can use:</h5>
        <div class="col xs12 md6">
          <div class="row-flex ta-c"><img class="u-responsive-img m-a" src="unit_3/module_12/assets/images/act_9.png" alt="act_5"/></div>
        </div>
        <div class="col xs12 md6">
          <div class="col xs12 md11 col-center">
            <div class="c-cardBlue">
              <div class="c-cardBlueContent">
                <div class="col xs6">
                  <ul class="lh30">
                    <li class="ta-c">• CAN</li>
                    <li class="ta-c">• MAY</li>
                    <li class="ta-c">• SHALL</li>
                    <li class="ta-c">• MUST</li>
                  </ul>
                </div>
                <div class="col xs6">
                  <ul class="lh30">
                    <li class="ta-c">• COULD</li>
                    <li class="ta-c">• MIGHT</li>
                    <li class="ta-c">• SHOULD</li>
                    <li class="ta-c">• WOULD</li>
                  </ul>
                </div>
                <h6 class="row ta-c u-textWhite"><strong>Talk for 60 seconds</strong></h6>
              </div>
            </div>
          </div>
          <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod12_act9',1)">
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
    </section>
  </div>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
