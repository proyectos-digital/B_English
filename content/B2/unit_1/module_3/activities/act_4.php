
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row">
        <div class="col sm11 col md6">
          <div class="xs12 md11 col-center"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_4.png" alt="" srcset=""/>
            <div class="c-cardGreen mt40">
              <div class="c-cardGreenContent">
                <p class="mt20"><strong class="u-textColor_1">Would </strong> you <strong class="u-textColor_1">rather </strong> go to the movies or stay at home?</p>
                <blockquote>
                  <ul class="c-list ml20 mt10">
                    <li>I would<strong class="u-textColor_1"> rather</strong>  stay at home.</li>
                  </ul>
                </blockquote>
                <p class="mt20"><strong class="u-textColor_1">Would </strong> you <strong class="u-textColor_1">prefer </strong> to go to the movies or stay at home?</p>
                <blockquote>
                  <ul class="c-list ml20 mt10">
                    <li>I <strong class="u-textColor_1">would prefer to </strong>
                      stay at home.
                    </li>
                  </ul>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="col sm11 col md6">
          <div class="xs12 md11 col-center">
            <div class="row mt50-xs mt30-md">
              <h5>Drag and drop the best option for each sentence.</h5>
              <p class="mt20"><strong class="u-textColor_4-dark">1.</strong> I would prefer<strong> (live)</strong><span class="drop"></span>in a warm country.</p>
              <p><strong class="u-textColor_4-dark">2.</strong> She'd rather<strong> (go)</strong><span class="drop"></span>to a different restaurant.</p>
              <p><strong>Not,</strong> comes before the verb with both rather and prefer.</p>
              <div class="row-flex justify-around mt20">
                <div class="dragCont">
                  <div class="drag">live</div>
                </div>
                <div class="dragCont">
                  <div class="drag">to live</div>
                </div>
                <div class="dragCont">
                  <div class="drag">go</div>
                </div>
                <div class="dragCont">
                  <div class="drag">to go</div>
                </div>
              </div>
            </div>
            <div class="row mt50">
              <p><strong class="u-textColor_4-dark">3.</strong> I would rather<strong> (negative - go)</strong><span class="drop"></span>to work today.</p>
              <p><strong class="u-textColor_4-dark">4.</strong> I'd prefer<strong> (negative – play)</strong><span class="drop"></span>a game.</p>
              <p>Be ready to use these expressions in the next exercise.</p>
              <div class="row-flex justify-around mt20">
                <div class="dragCont">
                  <div class="drag">not go</div>
                </div>
                <div class="dragCont">
                  <div class="drag">not to go</div>
                </div>
                <div class="dragCont">
                  <div class="drag">not play</div>
                </div>
                <div class="dragCont">
                  <div class="drag">not to play</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconAlert openNotice is-active" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_3/activities/act_4_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>