
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDropClonable()">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
          <div class="row"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_5.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row">
            <h6>Read the following passage. Drag and drop the word that best completes the sentences. NOTICE. You can repeat some of these:</h6>
            <div class="row-flex justify-around mt30">
              <div class="dragCont">
                <div class="drag">take</div>
              </div>
              <div class="dragCont">
                <div class="drag">had</div>
              </div>
              <div class="dragCont">
                <div class="drag">have</div>
              </div>
              <div class="dragCont">
                <div class="drag">taking</div>
              </div>
            </div>
            <div class="row mt30">
              <p class="u-txtSpace">Sometimes it's a good idea to<span class="drop"></span>your time when making a decision. For example, when I decided to get married, I have<span class="drop"></span>a relationship with my boyfriend for four years. This is one of the secrets for our stability. Now, my husband and I are planning to <span class="drop"></span>a baby. When we<span class="drop"></span>a look at our future, we imagine the two of us <span class="drop"></span>pictures of the baby, <span class="drop"></span>a nap and hugging him or her. We don't plan to<span class="drop"></span>arguments about the way to raise the kid, and mainly, we are planning to<span class="drop"></span>a good time with both of them. The secret is that the baby will not<span class="drop"></span>the place of my husband. He will be just our beloved baby!!!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDropClonable()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
