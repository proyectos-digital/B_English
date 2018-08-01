
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="col-flex-xs11 col-flex-md9 col-center pb30">
          <div class="row-flex row">
            <div class="mr10 dragCont">
              <div class="drag">that´s</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">whose</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">party</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">to</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">the girl</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">we went</div>
            </div>
          </div>
          <div class="row-flex row">
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
          </div>
        </div>
        <div class="col-flex-xs11 col-flex-md9 col-center pb30">
          <div class="row-flex row">
            <div class="mr10 dragCont">
              <div class="drag">where</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">a city</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">a lot</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">Bogota</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">happens</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">is</div>
            </div>
          </div>
          <div class="row-flex row">
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
          </div>
        </div>
        <div class="col-flex-xs11 col-flex-md9 col-center pb30">
          <div class="row-flex row">
            <div class="mr10 dragCont">
              <div class="drag">whom</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">the pleasure</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">of speaking?</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">will I</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">to</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">have</div>
            </div>
          </div>
          <div class="row-flex row">
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
          </div>
        </div>
        <div class="col-flex-xs11 col-flex-md9 col-center pb30">
          <div class="row-flex row">
            <div class="mr10 dragCont">
              <div class="drag">where</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">I can´t</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">I</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">remember</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">put</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">the report</div>
            </div>
          </div>
          <div class="row-flex row">
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
          </div>
        </div>
        <div class="col-flex-xs11 col-flex-md9 col-center pb30">
          <div class="row-flex row">
            <div class="mr10 dragCont">
              <div class="drag">whose</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">an actress</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">worth watching</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">are always</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">she is</div>
            </div>
            <div class="mr10 dragCont">
              <div class="drag">movies</div>
            </div>
          </div>
          <div class="row-flex row">
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
            <div class="drop mr10"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>