
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <article class="row-flex justify-center">
        <figure class="row-flex justify-center col-flex-xs12 col-flex-md6 mt10-sm"><img class="u-responsive-img col-center" src="unit_3/module_9/myColombia/assets/images/col_10.png" alt=""/></figure>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm">
          <h6>Write a report for a university teacher describing the information shown.</h6>
          <ul class="row">
            <li>» You should write at least 150 words. </li>
            <li>» You should spend about 20 minutes on this task. </li>
          </ul>
          <div class="row">
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h150" placeholder="Write here..." ng-model="textousuario"> </textarea>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>       
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()">  </button>
  </aside>
</section> 

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'">       </footer>