
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_12" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex flex-column align-items-center justify-between">
        <div class="col xs12">
          <h6>To express a possibility or impossibility in the present or future, either of these modal verbs can be used</h6>
        </div>
        <div class="col xs12 md9">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p class="ta-l mt20 lh35"><strong>• </strong> may / might + INFINITIVE <span class="u-textWhite">(positive)</span> <br/>
                <strong>• </strong> may not / might not + INFINITIVE <span class="u-textColor_wrong">(negative)</span> <br/>
              </p>
              <p>→ both ‘may’ and ‘might’ are interchangeable. However, ‘may’ indicates more certainty</p>
              <div class="row mt20 row-flex justify-center">
                <div class="row">
                  <hr/>
                </div>
                <div class="col xs12 sm6 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_12_1.mp3"></button>
                  </p>
                  <p><strong>• </strong> I finish work at 5 pm this Friday. So, I may attend the housewarming party.</p>
                </div>
                <div class="col xs12 sm6 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_12_2.mp3"></button>
                  </p>
                  <p><strong>• </strong> Jason may not finish his part of the group work on time. So, we need to think of a plan B.</p>
                </div>
                <div class="row">
                  <hr/>
                </div>
                <div class="col xs12 sm6 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_12_3.mp3"></button>
                  </p>
                  <p><strong>• </strong> They might hire another English teacher because the department is thinking of splitting the groups.</p>
                </div>
                <div class="col xs12 sm6 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_12_4.mp3"></button>
                  </p>
                  <p><strong>• </strong> The spelling competition might not take place this year, because they’re having difficulties finding sponsors.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md9">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p class="ta-l mt20 lh35"><strong>• </strong> ‘Could’ + INFINITIVE <br/></p>
              <p>→ this expresses a future possibility, and acts as an alternative to ‘may’ or ‘might’.</p>
              <div class="row mt20 row-flex justify-center">
                <div class="col xs12 sm6 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_12_5.mp3"></button>
                  </p>
                  <p><strong>• </strong> Go to the park and walk around. It could be fun.</p>
                </div>
                <div class="col xs12 sm6 ta-c">
                  <p>
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_12_6.mp3"></button>
                  </p>
                  <p><strong>• </strong> Mary works at the Ministry of Education. So, I guess she could give you the information you need.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 md10">
          <h4>Activity</h4>
          <h6>Appropriately respond to the following scenarios:</h6>
          <hr/>
          <div class="row mt20">
            <div class="col xs12 md7">
              <p><strong class="u-textColor_4">A. </strong> I want to apply to art school but I’m not sure how.</p>
            </div>
            <div class="col xs12 md5">
              <div class="row flex"><span><strong class="u-textColor_4">• </strong> response:</span>
                <div class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_act12a',1)">
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
          <hr/>
          <div class="row mt20">
            <div class="col xs12 md7">
              <p><strong class="u-textColor_4">B. </strong> The manager is looking for a new painting to hang in the reception area. Any ideas?</p>
            </div>
            <div class="col xs12 md5">
              <div class="row flex"><span><strong class="u-textColor_4">• </strong> response:</span>
                <div class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt3_mod10_act12b',2)">
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
          <hr/>
          <div class="row mt20">
            <div class="col xs12 md7">
              <p><strong class="u-textColor_4">C. </strong> Every day I try to encourage John to play a musical instrument, but he refuses. What could be the problem?</p>
            </div>
            <div class="col xs12 md5">
              <div class="row flex"><span><strong class="u-textColor_4">• </strong> response:</span>
                <div class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt3_mod10_act12c',3)">
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
          <hr/>
          <div class="row mt20">
            <div class="col xs12 md7">
              <p><strong class="u-textColor_4">D. </strong> Carl has to do an internship at a museum before he can graduate. But he’s having trouble deciding where to go</p>
            </div>
            <div class="col xs12 md5">
              <div class="row flex"><span><strong class="u-textColor_4">• </strong> response:</span>
                <div class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt3_mod10_act12d',4)">
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
          <hr/>
          <div class="row mt20">
            <div class="col xs12 md7">
              <p><strong class="u-textColor_4">E. </strong> Hey Maria. Have you seen my paint brushes? I remember leaving them in the basement but I can’t find them.</p>
            </div>
            <div class="col xs12 md5">
              <div class="row flex"><span><strong class="u-textColor_4">• </strong> response:</span>
                <div class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt3_mod10_act12e',5)">
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
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>