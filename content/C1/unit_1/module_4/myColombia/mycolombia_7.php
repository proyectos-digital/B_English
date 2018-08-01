
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Picture Stories</h5>
      <div class="row-flex mt50">
        <div class="col xs6">
          <p><strong class="u-textColor_4">•</strong>  What does the picture show?, explain the significance of this event in Colombia. Record your answer.</p>
          <div class="row align-items-center flex ta-c mt30">
            <div class="col xs6 md4 ta-r"><img class="responsive-img w100" src="unit_1/module_4/assets/images/col_7_1.png" alt="myColombia"/></div>
            <div class="col xs6 md8">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod4_mycol7a',1)">
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
        <div class="col xs6">
          <p><strong class="u-textColor_4">•</strong> What does the picture show?, explain the significance of this event in Colombia. Record your answer.</p>
          <div class="row align-items-center flex ta-c mt30">
            <div class="col xs6 md4 ta-r"><img class="responsive-img w100" src="unit_1/module_4/assets/images/col_7_2.png" alt="myColombia"/></div>
            <div class="col xs6 md8">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod4_mycol7b',2)">
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
        <div class="col xs6">
          <p><strong class="u-textColor_4">•</strong> What does the picture show?, explain the significance of this event in Colombia. Record your answer.</p>
          <div class="row align-items-center flex ta-c mt30">
            <div class="col xs6 md4 ta-r"><img class="responsive-img w100" src="unit_1/module_4/assets/images/col_7_3.png" alt="myColombia"/></div>
            <div class="col xs6 md8">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt1_mod4_mycol7c',3)">
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
        <div class="col xs6">
          <p><strong class="u-textColor_4">•</strong> What does the picture show?, explain the significance of this event in Colombia. Record your answer. </p>
          <div class="row align-items-center flex ta-c mt30">
            <div class="col xs6 md4 ta-r"><img class="responsive-img w100" src="unit_1/module_4/assets/images/col_7_4.png" alt="myColombia"/></div>
            <div class="col xs6 md8">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt1_mod4_act17d',4)">
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
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>