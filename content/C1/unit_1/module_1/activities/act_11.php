
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_11" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="4" ng-click="s_actividad = 4" ng-class="(s_actividad == 4) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <h6><span class="u-textColor_4">1</span>. Find the words in the list. Words can go vertically, horizontally or diagonally.</h6>
      </div>
      <div class="row-flex justify-center mt50-md">
        <div class="col-flex-xs12 col-flex-md5 ta-c col-center">
          <div class="mt50-md" id="words"></div>
        </div>
        <div class="col-flex-md7 col-flex-sm10 col-flex-xs12 col-center ta-c">
          <div id="puzzle" style="display: inline-block;"></div>
        </div>
      </div>
      <div class="row mt30">
        <h6><span class="u-textColor_4">2</span>. Which emotions have you tried to bottle up and avoid feeling? Explain why.</h6>
        <div class="row row-flex mt30">
          <div class="col-flex-xs12 col-flex-md7 col-center">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h160" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
            <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2" ng-init="listaractividadmodulo(2)">
      <div class="row">
        <h6><span class="u-textColor_4">2</span>. Emotions can be caused by music</h6>
        <h6>Different people may feel different about the same types of music. List songs that cause the emotions listed below and give a short explanation of your choice.</h6>
      </div>
      <div class="row row-flex align-items-center mt30">
        <div class="col-flex-xs12 col-flex-md5 ta-c col-center ">
          <table class="c-table-estilo_tres m-a">
            <thead>
              <tr>
                <th class="w33">Emotion</th>
                <th class="w33">Song / Music</th>
                <th class="w33">Explanation</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="palabra in palabras">
                <td>{{palabra.emotion}}</td>
                <td>
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." name="act_11_1" id="song_{{palabra.orden}}" preguntaid="{{palabra.orden}}"/>
                </td>
                <td>
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." name="act_11_2" id="explanation_{{palabra.orden}}"/>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-md5 ta-c col-center showTo-md "><img class="u-responsive-img mb30" src="unit_1/module_1/assets/images/act_11_1.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3" ng-init="listaractividadmodulo(3)">
      <div class="row ">
        <h6><span class="u-textColor_4">3</span>. Emotions can be caused by music</h6>
        <h6>As with music, people may feel different about the same movies. List the movie titles that cause the emotions below.</h6>
      </div>
      <div class="row row-flex align-items-center mt30">
        <div class="col-flex-xs12 col-flex-md5 ta-c col-center showTo-md "><img class="u-responsive-img mb30" src="unit_1/module_1/assets/images/act_11_2.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md5 ta-c col-center">
          <table class="c-table-estilo_tres m-a">
            <thead>
              <tr>
                <th class="w33">Emotion</th>
                <th class="w33">Song / Music</th>
                <th class="w33">Explanation</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="palabra in palabrasdos">
                <td>{{palabra.emotion}}</td>
                <td>
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." name="act_11_1" id="song_{{palabra.orden}}" preguntaid="{{palabra.orden}}"/>
                </td>
                <td>
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." name="act_11_2" id="explanation_{{palabra.orden}}"/>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 4">
      <div class="row">
        <h6><span class="u-textColor_4">4</span>. Empathy</h6>
        <h6>Empathy means to understand how others could feel by placing yourself in their situation. Listen to each situation below. Record how someone would feel.</h6>
      </div>
      <div class="row row-flex align-items-center mt30">
        <div class="col-flex-xs12 col-flex-sm7 col-flex-md7 ta-c col-center">
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_1.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod1_act11a',1)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_2.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod1_act11b',2)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_3.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt1_mod1_act11c',3)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_4.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt1_mod1_act11d',4)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_5.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt1_mod1_act11e',5)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_6.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_f" time-limit="120" audio-model="audio_6" on-playback-start="guardarRecord('unt1_mod1_act11f',6)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_7.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_g" time-limit="120" audio-model="audio_7" on-playback-start="guardarRecord('unt1_mod1_act11g',7)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_8.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_h" time-limit="120" audio-model="audio_8" on-playback-start="guardarRecord('unt1_mod1_act11h',8)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_9.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_i" time-limit="120" audio-model="audio_9" on-playback-start="guardarRecord('unt1_mod1_act11i',9)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls ta-c" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}}</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 9 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}}<sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row-flex col xs12 lg6 mt30">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_1/assets/audios/act_11_10.mp3"></button>
            <div class="w80 row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_j" time-limit="120" audio-model="audio_10" on-playback-start="guardarRecord('unt1_mod1_act11j',10)">
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
        <div class="col-flex-xs12 col-flex-md5 ta-c col-center showTo-md "><img class="u-responsive-img mb30" src="unit_1/module_1/assets/images/act_11_3.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck js-validarWordFind" ng-show="s_actividad == 1"></button>
    <button class="c-btn-IconAction u-bgIconCheck " ng-show="s_actividad == 2" ng-click="guardarActividad()"></button>
    <button class="c-btn-IconAction u-bgIconCheck " ng-show="s_actividad == 3" ng-click="guardarActividad()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script src="./../assets/js/librerias/wordfind.js"></script>
<script src="./../assets/js/librerias/wordfindgame.js"></script>
<script>
  $(function() {
      $( "#puzzle" ).draggable();
  });
  
</script>
<script>
  var words = ['Active'
              , 'Bright'
              , 'Embarrassed'
              , 'Joyful'
              , 'Relaxed'
              , 'Afraid'
              , 'Cautious'
              , 'Excited'
              , 'Lonely'
              , 'Sad'
              , 'Alert'
              , 'Confident'
              , 'Glad'
              , 'Peaceful'
              , 'Silly'
              , 'Confused'
              , 'Happy'
              , 'Playful'
              , 'Stressed'
              , 'Ashamed'
              , 'Hurt'
              , 'Depressed'
              , 'Proud'
              , 'Weak'
              ];
  
  // start a word find game
  var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');
  
  $('#solve').click( function() {
      wordfindgame.solve(gamePuzzle, words);
  });
  
  // create just a puzzle, without filling in the blanks and print to console
  var puzzle = wordfind.newPuzzle( words, {height: 10, width:10, fillBlanks: false} );
  wordfind.print(puzzle);
</script>