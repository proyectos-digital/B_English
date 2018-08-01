
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col xs12 md6">
            <h5 class="col xs10 mb30">Listen to the conversation and complete it by choosing the right verbs.</h5>
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_14.png" alt="act_14"/>
              <div class="row">
                <audio controls="controls">
                  <source src="unit_2/module_7/assets/audios/act_14.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
            </div>
            <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_2">Beth:  </span></strong><span>I’m really interested in </span><strong><span class="u-textColor_4-dark">(1)</span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">finding</option>
                <option value="2">buying</option>
                <option value="3">selling</option>
              </select><span> the house we saw in your neighborhood what do you think?</span><br/><br/><strong><span class="u-textColor_5">David:  </span></strong><span>It’s great, I love it!</span><br/><br/><strong><span class="u-textColor_2">Beth:  </span></strong><span>I must confess to </span><strong><span class="u-textColor_4-dark">(2)</span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">being</option>
                <option value="2">having</option>
                <option value="3">seeing</option>
              </select><span> a little worried about moving here because of the prices, but I love it too.</span>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_5">David:  </span></strong><span>You know, I’m counting on </span><strong><span class="u-textColor_4-dark">(3)</span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">buying</option>
                <option value="2">moving</option>
                <option value="3">doing</option>
              </select><span> somewhere new too, I initially concentrated on </span><strong><span class="u-textColor_4-dark">(4)</span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">selling</option>
                <option value="2">renting</option>
                <option value="3">looking for</option>
              </select><span> a bigger apartment, but then I decided against it. I count on </span><strong><span class="u-textColor_4-dark">(5)</span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">finding</option>
                <option value="2">buying</option>
                <option value="3">selling</option>
              </select><span> a smaller apartment that I can decorate myself. </span><br/><br/><strong><span class="u-textColor_2">Beth:  </span></strong><span>That’s really exciting! But why do you insist on </span><strong><span class="u-textColor_4-dark">(6)</span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">getting</option>
                <option value="2">living</option>
                <option value="3">renting in</option>
              </select><span> small apartments? There’s so much you can do in larger spaces!</span><br/><br/><strong><span class="u-textColor_5">David:  </span></strong><span>It’s something to think about. But I think I have simply gotten used to </span><strong><span class="u-textColor_4-dark">(7) </span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">living</option>
                <option value="2">finding</option>
                <option value="3">being</option>
              </select><span> myself comfortable in smaller spaces. I don’t think I would be able to cope with all the  </span><strong><span class="u-textColor_4-dark">(8) </span></strong>
              <select class="c-select" name="act_14_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">cleaning up</option>
                <option value="2">washing up</option>
                <option value="3">going up</option>
              </select><span> in a larger place!</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>