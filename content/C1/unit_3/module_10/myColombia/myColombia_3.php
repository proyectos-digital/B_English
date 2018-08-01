
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row row-flex align-items-center">
        <h5>Read the following short news article and answer the questions that follow.<br/><br/></h5>
        <div class="col xs12 md6">
          <p><strong>How a Bogota community turned their grim neighborhood into a stunning piece of art</strong><br/><br/>
            Local graffiti artists and hundreds of neighbors have turned one of the poorest
            neighborhoods in Colombia’s capital Bogota into arguably the most colorful
            “barrio” in the country.<br/>
            The Ink Crew, a street art collective from the capital, moved to “Los Puentes,” an
            impoverished ghetto in the south of Bogota, and called in the help of community
            to fix up the grim neighborhood.<br/>
            Some 870 neighbors, supported by the district administration, joined the initiative
            and in a rarely seen act of community mobilization turned their neighborhood
            into one of the world’s largest murals.<br/>
            The graffiti artists and their temporary neighbors painted the fronts of 213 homes
            to create what has now arguably become Bogota’s most beautiful neighborhood.<br/>
            The community and the graffiti artists turned what used to be a depressing ghetto
            into an astounding piece of art, to the delight of many.<br/>
            For the graffiti artist, used to painting on plain walls, the hillside neighborhood
            was an unprecedented challenge.<br/>
            “It wasn’t flat as usual. We had to play around with diagonals, the slope and
            perspective ,” graffiti artist Skida told alternative culture website Cartel Urbano.
            However, after decades of state neglect, the graffiti artists felt it was time the
            neighborhood itself rolled up its sleeves.<br/><br/>
            
            <hr/>
            This is about making a community own its public spaces, the project encouraged
            the appropriation, through art, of these spaces.<br/><br/>
            The project worked. The neighborhood, from children to pensioners, took up
            paint brushes and rollers and reformed their once crappy neighborhood into a
            stunning piece of art they call “River of Life.”<br/><br/>
            Read the story here:<a href="https://colombiareports.com/bogota-community-turned-grim-neighborhood-stunning-piece-art/" target="blank">  https://colombiareports.com/bogota-community-turned-grim-neighborhood-stunning-piece-art/</a>
            
            
          </p>
        </div>
        <div class="col xs12 md6">
          <div class="col xs11 col-center mt30">
            <h6 class="mb10"> The initiative for the community project was...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_1">A collaboration between the mayor’s office, graffiti artists and the governor’s office.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_2">A collaboration between The artists and the neighborhood.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_3">A collaboration between the artists, the neighborhood and the Mayor’s office.</label>
          </div>
          <div class="col xs11 col-center mt30">
            <h6 class="mb10">The initiative was started by ...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_4">The Mayor’s office.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_5">The artists.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_6">the neighborhood.</label>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
