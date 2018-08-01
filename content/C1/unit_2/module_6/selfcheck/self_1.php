
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Complete with the most suitable phrasal verb. Drag and drop.</h5>
        <div class="row-flex justify-between col-center mt30">
          <div class="dragCont">
            <div class="drag w10">turn down</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">tell him off</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">watch out</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">think over</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">used up</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">take on</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">works out</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">try on</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">take out</div>
          </div>
          <div class="dragCont">
            <div class="drag w10">wipe off</div>
          </div>
        </div>
        <div class="row-flex mt30 align-items-center justify-between">
          <div class="col xs12 md5">
            <p><strong class="u-textColor_4">•</strong>  Janet will <span class="drop w20"></span> the challenge of explaining to non-science people, the science behind global warming.</p>
            <p><strong class="u-textColor_4">•</strong>  We are going to <span class="drop w20"></span> all the old computer disk and put in a new one.</p>
            <p><strong class="u-textColor_4">•</strong>  I was so mad at my boss yesterday! I had to  <span class="drop w20"></span> about is restrictive management style.</p>
            <p><strong class="u-textColor_4">•</strong>  I am doing a presentation on the weather pattern in Bogota. I don’t like the presentation so I will have to <span class="drop w20"></span> my design.</p>
            <p><strong class="u-textColor_4">•</strong>  Fiona can never remember what size jeans she wears, so she always needs to  <span class="drop w20"></span> several pairs. </p>
          </div>
          <div class="col xs12 md6 mt30-sm mt0-md">
            <p><strong class="u-textColor_4">•</strong> I always wanted a chance to work at the meteorological center at the university, but after getting a job at the weather station, I had to <span class="drop w20"></span> the university’s offer.</p>
            <p><strong class="u-textColor_4">•</strong> Sarah <span class="drop w20"></span> all the sunscreen she had, now she is going to get sunburnt.</p>
            <p><strong class="u-textColor_4">•</strong> In Bogota you always need to <span class="drop w20"></span> for rain clouds.</p>
            <p><strong class="u-textColor_4">•</strong> It is difficult to predict the weather in London; I don’t know how the weatherman  <span class="drop w20"></span> the forecast.</p>
            <p><strong class="u-textColor_4">•</strong> After a long drive through the forest, mom needs to <span class="drop w20"></span> the dead bugs from the windshield.</p>
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
