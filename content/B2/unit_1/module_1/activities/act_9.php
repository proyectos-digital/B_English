
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt30-xs">
        <h5><strong class="u-textColor_4">1. </strong>  Imagine it is the year 2050. Your city had to be completely evacuated because of a very destructive virus. Listen to the interview. Make sentences in the future perfect using the cues.</h5>
      </div>
      <div class="row-flex mt30">
        <div class="col-flex-xs12 col-flex-md5 col-center mb30">
          <div class="row w90 col-center showTo-md">
            <div class="row ta-c showTo-sm"><img class="u-responsive-img" src="unit_1/module_1/assets/images/act_9_1.png" alt=""/></div>
          </div>
          <div class="row w90 col-center mt40-md">
            <audio class="row " controls="controls">
              <source src="unit_1/module_1/assets/audios/act_9.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
            </audio>
          </div>
        </div>
        <div class="col-flex-xs11 col-flex-md7 col-center">
          <div class="row-flex mb30">
            <div class="row " data-ejercicio="">
              <p>become / extremely dirty. / the streets of the city / By the year 2050,</p>
              <div><span class="c-textField row">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
            </div>
          </div>
          <div class="row-flex mb30">
            <div class="row " data-ejercicio="">
              <p>The city / of gas / run out.</p>
              <div><span class="c-textField row">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
            </div>
          </div>
          <div class="row-flex mb30">
            <div class="row " data-ejercicio="">
              <p>their cars / abandon / everywhere. / People</p>
              <div><span class="c-textField row">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
            </div>
          </div>
          <div class="row-flex mb30">
            <div class="row " data-ejercicio="">
              <p>Power / go off.</p>
              <div><span class="c-textField row">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
            </div>
          </div>
          <div class="row-flex mb30">
            <div class="row " data-ejercicio="">
              <p>the angry population. / Buildings / by / destroy</p>
              <div><span class="c-textField row">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
            </div>
          </div>
          <div class="row-flex">
            <div class="row " data-ejercicio="">
              <p>for cancer / discover. / be / A cure</p>
              <div><span class="c-textField row">
                  <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>