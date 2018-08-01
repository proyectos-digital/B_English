
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_2">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <h5>1. Read the following short news article  and answer the questions that follow.</h5>
      <div class="row-flex col-center">
        <article class="c-cardGreen col-flex-xs12 col-flex-md8">
          <div class="c-cardGreenContent ta-j">
            <h6>The changing role of women in Colombian politics</h6>
            <p>Colombia was one of the last countries in Latin America to allow women’s suffrage and right to election (1954), and since then women have been striving to infiltrate the country’s political system.</p>
            <p>Seeing as women constitute 51% of the Colombian population, it seems only right that there should be an equal number of men and women within the governing bodies of Colombia. However, the reality is that “Colombia is a country which has always been handled by men,” meaning that for women to break into the traditionally patriarchal roles is almost a “force of social revolution,” according to female presidential candidate Aida Avella.<img class="u-responsive-img pl10 pt10" src="unit_3/module_12/assets/images/col_2_1.png" alt=""/></p>
            <p>The weight of this responsibility was evidently felt by women in the 1950’s, 60’s and 70’s, as overall political participation of women between 1958 and 1974 stood at just 6.79%. The role of women in politics appears to be a prevailing problem in Colombia. According to the Inter-Parliamentary Union (IPU), in December 2013, Colombia ranked 118th out of 140 countries for the inclusion of women in political entities, sharing the ranking with both Uruguay and Equatorial Guinea. Realities such as the fact that Colombia has never had a female president or vice-president while other Latin American countries have — such as Brazil and Chile with incumbent presidents Dilma Rousseff and Michelle Bachelet respectively — mark how Colombian women’s rights in politics still have a long way to go.</p>
            <h5>Women and the Presidency</h5>
            <p>Nevertheless, in recent history women have begun to find their political feet, not least with the race to become the first female president of Colombia. The first woman to run as candidate for presidency in the whole of Latin America was Maria Eugenia Rojas de Moreno Diaz, who ran in the 1974 Colombian presidential election on behalf of the National Popular Alliance (ANAPO) but was unsuccessful in her pursuit. More dramatically, Regina Betancourt of Liska, better known as Regina Eleven, began her presidential campaign in 1998 but was kidnapped and could not register for election. Noemi Sanin did have some success in 1998 with her “Movement Yes, Colombia” campaign. When she did not win, Sanin ran again in 2002 for the Oxygen Green Party (Partido Verde Oxigeno), but was captured by the <strong>FARC</strong> — Colombia’s largest rebel group — and forced to stop lobbying. For the upcoming 2014 elections, however, there are three female candidates vying for the coveted role of first female President of Colombia: <strong>Marta Lucia Ramirez</strong> for <strong>the Conservative party</strong>, Aida Avella for the <strong>Patriotic Union</strong> and <strong>Clara Lopez0</strong> for the Democratic Party.</p>
            <p>Read the full story here<a href=" https://colombiareports.com/women-peace/" target="blank"><strong>https://colombiareports.com/women-peace/</strong></a></p>
          </div>
        </article>
        
        <article class="row-flex col-flex-xs12 col-flex-md4 pl20 pr20 flex-column justify-center">
          <h5>Choose the correct answer to the following questions</h5>
          <div class="row-flex flex-column mb20 mt10">
            <p><strong>1. What does the word “suffrage” mean in the first paragraph?</strong></p><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
              <label class="c-Checkbox" for="inputRadio_1"><span>The right to vote in an election.</span></label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
              <label class="c-Checkbox" for="inputRadio_2"><span>The right to suffer.</span></label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_1" value="3"/>
              <label class="c-Checkbox" for="inputRadio_3"><span>The right to hold public office.</span></label></span>
          </div>
          <div class="row-flex flex-column mb20 mt10">
            <p><strong>2. Which of the following statements is true?</strong></p><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="1"/>
              <label class="c-Checkbox" for="inputRadio_4"><span>There are equal number of men and women in politics.</span></label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_2" value="2"/>
              <label class="c-Checkbox" for="inputRadio_5"><span>There were no women in public office before 1954.</span></label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_2" value="3"/>
              <label class="c-Checkbox" for="inputRadio_6"><span>There are equal number of men and women in Colombia.</span></label></span>
          </div>
          <div class="row-flex flex-column mb20 mt10">
            <p><strong>3. Colombia has...</strong></p><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_3" value="1"/>
              <label class="c-Checkbox" for="inputRadio_7"><span>One of the best records of women in Politics.</span></label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_3" value="2"/>
              <label class="c-Checkbox" for="inputRadio_8"><span>Relative to men,  lot of women in politics today.</span></label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_3" value="3"/>
              <label class="c-Checkbox" for="inputRadio_9"><span>One of the worst records of women involved in politics.</span></label></span>
          </div>
        </article>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>