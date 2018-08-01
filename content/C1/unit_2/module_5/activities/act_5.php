
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Let’s talk about traveling.</h5>
      <div class="row row-flex mt30 align-items-center">
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls">
                  <source src="unit_2/module_5/assets/videos/act_5_1.mp4" type="video/mp4"/>
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <ul class="lh25">
                <li>• Do you like to travel?</li>
                <li>• What kind of places have you visited in your life?</li>
                <li>• Which place would you really like to visit? Why?</li>
                <li>• What’s the worst experience you have lived while traveling?</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt2_mod5_act5',1)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>Pause</span></span></button>
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