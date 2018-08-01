
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-init="ContadorPalabras(120)">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="row-flex col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="col-flex-xs6 mb30 ta-c showTo-md">
            <figure class="c-figure-Rombo" figure-size="15">
              <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_1/module_2/assets/images/act_3_1.png" alt=""/></div>
            </figure>
          </div>
          <div class="col-flex-xs6 mb30 ta-c showTo-md">
            <figure class="c-figure-Rombo" figure-size="15">
              <div class="c-figure-RomboRotate"><img class="c-figure-RomboImage" src="unit_1/module_2/assets/images/act_3_2.png" alt=""/></div>
            </figure>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Now write a paragraph with your predictions of what human life will be like in the next four billion years, considering what you have read. <br/><br/>Write 120 words.</h5>
            <div class="c-wrapTextarea ">
              <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction openNotice u-bgIconInfoActivity is-active" ng-click="idNotice = 2"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_3_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>