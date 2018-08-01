
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Let’s talk about movies.</h5>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_2/module_8/assets/videos/test_3_1.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <ul class="lh25">
                <li>• Are movies a popular form of entertainment in your country?</li>
                <li>• How has the cinema experience changed in recent years?</li>
                <li>• Do you think that movies should always have an educational value?</li>
                <li>• Is it important for governments to support filmmaking in their countries?</li>
                <li>• Do you think the Internet has had a big impact on the entertainment industry?</li>
                <li>• In what ways do you think that entertainment media may develop in the future?</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt2_mod8_test3',1)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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