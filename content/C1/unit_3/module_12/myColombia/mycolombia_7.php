
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_7">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <h5>Look at the following pictures, write brief description of what each of this events are.</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="row-flex col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="col-flex-xs12 col-flex-md4 col-center">
            <div class="row mb30 ta-c "><img class="u-responsive-img" src="unit_3/module_12/assets/images/col_7_1.png" alt=""/></div>
          </div>
          <div class="col-flex-xs12 col-flex-md5 col-flex-hd7 col-center">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h150" placeholder="Write here..." ng-model="textousuario"> </textarea>
            </div>
          </div>
        </div>
        <div class="row-flex col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="col-flex-xs12 col-flex-md4 col-center">
            <div class="row mb30 ta-c "><img class="u-responsive-img" src="unit_3/module_12/assets/images/col_7_2.png" alt=""/></div>
          </div>
          <div class="col-flex-xs12 col-flex-md5 col-flex-hd7 col-center">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h150" placeholder="Write here..." ng-model="textousuariob"> </textarea>
            </div>
          </div>
        </div>
        <div class="row-flex col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="col-flex-xs12 col-flex-md4 col-center">
            <div class="row mb30 ta-c "><img class="u-responsive-img" src="unit_3/module_12/assets/images/col_7_3.png" alt=""/></div>
          </div>
          <div class="col-flex-xs12 col-flex-md5 col-flex-hd7 col-center">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h150" placeholder="Write here..." ng-model="textousuarioc"> </textarea>
            </div>
          </div>
        </div>
        <div class="row-flex col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="col-flex-xs12 col-flex-md4 col-center">
            <div class="row mb30 ta-c "><img class="u-responsive-img" src="unit_3/module_12/assets/images/col_7_4.png" alt=""/></div>
          </div>
          <div class="col-flex-xs12 col-flex-md5 col-flex-hd7 col-center">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h150" placeholder="Write here..." ng-model="textousuariod">                       </textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"> </button>
  </aside>
</section> 

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>