
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex flex-column align-items-center justify-between">
        <div class="col xs12 md9">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p>When accepting an apology from someone, here are a few essential expressions:</p>
              <p class="ta-l mt20 lh35"><strong>• </strong> Don’t worry about it <br/>
                <strong>• </strong> It’s no problem <br/>
                <strong>• </strong> No. You don’t need to apologize. / No. No need to apologize <br/>
                <strong>• </strong> No. It’s/That’s OK <br/>
                
              </p>
              <div class="row mt20 row-flex justify-center">
                <div class="col xs12 sm4 md4 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_10_1.mp3"></button>
                  </p>
                  <p><strong>• </strong> Don’t worry about it. You can send it to me later. I just wanted to have a copy of it.</p>
                </div>
                <div class="col xs12 sm4 md4 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_10_2.mp3"></button>
                  </p>
                  <p><strong>• </strong> No. You don’t need to apologize. Things happen at times and I know that you’ve been very busy with the report.</p>
                </div>
                <div class="col xs12 sm4 md4 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_10_3.mp3"></button>
                  </p>
                  <p><strong>• </strong> No. It’s Ok. I’ll take them.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h4>Activity</h4>
        <h6>Based on the following situations, accept the person’s apology for having done something. Also, you can give a reason for your acceptance as in the above examples.</h6>
        <div class="row mt20 row-flex align-items-center justify-center">
          <div class="col col-flex-xs12 col-flex-md5 mt20">
            <div class="row-flex align-items-center">
              <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_10_1.png" alt=""/></figure>
              <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                <p class="ta-j ">Please forgive me for shouting at you yesterday. I was just so stressed with all the work I had to do.</p>
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
          </div>
          <div class="col col-flex-xs12 col-flex-md5 mt20">
            <div class="row-flex align-items-center">
              <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_10_2.png" alt=""/></figure>
              <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                <p class="ta-j ">Hey Peter. I’m sorry about the text message I sent you. I accidentally sent it to your phone.</p>
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
          </div>
          <div class="col col-flex-xs12 col-flex-md5 mt20">
            <div class="row-flex align-items-center">
              <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_10_3.png" alt=""/></figure>
              <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                <p class="ta-j ">Good evening, Mrs. Hemingway. I’d like to apologize for arriving late this morning. It’s just that my car broke down on my way to work.</p>
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
          </div>
          <div class="col col-flex-xs12 col-flex-md5 mt20">
            <div class="row-flex align-items-center">
              <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_10_4.png" alt=""/></figure>
              <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                <p class="ta-j ">Sarah, I must apologize for my kids’ behavior at the birthday party. Please let me know what I can do to make it up to you.</p>
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
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>