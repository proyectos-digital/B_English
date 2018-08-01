
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md9 col-center">
          <div class="row-flex">
            <h5 class="row mb40">Drag and Drop the boxes into the corresponding sentences.</h5>
            <div class="col-flex-sm12 col-flex-md2 col-center mt30-sm mt10-md mt10-xs">
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">keep a diary</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">come first</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">keep a secret</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">come on time</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">keep in touch</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">come prepared</div>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md8 col-center mt30-sm mt10-md mt10-xs">
              <p class="mt30"> <strong>1. </strong>Make sure you <span class="drop ancho150"></span>We don´t want to begin late.</p>
              <p class="mt30"> <strong>2. </strong>Can you <span class="drop ancho150"></span>? </p>
              <p class="mt30"> <strong>3. </strong>If he continues running that fast, he will definitely<span class="drop ancho150"></span>.</p>
              <p class="mt30"> <strong>4. </strong>Young girls like to. <span class="drop ancho150"></span>They write about their feelings and thoughts. </p>
              <p class="mt30"> <strong>5. </strong>The manager will ask a lot of questions, so to<span class="drop ancho150"></span>answer them.</p>
              <p class="mt30"> <strong>6. </strong>Don´t get lost! Make sure you<span class="drop ancho150"></span>!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>