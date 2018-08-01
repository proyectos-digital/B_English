
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">
            <h5>Complete what the people in the pictures are saying by choosing one word from the box. </h5>
            <h6>Drag and drop the option into each sentence.</h6>
          </div>
          <div class="row mt50 mb50">                                    
            <div class="row-flex justify-around">
              <div class="dragCont ml10">
                <div class="drag padding5">despite</div>
              </div>
              <div class="dragCont ml10">
                <div class="drag padding5">although</div>
              </div>
              <div class="dragCont ml10">
                <div class="drag padding5">in spite</div>
              </div>
              <div class="dragCont ml10">
                <div class="drag padding5">even though</div>
              </div>
            </div>
          </div>
          <div class="row">                                    
            <div class="row-flex justify-around">
              <div class="col-flex flex-column col xs12 sm6 md3  ta-c"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_11_1.png" alt="act_11"/>
                <div class="mt20 u-fz09 mt20 mb20"><span>Well, we got here </span><strong><span class="u-textColor_4-dark">(1) </span></strong><span class="drop ancho130 h15"></span><span>of he weather!</span></div>
              </div>
              <div class="col-flex flex-column col xs12 sm6 md3  ta-c"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_11_2.png" alt="act_11"/>
                <div class="mt20 u-fz09 mt20 mb20"><strong><span class="u-textColor_4-dark">(2) </span></strong><span class="drop ancho130 h15"></span><span>life was hard then, we were very happy.</span></div>
              </div>
              <div class="col-flex flex-column col xs12 sm6 md3  ta-c"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_11_3.png" alt="act_11"/>
                <div class="mt20 u-fz09 mt20 mb20"><span>He still gets around very well, </span><strong><span class="u-textColor_4-dark">(3) </span></strong><span class="drop ancho130 h15"></span><span>his broken leg.</span></div>
              </div>
              <div class="col-flex flex-column col xs12 sm6 md3  ta-c"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_11_4.png" alt="act_11"/>
                <div class="mt20 u-fz09 mt20 mb20"><strong><span class="u-textColor_4-dark">(4) </span></strong><span class="drop ancho130 h15"></span><span>it was raining, he walked all the way to meet me!</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()">       </button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>