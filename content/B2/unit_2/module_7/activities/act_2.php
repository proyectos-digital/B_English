
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    
  </aside>
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row">
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12  col-center">
              <p> <strong class="u-textColor_4-dark">1. </strong>Read and listen to the story.</p>
              <div class="col-flex-sm12  ta-c mt30">
                <audio class="row w30 centrado" controls="controls">
                  <source src="unit_2/module_7/assets/audios/act_2.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
                </audio>
              </div>
              <p class="ml20 mt30 lh-20">Clara Benavides, an elementary school student in Valledupar, was a little girl who made a big difference. In the 2000s, many people in Colombia were afraid. There was a war between the government and guerrillas. People were fearful that the war could reach big cities. Clara was ten years old, and unlike other people, she decided to do something. She wrote a letter to the President of Colombia. This is an extract of her letter: </p>
              <div class="c-cardBlue col-flex-sm12 col-flex-md9 col-flex-lg7 centrado margin30">
                <div class="c-cardBlueContent pr50 pl50"> 
                  <h5 class="u-textWhite mb30 ">Dear Mr. President,</h5>
                  <p>My name is Clara Benavides. I’m ten years old. I have been worrying about the war in Colombia and I am scared because it can reach big cities. Are you going to do something to stop the war or not? If you aren’t, please tell me how you are going to help bring peace to Colombia. The world is for us to live together in peace and not to fight. <br/> Sincerely,</p>
                  <h6 class="ta-r u-textWhite">Clara Benavides</h6>
                </div>
              </div>
              <p class="ml20 mt30 lh-20">A few weeks later, Clara received an answer from the President. In his letter, he wrote: “The government is trying to do everything so that we can de-escalate the war.” The President also  invited Clara to visit The Nariño Palace. So that summer, she and her parents traveled to Bogota. Clara visited several governmental offices and she talked with children her own age. She found that many of her new friends also wanted peace. When she went back to Valledupar she said that as a result of her trip, “I have discovered that in many ways people in the government want peace. We all want peace.”</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row-flex s-actividad u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row">
          <div class="row-flex align-items-center">
            <div class="col-flex-sm12 col-flex-md5 col-flex-lg4 col-center">
              <p class="mb30"><strong><span class="u-textColor_4-dark">2</span>. Match the questions to their answers.</strong></p>
              <div class="row-flex align-items-center showTo-md"><img class="u-responsive-img" src="unit_2/module_7/assets/images/act_2.png" alt="act_2"/></div>
            </div>
            <div class="col xs12 md8 col-center" data-ejercicio="unir">
              <div class="ancho350 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Who did Clara write the letter to?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Why did she write the letter?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">What question did Clara ask?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">What did the President say in his reply?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">What did Clara say she had learned in the visit?</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">What did Clara say everybody in the government wants?</span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho350 js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">He said the Government was trying to do everything so that they could de-escalate the war.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="1">The president of Colombia.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">She said she had discovered that in many ways, people in the government want peace.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">She wrote the letter because she was afraid that the war could reach big cities.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="6">She said they all wanted peace.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="3">She asked if the Colombian President was going to do something to stop the war.</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>