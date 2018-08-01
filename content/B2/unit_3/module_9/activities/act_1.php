
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Watch the video:</h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md5 col-center"> 
            <div class="row-flex justify-center mt20 mb20">
              <div class="col md11">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls">
                    <source src="unit_3/module_9/assets/videos/act_1.mp4" type="video/mp4"/>Your browser does not support the video tag.
                  </video>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-flex-sm10 col-center">
                <h6>Read the sentences. Pay attention to the words in bold. </h6>
                <p class="mt20">Families <strong>that have more than two children </strong>will be a priority. Apartments <strong>that are located </strong>on the third and fourth floors will be assigned first. People <strong>who are older than 65 </strong>will receive apartments on the ground floor. The same principle applies to <strong>people who have </strong>physical limitations.</p>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row">
              <h6>The following exercise will help you identify the relative clauses. The first one is an example:</h6>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">1.</strong>  Look out! There’s the dog that bit my brother.<strong> / Which dog?</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." value="the one that is there."/></span></p>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">2.</strong> The movie that we saw last week was awful.<strong> / What movie?</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">3.</strong> Let's go to a country where we can ski.<strong> / Which country?</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            </div>
            <div class="row mt20">
              <p> <strong class="u-textColor_4-dark">4.</strong> The hotel in which we stayed in wasn't bad.<strong> / Which hotel?</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">5.</strong> That is the bag that I want!<strong>   / Which bag?</strong><br/><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">6.</strong> A seaman is someone who works on a ship<strong> / Which person?</strong><span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></p>
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
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>