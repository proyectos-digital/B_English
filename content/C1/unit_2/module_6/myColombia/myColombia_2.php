
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_4" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <p class="col md6 ta-j padding10"><strong>Read the following news article and answer the questions that follow. </strong> <br/><br/>
          <strong>Colombia natural disaster risk high due to climate change; World Food Program</strong> <br/><br/>
          <strong>Written by Philip Acuña April 22, 2014</strong> <br/><br/>
          A new report by the United Nation’s World Food Program (WFP) revealed that the risk of natural disasters in Colombia is high due to the effects of climate change.
          The findings were published by the WFP on Tuesday, in a new atlas that highlights areas in the Andean region that are vulnerable to natural disasters and food
          insecurity resulting from climate change.<br/>
          Titled the “Atlas of Food Safety, Disaster and Climate Change,” the report focuses specifically on areas throughout Colombia, Ecuador, Peru and Bolivia that are
          in critical need of intervention.<br/>
          The report revealed that low-income and marginalized communities will be impacted the hardest, particularly in their ability to access basic services such as
          food and water.<br/>
          In a statement released online Miguel Barreto, the WFP’s regional director said, “In the four countries that were studied in the Andean region, the low-income
          communities have the same problems when trying to access basic services such as water, energy and markets. This reduces their response capabilities and
          makes them more vulnerable to climate disasters.”<br/>
          “The atlas can also provide guidance in making decisions of governments helping to plan and take action to mitigate the impact of climate disasters, such as loss
          of livelihoods and rising food process, and to invest in reducing the risk of disasters,” Barreto continued.<br/>
          According to the atlas, there are six departments in Colombia that fall under the category of “Grave Vulnerability, and six others that fall under the category
          of “Very High Vulnerability.”<br/>
        </p>
        <p class="col md6 ta-j padding10">The states of Magdalena, Cesar, and Sucre are among those that are the most vulnerable.<br/>
          Climate change has been a frequently discussed issue in Colombia recently, particularly after a series of natural disasters affected the country.<br/>
          A catastrophic drought continues to plague the eastern state of Casanare, where more than 20,000 animals have died due to lack of water.<br/>
          A recent report by the National Unit for Disaster Risk Management (UNGRD) highlighted 25 municipalities currently experiencing severe water shortages, less
          than half of which have adhered to established crisis protocol.<br/>
          A wildfire also broke out in the Sierra Nevada mountains that consumed over 3,000 acres of forest.<br/>
          The fire, which began at the end of March, spread rapidly through the Caribbean mountains, the highest coastal range in the world, destroying coffee, banana
          and palm crops throughout one of Colombia’s most bio-diverse regions.<br/>
          Furthermore, Colombia’s president Juan Manuel Santos announced recently that the country’s treasured snow-capped mountains, particularly those of the
          Caribbean Sierra Nevada mountain range, are in danger of melting as a result of global warming.<br/>
          Santos said that Sierra Nevada is due to lose its white caps because of climate change. Out of six mountains, the only ice cap which may survive the coming 20
          years is that of the Cocuy mountain range in northeastern Colombia.<br/>
          “By 2030 it will no longer snow in the Sierra Nevada of Santa Marta. Of the six mountains that Colombia has only Cocuy will survive as the rest will disappear.
          This is a grim and dangerous projection so we must ensure that we take care of our environment,” said Santos.<br/>
          The president also noted that according to a United Nations study, “Colombia is a country that is particularly vulnerable to climate change and there is a 95%
          chance that this phenomenon is due to the irresponsibility of humans”.<br/>
          Tuesday marks “Earth Day,” an internationally recognized event meant to demonstrate support for the environment.<br/>
          
        </p>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex justify-between">
        <div class="col xs12 md6">
          <div class="row mt20">
            <p class="ta-c"><strong><span class="u-textColor_4">1. </span> The Andean region refers to...</strong></p>
            <div class="row">   
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
              <label class="c-Checkbox w100" for="selInput_1">Colombia and all its territories</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
              <label class="c-Checkbox w100" for="selInput_2">The Andean mountain range in Colombia</label>
              <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
              <label class="c-Checkbox w100" for="selInput_3">The Andean Mountain range throughout South America.</label>
            </div>
          </div>
          <div class="row mt20">
            <p class="ta-c"><strong><span class="u-textColor_4">2. </span> The name “Atlas of Food Safety, Disaster and Climate Change” most like means...</strong></p>
            <div class="row">   
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
              <label class="c-Checkbox w100" for="selInput_4">A map showing the safest place to grow food during climate change. </label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
              <label class="c-Checkbox w100" for="selInput_5">A map showing the most vulnerable places due to climate change. </label>
              <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
              <label class="c-Checkbox w100" for="selInput_6">A map showing where food is no longer safe due to climate change. </label>
            </div>
          </div>
          <div class="row mt20">
            <p class="ta-c"><strong><span class="u-textColor_4">3. </span> The Recent disasters like that in Casanare which left thousands of animals a dead and the wildfire in the Sierra Nevada highlighted...</strong></p>
            <div class="row">   
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
              <label class="c-Checkbox w100" for="selInput_7">The government’s efforts to curb climate change in the Andean region.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
              <label class="c-Checkbox w100" for="selInput_8">The UN’s effort to curb climate change. </label>
              <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
              <label class="c-Checkbox w100" for="selInput_9">Increase the focus and discussion on climate change in Colombia.</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mt20">
            <p class="ta-c"><strong><span class="u-textColor_4">4. </span> “Snow-capped” means...</strong></p>
            <div class="row">   
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
              <label class="c-Checkbox w100" for="selInput_10">A mountain with snow only at its peak.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
              <label class="c-Checkbox w100" for="selInput_11">A mountain that’s great for skiing.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
              <label class="c-Checkbox w100" for="selInput_12">A mountain that is completely covered in snow. </label>
            </div>
          </div>
          <div class="row mt20">
            <p class="ta-c"><strong><span class="u-textColor_4">5. </span> According to the United Nations…</strong></p>
            <div class="row">   
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
              <label class="c-Checkbox w100" for="selInput_13">Climate change is a natural phenomenon.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
              <label class="c-Checkbox w100" for="selInput_14">Climate change will affect Colombia more than any other country in the Andean region.</label>
              <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
              <label class="c-Checkbox w100" for="selInput_15">Climate change is mostly caused by the activity of mankind. </label>
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
