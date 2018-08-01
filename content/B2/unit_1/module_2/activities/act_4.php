
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <h5>Look at the example:</h5>
          <div class="row mb30 mt30 ta-c showTo-md"><img class="u-responsive-img w80 m-a" src="unit_1/module_2/assets/images/act_4.png" alt=""/></div>
          <div class="padding10 c-green w60 ta-c m-a mt10"><strong>I’m waiting for Sam to come home.</strong></div>
          <div class="padding10 c-green w60 ta-c m-a mt10"><strong>You’re waiting for who to do what?</strong></div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt30-sm mt100-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Now read these short dialogues. </h5>
          </div>
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>I was a little sick last week.</div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>You were sick last week?</div>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>This is my first time in a concert.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>Your first time?</div>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> A. </strong>Look. This is my new car!</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> B. </strong>Wow, your new car!!!</div>
            </div>
          </div>
          <div class="row-flex mt40">
            <h5>Click and listen: </h5>
          </div>
          <div class="row mt20">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_2/assets/audios/act_4_1.mp3"><span>Example 1</span></button>
            <button class="c-btn-Icon u-bgIconListen ml10" ng-audio="unit_1/module_2/assets/audios/act_4_2.mp3"><span>Example 2</span></button>
          </div>
          <div class="row-flex mt40">
            <h5>Now try to repeat the questions orally, with the appropriate intonation.</h5>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice u-bgIconAlert is-active" ng-click="idNotice = 1"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>