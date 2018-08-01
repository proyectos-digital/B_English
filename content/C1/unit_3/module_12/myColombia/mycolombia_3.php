
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-init="unirColumnasFuncion()">
      <article class="col xs12 md8 col-center">
        <h5>1. A wide range of vocabulary is used when we speak about the government and politics. Match the words listed below with their corresponding meaning.                  </h5>
        <div class="col col-center mt40" data-ejercicio="unir">
          <div class="js-columnas" id="sourceElements">                           <span class="treeItem source_item" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">Ballot</span><span class="treeItem source_item" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">Campaign </span><span class="treeItem source_item" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Independent </span><span class="treeItem source_item" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">Poll</span><span class="treeItem source_item" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="5">Ticket</span><span class="treeItem source_item" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="6">Campaign Contribution </span><span class="treeItem source_item" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="7">Conservative</span><span class="treeItem source_item" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="8">Debate</span></div>
          <div id="linecanvas" style="width: 60px;"></div>
          <div class=" js-columnas flex-column justify-center" id="targetElements"> <span class="treeItem ta-c target_item" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="8">A discussion about the major issues of an election by the candidates.</span><span class="treeItem ta-c target_item" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="7">A person who tends to hold up traditions and is resistant to drastic changes in the laws, government  and society in general. </span><span class="treeItem ta-c target_item" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="6">Something of value that is given to a political campaign.</span><span class="treeItem ta-c target_item" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="4">A survey of public opinion.</span><span class="treeItem ta-c target_item" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="5">This list of candidates that a political party has registered for an election.</span><span class="treeItem ta-c target_item" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="3">Someone who is not registered with a political party.</span><span class="treeItem ta-c target_item" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">A series of events put on by a political candidate leading up to an election. This includes advertising, speeches, rallies and TV appearances.</span><span class="treeItem ta-c target_item" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">A list of political candidates and  issues on which citizens vote in elections. </span></div>
        </div>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"> </footer>

<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>