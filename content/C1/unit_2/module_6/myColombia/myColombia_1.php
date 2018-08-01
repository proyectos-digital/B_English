
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5><strong class="u-textColor_4">1. </strong> Watch to the following weather forecasts and try to determine which city the forecast is most likely about.</h5>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_2/module_6/assets/videos/col_1_1.mp4" type="video/mp4"/>Your browser does not support the video element.
              </video>
            </div>
          </div>
          <h5 class="mt30">Choose the correct response:</h5>
          <div class="row mt30 row-flex">
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1">Bogota</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2">Medellin</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_3">Barranquilla</label>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5><strong class="u-textColor_4">2. </strong> Watch to the following weather forecasts and try to determine which city the forecast is most likely about.</h5>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_2/module_6/assets/videos/col_1_2.mp4" type="video/mp4"/>
              </video>
            </div>
          </div>
          <h5 class="mt30">Choose the correct response:</h5>
          <div class="row mt30 row-flex">
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4">Bogota</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5">Medellin</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_6">Cartagena</label>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5><strong class="u-textColor_4">3. </strong> Watch to the following weather forecasts and try to determine which city the forecast is most likely about.</h5>
          <div class="row mt20 sm11 md8 lg9 hd12 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_2/module_6/assets/videos/col_1_3.mp4" type="video/mp4"/>
              </video>
            </div>
          </div>
          <h5 class="mt30">Choose the correct response:</h5>
          <div class="row mt30 row-flex">
            <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7">Sierra Nevada de Santa Marta</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8">Medellin</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
            <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_9">Barranquilla</label>
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
