
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_9">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <h5>Let’s talk about fashion.</h5>
      <article class="row-flex justify-around align-items-center mt20">
        <div class="col-flex-xs12 col-flex-md6 ta-c pr10">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_3/module_9/assets/videos/col_7_1.mp4" type="video/mp4"/>Your browser does not support the video element.
            </video>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6">
          <div class="row-flex">
            <div class="c-cardBlue">
              <div class="row-flex align-items-center c-cardGreenContent">
                <p>Take a few minutes to think about the different tradition clothing that are worn in Colombia. Now describe the people and tradition behind the clothing and what they represent.</p>
                <p>Speak not less than 3 minutes.</p>
              </div>
            </div>
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod9_mycol9',1)">
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
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>