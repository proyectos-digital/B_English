
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="col xs12 md8 col-center">
          <h5> Now answer the following questions. Record your answers:</h5>
        </div>
      </div>
      <div class="row">
        <div class="col xs12 md5 showTo-md">
          <figure><img class="u-responsive-img" src="unit_1/module_1/assets/images/col_2_1.png" alt="avatar describe the next activity"/></figure>
        </div>
        <div class="col xs12 md7">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <ul class="c-listDefault">
                <li>Please describe the previous professions: workplace, responsibilities and functions, possible risks involved and salary</li>
                <li>What jobs have you had before? which ones did you like and which ones didn’t you like?</li>
                <li>What unusual jobs have you seen in Colombia? and what do they involve?</li>
              </ul>
            </div>
          </div>
          <div class="row mt30 c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod1_mycol2',1)">
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
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5>Define in English the following Colombian expressions:</h5>
      <div class="row row-flex justify-content-center">
        <table class="c-table-estilo_dos m-a" ng-init="listarExpresiones()">
          <thead>
            <tr>
              <th class="w20">Word</th>
              <th class="w80">Mearning</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="expres in expresiones">
              <td class="ta-c"><span>{{expres.titulo}}</span></td>
              <td>
                <div class="c-wrapTextarea">
                  <textarea class="c-textarea" name="" expresionid="{{expres.id}}" id="text_{{expres.id}}"></textarea>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="guardarExpresiones()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>