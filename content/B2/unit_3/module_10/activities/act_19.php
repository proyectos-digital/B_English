
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper" ng-init="listenImage = 1; s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a act_19">
    <section class="template-content">
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row-flex">
          <div class="col col-flex-sm5 col-center"> 
            <div class="c-cardGreen">   
              <div class="c-cardGreenContent">
                <h6>Pronunciando: /w/</h6>
                <p>/w/ es similar en pronunciación a la vocal /u/ y ocurre al principio de las palabras y las sílabas. /w/ es sonora y se logra al poner los labios en una posición redonda manteniendo la lengua en una posición alta y en la parte trasera de la boca. Cuando se pronuncia /w/ la posición de la lengua , los labios y la quijada determinan la pronunciación de la vocal que sigue inmediatamente.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row-flex">
          <div class="col-flex-sm6 col-flex-md6 col-center">
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark"> Caw</strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio1" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_act19a',1)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_1.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Law </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio2" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt3_mod10_act19b',2)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_2.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Low  </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio3" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt3_mod10_act19c',3)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_3.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Paw  </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio4" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt3_mod10_act19d',4)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_4.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Pew   </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio5" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt3_mod10_act19e',5)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_5.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Dawn   </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio6" time-limit="120" audio-model="audio_6" on-playback-start="guardarRecord('unt3_mod10_act19f',6)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_6.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Down    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio7" time-limit="120" audio-model="audio_7" on-playback-start="guardarRecord('unt3_mod10_act19g',7)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_7.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Sew     </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio8" time-limit="120" audio-model="audio_8" on-playback-start="guardarRecord('unt3_mod10_act19h',8)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_8.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Cow     </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio9" time-limit="120" audio-model="audio_9" on-playback-start="guardarRecord('unt3_mod10_act19i',9)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_9.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
          </div>
          <div class="col-flex-sm6 col-flex-md6 col-center"> 
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Saw     </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio10" time-limit="120" audio-model="audio_10" on-playback-start="guardarRecord('unt3_mod10_act19j',10)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_10.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Sow (verb)     </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio11" time-limit="120" audio-model="audio_11" on-playback-start="guardarRecord('unt3_mod10_act19k',11)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_11.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Slew     </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio12" time-limit="120" audio-model="audio_12" on-playback-start="guardarRecord('unt3_mod10_act19l',12)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_12.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Slow    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio13" time-limit="120" audio-model="audio_13" on-playback-start="guardarRecord('unt3_mod10_act19m',13)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_13.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Slaw    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio14" time-limit="120" audio-model="audio_14" on-playback-start="guardarRecord('unt3_mod10_act19n',14)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_14.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">  New    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio15" time-limit="120" audio-model="audio_15" on-playback-start="guardarRecord('unt3_mod10_act19o',15)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_15.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Lawn    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio16" time-limit="120" audio-model="audio_16" on-playback-start="guardarRecord('unt3_mod10_act19p',16)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_16.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Pawn    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio17" time-limit="120" audio-model="audio_17" on-playback-start="guardarRecord('unt3_mod10_act19q',17)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_17.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
            <div class="mb10 col-flex mt10 w100"><strong class="u-textColor_4-dark">Own    </strong><span class=" c-ngRecorder ml20 mt5" ng-audio-recorder="ng-audio-recorder" id="mainAudio18" time-limit="120" audio-model="audio_18" on-playback-start="guardarRecord('unt3_mod10_act19r',18)">
                <button class="c-btn-Icon u-bgIconListen f-l" ng-audio="unit_3/module_10/assets/audios/act_19_18.mp3"></button>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 3"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 3"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>speechRecognition();</script>