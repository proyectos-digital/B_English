
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_19">
  <aside class="template-asideLeft o-aside-Item " ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <article class="template-content">
      <div>
        <h4>Politely interrupting</h4>
      </div>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <p>When someone is speaking, sometimes we really want to add to the conversation but we don’t want to be rude and interrupt that person. There are a few phrases we can use to join in the conversation politely without too much interruption of the general conversation.</p>
        <div class="row row-flex mb30">
          <div class="col xs12 md8 mb30 mt40">
            <div class="row mt20">
              <p>The best time to interrupt someone is when they pause in the conversation.</p>
              <audio class="row m-a mt30" controls="controls">
                <source src="unit_1/module_1/assets/audios/act_19_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
            <div class="row mt20">
              <p class="ml10">You can also indicate that you want to say something by using hand gestures or a facial expression.</p>
              <audio class="row m-a mt30" controls="controls">
                <source src="unit_1/module_1/assets/audios/act_19_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
              </audio>
            </div>
          </div>
          <div class="col xs12 md4 ta-c mt40 showTo-md"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_19_1.png" alt=""/></div>
        </div>
        <div class="row mt20">
          <p class="ml10">You can politely interrupt someone by agreeing or disagreeing with them.</p>
          <div class="row row-flex mt20">
            <div class="col-flex-xs12 col-flex-md4">
              <h6>Agreeing</h6>
              <audio class="xs12 sm11 m-a mt30" controls="controls">
                <source src="unit_1/module_1/assets/audios/act_19_3.mp3" type="audio/mpeg"/> Your browser does not support the audio element.
              </audio>
            </div>
            <div class="col-flex-xs12 col-flex-md4">
              <h6>Disagreeing</h6>
              <audio class="xs12 sm11 m-a mt30" controls="controls">
                <source src="unit_1/module_1/assets/audios/act_19_4.mp3" type="audio/mpeg"/> Your browser does not support the audio element.
              </audio>
            </div>
            <div class="col-flex-xs12 col-flex-md4">
              <h6>By apologizing</h6>
              <audio class="xs12 sm11 m-a mt30" controls="controls">
                <source src="unit_1/module_1/assets/audios/act_19_5.mp3" type="audio/mpeg"/> Your browser does not support the audio element.
              </audio>
            </div>
          </div>
        </div>
      </section>
      <section class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h5>Other polite phrases include.</h5>
        <p>Listen to the phrases that you can use to politely interrupt a speaker.</p>
        <div class="row">
          <div class="col xs5 flex justify-around col-center">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_19_6.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_19_7.mp3"></button>
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_19_8.mp3"></button>
          </div>
        </div>
        <div class="row mt30 row-flex align-items-center">
          <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_19_2.png" alt=""/></div>
          <div class="col xs12 md6">
            <h6><span class="u-textColor_4">1</span>. Record the most appropriate way to interrupt the following conversations.</h6>
            <p><strong class="u-textColor_4">•</strong> Your boss has made a mistake about the number of new computers that your office has received, you only received 10 new computers.</p>
            <p>Record how you would interrupt him in order to correct him.</p>
            <p><strong>Boss:</strong> I am happy to say that the HR department has received 25 new computers. (Record your interruption here).</p>
            <div class="col xs12 md6 mt30 col-center">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod1_act19a',1)">
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div>
              </div>
            </div>
            <p class="mt30"><strong class="u-textColor_4">•</strong> Your secretary is reporting the new procedure for calling in sick. You need to let her know that they must also send an email, not only call in.</p>
            <p>Record how you would interrupt him in order to correct him.</p>
            <p><strong>Secretary:</strong> As you know we have had some troubles with people missing work. When you are not going to come into work, you must call in at least a few hours before your start time. (Record your interruption here).</p>
            <div class="col xs12 md6 mt30 col-center">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod1_act19b',2)">
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
    </article>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>