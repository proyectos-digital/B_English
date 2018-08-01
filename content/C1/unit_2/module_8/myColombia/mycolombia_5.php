
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_5" ng-init="DragandDrop()">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h6 class="ta-c">Read the following short movie reviews and fill in the blank with the words from the table below them.</h6>
        <p class="ta-c">Colombian culture and history, we recommend the following films as good places to start.<br/>
          A lot of Colombians will note that their cinema history is filled with dramas and tragedies. But they will also claim that those same dramas have become
          comedies in the country’s national memory, as many of the films demonstrate how Colombians create humor and joy in the midst of hardship.<br/>
        </p>
      </div>
      <div class="col sm12 md6 padding10">
        <div class="row-flex justify-around mb30 mt30">
          <div class="drag-Cont">
            <div class="drag">Classic</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">cast</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Hit</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Dramatic</div>
          </div>
        </div>
        <h6>La estrategia del caracol [The Strategy of the Snail] (1993)</h6>
        <p class="mt20 ta-j lh20">An instant <span class="drop"></span> when it was released, “The Strategy of the Snail” is a comedy-drama with a <span class="drop"></span> of unforgettable
          characters.<br/>
          After the families of a large tenancy house in Bogota are all evicted, the film follows their <span class="drop"></span> attempt to take the home–like a snail
          with a shell on its back–and move it to another part of the city.The film is considered <span class="drop"></span> in Colombia for the way it exemplifies
          common struggles between the stratified rich and poor of the country’s capital.
          
        </p>
        <div class="row-flex justify-around mb30 mt35">
          <div class="drag-Cont">
            <div class="drag">Actors</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Awards</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Released</div>
          </div>
        </div>
        <h6>La vendedora de rosas [The Rose Seller] (1998)</h6>
        <p class="mt20 ta-j lh20">
          “La vendedora de rosas,” loosely based on Hans Christian Andersen’s 1845 The Little Match Girl, gives a sincere and honest glimpse into the difficulties
          of life in the harsh, poor neighborhoods of Medellin, following a young girl and her band of friends as they try to find joy with Christmas eve
          looming.<br/>
          The film is well known, not only for its host of international <span class="drop"></span>  , but also because many of its <span class="drop"></span> strangely
          suffered similar fates as their characters in the years after the film was<span class="drop"></span>.
          
        </p>
      </div>
      <div class="col sm12 md6 padding10">
        <div class="row-flex justify-around mb30 mt30">
          <div class="drag-Cont">
            <div class="drag">Plots</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Shot</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Award</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Nominated</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">enthralling</div>
          </div>
        </div>
        <h6>El abrazo de la serpiente [Embrace of the Serpent] (2015)</h6>
        <p class="mt20 ta-j lh20"><span class="drop"></span> for the Best Foreign Language Film at the 2016<span class="drop"></span>, “El abrazo de la serpiente,” is a film co-produced in
          Colombia, Argentina and Venezuela.<br/>
          <span class="drop"></span> in black and white, the film takes place both during 1909 and 1940 in the Amazon, during the region’s historical Rubber Boom.
          The film is quiet, slow moving and <span class="drop"></span>. It plays with time, weaving the<span class="drop"></span> of 1909 and 1940 together–where
          in both stories, white colonists encounter an indigenous shaman while searching for a rare medicinal plant.
          
        </p>
        <div class="row-flex justify-around mb30 mt30">
          <div class="drag-Cont">
            <div class="drag">Audience</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Unfolds</div>
          </div>
          <div class="drag-Cont">
            <div class="drag">Characters</div>
          </div>
        </div>
        <h6>Confesión a Laura [Confessing to Laura] (1991)</h6>
        <p class="mt20 ta-j lh20">“Confessing to Laura” is a 1991 drama that  <span class="drop"></span>in Bogota during the infamous “Bogotazo” riots of 1948.
          The riots, which left thousands dead and much of the city burned to the ground, followed the assassination of popular presidential candidate Jorge
          Eliecer Gaitan.<br/>
          “Confessing to Laura” follows three <span class="drop"></span> trapped inside their homes during the riots, giving the <span class="drop"></span> a zoomed
          in look at the humanity trapped within Bogota’s historic strife.
          
          
          
        </p>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
