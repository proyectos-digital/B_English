
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
            <div class="drag w10">hang out</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10 padding0">went through</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">get out of</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">get off</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">get into</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">get on with</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">give up</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">grows up</div>
          </div>
          <div class="dragCont ml5">
            <div class="drag w10">hung up</div>
          </div>
        </div>
        <div class="row-flex mt30 align-items-center justify-between">
          <div class="col xs12 md5">
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  It's raining, <span class="drop w20"></span> the car, let's go!</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  Why are the children standing on the table, please <span class="drop w20"></span> the table now!</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  We have had several delays this week so we need to <span class="drop w20"></span> the project if we are going to finish next week.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  I hate going to work on Saturdays. I need to find a way to <span class="drop w20"></span> going to work on Saturdays.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong>  When things get hard, you should never <span class="drop w20"></span>. You must keep on trying.</p>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j"><strong class="u-textColor_4">•</strong> When we started the company, there were a lot of problems, we <span class="drop w20"></span> a lot of changes to make the company successful.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> The 6-year-old boy said when he <span class="drop w20"></span> he wants to be like Cristiano Ronald.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> I like to spend time with my co-workers on the weekend.We <span class="drop w20"></span> at the park and sometimes play football.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> I was talking to my boss on the phone, after I <span class="drop w20"></span> I realized I did not tell him about the meeting today. I have to call him back.</p>
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
