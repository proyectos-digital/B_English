
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropMultiple()">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md align-items-center">
        <div class="col xs12 md6">
          <p><span class="u-textColor_2"><strong>A:</strong></span> The party was terrible.</p>
          <p><span class="u-textColor_5"><strong>B:</strong></span> Was it?</p>
          <p><span class="u-textColor_2"><strong>A:</strong></span> Yes, I had a horrible time! There was no music!</p>
          <p><span class="u-textColor_5"><strong>B:</strong></span> It was a great performance.</p>
          <p><span class="u-textColor_2"><strong>A:</strong></span> Wasn’t it? Renee’s voice was superb.</p>
          <div class="col xs12 md10 col-center">
            <div class="c-cardBlue mt30 ">
              <div class="c-cardBlueContent pl50">
                <ul class="lh30">
                  <li>• Really?</li>
                  <li>• What?</li>
                  <li>• What a surprise!</li>
                  <li>• Well I never! / Blimey!</li>
                  <li>• That’s the last thing I expected.</li>
                  <li>• You’re kidding!</li>
                  <li>• I don’t believe it! / Are you serious?</li>
                  <li>• I’m speechless!</li>
                  <li>• I’d never have guessed.</li>
                  <li>• You don’t say!.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="col xs12 md10 col-center">
            <p>In English, there are three intonation patterns:</p><br/>
            <p class="flex align-items-center">Rise <img class="rotar270 " src="unit_3/module_12/assets/images/act_10.png" alt="act_5"/></p>
            <p class="flex align-items-center">Full fall <img class="rotar90" src="unit_3/module_12/assets/images/act_10.png" alt="act_5"/></p>
            <p class="flex align-items-center">Partial fall <img class="rotar45" src="unit_3/module_12/assets/images/act_10.png" alt="act_5"/></p>
          </div>
          <p class="mt30">We use the rising intonation pattern to tell the listener that we are surprised by what they just heard.<br/> Sometimes we repeat the surprising statement as a question with the rising intonation.</p><br/>
          <p>Listen to the intonation when expressing surprise.</p>
          <p>Classify them according to the intonation used in each case.</p>
          <div class="row mt30">
            <div class="col xs12 md7">
              <div class="col xs12 md6">
                <div class="col xs4 md12 mb15 ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_10_1.mp3"></button>
                </div>
                <div class="col xs8 md12 mb15">   
                  <div class="dragCont">
                    <div class="drag" rescon="1">Example 1</div>
                  </div>
                </div>
              </div>
              <div class="col xs12 md6">
                <div class="col xs4 md12 mb15 ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_10_2.mp3"></button>
                </div>
                <div class="col xs8 md12 mb15">   
                  <div class="dragCont">
                    <div class="drag" rescon="2">Example 2</div>
                  </div>
                </div>
              </div>
              <div class="col xs12 md6">
                <div class="col xs4 md12 mb15 ta-c">
                  <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_3/module_12/assets/audios/act_10_3.mp3"></button>
                </div>
                <div class="col xs8 md12 mb15">   
                  <div class="dragCont">
                    <div class="drag" rescon="3">Example 3</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col xs12 md5">
              <table class="c-table-estilo_uno col xs12">
                <thead>
                  <tr>
                    <th>Rising intonation</th>
                    <th>Full fall</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="drop h50 centrado"></span></td>
                    <td><span class="drop h50 centrado"></span></td>
                  </tr>
                  <tr>
                    <td><span class="drop h50 centrado"></span></td>
                    <td><span class="drop h50 centrado"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>