
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="listenImage = 1; s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md9 col-center mt20-md mt10-sm">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent"> 
              <p>Research shows that working night <strong>shifts</strong> can damage one’s health. It has shown that it can lead to several illnesses such as cancer, diabetes, mental illnesses, and heart diseases.</p>
              <p>The genes in our body needed to sleep regularly and at night. This is what is normal and how our body has been programmed to operate. If this doesn’t happen, more than 1000 genes could get damaged. Many of the body genes can <strong>switch off</strong> if the body does not sleep properly. This weakens the immune system, so we can get ill more often. It is said over 97% of the body´s genes can become “<strong>out-of-sync</strong> with mistimed sleep”. That is, when the body doesn´t sleep at night. This is why <strong>jet lag</strong> and working at nights make us feel bad.</p>
              <p>Society needs people to work night shifts. And it is difficult for people to change their lifestyles. But we need to understand the <strong>dangers</strong> of night shifts and implement changes in habits to reduce the bad effects, especially if we are required to work at nights.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md6 col-center md ta-j padding20">
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>The word <strong>shifts</strong> mean:</div>
            <div class="mb20 row">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_1" ng-click="txtcaptura_a='down'">Change.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_2" ng-click="txtcaptura_a='up'">Pattern of work.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_3" ng-click="txtcaptura_a='up'">Move.</label>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>The verb <strong>switch</strong> off means:</div>
            </div>
            <div class="mb20 row">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_4" ng-click="txtcaptura_a='down'">To start working.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_5" ng-click="txtcaptura_a='up'">To continue working.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_6" ng-click="txtcaptura_a='up'">To stop working.</label>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>The expression, <strong>out of sync</strong> means:</div>
            </div>
            <div class="mb20 row">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_7" ng-click="txtcaptura_a='down'">Uncoordinated.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_8" ng-click="txtcaptura_a='up'">Coordinated.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_9" ng-click="txtcaptura_a='up'">Out of place.</label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center md ta-j padding20">
          <div class="row mt20">
            <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>The expression, <strong>jet lag</strong> means: </div>
            <div class="mb20 row">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_10" ng-click="txtcaptura_a='down'">To travel by plane.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_11" ng-click="txtcaptura_a='up'">The feeling of being very tired and sometimes confused because you have travelled on a plane across parts of the world where the time is different.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_12" ng-click="txtcaptura_a='up'">To take a jet.</label>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong><strong>Dangers</strong> refers to:</div>
            </div>
            <div class="mb20 row">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_13" ng-click="txtcaptura_a='down'">A feeling that you have in a part of your body when you are hurt or ill.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_14" ng-click="txtcaptura_a='up'">Physical damage done to a person or a part of their body.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
              <label class="c-CheckSelected w100 col-flex ml10 mr10 mt20" for="inputRadio_15" ng-click="txtcaptura_a='up'">A situation in which harm, death, damage, or destruction is possible.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad==2" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad==2" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>