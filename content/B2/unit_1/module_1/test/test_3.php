
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_3" ng-init="DragandDrop()">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="c-flickity h_auto">
          <h5>Drag and drop the correct preposition into each sentence.</h5>
        </div>
        <div class="row-flex mt20">
          <div class="dragCont">
            <div class="drag">after</div>
          </div>
          <div class="dragCont">
            <div class="drag">around</div>
          </div>
          <div class="dragCont">
            <div class="drag">in</div>
          </div>
          <div class="dragCont">
            <div class="drag">for</div>
          </div>
          <div class="dragCont">
            <div class="drag">about</div>
          </div>
          <div class="dragCont">
            <div class="drag">to</div>
          </div>
        </div>
        <div class="row mt30">
          <div class="row-flex align-items-center">
            <div class="col xs12 sm10 col-center">
              <p><strong><span class="u-textColor_4-dark">A: </span></strong> Hi Carlos, what are you still doing here?</p>
              <p><strong><span class="u-textColor_5-dark">B: </span></strong> I´m waiting <strong>(1)</strong> <span class="drop h25"></span> Sara. She is supposed to look <strong>(2)</strong> <span class="drop h25"></span> her little sister today.</p>
              <p><strong><span class="u-textColor_4-dark">A: </span></strong> And do you know where she is?</p>
              <p><strong><span class="u-textColor_5-dark">B: </span></strong> No, I have no idea. I´ve looked all  <strong>(3)</strong> <span class="drop h25"></span> the school for her, but I haven´t been able to find her.</p>
              <p><strong><span class="u-textColor_4-dark">A: </span></strong> Just give her some more time. I heard she had to talk with the English teacher  <strong>(4)</strong> <span class="drop h25"></span> her result on the last test.</p>
              <p><strong><span class="u-textColor_5-dark">B: </span></strong> Really? I don´t believe <strong>(5)</strong> <span class="drop h25"></span> talking to teachers about grades on tests. They usually don´t change them.</p>
              <p><strong><span class="u-textColor_4-dark">A: </span></strong> Well, you never know. Maybe Sara manages <strong>(6)</strong> <span class="drop h25"></span> get her grade changed!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>