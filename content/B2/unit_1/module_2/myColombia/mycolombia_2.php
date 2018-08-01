
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong>  Listen carefully to the following text:</h5>
        <div class="row w90 m-a">
          <div class="xs6 col-center"><img class="u-responsive-img mt20" src="unit_1/module_2/assets/images/col_2a.png" alt=""/></div>
          <div class="col-flex-xs6 col-center">
            <audio class="row mt30" controls="controls">
              <source src="unit_1/module_2/assets/audios/col_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>