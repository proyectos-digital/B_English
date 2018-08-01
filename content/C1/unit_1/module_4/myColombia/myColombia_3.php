
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_4" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <h5>Read the following text and answer the questions that follow.</h5>
      <p class="ta-j" phrasal-column="column-xs1 column-md2"><strong>The Colombian town with 200 inhabitants from just one family</strong><br/>
        <strong>by Emma Rosser July 14, 2015</strong><br/><br/>
        A tradition of marriage and procreation between cousins in a small town in western Colombia has resulted in 200 from just one family, with newer
        generations continuing this trend despite the physical impairments children have been born with as a result of reproduction between cousins.<br/>
        In the village of Amanto, in the western province of Antioquia, peasants arrived 150 years ago beginning a culture where it is commonplace between
        first cousins to marry and have children.<br/>
        In this town tucked away in the almost impenetrable jungle, away from the condemnation of the Catholic church and only accessible by a dirt track, this
        behavior continues today with younger generations admitting a genuine attraction for their family members.<br/><br/>
        The oldest marriage in the village today is between two cousins who wed 50 years ago; Luis Aníbal Vanegas Galeano and Alba del Jesus Galeano Henao.
        Alba at the time went to the nearby town of Jerico to ask for permission from the Bishop in order to marry her cousin. Their punishment was
        the order of 50 “holy fathers”, 20 rosaries and six confessions. Since this union they have produced ten children, and eleven
        grandchildren between them.<br/>
        Inhabitants of the town acknowledge the health risks but have stated the genuine attraction felt between these individuals living in such close proximity,
        away from other societal expectations and norms. As such, marriages and families created within the families of Vanegas, Galeano and Henao are today
        still considered normal.<br/>
        Alba del Jesus said of her marriage “There was nothing to make us fall in love, it was frowned upon. We were raised in the same village, we saw each
        other almost daily, and so it resulted in marriage, being so close, so attached. But there was also something, an attraction, because even though I went
        to Medellin some months, I did not notice anyone else and when I returned to the village we married.”<br/>
        Luis also recounted the beginnings of this tradition “The first cousins to marry were my father Gregory and my mother Etelbina. Then three other guys
        did the same and to preserve the tradition, I married Alba “.<br/>
        Luis and Alba have not experienced any birth defects in their children. However other families have reported problems of learning difficulties and extra
        fingers and toes.<br/>
        Reproduction between first cousins doubles the risk of genetic mutations causing birth defects, through the presence of such a small pool of genes
        enabling normally recessive diseases to become dominant. This means diseases of the heart and lungs and syndrome such as Down are more
        common.<br/>
        It has been reported that there are over one billion living globally in communities such as Amanto where this practice is commonplace.<br/>
        Despite the dangers, new generations in the town look set to continue this trend. One member of the community who has been in a two-year
        relationship with her cousin describes her relationship, “We studied together, we know each other from childhood, also we live five minutes apart, so
        we can see each other every day. Actually, for me it’s normal, I do not have an explanation, it’s pure attraction and closeness.”<br/>
        The theme of incest in Colombia has been epitomized by the country’s Nobel Prize winner in his globally renowned masterpiece.
        
        
      </p>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="col xs12 sm6">
        <div class="row mt20">
          <p><strong>One of the reasons the tradition of marrying cousins continue today is because...</strong></p>
          <div class="row">   
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
            <label class="c-Checkbox w100" for="selInput_1">It is a Holy tradition of the village.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
            <label class="c-Checkbox w100" for="selInput_2">The village is isolated so there is no else to marry.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
            <label class="c-Checkbox w100" for="selInput_3">There is natural romantic inclination for relatives. </label>
          </div>
        </div>
        <div class="row mt20">
          <p><strong>The families believe in falling in love with a cousin is natural because….</strong></p>
          <div class="row">   
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
            <label class="c-Checkbox w100" for="selInput_4">They are relatives and relatives are usually attracted to each other. </label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
            <label class="c-Checkbox w100" for="selInput_5">Even when they leave the village they still return to marry.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
            <label class="c-Checkbox w100" for="selInput_6">The Catholic bishop is against it.</label>
          </div>
        </div>
        <div class="row mt20">
          <p><strong>Reproducing with close relatives can result in …… </strong></p>
          <div class="row">   
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
            <label class="c-Checkbox w100" for="selInput_7">Social problems in the community.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
            <label class="c-Checkbox w100" for="selInput_8">Genetic birth defects.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
            <label class="c-Checkbox w100" for="selInput_9">Problems at school.</label>
          </div>
        </div>
      </div>
      <div class="col xs12 sm6">
        <div class="row mt20">
          <p><strong>“Tucked away in the almost impenetrable jungle” means...</strong></p>
          <div class="row">   
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
            <label class="c-Checkbox w100" for="selInput_10">They are located in a very remote and isolated area.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
            <label class="c-Checkbox w100" for="selInput_11">The jungle is beautiful</label>
            <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
            <label class="c-Checkbox w100" for="selInput_12">They live in the jungles in Antioquia.</label>
          </div>
        </div>
        <div class="row mt20">
          <p><strong>“It was frowned up” means...</strong></p>
          <div class="row">   
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_13" value="1"/>
            <label class="c-Checkbox w100" for="selInput_13">People loved the practice.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_14" value="2"/>
            <label class="c-Checkbox w100" for="selInput_14">People practise it alot.</label>
            <input class="c-inputRadio" type="radio" name="sel_input_5" id="selInput_15" value="3"/>
            <label class="c-Checkbox w100" for="selInput_15">People did not like the practice.</label>
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
