
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <p>When asking for advice or giving advice, there are a few key phrases that help to make your intention clear. Let’s take a look at them.</p>
      <div class="row-flex justify-between align-items-center">
        <div class="col xs12 md6">
          <h5 class="u-textColor_4 ta-c">Giving for advice</h5>
          <h6>Listen and practice. When you have finished, record and send it to your teacher.</h6>
          <div class="col xs10 col-center">
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_1.mp3"></button><span class="col-flex-xs10 pl5">If I were you, I would study some more.</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_2.mp3"></button><span class="col-flex-xs10 pl5">If I were you, I would visit the professor.</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_3.mp3"></button><span class="col-flex-xs10 pl5">If I were you, I would buy the textbook online, it’s cheaper that way.</span>
            </div>
          </div>
          <h6 class="mt30">Now give advice to your friend about studying. Record and send it to your teacher.</h6>
          <div class="row mt30">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod3_act16a',1)">
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
        <div class="col xs12 md6">
          <h5 class="u-textColor_4 ta-c">You´d better</h5>
          <div class="col xs10 col-center mt50">
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_4.mp3"></button><span class="col-flex-xs10 pl5">You’d better pay attention class if you want to pass the exam.</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_5.mp3"></button><span class="col-flex-xs10 pl5">You’d better not come to class late again or you will be in trouble</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_6.mp3"></button><span class="col-flex-xs10 pl5">You’d better return the book you borrowed or you will be fined.</span>
            </div>
          </div>
          <h6 class="mt30">Now give advice to your friend about studying. Record and send it to your teacher.</h6>
          <div class="row mt30">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod3_act16b',2)">
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
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex justify-center">
        <div class="col xs12 md6">
          <h5 class="u-textColor_4">It might be a good idea</h5>
          <div class="col xs10 col-center">
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_7.mp3"></button><span class="col-flex-xs10 pl5">It might be a good idea to have a study schedule.</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_8.mp3"></button><span class="col-flex-xs10 pl5">It might be a good idea to not text in class.</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_9.mp3"></button><span class="col-flex-xs10 pl5">It might be a good idea to study before the exam.</span>
            </div>
          </div>
          <h6 class="mt30">Now give advice to your friend about studying. Record and send it to your teacher.</h6>
          <div class="row mt30">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt1_mod3_act16c',3)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <h5 class="u-textColor_4 mt30">Asking for advice</h5>
          <h6>If you were me, what would you do?</h6>
          <div class="col xs10 col-center">
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_10.mp3"></button><span class="col-flex-xs10 pl5">I can either study or go to the movies. If you were me, what would you do?</span>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <h5 class="u-textColor_4 mt30-xs mt5-md">What do you suggest?</h5>
          <div class="col xs10 col-center">
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_11.mp3"></button><span class="col-flex-xs10 pl5">Sharon needs to get a job by next week. What do you suggest?</span>
            </div>
            <div class="row-flex align-items-center mt30">
              <button class="col-flex-xs1 c-btn-IconAction u-bgIconListen min-w40" ng-audio="unit_1/module_3/assets/audios/act_16_12.mp3"></button><span class="col-flex-xs10 pl5">Jason wants to study English in Miami this summer. What’s your advice?</span>
            </div>
          </div>
          <div class="row mt30">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt1_mod3_act16d',4)">
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
    <section class="template-content u-animationFadeDown" ng-init="FuncionForos()" ng-show="s_actividad == 3">
      <div ng-show="loadForo" class="loading_template preloadTemplateAnimation"> <svg width="300px" height="200px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet" style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" class="loading_svg"> <path stroke="#ededed" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path> <path id="outline-bg" opacity="0.05" fill="none" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path> </svg> </div>
      
      <div class="row" ui-view="foro"></div>
    </section>
  </div>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>