
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30 align-items-center">
        <h5 class="row">Let’s talk about school.</h5>
        <div class="col xs12 md6">
          <div class="row-flex justify-center mb20">
            <div class="col md11 col-center">
              <div class="c-contVideo">
                <video class="u-responsive-video" controls="controls">
                  <source src="unit_1/module_3/assets/videos/act_5_1.mp4" type="video/mp4"/>Your browser does not support the audio element.
                </video>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <ul class="c-listDefault lh25 col xs6">
                <li class="u-textWhite">What do you study?</li>
                <li class="u-textWhite">Where do you study that?</li>
                <li class="u-textWhite">Why did you choose that subject?</li>
                <li class="u-textWhite">Is it a popular subject in your country?</li>
                <li class="u-textWhite">Do you like that subject?</li>
                <li class="u-textWhite">Do you get on with your colleagues?</li>
              </ul>
              <ul class="c-listDefault lh25 col xs6">
                <li class="u-textWhite">What was your first day like?</li>
                <li class="u-textWhite">What are the main aspects of your subject?</li>
                <li class="u-textWhite">If you have the chance, would you change subject?</li>
                <li class="u-textWhite">Do you plan to get a job in the same field as your subject?</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod3_act5',1)">
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