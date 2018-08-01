
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <h5>Replace the words in bold with the phrasal verbs in the box. There are two extra phrasal verbs.</h5>
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md4 col-center mt30-md mt30-sm showTo-md"><img class="u-responsive-img w80 centrado " src="unit_2/module_6/assets/images/act_15.png" alt=""/></div>
        <div class="col-flex-sm12 col-flex-md8 col-center mt30-md mt30-sm">
          <div class="row-flex mt20">
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Come in</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Cut down on</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Fill out</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Jot down</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Look into</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Push off</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Talk over</div>
            </div>
            <div class="dragCont f-l ml30 mt20">
              <div class="drag">Work out</div>
            </div>
          </div>
          <div class="row-flex mt20">
            <div class="col-flex-sm12 col-flex-md5 col-center mt30-md mt30-sm"><span class="drop ancho150"></span>
              <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 1. </strong>Excuse me! Can you <strong>complete </strong> this form?</p><span class="drop ancho150"></span>
              <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 2. </strong>It doesn’t matter if you <strong>arrive </strong> last when you race.</p><span class="drop ancho150"></span>
              <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 3. </strong>You really should <strong>reduce </strong> the amount of sugar you eat.</p>
            </div>
            <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt30-md mt30-sm"><span class="drop ancho150"></span>
              <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 4. </strong>I’ll just try to <strong>calculate </strong> how much this will cost.</p><span class="drop ancho150"></span>
              <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 5. </strong>The police are going to <strong>investigate </strong> what happened.</p><span class="drop ancho150"></span>
              <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 6. </strong>Do you think we should <strong>discuss </strong> this for a bit longer?</p>
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