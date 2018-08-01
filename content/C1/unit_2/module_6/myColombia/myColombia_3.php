
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_6">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content u-animationFadeDown">
      <div class="row mt30-md mt20-xs">
        <h5>Here are some common Collocations used to when talking about schools and education.</h5><span>Can you fill the blank with the correct answers from the list below.</span>
        <div class="row row-flex justify-center mt30 min-h105 align-items-center xs12 md8 col-center"><span class="dragCont">
            <div class="drag col xs6 sm4 md2">market</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">industries</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">future</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">subsistence</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">sustain</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">land</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">emission</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">virgin</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">scale</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">cycle</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">costs</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">diverse</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">raise</div></span><span class="dragCont">
            <div class="drag col xs6 sm4 md2">ranching</div></span></div>
        <p class="mt40">As Colombia’s livestock industry eats away at the Amazon rainforest, the hidden environmental <span class="drop"></span> will be passed down to <span class="drop"></span> generations, an expert said Thursday.<br/>
          Carbon dioxide <span class="drop"></span> from slash-and-burn land clearing, loss of biodiversity, soil degradation, and water pollution represent the major environmental costs of converting the Amazon rainforest into pasture for livestock, according to a recent study by Trucost on behalf of the UN-backed program The Economics of Ecosystems and Biodiversity (TEEB). <br/>
          Cattle ranchers do not bear the burden of these costs, known as “externalities,” because they take their toll on a large geographical <span class="drop"></span>  over time.<br/>
          Moreover, the environmental externalities dramatically outweigh the real profits of the livestock industry, said TEEB.<br/>
          “We estimate the land use impact on ecosystem services from cattle  <span class="drop"></span> in Colombia at $1.5 billion, around 16 times the sector revenue in this region,” said Alastair MacGregor, chief operating officer at Trucost, in an email to Colombia Reports.<br/>
          That is to say, the impact of deforestation and cattle ranching in Colombia can be valued at a $1.5 billion per year in the deterioration of goods and services, such as water purification, offered to human society by the ecosystem. Though these goods and services often have no <span class="drop"></span> value, the TEEB study measured them with environmental valuations methods.<br/>
          “Due to both magnitude of land use for cattle ranching… and the high value of ecosystem services of the <span class="drop"></span> land used, the impact of cattle ranching in South America is especially high,” TEEB’s study stated.<br/>
          “If externalities of cattle ranching were included… hamburgers could cost 18 times as much,” tweeted Pavan Sukhdev, leader of the UN Environmental Program’s Green Economy Initiative.<br/>
          <strong>Deforestation</strong> <br/>
          A policy brief from the U.N.’s Food and Agriculture Organization (FAO) explains the deforestation process as follows: typically roads are cut through virgin forest to create access for the logging and mining <span class="drop"></span> ; with greater accessibility, commercial and <span class="drop"></span> farmers move in and begin growing crops; but the topsoil of the Amazon is thin and nutrient-deficient so it cannot <span class="drop"></span> agriculture for more than two or three years; after which, farmers let their fields go fallow and move on, and ranchers move in.<br/>
          Initial returns for the livestock industry can be high, yet after five to 10 years, overgrazing and nutrient loss turn the land, which was once biologically <span class="drop"></span> and crucial to the planet’s carbon <span class="drop"></span> , into an eroded wasteland.<br/>
          Conversion of forest along the agricultural frontier is driven by price incentives. After purchasing inexpensive parcels of low-productivity land on which cattle can survive, ranchers enjoy “economic flexibility and income generating capacity” because capital investment and risk are relatively low compared to raising crops.<br/>
          “Deforestation causes incalculable environmental damage, releasing billions of tons of carbon dioxide into the atmosphere and driving thousands of species of life to extinction each year… In Latin America, in particular, most of the deforested <span class="drop"></span> ended up as pasture used to <span class="drop"></span> cattle in extensive grazing systems,” the U.N.-backed study found.<br/>
          On a global scale, deforestation generates a quarter of all human-induced carbon emissions, and contributes to the buildup of greenhouse gases by destroying “carbon sinks” which remove vast amounts of carbon dioxide from the atmosphere and store them.<br/>
          
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