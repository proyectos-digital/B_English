
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row-flex xs12 md7 justify-center col-center mt30">
          <div class="dragCont ml10 w10">
            <div class="drag">Ruled out</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Stand up</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Pay back</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Show off</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Put out</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Sit down</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Put off</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Ran away</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Showed up</div>
          </div>
          <div class="dragCont ml10 w10">
            <div class="drag">Picked up</div>
          </div>
        </div>
        <div class="row-flex mt30 align-items-center justify-between">
          <div class="col xs12 md5">
            <p class="ta-j"><strong class="u-textColor_4">•</strong> Maria borrowed some money from her sister, she has 4 weeks to <span class="drop w20"></span> the money.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> I have to go to the doctor today so I have to <span class="drop w20"></span> shopping at the mall until tomorrow.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> There is a small fire in the kitchen. Sarah <span class="drop w20"></span> the fire with the fire extinguisher.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> The book fell from the desk, so John <span class="drop w20"></span> the book from the floor and placed it on the chair.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> The company does not have enough engineers to build the bridge so we <span class="drop w20"></span> bidding for that project.</p>
          </div>
          <div class="col xs12 md6">
            <p class="ta-j"><strong class="u-textColor_4">•</strong> Kevin was only 16 when he <span class="drop w20"></span> from home, now the police is looking for him but nobody can find him.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> Karen has a very beautiful car. She likes to  <span class="drop w20"></span> her car to her friends.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> We waited on Karen at the circus for two hours. When she finally <span class="drop w20"></span> , she did not have the tickets.</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> My legs are tired from standing all day, I need a chair so I can <span class="drop w20"></span> .</p>
            <p class="ta-j"><strong class="u-textColor_4">•</strong> When the national anthem is playing, we should all <span class="drop w20"></span> and place our right hand across our chest.</p>
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
