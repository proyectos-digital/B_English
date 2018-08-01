
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40 ">
        <div class="row-flex w90 m-a">
          <div class="col-flex-sm12 col-flex-md6 col-center ta-c">
            <h5><strong class="u-textColor_4">1. </strong> Listen carefully to the following text:</h5><img class="u-responsive-img ancho340 mt20" src="unit_1/module_4/assets/images/col_2.png" alt=""/>
            <audio class="row mt30" controls="controls">
              <source src="unit_1/module_4/assets/audios/col_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
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