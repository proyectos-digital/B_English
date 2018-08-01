
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/sel_8.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <p>
                   Think of a situation in the past that didn't come out as you expected.   
                  What could you have done to make things different? 
                  What could have been different?
                </p>
                <p><strong>Describe the situation and talk about it for 90 seconds</strong></p>
              </div>
            </div>
            <div class="row">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt2_mod5_sel_8',1)">
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
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>