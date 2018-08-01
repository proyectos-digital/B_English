
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="row">
          <p>When arguing, or giving opinions related to a particular topic, there are certain expressions that can be used to stress or emphasize one’s points of view. For example:</p>
          <div class="col xs12 md10 col-center">  
            <ul class="col xs6"> 
              <li><strong class="u-textColor_4">•</strong> I (strongly) believe that…</li>
              <li><strong class="u-textColor_4">•</strong> In my opinion…</li>
              <li><strong class="u-textColor_4">•</strong> As far as I am concerned…</li>
              <li><strong class="u-textColor_4">•</strong> To my knowledge…</li>
            </ul>
            <ul class="col xs6"> 
              <li><strong class="u-textColor_4">•</strong> The way I see it…</li>
              <li><strong class="u-textColor_4">•</strong> I think (that)…</li>
              <li><strong class="u-textColor_4">•</strong> From my point of view… </li>
            </ul>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> <strong>Eg1: The way I see it, </strong> European countries offer a better education than the US.</p>
            <p><strong class="u-textColor_4">•</strong> <strong>Eg2: I strongly believe that</strong> education should be the right of every citizen.</p>
            <p><strong class="u-textColor_4">•</strong> <strong>Eg3: As far as I’m concerned </strong> second language acquisition is the best way to become more aware of other people and cultures.</p>
          </div>
          <div class="row mt30">  
            <p> <strong class="u-textColor_4">1</strong>. <strong>Using some of the above phrases, give your opinion or point of view on any of these topics. Remember to use comparisons where necessary. Record your answer and send it to your teacher. </strong>   </p>
            <div class="col xs12 md10 col-center">  <span class="col xs4"><strong class="u-textColor_4">•</strong> Beauty standards among various countries.</span><span class="col xs4"><strong class="u-textColor_4">•</strong> Health care in your country compared to another.</span><span class="col xs4"><strong class="u-textColor_4">•</strong> City life and rural Life.</span></div>
          </div>
          <div class="row mt30">
            <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio_a" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod3_act13',1)">
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
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>