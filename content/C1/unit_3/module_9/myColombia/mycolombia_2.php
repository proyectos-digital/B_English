
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <article class="row">
        <h5>Read the following short news article and answer the questions that follow.</h5>
        <p class="ta-j col col-xs12 cant-col"><span class="row">Bogota‘s Museum of Regional Colombian Costumes shows off the remarkable diversity and history of Colombian fashion, including an indigenous marriage purse supposedly designed to hold an unusual gift. Girls from certain indigenous communities would fill the purse with their pubic hair and present it to their fiance, who could not sell it at any price and would carry it like a “wedding ring equivalent,” a local guide told Colombia Reports.</span><span class="row">Situated on one of Bogota’s most historic streets, the costumes museum is suitably housed in the former residence of Manuelita Saenz — one time mistress of Simon Bolivar — who legend has it was the first woman in South America to wear pants.</span><span class="row">The museum dedicates a small exhibition space to Saenz, a revolutionary hero of South America and strong influence on Bolivar, the legendary liberator of Colombia, Venezuela, Ecuador and Bolivia. Unfortunately little from her remains as almost all of Saenz’s possessions were burned after she died from contagious diphtheria.</span><span class="row">Saenz’s study and some of her clothes have been reconstructed from old paintings, but most of the beautiful colonial-age house has been transformed into a gallery that shows off the best of Colombia’s garments.</span><span class="row">There is everything from indigenous Muisca outfits from Boyacá to a Spanish-inspired dress worn by “Chapolera” coffee bean pickers in the Coffee Region. The bright colors of Mapale dances dresses of the northern coast are inspired by Afro-Caribbean culture, while Antioquia‘s “Arriero” fashion looks like a cross between indigenous garments and cowboy wears. One room shows both indigenous weaving methods and the workings of the European-imported cloth loom. Another highlights the vast array of indigenous woven bags and local headgear — from the wide-brimmed cowboy hat to the straw sombrero.</span><span class="row">Like Scottish kilts, colors have traditionally held symbolic meanings that are specific to certain regions. The costumes vary as much as the Colombian climates in which they are worn and are diversified further by the materials available in each region. Rural workers in the areas around Bogota wear three thick layers — in traditional red, black and white — to protect themselves from the rains and biting winds of the high plains. With no wool in the Amazon region — wool introduced to other parts of Colombia by the Spanish — locals developed clothing made from tree bark. Cloth was dyed with natural elements like Cochineal insects, from which red carmine was extracted.</span><span class="row">The Museum of Regional Colombian Costumes presents Colombia’s regional identities not through art or archeology but through the garments its people wear both for work and local events. The clothes are delicately mounted in glass cases and accompanied by explanations in Spanish.</span><span class="row">The museum is found near Plaza de Bolivar on Calle 10 in Bogota’s Candelaria historic center. Entrance is 3000COP ($1.70) for adults and 1000COP ($0.70) for children. Tours are available.</span><span class="row ta-l mt20">Read the full story here:</span><a class="row mt10" href="https://colombiareports.com/bogotas-regional-colombian-costumes-museum/" target="blank">https://colombiareports.com/bogotas-regional-colombian-costumes-museum/</a><span class="cont-image mb40 mt40"><img class="u-responsive-img" src="unit_3/module_9/assets/images/col_2_1.png" alt=""/></span></p>
      </article>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5>Choose the correct answer to the following questions.</h5>
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p>1. Instead of a wedding ring indigenous tribes use...</p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-Checkbox row" for="SelectRadio_1">Hair from their genital area.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-Checkbox row" for="SelectRadio_2">A purse.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
              <label class="c-Checkbox row" for="SelectRadio_3">A lock of hair from their heads.</label>
            </div>
          </div>
          <div class="row mb50">
            <p>2. Manuelita Saenz made Colombian fashion history because...</p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-Checkbox row" for="SelectRadio_4">She was the mistress of Simon Bolivar.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-Checkbox row" for="SelectRadio_5">She wore pants.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
              <label class="c-Checkbox row" for="SelectRadio_6">Her house is now a fashion museum.</label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p>3. The museum also shows off some...</p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-Checkbox row" for="SelectRadio_7">Scottish Kilts.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-Checkbox row" for="SelectRadio_8">Of Manuela Saenz dress.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
              <label class="c-Checkbox row" for="SelectRadio_9">European clothe making machines.</label>
            </div>
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