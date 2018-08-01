
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">           
      <article class="row-flex mt40 align-items-center flex-column">
        <header>
          <h6>Listen carefully to the following audio:</h6>
        </header>
        <figure class="mt20 mb40"><img class="u-responsive-img" src="unit_3/module_12/assets/images/col_2_1.png" alt=""/></figure>
        <footer class="row-flex justify-center">
          <audio controls="controls">
            <source src="unit_3/module_12/assets/audios/col_2_1.mp3" type="audio/mpeg"/>your browser does not support the audio element.                 
          </audio>
        </footer>
      </article>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>