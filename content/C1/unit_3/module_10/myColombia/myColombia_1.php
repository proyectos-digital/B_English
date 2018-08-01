
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
      <div class="col xs12 sm8 col-center">
        <div class="row mt20 sm11 md8 lg9 hd12 col-center">
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_3/module_10/assets/videos/col_1_1.mp4" type="video/mp4"/>Your browser does not support the video element.
            </video>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2 || s_actividad == 3">
      <h5>ART FORMS</h5>
      <h6>Research one artist from each of the following categories and complete the forms below.</h6>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex justify-between">
        <div class="row pr5 xs12 md6 mt30 col-center">
          <div class="c-ficha_form">
            <h6 class="c-ficha_form--title">Street artist</h6>
            <input class="c-ficha_form--input textg4" type="text" placeholder="Name:"/>
            <input class="c-ficha_form--input textg4" type="text" placeholder="Description of artwork:"/>
            <textarea class="c-ficha_form--textarea textg4" type="text" placeholder="Description of artwork:"></textarea>
            <textarea class="c-ficha_form--textarea textg4" type="text" placeholder="Where can you see this artist’s work:"></textarea>
            <input type="hidden" id="grupo4" ng-model="textousuarioc"/>
          </div>
        </div>
        <div class="row pr5 xs12 md6 mt30 col-center">
          <div class="c-ficha_form ">
            <h6 class="c-ficha_form--title">Sculpture</h6>
            <input class="c-ficha_form--input textg3" type="text" placeholder="Name:"/>
            <input class="c-ficha_form--input textg3" type="text" placeholder="Description of artwork:"/>
            <textarea class="c-ficha_form--textarea textg3" type="text" placeholder="Description of artwork:"></textarea>
            <textarea class="c-ficha_form--textarea textg3" type="text" placeholder="Where can you see this artist’s work:"></textarea>
            <input type="hidden" id="grupo3" ng-model="textousuariob"/>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 3">
      <div class="col xs12 sm8 col-center">
        <div class="row c-ficha_form col-flex xs12 md10">
          <h6 class="c-ficha_form--title">Photography</h6>
          <input class="c-ficha_form--input textg6" type="text" placeholder="Name:"/>
          <input class="c-ficha_form--input textg6" type="text" placeholder="Description of artwork:"/>
          <textarea class="c-ficha_form--textarea textg6" type="text" placeholder="Description of artwork:"></textarea>
          <textarea class="c-ficha_form--textarea textg6" type="text" placeholder="Where can you see this artist’s work:"></textarea>
          <input type="hidden" id="grupo6" ng-model="textousuarioe"/>
        </div>
      </div>
      <div class="row-flex justify-between">
        <div class="row pr5 xs12 md6 mt30 col-center">
          <div class="col c-ficha_form">
            <h6 class="c-ficha_form--title">Dancer</h6>
            <input class="c-ficha_form--input textg4" type="text" placeholder="Name:"/>
            <input class="c-ficha_form--input textg4" type="text" placeholder="Description of artwork:"/>
            <textarea class="c-ficha_form--textarea textg4" type="text" placeholder="Description of artwork:"></textarea>
            <textarea class="c-ficha_form--textarea textg4" type="text" placeholder="Where can you see this artist’s work:"></textarea>
            <input type="hidden" id="grupo4" ng-model="textousuarioc"/>
          </div>
        </div>
        <div class="row pr5 xs12 md6 mt30 col-center">
          <div class="col c-ficha_form">
            <h6 class="c-ficha_form--title">Musician</h6>
            <input class="c-ficha_form--input textg5" type="text" placeholder="Name:"/>
            <input class="c-ficha_form--input textg5" type="text" placeholder="Description of artwork:"/>
            <textarea class="c-ficha_form--textarea textg5" type="text" placeholder="Description of artwork:"></textarea>
            <textarea class="c-ficha_form--textarea textg5" type="text" placeholder="Where can you see this artist’s work:"></textarea>
            <input type="hidden" id="grupo5" ng-model="textousuariod"/>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="EnviarFormMod10_mycol1()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
