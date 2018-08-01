
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col sm12 md5 col-center">
          <h5><span class="u-textColor_4-dark">1</span>. Read the following passage. </h5>
          <h6>Check the words in bold and, based on the context, choose the best definition in the chart below:</h6>
          <div class="row-flex align-items-center">
            <div class="col-flex-xs11 col-flex-sm9 col-center ">
              <div class="c-cardGreen ">
                <div class="c-cardGreenContent"> 
                  <p>It is very important to know what to do when you are facing a difficult situation. For example, Giovanni Hernandez is an old man aged 82. His <strong class="u-textColor_1">hair has gone gray </strong> but he is a very relaxed person. Last month, he had a flight from Bogota to Saravena. He was at the airport, <strong class="u-textColor_1">he got on </strong> the plane when suddenly one of the engines <strong class="u-textColor_1">went off </strong>. The pilot had to ask the passengers to leave the plane and the flight was cancelled. Mr. Hernández took a deep breath, he <strong class="u-textColor_1">went for a walk </strong>, and then he found a seat in another flight. He finally arrived in Saravena without any problem.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md7 col-center">
          <h5><span class="u-textColor_4-dark">2</span>. Match the verbs with Go and Get with their meanings.</h5>
          <div class="mt40 row" data-ejercicio="unir">                
            <div class="ancho150 js-columnas" id="sourceElements"><span class="ta-c u-bgColor_5 treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">get on</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">go gray</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">go off</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">get by</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">get here</span><span class="ta-c u-bgColor_5 treeItem" id="Item0_5" onclick="setSource(this)" seleccion="seleccion" valor="6">go for a walk</span></div>
            <div id="linecanvas" style="width: 60px;"></div>
            <div class=" js-columnas" id="targetElements"> <span class="ta-c u-bgColor_5 treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="4">to have just enough of something such as money or knowledge so that you can do what you need to do.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="6">to walk for pleasure rather than for practical reasons</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">arrive at a specific place or location.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="2">used for describing the white color of hair in older people.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="1">to get into a bus, plane, or train.</span><span class="ta-c u-bgColor_5 treeItem" id="Item1_5" onclick="setTarget(this)" seleccion="seleccion" valor="3">when something such as a light or an electricity supply stops working or being available.</span></div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>