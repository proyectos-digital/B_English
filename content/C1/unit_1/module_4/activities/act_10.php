
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>As with any language, there are several ways of expressing an idea. With this is mind, here are some other ways of making offers and invitations:</h5>
      <table class="c-table-estilo_tres m-a">
        <thead>
          <tr>
            <th></th>
            <th>Accepting</th>
            <th>Declining</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="w33 ta-c">
              <h6>Would you care to + verb?</h6>
              <p><strong>Would you care to join</strong> us at tomorrow’s meeting? I’d love to have your input on the issues we are going to discuss.</p>
              <p><strong>Would you care to try</strong> a sample of our latest red wine?</p>
            </td>
            <td class="w33 ta-c">
              <p><strong>• Yes, I’d like / love to.<br/>
                  • Sure, Thanks for inviting me.<br/>
                  • Certainly.<br/>
                  • Yes, Of course.<br/>
                  • Yes, Thank you.<br/></strong></p>
            </td>
            <td class="w33 ta-c">
              <p> When declining an offer or invitation, it’s normally polite to give a reason.</p>
              <p><strong>• Thanks for the offer / invitation but…<br/>
                  • I’m sorry but…<br/>
                  • I’d like/love to but…<br/>
                  • No thank you.<br/></strong></p>
              <p>Would you care to come with us to the park on Thursday?</p>
              <p><strong>Thanks for the invitation</strong> but I’ve already made plans with Peter.</p>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex align-items-center justify-between">
        <div class="col xs12 md5">
          <h5>Choose the correct response.</h5>
          <div class="row mt30">
            <div class="row">
              <button class="c-btn-IconAction u-bgIconListen mr10 f-l" ng-audio="unit_1/module_4/assets/audios/act_10_1.mp3"></button>
              <p class="w90 mb0"> Would you care to have a look at my essay? I believe there are some errors in it.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_1">Certainly. Just give me a minute.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_2">Give me a minute.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <button class="c-btn-IconAction u-bgIconListen mr10 f-l" ng-audio="unit_1/module_4/assets/audios/act_10_2.mp3"></button>
              <p class="w90 mb0"> Would you care to give us your opinion on this topic?</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_3" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_3">I’m sorry but I’m a bit busy right now. I’m preparing for my next class.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_4">No, I have no time for that.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <button class="c-btn-IconAction u-bgIconListen mr10 f-l" ng-audio="unit_1/module_4/assets/audios/act_10_3.mp3"></button>
              <p class="w90 mb0">Would you care to have lunch with us this afternoon?</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_5" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_5">Yes.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_6" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_6">Yes, I’d love to.</label>
            </div>
          </div>
          <div class="row mt30">
            <div class="row">
              <button class="c-btn-IconAction u-bgIconListen mr10 f-l" ng-audio="unit_1/module_4/assets/audios/act_10_4.mp3"></button>
              <p class="w90 mb0">Would you care to join me and my sister at the book signing on Saturday? I’d really like the help.</p>
            </div>
            <div class="row">
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_7" value="1"/>
              <label class="c-Checkbox row ta-l " for="selInput_7">What else are you doing?</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_8" value="2"/>
              <label class="c-Checkbox row ta-l " for="selInput_8">Thanks for the invitation but I won’t be available at that time. I’ll be out of town.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md7">
          <div class="col xs12 md11 col-center">
            <h5>Record your responses to the following invitations.</h5>
            <div class="row-flex align-items-center mt40">
              <div class="col xs12 sm7">
                <p class="mb0"><strong class="u-textColor_4">•</strong> Would you care to join us at the fair this weekend? <strong>(Accept)</strong></p>
              </div>
              <div class="col xs12 sm5">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod4_act10a',1)">
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
            <div class="row-flex align-items-center mt40">
              <div class="col xs12 sm7">
                <p class="mb0"><strong class="u-textColor_4">•</strong> Would you care to have a look at my essay? <strong>(Decline)</strong></p>
              </div>
              <div class="col xs12 sm5">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod4_act10b',2)">
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
            <div class="row-flex align-items-center mt40">
              <div class="col xs12 sm7">
                <p class="mb0"><strong class="u-textColor_4">•</strong> Would you care to join me and my sister at the book signing on Saturday? <strong>(Accept)</strong></p>
              </div>
              <div class="col xs12 sm5">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt1_mod4_act10c',3)">
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
            <h5 class="mt50">Record invitations to a friend for the following occasions.</h5>
            <div class="row-flex align-items-center mt40">
              <div class="col xs12 sm7">
                <p class="mb0"><strong class="u-textColor_4">•</strong> Lunch.</p>
              </div>
              <div class="col xs12 sm5">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt1_mod4_act10d',4)">
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
            <div class="row-flex align-items-center mt40">
              <div class="col xs12 sm7">
                <p class="mb0"><strong class="u-textColor_4">•</strong> A trip to Santa Marta.</p>
              </div>
              <div class="col xs12 sm5">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt1_mod4_act10e',5)">
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
            <div class="row-flex align-items-center mt40">
              <div class="col xs12 sm7">
                <p class="mb0"><strong class="u-textColor_4">•</strong> A family get together.</p>
              </div>
              <div class="col xs12 sm5">
                <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_f" time-limit="120" audio-model="audio_6" on-playback-start="guardarRecord('unt1_mod4_act10f',6)">
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>