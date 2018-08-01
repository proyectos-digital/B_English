
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <h5><strong class="u-textColor_4">1. </strong> Watch the video:</h5>
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md12 col-flex-lg5 col-center">                           
              <div class="row-flex justify-center mt20 mb20">
                <div class="col md11">
                  <div class="c-contVideo">
                    <video class="u-responsive-video" controls="controls">
                      <source src="unit_3/module_10/assets/videos/act_1.mp4" type="video/mp4"/>
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md12 col-flex-lg6 col-center">
              <div class="c-cardGreen ">
                <div class="c-cardGreenContent u-textColor_1 ta-c">
                  <ul>
                    <li><strong><span class="u-textColor_4-dark">•</span></strong> By 2020, Children <strong>will begin</strong> school at the age of 3.</li>
                    <li><strong><span class="u-textColor_4-dark">•</span></strong> High school students <strong>will be</strong> totally bilingual.</li>
                    <li><strong><span class="u-textColor_4-dark">•</span></strong> Public schools <strong>will offer</strong> quality education.</li>
                    <li><strong><span class="u-textColor_4-dark">•</span></strong> The Ministry of Education is <strong>going to build</strong> 200 schools.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <div class="row-flex align-items-center">
            <div class="col xs12 md6 col-center ta-c"><img class="u-responsive-img" src="unit_3/module_10/assets/images/act_1.png" alt="act_1"/></div>
            <div class="col xs12 md6 col-center">
              <h5>Choose the answer that suits the best to each sentence.</h5>
              <div class="col-center col xs12 md11 lh-20 ta-j mt20"><strong><span class="u-textColor_4-dark">(1)</span></strong><span> Mariana received her echography. She</span>
                <select class="c-select" name="act_12_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">will have</option>
                  <option value="2">is going to have</option>
                </select><span> a baby boy!</span>
              </div><br/>
              <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_4-dark">(2)</span></strong><span> Perhaps we </span>
                <select class="c-select" name="act_12_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">are going to</option>
                  <option value="2">will</option>
                </select><span> meet again one day. </span>
              </div><br/>
              <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_4-dark">(3)</span></strong><span> Be careful or you </span>
                <select class="c-select" name="act_12_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">are going to</option>
                  <option value="2">will</option>
                </select><span> fall. </span>
              </div><br/>
              <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_4-dark">(4)</span></strong><span>  Look. Andy </span>
                <select class="c-select" name="act_12_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">is going to</option>
                  <option value="2">will</option>
                </select><span> fall off his bike.</span>
              </div><br/>
              <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_4-dark">(5)</span></strong><span> I think you </span>
                <select class="c-select" name="act_12_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">are going to</option>
                  <option value="2">will</option>
                </select><span> love Medellin. </span>
              </div><br/>
              <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_4-dark">(6)</span></strong><span>  I’ve decided I  </span>
                <select class="c-select" name="act_12_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">am going to</option>
                  <option value="2">will</option>
                </select><span> stop smoking.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" ng-click="reloadSelectOption()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2" ng-click="selectOption()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>