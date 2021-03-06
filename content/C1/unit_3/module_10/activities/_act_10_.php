
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md6">
          <h5>Appropriately respond to the following scenarios.</h5>
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p><strong class="u-textColor_4">• </strong> I want to apply to art school but I’m not sure how.</p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_act10a',1)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>play</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p><strong class="u-textColor_4">• </strong> The manager is looking for a new painting to hang in the reception area. Any ideas?</p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt3_mod10_act10b',2)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>play</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p><strong class="u-textColor_4">• </strong> Every day I try to encourage John to play a musical instrument, but he refuses. What could be the problem?</p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt3_mod10_act10c',3)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>play</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p><strong class="u-textColor_4">• </strong> Carl has to do an internship at a museum before he can graduate. But he’s having trouble deciding where to go.</p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt3_mod10_act10d',4)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>play</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p><strong class="u-textColor_4">• </strong> Hey Maria. Have you seen my paint brushes? I remember leaving them in the basement but I can’t find them.</p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt3_mod10_act10e',5)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>play</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md5">
          <div class="c-contVideo ta-c">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_3/module_10/assets/videos/act_10_1.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconRefresh is-active" ng-show="s_actividad == 3"></button>
    <button class="c-btn-IconAction u-bgIconCheck is-active" ng-show="s_actividad == 3"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>