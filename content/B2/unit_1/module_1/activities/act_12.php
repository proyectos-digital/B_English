
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row mt40-xs mt20-md">
        <h5><strong class="u-textColor_4">1. </strong>  Complete it with the right word from the box.</h5>
        <h6>Drag and drop the right word into the correct phrase.</h6>
      </div>
      <div class="row-flex mt40">
        <div class="col-flex-xs12 col-flex-md7">
          <div class="row-flex justify-center">
            <audio class="row mt20 mb20 xs6" controls="controls">
              <source src="unit_1/module_1/assets/audios/act_12_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
          <div class="row-flex justify-around">
            <div class="col-flex-xs12 col-flex-sm9 col-flex-md12 col-center">
              <div class="row row-flex justify-around">
                <div class="dragCont">
                  <div class="drag">paid off</div>
                </div>
                <div class="dragCont">
                  <div class="drag">married</div>
                </div>
                <div class="dragCont">
                  <div class="drag">working</div>
                </div>
                <div class="dragCont">
                  <div class="drag">transferred</div>
                </div>
                <div class="dragCont">
                  <div class="drag">running</div>
                </div>
                <div class="dragCont">
                  <div class="drag">quit</div>
                </div>
                <div class="dragCont">
                  <div class="drag">found</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt20">
            <table class="c-table-default">
              <thead></thead>
              <tbody>
                <tr>
                  <td><strong>Woman</strong></td>
                  <td>
                    Do you think you’ll still be
                    <strong>(1) </strong>
                    <span class="drop"></span>
                    here ten years from now?
                  </td>
                </tr>
                <tr>
                  <td><strong>Man</strong></td>
                  <td>
                    I hope not! I really hope that by that time I will have
                    <strong>(2) </strong>
                    <span class="drop"></span>
                    a better job!
                    I think I’ll have (3)
                    <span class="drop"></span>
                    this job by then. Or maybe I´ll
                    be
                    <strong>(4)</strong>
                    <span class="drop"></span>
                    my own company by then. How about you?
                  </td>
                </tr>
                <tr>
                  <td><strong>Woman</strong></td>
                  <td>
                    Well, in ten years, I’ll have
                    <strong>(5)</strong>
                    <span class="drop"></span>
                    my student loans at ICETEX. I think
                    I’ll still be here, but with any luck, I’ll have
                    <strong>(6)</strong>
                    <span class="drop"></span>
                    to the Main office in
                    Ibagué.
                  </td>
                </tr>
                <tr>
                  <td><strong>Man</strong></td>
                  <td>
                    It’s scary to think of the future, isn’t it? Who knows! Maybe we could both be
                    <strong>(7)</strong>
                    <span class="drop"></span>
                    with lots of kids by then!
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 ">
          <div class="row-flex mt20-xs mt10-md">
            <div class="col xs6 md10 col-center showTo-md ta-c mb30"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_12_1.png" alt=""/></div>
            <div class="col xs12 sm7 md10 col-center">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent">Now it´s your turn to think what you will be doing 10 years from now. Record 4 things you think you will be doing in 10 years’ time.</div>
              </div>
            </div>
            <div class="col xs8 col-flex-md12 col-center">
              <div class="row c-ngRecorder" ng-audio-recorder="ng-audio-recorder" id="mainAudio" time-limit="120" audio-model="audio_1" on-playback-start="guardarRecord('unt1_mod1_act12',1)">
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
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>