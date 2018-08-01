
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md9 col-center"> 
            <h5><strong class="u-textColor_4">1. </strong> Watch the video:</h5>
            <div class="row-flex justify-center mb20">
              <div class="col md11 col-center">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls">
                    <source src="unit_1/module_1/assets/videos/act_1.mp4" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-flex-sm10 col-center">
                <h6>Now, listen again and read the following examples, paying attention to the words in bold.</h6>
                <p>• By this time tomorrow, <strong>we will be flying </strong> over Barranquilla, just before landing.</p>
                <p>• What do you think you <strong>will be doing</strong>  at around 5:00 PM tomorrow?</p>
                <p>• At 5:00 PM tomorrow, we will be checking in at the hotel.</p>
              </div>
            </div>
          </div>
          <div class="col-flex-sm11 col-flex-md10 col-center">
            <div class="row mt20-md mt30-xs offset-md1">
              <ul class="c-list " data-ejercicio=""> 
                <p><strong>2</strong> Complete the sentences using the future continuous form of the verbs in parenthesis.</p>
                <li><span>
                    This time tomorrow, Clara 
                    <span class="c-textField">
                      <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span> 
                    <strong>(travel)</strong> 
                    to Barranquilla with her husband.</span></li>
                <li><span>
                    At the Frogs Disco, there is a famous chef who 
                    <span class="c-textField">
                      <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span> 
                    <strong>(cooking)</strong> 
                    local food.</span></li>
                <li><span><span class="c-textField">
                      <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>
                    anyone.
                    <span class="c-textField">
                      <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span>
                    <strong>(wait) </strong>
                    for you at the airport?</span></li>
                <li><span>No, because as soon as we arrive we </span><span class="c-textField">
                    <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span><strong>(rent)</strong><span> a car!</span></li>
                <li><span>
                    We 
                    <span class="c-textField">
                      <input class="c-input js-escribir" type="text" placeholder="Write here..."/></span> 
                    <strong>(celebrate)</strong> 
                    our anniversary with my wife this year.
                    
                    
                    </span></li>
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
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>