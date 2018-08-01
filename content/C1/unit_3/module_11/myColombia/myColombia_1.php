
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <article class="col xs12 md9 col-center">
        <div class="c-contVideo">
          <video class="u-responsive-video" controls="controls">
            <source src="unit_3/module_11/assets/videos/col_1_1.mp4" type="video/mp4"/>Your browser does not support the video element.
          </video>
        </div>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>