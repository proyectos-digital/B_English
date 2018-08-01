
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row-flex justify-center col-center mt30"> 
          <div class="dragCont ml5">
            <div class="drag w10 h35">kick off</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">look down on</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">keep on</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">let me down</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">moved in</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">keep up with</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">moved out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">left out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">look after</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 h35">worn out</div>
          </div>
        </div>
        <div class="row-flex mt30 align-items-center justify-between">
          <div class="col xs12 md5">
            <p class="ta-j"><strong class="u-textColor_4">•</strong> When things get difficult you need to <span class="drop w20"></span> trying no matter what.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> Johnny is riding his bike too fast, Karen cannot <span class="drop w30"></span> him. He needs to slow down.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> What time will the game start? Well <span class="drop w20"></span> is at 5pm but we will arrive earlier.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> While giving the report, Mary <span class="drop w20"></span> all the mistakes the team made. Next time she will have to include them.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> I was so disappointed by my football club losing again. They always <span class="drop w20"></span></p>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j"><strong class="u-textColor_4">•</strong> Francine is too young to <span class="drop w20"></span>  her baby sister, her parents have to hire a babysitter.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> People <span class="drop w30"></span> on us because we come from a poor neighborhood but we are honest and hard working people.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> This is my new office. We  <span class="drop w20"></span> last week.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> Sandra didn´t like the new office space so she <span class="drop w20"></span> last week. She loves her new office.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> I loved my shoes so much that I wore them every day. Now they are all <span class="drop w20"></span> with holes in the bottom.</p>
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
