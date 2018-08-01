
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_18">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 justify-between col-center mt10-sm mt50-md">
          <h5>Pronunciando: /ou/</h5>
          <div class="row-flex fz9 line-h1 ta-j">Labios tensos y en forma redonda, la mandíbula sube con la lengua y se cierra levemente y la lengua pasa de un nivel medio a la punta del paladar. <strong>/ou/</strong> es un diptongo; empieza con<strong>/o/</strong>y termina con<strong>/u/.</strong><br/><strong>/ou/  </strong>en inglés es similar a la “ó” acentuada en español, pero /ou/ es más prolongada.<br/>Palabras claves en español:  <strong>no, cosa, dólar, habló,</strong>Problemas posibles de pronunciación para el hispano hablante: Una vez más, los problemas de pronunciación con este sonido pueden ocurrir por los patrones de ortografía que pueden resultar confusos y por la similitud con el sonido de otras vocales.<br/><strong>Ejemplo: </strong>si reemplazas  <strong>/ou/  </strong>con  <strong>/g mayúscula al revés/;  </strong>coat sonará como cut Y si reemplazas  <strong>/ou/  </strong>con  <strong>/c/  </strong>bold sonará como bald. </div>
          <h6 class="mt20">Spellings: /ou/</h6>
          <table class="c-table-default mt20 ml30">
            <thead>
              <tr>
                <th>“o”</th>
                <th>“oa”</th>
                <th>“ow”</th>
                <th>“oe”</th>
                <th>“ou”</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>no</td>
                <td>soap</td>
                <td>know</td>
                <td>toe</td>
                <td>douhg</td>
              </tr>
              <tr>
                <td>home</td>
                <td>loan</td>
                <td>owe</td>
                <td>foe</td>
                <td>though</td>
              </tr>
              <tr>
                <td>fold</td>
                <td>foam</td>
                <td>grow</td>
                <td>goes</td>
                <td>shoulder</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt30-sm mt50-md pl15">
          <h6>Exercise:</h6>
          <p><strong class="u-textColor_4">1. </strong> Listen, repeat and record the following words:</p>
          <ol class="row-flex pl30">
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_1.mp3"><span> Coke</span></button><span class="col col-flex-xs6 col c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio1" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod2_act18a',1)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_2.mp3"><span>Konwn</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio2" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod2_act18b',2)">
                  <div class="c--xs6 colngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_3.mp3"><span>Yellow</span></button><span class="col-flex-xs6 col c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio3" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt1_mod2_act18c',3)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_4.mp3"><span>Vote</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio4" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt1_mod2_act18d',4)">
                  <div class="c--xs6 colngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_5.mp3"><span>Toes</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio5" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt1_mod2_act18e',5)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_6.mp3"><span>Comb</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio6" time-limit="120" audio-model="audio_6" on-playback-start="guardarRecord('unt1_mod2_act18f',6)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_7.mp3"><span>Poem</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio7" time-limit="120" audio-model="audio_7" on-playback-start="guardarRecord('unt1_mod2_act18g',7)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_8.mp3"><span>Stove</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio8" time-limit="120" audio-model="audio_8" on-playback-start="guardarRecord('unt1_mod2_act18h',8)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_9.mp3"><span>Road</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio9" time-limit="120" audio-model="audio_9" on-playback-start="guardarRecord('unt1_mod2_act18i',9)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
            <li class="u-textColor_4-dark col-flex-xs12 col-flex-sm6 col-flex-md12 mb10">
              <div class="row-flex">
                <button class="c-btn-Icon u-bgIconListen f-l col-flex-xs4 col-flex-sm5" ng-audio="unit_1/module_2/assets/audios/act_18_10.mp3"><span>Tomato</span></button><span class="col col-flex-xs6 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio10" time-limit="120" audio-model="audio_10" on-playback-start="guardarRecord('unt1_mod2_act18j',10)">
                  <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                  <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                    <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                      <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                      <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                    </div>
                  </div></span>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </section>
  </div>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>