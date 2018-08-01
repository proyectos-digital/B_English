
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_9" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div Class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <h5>Apologizing and accepting apologies.</h5>
        <div class="row">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p>When you apologize to someone, you are sorry for having caused an inconvenience or some unhappiness. With the following expressions, either a noun or a verb in the gerund can follow:</p>
              <p class="ta-l mt20 lh35"><strong>• </strong> I (do / must) apologize for… → ‘do’ or ‘must’ adds emphasis. <br/>
                <strong>• </strong> I am (so / very / terribly) sorry for… → ‘so’, ‘very’ or ‘terribly’ adds emphasis. <br/>
                <strong>• </strong> I would like to apologize for… <br/>
                <strong>• </strong> Please, forgive me for…
                
              </p>
            </div>
          </div>
          <div class="col xs12 md6">
            <blockquote>Good morning, Mr. Chambers. I must apologize for arriving late this morning. The thing is that I was stuck in traffic on the highway.</blockquote>
            <div class="xs12 md9">
              <hr/>
            </div>
            <blockquote>
              <p>Why didn’t you respond to my email? I waited for almost an hour.</p>
              <p>-	I’m so sorry. I was in the line at the bank, and I wasn’t allowed to use my cellphone.</p>
            </blockquote>
          </div>
          <div class="col xs12 md6">
            <div class="c-cardGreen mt10-md mt0-hd">
              <div class="c-cardGreenContent u-textColor_1">
                <p class="ta-j mt20">
                  When apologizing for not doing something, just add ‘not’ after the
                  word ‘for’ in the expressions.<br/><br/>
                  <strong>Eg:</strong> Please, forgive me for not calling to tell you about what happened.
                  
                </p>
                <div class="row mt20 flex justify-center">
                  <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_9/assets/audios/act_9_1.mp3"></button>
                  <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_9/assets/audios/act_9_2.mp3"></button>
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_9/assets/audios/act_9_3.mp3"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div Class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="col xs12 md10 col-center">
          <h5>Pretend you are in the following situations and you need to apologize for something.</h5>
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p class="ta-j"><strong class="u-textColor_4">• </strong>You and your sister were playing in the living room when
                you accidentally knocked over the glass vase and it broke.
                Your father is now furious. What do say?
              </p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod9_act9a',1)">
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
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p class="ta-j"><strong class="u-textColor_4">• </strong>You arrive late for work and your boss is not happy.
                What apology do you give him?
              </p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt3_mod9_act9b',2)">
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
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p class="ta-j"><strong class="u-textColor_4">• </strong>Yesterday, you arranged to meet a friend at 3 pm at the
                park to explain some things about the US visa application.
                However, due to a family emergency, you could not make it.
                Give her your apology.
              </p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt3_mod9_act9c',3)">
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
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p class="ta-j"><strong class="u-textColor_4">• </strong>You’re late on your rent payment for the current month.
                You call your landlord to apologize. What do you say?
              </p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt3_mod9_act9d',4)">
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
          <div class="row mt20 flex align-items-center">
            <div class="col xs8">
              <p class="ta-j"><strong class="u-textColor_4">• </strong>Your parents have confronted you about lying to them about where you were last night. Feeling ashamed, you decide to apologize.</p>
            </div>
            <div class="col xs4">
              <div class="row">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt3_mod9_act9e',5)">
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