
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt30-sm mt10-md mt10-xs">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p><strong>Pronunciando / ɔ/</strong></p>
              <p>Los labios están tensionados en una forma ovalada y pronunciada, la quijada debe estar más abierta que al pronunciar /ou/. Finalmente, la lengua se ubica en la parte de debajo de la boca.</p>
              <p>Problemas posibles de pronunciación para el hispano hablante: </p>
              <p>La vocal /ɔ/ no existe en español, los patrones de ortografía del inglés pueden resultar confusos, haciendo que el estudiante la sustituya por una vocal similar.                    </p>
              <p><strong>Ejemplo</strong></p>
              <p>Si reemplazas /ɔ/ por /a/: caller sonará como collar</p>
              <p>Si reemplazas /ɔ/ por /ou/: bought sonará como boat</p>
              <p>Si reemplazas /ɔ/ con /Gbws/ bought sonará como but</p>
            </div>
          </div>
          <h5 class="ta-c mt40">Spellings: /ɔ/</h5>
          <table class="c-table-default m-a mt20">
            <tbody>
              <tr>
                <td class="ta-c">“o”</td>
                <td class="ta-c">“a”</td>
                <td class="ta-c">“aw”</td>
                <td class="ta-c">“au”</td>
              </tr>
              <tr>
                <td class="ta-c">Dog</td>
                <td class="ta-c">Fall</td>
                <td class="ta-c">Lawn</td>
                <td class="ta-c">Auto</td>
              </tr>
              <tr>
                <td class="ta-c">Lost</td>
                <td class="ta-c">Mall</td>
                <td class="ta-c">Drawn</td>
                <td class="ta-c">Fault</td>
              </tr>
              <tr>
                <td class="ta-c">Offer</td>
                <td class="ta-c">Salt</td>
                <td class="ta-c">Awful</td>
                <td class="ta-c">Pauper</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt30-sm mt10-md mt10-xs">
          <div class="row-flex">
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 1.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt2_mod6_act_19',1)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Cold | Called | Coiled</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 2.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_b" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt2_mod6_act_19b',2)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Toll | Tall | Toil</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 3.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_c" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt2_mod6_act_19c',3)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Coal | Call | Coil</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 4.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_d" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt2_mod6_act_19d',4)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Foal | Fall | Foil</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 5.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_e" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt2_mod6_act_19e',5)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Knows | Gnaws | Noise</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 6.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_f" time-limit="120" audio-model="audio_6" on-playback-start="guardarRecord('unt2_mod6_act_19f',6)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Loan | Lawn | Loin</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 7.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_g" time-limit="120" audio-model="audio_7" on-playback-start="guardarRecord('unt2_mod6_act_19g',7)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Bowled | Balled | Boiled</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 m-a">
              <div class="col-flex">
                <div class="row-flex"><strong class="u-textColor_4-dark"> 8.</strong><span class="c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_h" time-limit="120" audio-model="audio_8" on-playback-start="guardarRecord('unt2_mod6_act_19h',8)">
                    <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                    <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                      <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                        <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"></button>
                        <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Pose | Paws | Poise</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                      </div>
                      <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting">
                        <p>Please wait while we process your recording</p>
                      </div>
                    </div></span></div>
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