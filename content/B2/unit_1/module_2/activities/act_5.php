
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center mt5-sm mt10-md">
          <h5><strong class="u-textColor_4">1. </strong>  Read the short conversations. Drag a WH- question word to complete the questions.</h5>
          <div class="row mb30 mt30 ta-c showTo-md"><img class="u-responsive-img w80 m-a" src="unit_1/module_2/assets/images/act_4a.png" alt=""/></div>
          <div class="row-flex justify-around mt30">
            <div class="dragCont">
              <div class="drag">Where</div>
            </div>
            <div class="dragCont">
              <div class="drag">What</div>
            </div>
            <div class="dragCont">
              <div class="drag">Who</div>
            </div>
            <div class="dragCont">
              <div class="drag">Where</div>
            </div>
            <div class="dragCont">
              <div class="drag">Who</div>
            </div>
            <div class="dragCont">
              <div class="drag">How</div>
            </div>
            <div class="dragCont">
              <div class="drag">Who</div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs10 col-flex-md5 col-center mt50-sm mt10-md ">
          <div class="row-flex">
            <div class="col-flex-xs6 col-flex-md12">
              <ol class="u-listStyle-UAlpha">
                <li class="u-textColor_4"><span class="u-textColor_1-dark">Carolina had a cruise holiday last summer.</span></li>
                <li class="u-textColor_4 mt10"><span class="u-textColor_1-dark">Carolina had a <span class="drop"></span> ?</span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <li class="u-textColor_4"><span class="u-textColor_1-dark">Daniel prefers having tea than coffee.</span></li>
                <li class="u-textColor_4 mt10"><span class="u-textColor_1-dark"><span class="drop"></span> prefers having tea?</span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <li class="u-textColor_4"><span class="u-textColor_1-dark">Mrs. Ruiz owns a large bookstore in the city center. </span></li>
                <li class="u-textColor_4 mt10"><span class="u-textColor_1-dark">Mrs. Ruiz owns a bookstore <span class="drop"></span> ?</span></li>
              </ol>
            </div>
            <div class="col-flex-xs6 col-flex-md12">
              <ol class="u-listStyle-UAlpha">
                <li class="u-textColor_4"><span class="u-textColor_1-dark">I have to go check on Carlos.</span></li>
                <li class="u-textColor_4 mt10"><span class="u-textColor_1-dark">You have to go check on <span class="drop"></span> ?</span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <li class="u-textColor_4"><span class="u-textColor_1-dark">Matias wasn’t home last night.</span></li>
                <li class="u-textColor_4 mt10"><span class="u-textColor_1-dark"><span class="drop"></span> wasn’t <span class="drop"></span> ?</span></li>
              </ol>
              <ol class="u-listStyle-UAlpha mt40">
                <li class="u-textColor_4"><span class="u-textColor_1-dark">I did it using only my hands.</span></li>
                <li class="u-textColor_4 mt10"><span class="u-textColor_1-dark">You did it <span class="drop"></span> ?</span></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md9 col-center mt5-sm mt10-md">
          <h5><strong class="u-textColor_4">2. </strong>  Read again the six statements above and say the echo questions yourself. Record yourself saying the statements and the echo questions.</h5>
        </div>
        <div class="col-flex-xs12 col-flex-md4 col-flex-sm5 col-center mt5-sm mt10-md">
          <div class="mb20 row-flex mt20"><strong class="u-textColor_4-dark"> 1. </strong><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod2_act5a',1)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Listen and Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div></span></div>
          <div class="mb20 row-flex mt20"><strong class="u-textColor_4-dark"> 2. </strong><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio2" time-limit="120" audio-model="audio_2" on-playback-start="guardarRecord('unt1_mod2_act5b',2)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Listen and Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div></span></div>
          <div class="mb20 row-flex mt20"><strong class="u-textColor_4-dark"> 3. </strong><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio3" time-limit="120" audio-model="audio_3" on-playback-start="guardarRecord('unt1_mod2_act5c',3)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Listen and Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div></span></div>
        </div>
        <div class="col-flex-xs12 col-flex-md4 col-flex-sm5 col-center mt5-sm mt10-md">
          <div class="mb20 row-flex mt20"><strong class="u-textColor_4-dark"> 4. </strong><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio4" time-limit="120" audio-model="audio_4" on-playback-start="guardarRecord('unt1_mod2_act5d',4)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Listen and Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div></span></div>
          <div class="mb20 row-flex mt20"><strong class="u-textColor_4-dark"> 5. </strong><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio5" time-limit="120" audio-model="audio_5" on-playback-start="guardarRecord('unt1_mod2_act5e',5)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Listen and Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div></span></div>
          <div class="mb20 row-flex mt20"><strong class="u-textColor_4-dark"> 6. </strong><span class=" c-ngRecorder ml20" ng-audio-recorder="ng-audio-recorder" id="mainAudio6" time-limit="120" audio-model="audio_6" on-playback-start="guardarRecord('unt1_mod2_act5f',6)">
              <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
              <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                  <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                  <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Listen and Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                </div>
              </div></span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()" ng-show="s_actividad == 1"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar" ng-show="s_actividad == 1"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>