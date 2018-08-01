
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4" ng-init="DragandDrop()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>Here are some common collocations used when talking about schools and education.</h5><span>Can you fill the blank with the correct answers from the list below.</span>
        <div class="row row-flex mt30 justify-center"><span class="dragCont mb10">
            <div class="drag col xs6 sm4 md2">singles sex</div></span><span class="dragCont mb10">
            <div class="drag col xs6 sm4 md2">girls school</div></span><span class="dragCont mb10">
            <div class="drag col xs6 sm4 md2">public school</div></span><span class="dragCont mb10">
            <div class="drag col xs6 sm4 md2">elementary schools</div></span><span class="dragCont mb10">
            <div class="drag col xs6 sm4 md2">private schools</div></span><span class="dragCont mb10">
            <div class="drag col xs6 sm4 md2">early years</div></span></div>
        <p class="mt40 ta-j">In Colombia, children start their <span class="drop"></span> in nurseries. The most common type of nurseries are community homes sponsored
          by the national institute of family welfare. At around age 5 children start <span class="drop"></span>. There are <span class="drop"></span> run by companies and <span class="drop"></span> run by the government. 
          High School is the highest level, some high-schools specialize
          in teaching some areas such as technical, industrial, comercial, pedagogical, agricultural or social promotion track.
          In some some high schools there is separation of the sexes so that schools are <span class="drop"></span>, with boys school and <span class="drop"></span>.
          The universities usually offer 5 year undergraduate degrees followed by masters degrees and PhDs.
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