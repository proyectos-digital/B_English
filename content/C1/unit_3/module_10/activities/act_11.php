
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex align-items-center justify-between">
        <div class="col xs12">
          <h6>There are different degrees of agreeing or disagreeing with a person or an opinion. Here are some useful expressions:</h6>
        </div>
        <div class="col xs12 md10 offset-md1">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <h6>Expressing complete agreement</h6>
              <p class="ta-l mt20 lh35"><strong>• </strong> I (completely/totally/absolutely/definitely) agree (with)... <br/>
                <strong>• </strong> I couldn’t agree more<br/>
                <strong>• </strong> I’m in total/complete agreement (with)...<br/>
              </p>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_1.mp3"></button></span> I really believe that art should be made obligatory in all schools.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> Yes! I completely agree with you on that.</span></div>
              </div>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_2.mp3"></button></span> The Ministry of Education wants all learning institutions in Colombia to adopt a bilingual form of education.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> I couldn’t agree more. This will make students a lot more marketable in the professional world.</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md10 offset-md1">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <h6>Expressing complete disagreement</h6>
              <p class="ta-l mt20 lh35"><strong>• </strong> I completely disagree (with)...<br/>
                <strong>• </strong> I’m in complete disagreement (with)...<br/>
                <strong>• </strong> I’m completely against what… <br/>
              </p>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_3.mp3"></button></span> The economy is not developing because industries are under too many regulations to protect the environment.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> I’m in complete disagreement with what you just said. There needs to be strict regulations because we suffer when the environment is affected.</span></div>
              </div>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_4.mp3"></button></span> The dance performance was boring. They were just jumping around on the stage.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> I completely disagree. It was a masterful and modern style of dance.</span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md10 offset-md1">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <h6>Expressing partial agreement or disagreement</h6>
              <p class="ta-l mt20 lh35"><strong>• </strong> I don’t really/quite/exactly agree (with)... <br/>
                <strong>• </strong> I agree to an extent (with)... <br/>
                <strong>• </strong> I see what you’re saying, but… <br/>
              </p>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_5.mp3"></button></span> I don’t think that fashion should be considered an art. People only use it to show off their wealth and power.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> Well, I agree to an extent, because nowadays the best fashion is made for celebrities and people with money. But fashion is a way of expressing our individuality.</span></div>
              </div>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_6.mp3"></button></span> Giving children less homework will not help them to be better students.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> I don’t really agree with that. Children can still be good students if we guide them and give them positive encouragement.</span></div>
              </div>
              <hr/>
              <div class="row mt20 row-flex align-items-center">
                <div class="row"><strong>• </strong> <span class="f-l xs2 sm1">
                    <button class="c-btn-IconAction u-bgIconListen mr20" ng-audio="unit_3/module_10/assets/audios/act_11_7.mp3"></button></span> Jacky, having a profession in visual arts is not going to help you be financially stable.</div>
                <div class="row"><span class="f-l offset-xs2 offset-sm1"><strong>•</strong> Mom, I see what you’re saying, but this is what I want to do. It’s my passion.</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex flex-column align-items-center justify-between">
        <h4>Activity</h4>
        <h6>Respond to the following audios by recording your own response to say whether you agree, disagree or partially agree. Remember to give your reasons.</h6>
        <div class="row mt20 row-flex align-items-center justify-center">
          <div class="col col-flex-xs12 col-flex-md5 mt20">
            <div class="row-flex align-items-center">
              <figure class="mt0-sm mt10-xs m-a ta-c col-flex-xs5"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_10_1.png" alt=""/></figure>
              <div class="col-flex-xs7 flex flex-wrap align-items-center pl20">
                <p class="ta-j ">Artists these days do whatever and call it art. But in fact, it’s just garbage.</p>
                <div class="row">
                  <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_act11a',1)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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
                <p class="ta-j ">This year, the FIFA World Cup is going to take place here in Colombia. I don’t see what all the hype is about. I think it’s going to cause chaos in the country.</p>
                <div class="row">
                  <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt3_mod10_act11b',2)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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
                <p class="ta-j ">Sarah is annoyed at the fact that the university Law students must take a bar exam before they can get their degree.</p>
                <div class="row">
                  <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt3_mod10_act11c',3)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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
                <p class="ta-j ">Jimmy has become very disrespectful over the last week. I think I’m going to start flogging him for his bad behavior.</p>
                <div class="row">
                  <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt3_mod10_act11d',4)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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
                <p class="ta-j ">I’m sick and tired of people always protesting in the streets for higher wages. They must realize and accept that the country’s economy is in a bad state. So, that shouldn’t be an option right now!</p>
                <div class="row">
                  <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt3_mod10_act11e',5)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
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