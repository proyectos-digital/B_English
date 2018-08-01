
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    
  </aside>
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md12 col-flex-lg5 col-center">
              <h5>Watch the video. </h5>
              <h6>Pay attention to the use of the modal auxiliaries, can, could, may, might, should, and must.</h6>
              <div class="row-flex justify-center mt20 mb20">
                <div class="col md11">
                  <div class="c-contVideo">
                    <video class="u-responsive-video" controls="controls">
                      <source src="unit_3/module_12/assets/videos/act_1.mp4" type="video/mp4"/>
                    </video>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-flex-sm12 col-flex-md12 col-flex-lg6 col-center">
              <h5>Listen again and check the following sentences, paying attention to the words in bold.
                <ul class="lh30">
                  <li><strong><span class="u-textColor_4-dark">•</span></strong> <strong>I must </strong> respect the law.</li>
                  <li><strong><span class="u-textColor_4-dark">•</span></strong> <strong>I should</strong> invite others to do the same.</li>
                  <li><strong><span class="u-textColor_4-dark">•</span></strong> <strong>I can tell</strong> people when things are right or wrong.</li>
                  <li><strong><span class="u-textColor_4-dark">•</span></strong> <strong>I could begin</strong> with little changes at home.</li>
                </ul>
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <div class="col xs12 col-center ta-c"></div>
          <h5><span class="u-textColor_4-dark">2</span>. Match the verbs with Go and Get with their meanings.</h5>
          <div class="mt40 row flex justify-center" data-ejercicio="unir">                
            <div class="col xs10 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">If we don’t hurry we could be late.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">They can run but they can’t hide.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">May we go home now?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Would you carry this for me please?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">We could eat out tonight.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">You shouldn’t go by train. It’s a very long journey.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="7">Shall I call you on your mobile?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="8">That can’t be true.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="9">We could wear what we liked, but we had to look neat and tidy.</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="10">You must stop at a red light.</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class="col xs2 js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">Requests</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="8">Impossibility</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="7">Offers</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="5">Suggestions</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="2">Ability</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="1">Possibility</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="6">Advice</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="3">Permission</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="10">Obligation</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="9">Necessity</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_12/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>