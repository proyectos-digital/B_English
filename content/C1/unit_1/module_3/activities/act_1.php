
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row row-flex">
        <h5>Listen to the use of the following phrasal verbs. Choose the correct meaning.</h5>
      </div>
      <div class="row">
        <div class="c-flickity">
          <div class="row mt10 mb30">
            <div class="row c-flickity-controls c-flickity-controls-flex">
              <div class="c-flickity-controlsSlides">
                <button class="c-flickity-button is-selected ">Exercise 1</button>
                <button class="c-flickity-button ">Exercise 2</button>
                <button class="c-flickity-button ">Exercise 3</button>
                <button class="c-flickity-button ">Exercise 4</button>
                <button class="c-flickity-button ">Exercise 5</button>
                <button class="c-flickity-button ">Exercise 6</button>
                <button class="c-flickity-button ">Exercise 7</button>
                <button class="c-flickity-button ">Exercise 8</button>
                <button class="c-flickity-button ">Exercise 9</button>
                <button class="c-flickity-button ">Exercise 10</button><span class="c-flickity--cell-total">10</span>
              </div>
              <button class="c-flickity-button c-flickity-button--previous">←</button>
              <button class="c-flickity-button c-flickity-button--next">→</button>
            </div>
          </div>
          <div class="row mt50-sm ">
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Bank on</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_1.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_1.gif" alt="LOOK UP"/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_3">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_4">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_1" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_5">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_1" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_6">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_1" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_7">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_1" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_8">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_1" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_9">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_1" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_10">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Block out</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_2.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_2.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_2" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_13">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_2" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_14">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_2" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_15">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_2" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_16">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_2" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_17">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_2" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_18">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_2" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_19">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_2" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_20">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Block off</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_3.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_3.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_21">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_22">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_3" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_23">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_3" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_24">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_3" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_25">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_3" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_26">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_3" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_27">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_3" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_28">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_3" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_29">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_3" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_30">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Blow up</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_4.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_4.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_31" name="SelInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_31">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_32" name="SelInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_32">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_33" name="SelInputRadio_4" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_33">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_34" name="SelInputRadio_4" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_34">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_35" name="SelInputRadio_4" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_35">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_36" name="SelInputRadio_4" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_36">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_37" name="SelInputRadio_4" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_37">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_38" name="SelInputRadio_4" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_38">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_39" name="SelInputRadio_4" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_39">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_40" name="SelInputRadio_4" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_40">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Boil down to</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_5.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_5.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_41" name="SelInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_41">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_42" name="SelInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_42">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_43" name="SelInputRadio_5" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_43">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_44" name="SelInputRadio_5" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_44">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_45" name="SelInputRadio_5" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_45">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_46" name="SelInputRadio_5" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_46">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_47" name="SelInputRadio_5" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_47">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_48" name="SelInputRadio_5" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_48">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_49" name="SelInputRadio_5" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_49">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_50" name="SelInputRadio_5" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_50">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Break away</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_6.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_6.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_51" name="SelInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_51">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_52" name="SelInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_52">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_53" name="SelInputRadio_6" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_53">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_54" name="SelInputRadio_6" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_54">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_55" name="SelInputRadio_6" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_55">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_56" name="SelInputRadio_6" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_56">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_57" name="SelInputRadio_6" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_57">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_58" name="SelInputRadio_6" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_58">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_59" name="SelInputRadio_6" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_59">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_60" name="SelInputRadio_6" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_60">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Break down</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_7.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_7.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_61" name="SelInputRadio_7" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_61">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_62" name="SelInputRadio_7" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_62">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_63" name="SelInputRadio_7" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_63">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_64" name="SelInputRadio_7" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_64">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_65" name="SelInputRadio_7" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_65">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_66" name="SelInputRadio_7" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_66">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_67" name="SelInputRadio_7" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_67">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_68" name="SelInputRadio_7" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_68">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_69" name="SelInputRadio_7" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_69">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_70" name="SelInputRadio_7" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_70">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Break into</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_8.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_8.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_71" name="SelInputRadio_8" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_71">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_72" name="SelInputRadio_8" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_72">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_73" name="SelInputRadio_8" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_73">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_74" name="SelInputRadio_8" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_74">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_75" name="SelInputRadio_8" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_75">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_76" name="SelInputRadio_8" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_76">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_77" name="SelInputRadio_8" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_77">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_78" name="SelInputRadio_8" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_78">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_79" name="SelInputRadio_8" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_79">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_80" name="SelInputRadio_8" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_80">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Break out</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_9.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_9.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_81" name="SelInputRadio_9" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_81">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_82" name="SelInputRadio_9" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_82">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_83" name="SelInputRadio_9" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_83">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_84" name="SelInputRadio_9" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_84">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_85" name="SelInputRadio_9" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_85">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_86" name="SelInputRadio_9" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_86">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_87" name="SelInputRadio_9" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_87">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_88" name="SelInputRadio_9" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_88">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_89" name="SelInputRadio_9" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_89">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_90" name="SelInputRadio_9" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_90">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Break out of</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_3/assets/audios/act_1_10.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_3/assets/images/act_1_10.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_91" name="SelInputRadio_10" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_91">To separate using a barrier.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_92" name="SelInputRadio_10" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_92">To stop functioning.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_93" name="SelInputRadio_10" value="3"/>
                  <label class="c-CheckSelected" for="inputRadio_93">To explode in anger.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_94" name="SelInputRadio_10" value="4"/>
                  <label class="c-CheckSelected" for="inputRadio_94">To start suddenly.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_95" name="SelInputRadio_10" value="5"/>
                  <label class="c-CheckSelected" for="inputRadio_95">To lose consciousness.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_96" name="SelInputRadio_10" value="6"/>
                  <label class="c-CheckSelected" for="inputRadio_96">To separate from a crowd.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_97" name="SelInputRadio_10" value="7"/>
                  <label class="c-CheckSelected" for="inputRadio_97">To enter by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_98" name="SelInputRadio_10" value="8"/>
                  <label class="c-CheckSelected" for="inputRadio_98">To depend completely on something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_99" name="SelInputRadio_10" value="9"/>
                  <label class="c-CheckSelected" for="inputRadio_99">To escape by force.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_100" name="SelInputRadio_10" value="10"/>
                  <label class="c-CheckSelected" for="inputRadio_100">The most important thing or to summarize.</label>
                  <input class="js-select" type="hidden"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5>Look at the conversation between office workers. Use the phrasal verbs below to fill in the blank spaces</h5>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_1/module_3/assets/images/act_1_11.png" alt=""/></div>
        <div class="col xs12 md6">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center"><span>boils down to | blocked off | banking on | broke into | broke down | break out of | blew up</span></div>
          </div>
          <p><strong class="u-textColor_4">Person 1:</strong>  Good morning, Angela. How are you?</p>
          <p><strong>Person 2:</strong>  I am fine, thanks, Peter. How are you?</p>
          <p><strong class="u-textColor_4">Person 1:</strong>  I am fine thanks. I am 
            <input class="c-input js-escribir" type="text"/> the conference room for the meeting later today because I have no other option.
          </p>
          <p><strong>Person 2:</strong>  Someone spilled some chemicals on the floor in front of the conference room so it is 
            <input class="c-input js-escribir" type="text"/>  . It should be cleaned up by this afternoon.
          </p>
          <p><strong class="u-textColor_4">Person 1:</strong>  I need to print some documents for the meeting but the printer 
            <input class="c-input js-escribir" type="text"/>  can you help me with that?
          </p>
          <p><strong>Person 2:</strong>  Sure, no problem. I need some advice from you. Yesterday my boss 
            <input class="c-input js-escribir" type="text"/>  at me because there was a security breach. Someone 
            <input class="c-input js-escribir" type="text"/>  the storage cabinet and took some stationary but I am not responsible for that. The security team is responsible for that.
          </p>
          <p><strong class="u-textColor_4">Person 1:</strong>  Well, I think it 
            <input class="c-input js-escribir" type="text"/>  communication. You need to speak to your boss and let him know that it wasn’t your fault. You need to 
            <input class="c-input js-escribir" type="text"/>  the habit of not giving your opinion.
          </p>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next');</script>