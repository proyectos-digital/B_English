
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <h5>Read and listen. Then choose the right option to complete the paragraph with the appropriate words.</h5>
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md4 col-center"><img class="u-responsive-img showTo-md" src="unit_2/module_6/assets/images/act_11.png" alt=""/>
          <table class="c-table-estilo_dos mt60-md mt20-sm"></table>
        </div>
        <div class="col-flex-sm12 col-flex-md7 offset-md1 col-center">
          <div class="row-flex">
            <div class="col-flex-sm12 col-flex-md3 col-center mt30-sm mt10-md mt10-xs">
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">discovering</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">killing</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">surrounded</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">working</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">destroyed</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">murdered</div>
              </div>
              <div class="dragCont f-l ml30 mt20">
                <div class="drag">united</div>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md8 offset-md1 col-center mt30-sm mt10-md mt10-xs">
              <div class="row">
                <audio class="row" controls="controls">
                  <source src="unit_2/module_6/assets/audios/act_11.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
              <div class="row">
                <div class="c-green-text line-h1">
                  <p>Heroes is a popular TV series about a group of people <strong>(1) <span class="drop ancho150"></span></strong>together to save the world from destruction. At first, we see several characters <strong>(2) <span class="drop ancho150"></span></strong>that they have superhuman powers. One of them can paint the future. Later, he is found <strong>(3)<span class="drop ancho150"></span></strong>in his apartment,<strong>(4) <span class="drop ancho150"></span></strong>by paintings which show New York being <strong>(5) <span class="drop ancho150"></span></strong>in a massive explosion. </p>
                  <p>Gradually, <strong>(6)<span class="drop ancho150"></span></strong>by their powers, the characters meet each other and begin to make a plan to stop the explosion. But there is another problem: they must stop an evil character, that is <strong>(7)</strong><span class="drop ancho150"></span>all the heroes and stealing their powers. </p>
                </div>
              </div>
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