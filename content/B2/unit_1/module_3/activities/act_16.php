
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row">
        <h5 class="row ta-c"><strong class="u-textColor_4">1. </strong>The University’s basketball team has two spaces left. The coach is going to choose a male and a female player.<br/>There are four candidates. <span class="u-textColor_2">Listen to the candidates and complete the sentences. </span></h5>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
            <div class="row mt50"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_16_1.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <audio class="row mt20 mb20 centrado" controls="controls">
              <source src="unit_1/module_3/assets/audios/act_16.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
            <div class="row-flex justify-around mt30">
              <div class="dragCont">
                <div class="drag">playing</div>
              </div>
              <div class="dragCont">
                <div class="drag">to play</div>
              </div>
              <div class="dragCont">
                <div class="drag">to try</div>
              </div>
              <div class="dragCont">
                <div class="drag">trying</div>
              </div>
              <div class="dragCont">
                <div class="drag">to practice</div>
              </div>
              <div class="dragCont">
                <div class="drag">practicing</div>
              </div>
              <div class="dragCont">
                <div class="drag">to be</div>
              </div>
              <div class="dragCont">
                <div class="drag">be</div>
              </div>
            </div>
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">1.</strong>  Jessica can't help<span class="drop ml10 mr10"></span>all the time.</p>
              <p><strong class="u-textColor_4-dark">2.</strong>   Jack expects<span class="drop ml10 mr10"></span>chosen by the coach.</p>
              <p><strong class="u-textColor_4-dark">3.</strong> Cindy decided<span class="drop ml10 mr10"></span>out because she has friends on the team.</p>
              <p><strong class="u-textColor_4-dark">4.</strong> Cindy dislikes<span class="drop ml10"></span>.</p>
              <p><strong class="u-textColor_4-dark">5.</strong>  Eric won’t give up<span class="drop ml10 mr10"></span>to make the team.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validar"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>