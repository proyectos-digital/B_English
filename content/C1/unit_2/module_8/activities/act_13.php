
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_13" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex align-items-center mt30">
        <div class="col xs12 md5">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p>Another way of making a request is by using the expression Is it <strong>alright if...?</strong><br/></p>
              <blockquote><strong>• Eg:</strong> Is it alright if I leave early today? It’s just that I’m not feeling very well.</blockquote>
              <div class="row">
                <div class="col xs6 mt20">
                  <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_13_1.png" alt=""/>
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_13_1.mp3"></button>
                  </div>
                </div>
                <div class="col xs6 mt20">
                  <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_13_2.png" alt=""/>
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_13_2.mp3"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6 ma-l">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p><strong>Giving Advice</strong><br/>
                Should / Shouldn’t + verb<br/><br/>
              </p><strong>• Eg:</strong>
              <blockquote>Mike and Kelly want to go to Canada for the one-month English program. But they’re not sure of what to do.<br/>
                <strong>›</strong> I think they should speak to their parents before making a decision.<br/><br/>
              </blockquote><strong>• Eg:</strong>
              <blockquote>Sue keeps shouting at her little brother when he misbehaves.<br/>
                <strong>›</strong> No, she shouldn’t do that. She needs to remember that he’s a small child and  most times he’s not really aware of what he’s doing.
              </blockquote>
              <div class="row">
                <div class="col xs6 mt20">
                  <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_13_3.png" alt=""/>
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_13_3.mp3"></button>
                  </div>
                </div>
                <div class="col xs6 mt20">
                  <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_13_4.png" alt=""/>
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_13_4.mp3"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row row-flex align-items-center justify-center">
        <div class="col xs12 md10">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1">
              <p><strong>Making Suggestions</strong><br/>
                I would suggest / recommend + gerund <strong class="u-textColor_2">(positive)</strong><br/>
                I wouldn’t suggest / recommend + gerund <strong class="u-textColor_4">(negative)</strong><br/><br/>
              </p>
              <div class="row row-flex justify-center mt30">
                <div class="col xs12 md4"><strong>• Eg:</strong>
                  <blockquote>I’ve been feeling this pain in my chest for the past two days.<br/>
                    <strong>›</strong> I would suggest going to do a check-up.<br/>
                  </blockquote>
                </div>
                <div class="col xs12 md4"><strong>• Eg:</strong>
                  <blockquote>I love going out to the bars on the weekend. It makes me feel so relaxed.<br/>
                    <strong>›</strong> Ok. However, I wouldn’t suggest doing it every weekend. At times, you can just stay home.<br/>
                  </blockquote>
                </div>
                <div class="col xs12 md4"><strong>• Eg:</strong>
                  <blockquote>My husband and I are going to France in May. But we don’t know where to visit.<br/>
                    <strong>›</strong> Well, I would recommend visiting the Eiffel Tower in Paris.
                  </blockquote>
                </div>
              </div>
              <div class="row row-flex justify-center mt30">
                <div class="col xs6 sm4 md3">
                  <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_13_5.png" alt=""/>
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_13_5.mp3"></button>
                  </div>
                </div>
                <div class="col xs6 sm4 md3">
                  <div class="row row-flex align-items-center justify-center"><img class="u-responsive-img m-a" src="unit_2/module_8/assets/images/act_13_6.png" alt=""/>
                    <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_8/assets/audios/act_13_6.mp3"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md9">
          <h5>Based on the following scenarios, record your advice or suggestions.</h5>
          <div class="row flex align-items center mt30"><span>  Andres is very interested in learning a foreign language, but he can’t decide on which to one learn.</span>
            <div class="row">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt2_mod8_act11a',1)">
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
          <div class="row flex align-items center mt30"><span>  Your aunt adds a lot of salt when preparing her food. Now, she is having a terrible headache.</span>
            <div class="row">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt2_mod8_act11b',2)">
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
          <div class="row flex align-items center mt30"><span>Jessie will be travelling to England next year. However, she doesn’t know what clothes to carry.</span>
            <div class="row">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt2_mod8_act11c',3)">
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
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>