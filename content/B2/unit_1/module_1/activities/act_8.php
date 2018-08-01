
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Are these sentences correct or incorrect?</h5>
      <div class="row-flex mt40-md">
        <div class="col-flex-xs12 col-flex-md3 showTo-md">
          <div class="col xs6 md12  mb30"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_8_1.png" alt=""/></div>
          <div class="col xs6 md12 "><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_8_2.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md9 mt50-xs">
          <div class="rowoffset-md2 offset-sm1">
            <div class="mb20 row-flex">
              <div class="col-flex">• Life will be changing a lot by 2040.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex">• By that time, doctors will probably have discovered cures for many diseases.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex">• Scientists will have invent devices to make our lives better.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex">• But there will be some things that won’t have changed.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex">• We will not have discover a way to communicate with animals.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex">• By then, there is a chance that we will have invented a new source of water.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex">• Do you think we will have created a better life?</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_13">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_14">INCORRECT</label></span></div>
            </div>
          </div>
          <div class="row">
            <div class="col xs12 md7 col-center">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent">Now it is your turn to think how life in the future will be. Think of 5 things that you think will happen or will be different in the future. Record your ideas.</div>
              </div>
            </div>
            <div class="col xs12 md7 col-center">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod1_act8',1)">
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
                <div class="c-ngRecorder-canvas" canvas-sizer="canvas-sizer">
                  <div class="c-ngRecorder-canvasRecorder" ng-show="recorder.status.isRecording">
                    <ng-audio-recorder-analyzer max-width="100%" max-height="70px" width="400" height="50" wave-color="white"></ng-audio-recorder-analyzer>
                  </div>
                  <div class="c-ngRecorder-canvasAudio" ng-show="!recorder.status.isRecording && recorder.audioModel">
                    <ng-audio-recorder-wave-view wave-color="silver" bar-color="red"></ng-audio-recorder-wave-view>
                  </div>
                </div>
                <div class="c-ngRecorder-alert" ng-if="!recorder.isAvailable">
                  <p>
                    Your browser does not support this feature natively, please use latest version of 
                    <a href="https://www.google.com/chrome/browser" target="_blank">Google Chrome</a>
                    or 
                    <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Mozilla Firefox</a>. 
                    If you're on Safari or Internet Explorer, you can install 
                    <a href="https://get.adobe.com/flashplayer/" target="_blank"></a> Adobe Flash to use this feature.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>