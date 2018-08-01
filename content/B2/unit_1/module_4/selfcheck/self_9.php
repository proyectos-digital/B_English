
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Think about a resource or product your country is well known for.</h5>
      <div class="row-flex mt100-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md5 col-center mt30-md">
          <div class="c-cardGreen mb30">
            <div class="c-cardGreenContent ta-l">
              <p>Where is it sold? Where does it grow/is it produced? What’s it made of? How is it used? What’s it used for?</p>
              <p>Describe and talk about the product for 90 seconds.</p>
            </div>
          </div>
          <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod4_self9',1)">
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
        <div class="col-flex-xs12 col-flex-md4 col-center mt10-sm">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_4b.png" alt=""/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh"></button>
    <button class="c-btn-IconAction u-bgIconUpload"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>