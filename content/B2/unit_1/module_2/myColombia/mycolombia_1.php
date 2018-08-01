
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="unirColumnasFuncion()">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong>  Now, match the beginnings with the endings to form complete sentences.           </h5>
      <div class="row mt30-md mt20-xs">
        <div class="col xs12 sm10 md10 col-center">
          <div class="flex" data-ejercicio="unir">
            <div class="ancho230 js-columnas" id="sourceElements"><span class="treeItem " id="Item0_0" onclick="setSource(this)" seleccion="seleccion" valor="1"><img class="u-responsive-img ancho60 " src="unit_1/module_2/assets/images/col_1_1.png" alt="" srcset=""/><span class="ml5">Martin Luther King, Jr.</span></span><span class="treeItem " id="Item0_1" onclick="setSource(this)" seleccion="seleccion" valor="2"><img class="u-responsive-img ancho60 " src="unit_1/module_2/assets/images/col_1_2.png" alt="" srcset=""/><span class="ml5">Francis of Assisi</span></span><span class="treeItem " id="Item0_2" onclick="setSource(this)" seleccion="seleccion" valor="3"><img class="u-responsive-img ancho60 " src="unit_1/module_2/assets/images/col_1_3.png" alt="" srcset=""/><span class="ml5">Mother Teresa</span></span><span class="treeItem " id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="4"><img class="u-responsive-img ancho60 " src="unit_1/module_2/assets/images/col_1_4.png" alt="" srcset=""/><span class="ml5">Dalai Lama</span></span><span class="treeItem " id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="5"><img class="u-responsive-img ancho60 " src="unit_1/module_2/assets/images/col_1_5.png" alt="" srcset=""/><span class="ml5">Nelson Mandela</span></span><span class="treeItem " id="Item0_3" onclick="setSource(this)" seleccion="seleccion" valor="6"><img class="u-responsive-img ancho60 " src="unit_1/module_2/assets/images/col_1_6.png" alt="" srcset=""/><span class="ml5">Buddha</span></span><span class="treeItem " id="Item0_4" onclick="setSource(this)" seleccion="seleccion" valor="7"><img class="u-responsive-img ancho60 padding5" src="unit_1/module_2/assets/images/col_1_7.png" alt="" srcset=""/><span class="ml5">Mahatma Gandhi</span></span></div>
            <div id="linecanvas" style="width: 70px; flex: 0 0 70px;"></div>
            <div class="js-columnas max-w100" id="targetElements"> <span class="treeItem" id="Item1_0" onclick="setTarget(this)" seleccion="seleccion" valor="2">“Lord, make me an instrument of thy peace. Where there is hatred, let me sow love”.</span><span class="treeItem" id="Item1_1" onclick="setTarget(this)" seleccion="seleccion" valor="3">“If we have no peace, it is because we have forgotten that we belong to each other”.</span><span class="treeItem" id="Item1_2" onclick="setTarget(this)" seleccion="seleccion" valor="6">“Peace comes from within. Do not seek it without”.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="1">“I refuse to accept the view that mankind is so tragically bound to the starless midnight of racism and war that the bright daybreak of peace and brotherhood can never become a reality... I believe that unarmed truth and unconditional love will have the final word”</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="4">“We can never obtain peace in the outer world until we make peace with ourselves”.</span><span class="treeItem" id="Item1_3" onclick="setTarget(this)" seleccion="seleccion" valor="5">“If you want to make peace with your enemy, you have to work with your enemy. Then he becomes your partner”.</span><span class="treeItem" id="Item1_4" onclick="setTarget(this)" seleccion="seleccion" valor="7">“Peace is its own reward”.</span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" onclick="location.reload()"></button>
    <button class="c-btn-IconAction u-bgIconCheck js-validarUnir"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
<!-- ============================== -->
<script src="./../assets/js/librerias/drawConnector.js"></script>
<script>graphicsInit()</script>