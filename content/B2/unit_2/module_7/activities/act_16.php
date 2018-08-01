
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row align-items-center">
          <div class="row">
            <h5><strong><span class="u-textColor_4-dark">1 </span></strong>. Some people are very cautious and plan everything to avoid difficulties.  <br/> Read these two sentences and check the words in bold:</h5>
          </div>
          <div class="row-flex align-items-center">
            <div class="col xs12 md8">
              <div class="col xs10 col-center">
                <div class="c-cardGreen ">
                  <div class="c-cardGreenContent ta-c lh-20"> 
                    <p class="mt10">I always keep my spare tire in perfect conditions;</p>
                    <p class="mt10">just <strong>in case</strong>  I get a flat tire while</p>
                    <p class="mt10">I´m on the road. There is a fire extinguisher on the first floor, <strong>in case</strong></p>
                    <p class="mt10">there is a fire. <strong>In case</strong>  of an earthquake, use the stairs, not the elevator.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col xs12 md4 ta-c showTo-md"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_16.png" alt="act_16"/></div>
          </div>
          <div class="row">
            <h5><strong><span class="u-textColor_4-dark">2 </span></strong>. Listen to different ways of using “in case”.</h5>
          </div>
          <div class="row mt30 mb30">
            <div class="col xs6 md3 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_16_1.mp3"></button><br/>
              <h6>Example 1</h6>
            </div>
            <div class="col xs6 md3 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_16_2.mp3"></button><br/>
              <h6>Example 2</h6>
            </div>
            <div class="col xs6 md3 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_16_3.mp3"></button><br/>
              <h6>Example 3</h6>
            </div>
            <div class="col xs6 md3 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_16_4.mp3"></button><br/>
              <h6>Example 4</h6>
            </div>
          </div>
          <div class="row">
            <h5><strong><span class="u-textColor_4-dark">3 </span></strong>. Now try repeating the sentences using the appropriate intonation.</h5>
            <div class="row-flex mt30 justify-center">
              <div class="row c-ngRecorder xs6 md3 mt10" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_sel_10',1)">       
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls row-flex justify-center" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting"> 
                  <p>Please wait while we process your recording</p>
                </div>
                <h6 class="ta-c">Example 1 </h6>
              </div>
              <div class="row c-ngRecorder xs6 md3 mt10" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_sel_10',1)">
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls row-flex justify-center" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting"> 
                  <p>Please wait while we process your recording</p>
                </div>
                <h6 class="ta-c">Example 2 </h6>
              </div>
              <div class="row c-ngRecorder xs6 md3 mt10" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_sel_10',1)">
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls row-flex justify-center" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting"> 
                  <p>Please wait while we process your recording</p>
                </div>
                <h6 class="ta-c">Example 3</h6>
              </div>
              <div class="row c-ngRecorder xs6 md3 mt10" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt3_mod10_sel_10',1)">
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isDenied === true">Permission to use your microphone was declined, please refresh this page to grant permission.</div>
                <div class="c-ngRecorder-panel" ng-if="recorder.isAvailable">
                  <div class="c-ngRecorder-controls row-flex justify-center" ng-hide="recorder.status.isDenied === true">
                    <button class="c-btn-Icon u-bgIconRecord c-ngRecorder-controls--btnRecord" ng-click="recorder.status.isRecording ? recorder.stopRecord() : recorder.startRecord()" type="button" ng-class="{'btn-primary': !recorder.status.isRecording, 'is-active': recorder.status.isRecording}"><span>{{recorder.status.isRecording ? 'Stop' : 'Start '}} </span><span class="ml10" ng-show="recorder.status.isRecording === false">Recording</span><span class="c-ngRecorder-timer ml10" ng-if="recorder.status.isRecording">{{recorder.elapsedTime <= 60 ? (' 0'+recorder.elapsedTime) : recorder.elapsedTime}} <sub>seg.</sub></span></button>
                    <button class="c-btn-Icon c-ngRecorder-controls--btnListen" type="button" ng-class="{'u-bgIconPlay': (recorder.status.isPaused || recorder.status.isStopped), 'u-bgIconPause': recorder.status.isPlaying}" ng-click="recorder.status.isPlaying ? recorder.playbackPause() : recorder.playbackResume()" ng-disabled="recorder.status.isRecording || !recorder.audioModel"><span ng-if="recorder.status.isPaused || recorder.status.isStopped"><span>Send</span></span><span ng-if="recorder.status.isPlaying"><span>pause</span></span></button>
                  </div>
                </div>
                <div class="c-ngRecorder-alert" ng-if="recorder.status.isConverting"> 
                  <p>Please wait while we process your recording</p>
                </div>
                <h6 class="ta-c">Example 4</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_16_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>