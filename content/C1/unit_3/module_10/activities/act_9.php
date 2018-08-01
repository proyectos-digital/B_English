
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_9" ng-init="s_actividad = 1">
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
              <p>When we wish to give some facts or explain why certain things happened, we can make use of these expressions:</p>
              <p class="ta-l mt20 lh35"><strong>• </strong> The fact is that… <br/>
                <strong>• </strong> The fact of the matter is… <br/>
                <strong>• </strong> The truth is… <br/>
                <strong>• </strong> What happened was (that)... <br/>
                
              </p>
              <div class="row mt20 row-flex justify-center">
                <figure class="col-flex-xs12 mt10-xs mt0-sm col-flex-sm5 m-a ta-c"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_9_1.png" alt=""/>
                  <audio class="row" controls="controls">
                    <source src="unit_3/module_10/assets/audios/act_9_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                  </audio>
                </figure>
                <figure class="col-flex-xs12 mt10-xs mt0-sm col-flex-sm5 m-a ta-c"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_9_2.png" alt=""/>
                  <audio class="row" controls="controls">
                    <source src="unit_3/module_10/assets/audios/act_9_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                  </audio>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex flex-column align-items-center justify-between">
        <div class="col xs12 md8 pl10">
          <h4>Activity</h4>
          <h6>Complete the dialogues by giving appropriate explanations, reasons or facts based on the scenarios.</h6>
          <div class="row mt20 row-flex align-items-center justify-center">
            <div class="col col-flex-xs12 mt20">
              <div class="row-flex align-items-center">
                <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_9_3.png" alt=""/></figure>
                <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                  <p class="ta-j"><strong class="u-textColor_4">• </strong> Good afternoon Mr. Johnson. I received the email you sent but I think you attached the wrong file.
                    <br/>
                    <br/>
                    <strong class="u-textColor_4">- </strong> Oh yes. Sorry about that…
                  </p>
                  <div class="row">
                    <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_act9a',1)">
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
            <div class="col col-flex-xs12 mt20">
              <div class="row-flex align-items-center">
                <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_9_4.png" alt=""/></figure>
                <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                  <p class="ta-j"><strong class="u-textColor_4">• </strong> Every day I literally have to fight to make it onto Transmilenio so I can get to work on time.</p>
                  <div class="row">
                    <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt3_mod10_act9b',2)">
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
            <div class="col col-flex-xs12 mt20">
              <div class="row-flex align-items-center">
                <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_9_5.png" alt=""/></figure>
                <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                  <p class="ta-j"><strong class="u-textColor_4">• </strong> Mr. Martinez, lately you seem very distracted at work. Is everything fine?
                    <br/>
                    <br/>
                    <strong class="u-textColor_4">- </strong> No, things aren’t going so well…
                  </p>
                  <div class="row">
                    <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt3_mod10_act9c',3)">
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
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>