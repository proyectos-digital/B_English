
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <h5>Let's talk about work.</h5>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6 ta-c">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_1/module_1/assets/videos/col_4_1.mp4" type="video/mp4"/>Your browser does not support the audio element.
            </video>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <ul class="lh25">
                <li>• Why do people normally start doing informal jobs?</li>
                <li>• Would you prefer to do an informal job rather an office job? Why?</li>
                <li>• If you could choose a profession, which profession would you choose? Why would you choose it?</li>
              </ul>
            </div>
          </div>
          <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod1_mycol4',1)">
            <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
            <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
              <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span>Send<span ng-if="recorder.status.isPlaying"><span>pause</span></span></span></button>
              </div>
            </div>
            <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
              <p>Please wait while we process your recording</p>
            </div>
            <div class="c-ngRecorder-alert" ng-if="!recorder.isAvailable">
              <p>
                Your browser does not support this feature natively, please use latest version of
                <a href="https://www.google.com/chrome/browser" target="_blank">Google Chrome</a>
                or
                <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Mozilla Firefox</a>.
                If you're on Safari or Internet Explorer, you can install
                <a href="https://get.adobe.com/flashplayer/" target="_blank"></a> Adobe Flash to use this feature.
                |
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>