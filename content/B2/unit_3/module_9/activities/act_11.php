
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <h6>Read the following sentences:</h6>
          <div class="row mt20">
            <p>
               He looks <strong> as if </strong> he <strong>knew </strong>the answer.</p>
            <p>She walks<strong> as if</strong> she were a supermodel.</p>
          </div>
          <div class="row mt20">
            <p>He boarded the airplane as <strong>if </strong>he <strong>were </strong>a seasoned traveler.</p>
            <p>He spends money as<strong> if </strong>he <strong>owned</strong> a bank.</p>
          </div>
          <div class="row mt40">
            <h6>Now, match the sentences that logically go together.</h6>
            <div class="row mt30" data-ejercicio="unir">
              <div class="ancho250 js-columnas" id="sourceElements"><span class="treeItem" id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1">My goodness those children are loud!  </span><span class="treeItem" id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2">It was great to see Rodrigo again. He is studying hard at the UNAD and getting excellent grades.  </span><span class="treeItem" id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3">Is Andrea feeling well? Her voice sounded different.  </span><span class="treeItem" id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4">My sister is acting so strange. She has a tense look on her face.</span><span class="treeItem" id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5">My friend is under a lot of pressure at the moment.  </span></div>
              <div id="linecanvas" style="width: 60px;"></div>
              <div class="ancho250 js-columnas" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">It sounds as if he’s doing well in life.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="4">When I talk to her, it’s as if she’s not even listening to me.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="5">She feels as if she had the weight of the world on her shoulders.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">It sounds as if there’s a herd of animals running around upstairs.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="3">I spoke to her today and it sounded as if she were getting a cold.</span></div>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <div class="row-flex flex-column"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_11_1.png" alt="" srcset=""/><img class="u-responsive-img centrado mt30" src="./unit_3/module_9/assets/images/act_11_2.png" alt="" srcset=""/></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_11_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>