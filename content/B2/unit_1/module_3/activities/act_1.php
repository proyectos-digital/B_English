
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Watch the video. What do you think just happened?</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row-flex justify-center mt20 mb20">
              <div class="col md11">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls">
                    <source src="unit_1/module_3/assets/videos/act_1.mp4" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-flex-sm10 col-center">
                <h6>Now read the following sentences:</h6>
                <p class="mt20"><strong class="u-textColor_4-dark"> 1.</strong>The burglar <strong>can’t have entered</strong> the house through one of the windows. They are too small.</p>
                <p class="mt20"><strong class="u-textColor_4-dark"> 2.</strong> If the burglar was alone, he <strong>can’t have taken </strong> many things with him.</p>
              </div>
            </div>
          </div>
          <div class="col-flex-sm11 col-flex-md6 col-center">
            <div class="row mt100-md mt30-xs">
              <ul class="c-list" data-ejercicio="">
                <h6>Complete the following sentences using <strong>can’t have + past participle</strong>:</h6>
                <p class="mt30"><strong class="u-textColor_4-dark"> 1.</strong> The burglar<strong>(get)</strong><span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>in through the windows. They are too small.</p>
                <p><strong class="u-textColor_4-dark"> 2.</strong> If he was alone, he<strong>(taken)</strong><span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>
                  <too>too many things with him.</too>
                </p>
                <p><strong class="u-textColor_4-dark"> 3.</strong> He<strong>(make)</strong><span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>too much noise, because the dogs didn’t bark.</p>
                <p><strong class="u-textColor_4-dark"> 4.</strong> If he was quick, he<strong>(search)</strong><span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>all the house.</p>
                <p><strong class="u-textColor_4-dark"> 5.</strong> He<strong>(find)</strong><span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>the safe box. It is very well hidden.</p>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_3/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>