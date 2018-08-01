
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row row-flex align-items-center">
        <h5>Read the following short news article and answer the questions that follow.<br/><br/></h5>
        <div class="col xs12 md6">
          <p><strong>Botero in Vienna</strong><br/><br/>
            The Kunstforum Museum of Vienna will feature an exhibition of Colombian painter
            Fernando Botero’s satirical and legendarily rotund artwork until January 15, announced
            Caracol Radio.<br/>
            The Medellin-born artist called the collection, which includes 75 canvases, “very
            representative” of his work.<br/>
            “The exhibition includes many of the themes I have painted all my life,” he said. The
            museum will display Botero’s artwork from as early as 1985 and as late as 2005.<br/>
            The Kunstforum Museum organized the exhibition into rooms by theme, including
            “Bullfight,” “Daily Life in Latin America,” “The Catholic Latin America,” and a room devoted
            to some of Botero’s most recent and controversial work, “Abu Ghraib,” which depict the
            torture and abuse of detainees in the Iraqi prison at the hands of U.S. soldiers.<br/><br/>
            “Like many people, I felt shocked to see that the United States, which presented itself as
            a defender of freedom, had been torturing [people] in the same prison where Saddam
            Hussein was torturing,” Botero said of his Abu Ghraib artwork, which was lent to the
            museum by Berkeley University. “That revelation gave me a kind of anger that led me to
            do drawings and some paintings.”<br/>
            The exhibition will also offer Austrians and foreign tourists a taste of Botero’s more
            classic Latin American work, including the notable “The Card Players” and “Slaughter.”
            The Vienna museum ranks among the city’s most popular attractions, receiving over
            300,000 visitors each year.<br/><br/>
            Read the story here:<a href=" https://colombiareports.com/vienna-museum-exhibits-botero-paintings/" target="blank">  https://colombiareports.com/vienna-museum-exhibits-botero-paintings/</a>
            
            
          </p>
        </div>
        <div class="col xs12 md6">
          <div class="col xs11 col-center mt30">
            <h6 class="mb10"> If you were to visit the Botero exhibition in Vienna...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_1">You would be able to understand his complete body of work.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_2">You would understand his early works from the 1980s but not his later works.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_3">You would understand his later works from the 2000s but not his earlier works.</label>
          </div>
          <div class="col xs11 col-center mt30">
            <h6 class="mb10">It is safe to say...</h6>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_4">Botero made a lot of money from selling his paintings to the museum.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_5">Botero is an emotional painter.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
            <label class="c-CheckSelected row ml10 mr10" for="inputRadio_6">Over a million people will see his paintings in Vienna.</label>
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
