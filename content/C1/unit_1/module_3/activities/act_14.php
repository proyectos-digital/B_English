
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5 class="row ta-c">What is curiosity?</h5>
      <p class="ta-c">Curiosity is the emotion that makes you want to know something. When expressing in English there are a few phrases that are very useful.</p>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 ta-c">
          <h5> Listen to phrases and repeat them.</h5>
          <div class="row">
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_1.mp3"></button><span>I want to know...</span>
            </div>
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_2.mp3"></button><span>I’m curious about...</span>
            </div>
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_3.mp3"></button><span>I’m eager to know…</span>
            </div>
          </div>
          <div class="row">
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_4.mp3"></button><span>I’d be very interested to know...</span>
            </div>
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_5.mp3"></button><span>I’ve been meaning to ask you...</span>
            </div>
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_6.mp3"></button><span>I’d like to know...</span>
            </div>
          </div>
          <div class="row">
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_7.mp3"></button><span>I’d love to know…</span>
            </div>
            <div class="col xs4 flex align-items-center mt30">
              <button class="c-btn-IconAction u-bgIconListen min-w40 mr20" ng-audio="unit_1/module_3/assets/audios/act_14_8.mp3"></button><span>I wonder...</span>
            </div>
          </div>
          <h5 class="mt30"> Ask for more information about the following items. Record and send them to your teacher.</h5>
          <div class="col xs12 md11 col-center ta-l">
            <ul class="col xs6">
              <li><strong class="u-textColor_4">•</strong>  A new dress code at work.</li>
              <li><strong class="u-textColor_4">•</strong> An assignment that the teacher gave in class yesterday.</li>
              <li><strong class="u-textColor_4">•</strong> What happened in the meeting yesterday?</li>
            </ul>
            <ul class="col xs6">
              <li><strong class="u-textColor_4">•</strong> The assignment of parking spaces.</li>
              <li><strong class="u-textColor_4">•</strong> The new employee in the office.</li>
            </ul>
          </div>
          <div class="row mt30">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod3_act14',1)">
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
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img mt30 m-a" src="unit_1/module_3/assets/images/act_14_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>