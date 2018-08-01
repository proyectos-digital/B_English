
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <h5>Look at the example:</h5>
          <div class="row mb30 mt30 ta-c showTo-md"><img class="u-responsive-img w80 m-a" src="unit_1/module_2/assets/images/act_9.png" alt=""/></div>
          <div class="row-flex mt20">
            <div class="col-flex-xs12 col-flex-sm4 padding10 c-green  ta-c m-a mt10"><strong>It’s easy to windsurf.</strong></div>
            <div class="col-flex-xs12 col-flex-sm4 padding10 c-green  ta-c m-a mt10"><strong>Is it? I thought it was really difficult.</strong></div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt30-sm mt100-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Click and listen:</h5>
          </div>
          <div class="row-flex mt20">
            <div class="col-flex-xs12 col-flex-sm4 ta-c mb30">
              <button class="c-btn-Icon u-bgIconListen " ng-audio="unit_1/module_2/assets/audios/act_9_1.mp3"><span>Example 1</span></button>
            </div>
            <div class="col-flex-xs12 col-flex-sm4 ta-c mb30">
              <button class="c-btn-Icon u-bgIconListen " ng-audio="unit_1/module_2/assets/audios/act_9_2.mp3"><span>Example 2</span></button>
            </div>
            <div class="col-flex-xs12 col-flex-sm4 ta-c mb30">
              <button class="c-btn-Icon u-bgIconListen " ng-audio="unit_1/module_2/assets/audios/act_9_3.mp3"><span>Example 3</span></button>
            </div>
          </div>
          <div class="row-flex mt10">
            <h5>Now try to repeat the questions orally, using the appropriate intonation. </h5>
          </div>
          <div class="row mt20"><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod2_act9',1)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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
              </div></span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_9_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>