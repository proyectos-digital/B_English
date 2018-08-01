
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a act_1" ng-init="unirColumnasFuncion()">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong> Watch the video:</h5>
        <div class="row-flex">
          <div class="col-flex-xs12 col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt20 mb20">
              <div class="col md11 col-center">
                <div class="c-contVideo">
                  <video class="u-responsive-video" controls="controls">
                    <source src="unit_2/module_6/assets/videos/act_1_1.mp4" type="video/mp4"/>
                  </video>
                </div>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row">
              <h6 class="mb20 mt20">Look at the following sentences. Pay attention at the words in bold:</h6>
            </div>
            <div class="row">
              <div class="col-flex-sm10 col-center">
                <p>• She <strong class="mr5">took off</strong>her shoes. </p>
                <p>• She <strong class="mr5">woke up</strong>five minutes later. </p>
                <p>• She  <strong class="mr5">got up</strong>and went to the kitchen.</p>
                <p>• She <strong class="mr5">looked out</strong>not to step on the dog.</p>
                <p>• She <strong class="mr5">went back</strong>to bed.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <h5 class="mb30"><strong class="u-textColor_4">2. </strong> Match the definitions with the examples.</h5>
      </div>
      <div class="row mt30-md mt20-xs">
        <div class="col xs12 sm10 md8 col-center" data-ejercicio="unir">
          <div class="ancho270 js-columnas " id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">
              <p class="ta-j">To get out of bed after sleeping.</p></span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">
              <p class="ta-j">To get into a bus, plane or train. / To continue doing something, especially with more effort or more quickly than before.</p></span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">
              <p class="ta-j">To have just enough of something such as money or knowledge so that you can do what you need to do.</p></span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">
              <p class="ta-j">When a vehicle or driver drives off, the vehicle starts moving and leaves. / To force someone to go away, especially when they are attacking or threatening you.</p></span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">
              <p class="ta-j">To return to a place.</p></span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="6">
              <p class="ta-j">To stop being unsuccessful and to start being successful, or to make something do this. / To complete a piece of work, process, or activity within a particular time.</p></span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="7">
              <p class="ta-j">When a machine or vehicle breaks down, it stops working. / To divide something such as a total amount into separate parts.</p></span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="8">
              <p class="ta-j">Used for warning someone to be careful, especially because they are likely to have an accident.</p></span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="9">
              <p class="ta-j">To remove something, especially a piece of clothing. / When an aircraft takes off, it leaves the ground and starts flying.</p></span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class="ancho270 js-columnas row-flex flex-column justify-center" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="3">
              <p class="ta-j">My arithmetic isn’t very good, but I <strong>get by </strong>.</p></span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="5">
              <p class="ta-j">We decided to <strong>come back </strong> to Scotland for another holiday.</p></span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="7">
              <p class="ta-j">The car <strong>broke down </strong> just outside Winchester.</p></span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="9">
              <p class="ta-j">I’d better <strong>take </strong> my shoes <strong>off </strong>.</p></span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="6">
              <p class="ta-j">The £400 million loan will help turn the Russian economy <strong>around </strong>.</p></span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="8">
              <p class="ta-j"><strong>Look out! </strong> There’s a car coming.</p></span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">
              <p class="ta-j">He never <strong>gets up </strong> before nine.</p></span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">
              <p class="ta-j">They stood and waved as we <strong>drove off </strong>.</p></span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">
              <p class="ta-j">Can we please <strong>get on </strong> , because there are a lot of things still to discuss.</p></span></div>
        </div>
      </div>
      <div class="row"></div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<div class="c-noticeAside is-visible" id="notice"> 
  <article class="c-noticeAside-body" ng-include="'unit_2/module_6/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>