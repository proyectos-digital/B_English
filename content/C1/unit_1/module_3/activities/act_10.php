
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <h5>Complete with the correct phrasal verb.</h5>
          <div class="row mt30">
            <p><strong class="u-textColor_4">•</strong> I’m afraid I can’t meet you. Something has 
              <input class="c-input js-escribir" type="text"/> .
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> I can’t meet you this week. I’m  
              <input class="c-input js-escribir" type="text"/> all week.
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> Let’s  
              <input class="c-input js-escribir" type="text"/> at the Juan Valdez at 8 pm and walk home together.
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> I can’t meet you on Wednesday. Can we 
              <input class="c-input js-escribir" type="text"/> the meeting to Monday?
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> I can’t meet you on Friday. Can we 
              <input class="c-input js-escribir" type="text"/> the meeting to next Tuesday?
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> I’m sorry, but I have to  
              <input class="c-input js-escribir" type="text"/> tomorrow’s meeting.
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> I’ll 
              <input class="c-input js-escribir" type="text"/> at 2 pm and take you straight to the conference.
            </p>
            <p class="mt20"><strong class="u-textColor_4">•</strong> 
              <input class="c-input js-escribir" type="text"/> we still 
              <input class="c-input js-escribir" type="text"/> for Saturday night? I hope your plans haven’t changed.
            </p>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row" ng-init="unirColumnasEscrFuncion()">
            <h6> Match the meaning with the phrasal verb.</h6>
            <div class="row mt30 justify-center" data-ejercicio="unir">
              <div class="ancho250 js-columnas" id="sourceElements">
                <div class="treeItem" id="Item0_0" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="1">Come up</div>
                <div class="treeItem" id="Item0_1" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="2">Tied up</div>
                <div class="treeItem" id="Item0_2" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="3">Meet up</div>
                <div class="treeItem" id="Item0_3" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="4">Bring forward</div>
                <div class="treeItem" id="Item0_4" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="5">Put off</div>
                <div class="treeItem" id="Item0_5" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="6">Call off</div>
                <div class="treeItem" id="Item0_6" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="7">Pick somebody up</div>
                <div class="treeItem" id="Item0_7" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="8">On</div>
              </div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho300 js-columnas" id="targetElements">
                <div class="treeItem" id="Item1_0" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="2">Busy</div>
                <div class="treeItem" id="Item1_1" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="3">Meet someone in order to do something together</div>
                <div class="treeItem" id="Item1_2" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="1">Happen unexpectedly</div>
                <div class="treeItem" id="Item1_3" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="5">Change to a later time / day</div>
                <div class="treeItem" id="Item1_4" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="7">Go and get somebody, e.g. with your car</div>
                <div class="treeItem" id="Item1_5" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="4">Change to an earlier time / day</div>
                <div class="treeItem" id="Item1_6" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="6">Cancel</div>
                <div class="treeItem" id="Item1_7" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="8">Meeting as planned</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>
<style>
  .treeItem[jsblock="jsblock"]{
      cursor: no-drop;
      pointer-events :none;
  }
</style>