
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>Here are some common collocations used when talking about schools and education.</h5><span>Fill the blank with the correct answers from the list below.</span>
        <div class="row row-flex mt30"><span class="dragCont mt20">
            <div class="drag col xs6 sm4">close-Knit</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">child support</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">carefree</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">broken</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">bitter</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">dysfunctional</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">troubled childhood</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">battle in court</div></span><span class="dragCont mt20">
            <div class="drag col xs6 sm4">granted joint custody</div></span></div>
        <p class="mt40 ta-j">In Colombia families stick together, they are usually very <span class="drop"></span>. I had a wonderful childhood, i grew up in a loving family and
          I had a <span class="drop"></span> childhood. My neighbour David was not so lucky. His family was <span class="drop"></span>. He was always misbehaving,
          he had a <span class="drop"></span>. His parents had a very <span class="drop"></span> divorce so he grew up in a <span class="drop"></span>
          home. Both his parents wanted custody of him so they had a custody <span class="drop"></span> The family court judge <span class="drop"></span>
          to his parents, so he had spent time with both of them. His father still had to pay <span class="drop"></span> .
          
        </p>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>