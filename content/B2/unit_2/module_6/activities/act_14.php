
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Write sentences expressing certainty, probability and doubt. Use words from the box and the cues given.</h5>
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md6 col-center padding20">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent  ">
              <p>Must | May | Might | Could | Can’t</p>
              <p><strong>Example: There might be life on other planets.</strong></p>
            </div>
          </div><img class="u-responsive-img w80 centrado" src="unit_2/module_6/assets/images/act_14.png" alt=""/>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center padding20">
          <div class="mb20 row-flex">
            <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>green / skin / not / extraterrestrials / have  </div>
          </div><span class="c-textField w100">
            <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
          <div class="mb20 row-flex mt40">
            <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>discover / life / in / planets / one / day / other / be</div>
          </div><span class="c-textField w100">
            <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
          <div class="mb20 row-flex mt40">
            <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>in / there / planets / other / in / galaxies / be / water / other</div>
          </div><span class="c-textField w100">
            <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
          <div class="mb20 row-flex mt40">
            <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>with / life / be / there / oxygen / no</div>
          </div><span class="c-textField w100">
            <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
          <div class="mb20 row-flex mt40">
            <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>atmosphere / our / in / preserve / planet’s</div>
          </div><span class="c-textField w100">
            <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/></span>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p>What do you think? Choose one of the sentences you wrote and say why you think it could or could not be possible. Provide at least 2 arguments to support your idea. Speak for 60 seconds.    </p>
            </div>
          </div>
          <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt2_mod6_act_14',1)">
            <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
            <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
              <div class="c-ngRecorder-controls" ng-hide="recorder.status.isDenied === true">
                <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
              </div>
            </div>
            <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting"> 
              <p>Please wait while we process your recording</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>