
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex">
        <h5>Listen to the news report again and write a summary of what you understand. Be sure to include the five most important points.</h5>
        <div class="col col-center md8 xs12 mt20">
          <audio class="row m-a" controls="controls">
            <source src="unit_1/module_1/assets/audios/act_8_1.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
      </div>
      <div class="row row-flex mt30">
        <div class="act_8--newsReport"><img src="unit_1/module_1/assets/images/act_8_1.svg"/>
          <div class="c-wrapTextarea" wrapTextarea="default">
            <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>