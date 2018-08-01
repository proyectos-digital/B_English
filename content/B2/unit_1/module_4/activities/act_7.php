
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1; DragandDrop()">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5><strong class="u-textColor_4">1. </strong> Read the following examples. Pay attention to the verbs in bold:</h5>
      <div class="row mt50 flex align-items-center">
        <div class="col xs10 md6 col-center">
          <div class="c-cardBlue">
            <div class="c-cardBlueContent">
              <p class="mb20The">The company <strong>was shipping</strong> the apples by boat. <br/> The apples <strong>were being shipped</strong> by boat. </p>
              <p class="mb20The">A <i>farmer </i> <strong>picked</strong> the apples first, then he <strong>cleaned</strong> them, and finally, he <strong>packed</strong> and <strong>shipped</strong> them to the market.</p>
              <p class="mb20The">First the <i>apples </i> <strong>were picked</strong>, then they <strong>were cleaned</strong>, and finally, they <strong>were packed</strong> and <strong>shipped</strong> to the market.</p>
            </div>
          </div>
        </div>
        <div class="col xs12 md4"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_7_1.png" alt=""/></div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex mt50-xs mt50-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md8 offset-md2 col-center mt10-sm mt30-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">2. </strong> Complete the examples below with the verbs in the box. </h5>
            <h6 class="ml20">Drag and drop the verbs' box into the right phrase.</h6>
          </div>
        </div>
        <div class="row mt30">
          <div class="row ">
            <div class="row-flex justify-around">
              <div class="dragCont ml10">
                <div class="drag padding5">was given</div>
              </div>
              <div class="dragCont ml10">
                <div class="drag padding5">were being chased</div>
              </div>
              <div class="dragCont ml10">
                <div class="drag padding5">was considered</div>
              </div>
              <div class="dragCont ml10">
                <div class="drag padding5">was being repaired</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md8 offset-md2 col-center mt10-sm mt30-md"></div>
        <div class="row mt20 flex align-items-center">
          <div class="col xs12 md4 showTo-md"><img class="u-responsive-img" src="unit_1/module_4/assets/images/act_7a.png" alt=""/></div>
          <div class="col xs12 md8">
            <h5>The passive voice is used when:</h5>
            <div class="row">
              <p class="mt20 mb20">
                <h6 class="u-textColor_4">• We do not know who did the action:</h6>
              </p>
              <p class="u-textColor_4 mt40"><span class="u-textColor_1-dark">This book<span class="drop ancho220 h30"></span>to her for Christmas.</span></p>
              <p class="u-textColor_4"><span class="u-textColor_1-dark">Before discovering the cure, that illness <span class="drop ancho220 h30"></span>lethal.</span></p>
              <p class="mt40 mb20">
                <h6 class="u-textColor_4">• The receiver of the action is more important:</h6>
              </p>
              <p class="u-textColor_4 mt40"><span class="u-textColor_1-dark">The zebras<span class="drop ancho220 h30"></span>by a couple of lions.</span></p>
              <p class="u-textColor_4"><span class="u-textColor_1-dark">The car <span class="drop ancho220 h30"></span>by our old mechanic.</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_4/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>