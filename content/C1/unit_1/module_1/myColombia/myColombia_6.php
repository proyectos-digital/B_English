
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="MostrarIframe()">
    <section class="template-content u-animationFadeDown">
      <article class="row-flex justify-center align-items-center">
        <div class="row col-flex-xs12 col-flex-md6 ">
          <div class="col xs12">
            <h5>Interview someone that belongs to the one following groups:</h5>
            <ul class="row">
              <li>» Self-employed.</li>
              <li>» Unemployed.</li>
              <li>» Contractor (prestación de servicios).</li>
            </ul>
            <p></p>
            <p>Find out how they got into their current employment situation.</p>
            <p>Formulate your questions in a way that forces the interviewee to speak.</p>
            <p>Summarize in English what the interviewee said in Spanish. Then record yourself in a video reporting what was said by the interviewee.</p>
          </div>
          <div class="col">
            <ul class="row">
              <li>» Record your video using your smartphone, tablet or computer.</li>
              <li>» Upload your video to youtube.</li>
              <li>» The video should be at least 2 minutes.</li>
            </ul>
          </div>
          <div class="col">
            <h5>Tips for uploading  the video.</h5>
            <ul>
              <li>• Upload your video to Youtube. If you don’t know how what to do, visit this tutorial <a href="https://support.google.com/youtube/answer/57407">https://support.google.com/youtube/answer/57407</a></li>
              <li>• When your video is ready in Youtube.</li>
              <li>• On a computer, go to the YouTube video you want to embed.</li>
              <li>• Under the video, click Share.</li>
              <li>• Click Embed.</li>
              <li>• Copy the HTML code &lt;iframe...</li>
            </ul>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 mt30-sm mb40 pr10 pl10">
          <div class="c-customVideoUpdate">
            <div class="c-customVideoUpdate--contentIframe" ng-bind-html="veriframe | unsafe"></div>
            <div class="c-customVideoUpdate--controls">
              <input class="c-customVideoUpdate--input" type="text" name="" placeholder="Copy the HTML code here." ng-model="iframevideo"/>
              <button class="c-customVideoUpdate--button" ng-click="UploadIframe()"></button>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>