
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Past perfect or past perfect continuous.</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt20">
              <p> <strong class="u-textColor_4-dark">Conversation 1:</strong></p>
              <p><strong>A: </strong> I was really angry at John yesterday.</p>
              <p><strong>B:</strong> Really? What happened?</p>
              <p><strong>A:</strong> By the time he finally arrived, I <strong>(1. wait) </strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>for over an hour. I almost left without him.</p>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">Conversation 2:</strong></p>
              <p><strong>A: </strong>Did you hear that Ben was fired last month?</p>
              <p><strong>B: </strong> No! Seriously? He <strong>(2. work)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>for that import company for more than ten years!</p>
              <p>  <strong>A:</strong> I know! And he <strong>(3. work)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>in almost every department.</p>
              <p><strong>B: </strong>Nobody knew the company like he did.</p>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center"> 
            <div class="row mt20">
              <p> <strong class="u-textColor_4-dark">Conversation 3:</strong></p>
              <p>  <strong>A: </strong>Hey, how was your vacation In Mexico?.</p>
              <p><strong>B: </strong>Oh, we had a great time! I <strong>(4. see)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>many pictures of the pyramids before I went to Mexico.
                Pictures of the monuments are very misleading.
              </p>
              <p><strong>A: </strong>Are they?</p>
              <p><strong>B: </strong>Yes! The pyramids are actually bigger than I expected!</p>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">Conversation 4:</strong></p>
              <p><strong>A: </strong>Do you know what happened to Monica?</p>
              <p><strong>B: </strong>No, why?</p>
              <p><strong>A: </strong> When she came into the office yesterday, her eyes were red and watery. I think she <strong>(5. cry)</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
