
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_8" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content" ng-show="s_actividad == 1" ng-init="unirColumnasDragFuncion()">
      <div class="row">
        <div class="col xs12 md10 col-center">
          <h6>Listen to the following sentences. Speakers talk about different types of meetings and engagements.</h6>
          <div class="row mt30">
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_1.mp3"></button>
            </div>
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_2.mp3"></button>
            </div>
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_3.mp3"></button>
            </div>
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_4.mp3"></button>
            </div>
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_5.mp3"></button>
            </div>
            <div class="col xs2 ta-c">
              <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_6.mp3"></button>
            </div>
          </div>
        </div>
        <div class="row-flex align-items-center mt30">
          <div class="col xs12 md9">
            <div class="row">
              <h6>Match the meaning with the word.</h6>
            </div>
            <div class="row mt30" data-ejercicio="unir">
              <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="1">A get-together</span><span class="treeItem" id="Item0_1" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="2">A dinner engagement</span><span class="treeItem" id="Item0_2" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="3">An interview</span><span class="treeItem" id="Item0_3" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="4">An appointment</span><span class="treeItem" id="Item0_4" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="5">A check-up</span><span class="treeItem" id="Item0_5" js-bien="jsbien" jsvalida="jsvalida" onclick="setSource(this)" seleccion="seleccion" valor="6">A date</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho350 js-columnas" id="targetElements"><span class="treeItem" id="Item1_0" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="4">A formal arrangement to meet or visit someone at a fixed time and place.</span><span class="treeItem" id="Item1_1" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="1">An informal meeting or social gathering</span><span class="treeItem" id="Item1_2" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="5">A medical examination to test the general state of your health.</span><span class="treeItem" id="Item1_3" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="6">A planned romantic meeting between two people.</span><span class="treeItem" id="Item1_4" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="2">An arrangement to meet somebody for an evening meal (very formal).</span><span class="treeItem" id="Item1_5" jsblock="jsblock" jsvalidb="jsvalidb" onclick="setTarget(this)" seleccion="seleccion" valor="3">A meeting in which someone asks you questions to see if you are suitable for a job or course.</span></div>
            </div>
          </div>
          <div class="col xs12 md3 ta-c showTo-md"><img class="u-responsive-img mt30 m-a" src="unit_1/module_3/assets/images/act_8_1.png" alt=""/></div>
        </div>
      </div>
    </section>
    <section class="template-content" ng-show="s_actividad == 2">
      <div class="row-flex justify-center">
        <div class="col xs12 md6">
          <h5>Scheduling an engagement</h5>
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_1/module_3/assets/videos/act_8_1.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
        <div class="col xs12 md6">
          <h5>Cancelling an engagement</h5>
          <div class="c-contVideo">
            <video class="u-responsive-video" controls="controls">
              <source src="unit_1/module_3/assets/videos/act_8_2.mp4" type="video/mp4"/>
            </video>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content" ng-show="s_actividad == 3">
      <h5>Expressions</h5>
      <p>Classify the expressions into the correct column below.</p>
      <div class="col xs12 md11 col-center">
        <div class="grid-layout-drag">
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_9.mp3"></button><span class="drag" rescon="1">How about 8.15?</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_14.mp3"></button><span class="drag" rescon="5">I’m afraid I can’t make it.</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_7.mp3"></button><span class="drag" rescon="1">Shall we say Thursday evening?</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_10.mp3"></button><span class="drag" rescon="2">Tuesday sounds good.</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_13.mp3"></button><span class="drag" rescon="4">Can we do Sunday instead?</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_11.mp3"></button><span class="drag" rescon="2">Sure, that suits me fine.</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_12.mp3"></button><span class="drag" rescon="3">I’m afraid Wednesday isn’t good for me.</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_16.mp3"></button><span class="drag" rescon="6">See you then</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_15.mp3"></button><span class="drag" rescon="6">See you on Friday</span>
          </div>
          <div class="dragCont min-h40">
            <button class="c-btn-Icon u-bgIconListen" ng-audio="unit_1/module_3/assets/audios/act_8_8.mp3"></button><span class="drag" rescon="1">Can you make it on Friday?</span>
          </div>
        </div>
      </div>
      <table class="c-table-estilo_tres m-a mt40">
        <thead>
          <tr>
            <th>Suggesting a time / day</th>
            <th>Accepting a time / day</th>
            <th>Rejecting a time / day</th>
            <th>Changing a time / day</th>
            <th>Cancelling an arrangement</th>
            <th>Confirming an arrangement</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
            <td>
              <div class="drop js-drop min-h40 row-flex"></div>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-hide="s_actividad == 2" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 3"></button>
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