
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
                    <div class="c-card-phrasalVerbs--header-title">Account for</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_1.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_1.gif" alt="LOOK UP"/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1" ng-click="valorinputa=1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2" ng-click="valorinputa=2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3" ng-click="valorinputa=3"/>
                  <label class="c-CheckSelected" for="inputRadio_3">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="4" ng-click="valorinputa=4"/>
                  <label class="c-CheckSelected" for="inputRadio_4">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_1" value="5" ng-click="valorinputa=5"/>
                  <label class="c-CheckSelected" for="inputRadio_5">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_1" value="6" ng-click="valorinputa=6"/>
                  <label class="c-CheckSelected" for="inputRadio_6">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_1" value="7" ng-click="valorinputa=7"/>
                  <label class="c-CheckSelected" for="inputRadio_7">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_1" value="8" ng-click="valorinputa=8"/>
                  <label class="c-CheckSelected" for="inputRadio_8">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_1" value="9" ng-click="valorinputa=9"/>
                  <label class="c-CheckSelected" for="inputRadio_9">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_1" value="10" ng-click="valorinputa=10"/>
                  <label class="c-CheckSelected" for="inputRadio_10">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputa"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Add up</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_2.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_2.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_2" value="1" ng-click="valorinputb=1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_2" value="2" ng-click="valorinputb=2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_2" value="3" ng-click="valorinputb=3"/>
                  <label class="c-CheckSelected" for="inputRadio_13">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_2" value="4" ng-click="valorinputb=4"/>
                  <label class="c-CheckSelected" for="inputRadio_14">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_2" value="5" ng-click="valorinputb=5"/>
                  <label class="c-CheckSelected" for="inputRadio_15">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_2" value="6" ng-click="valorinputb=6"/>
                  <label class="c-CheckSelected" for="inputRadio_16">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_2" value="7" ng-click="valorinputb=7"/>
                  <label class="c-CheckSelected" for="inputRadio_17">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_2" value="8" ng-click="valorinputb=8"/>
                  <label class="c-CheckSelected" for="inputRadio_18">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_2" value="9" ng-click="valorinputb=9"/>
                  <label class="c-CheckSelected" for="inputRadio_19">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_2" value="10" ng-click="valorinputb=10"/>
                  <label class="c-CheckSelected" for="inputRadio_20">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputb"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Advise against</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_3.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_3.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_3" value="1" ng-click="valorinputc = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_21">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_3" value="2" ng-click="valorinputc = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_22">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_3" value="3" ng-click="valorinputc = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_23">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_3" value="4" ng-click="valorinputc = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_24">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_3" value="5" ng-click="valorinputc = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_25">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_3" value="6" ng-click="valorinputc = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_26">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_3" value="7" ng-click="valorinputc = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_27">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_3" value="8" ng-click="valorinputc = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_28">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_3" value="9" ng-click="valorinputc = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_29">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_3" value="10" ng-click="valorinputc = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_30">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputc"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Agree with</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_4.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_4.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_31" name="SelInputRadio_4" value="1" ng-click="valorinputd = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_31">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_32" name="SelInputRadio_4" value="2" ng-click="valorinputd = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_32">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_33" name="SelInputRadio_4" value="3" ng-click="valorinputd = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_33">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_34" name="SelInputRadio_4" value="4" ng-click="valorinputd = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_34">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_35" name="SelInputRadio_4" value="5" ng-click="valorinputd = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_35">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_36" name="SelInputRadio_4" value="6" ng-click="valorinputd = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_36">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_37" name="SelInputRadio_4" value="7" ng-click="valorinputd = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_37">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_38" name="SelInputRadio_4" value="8" ng-click="valorinputd = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_38">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_39" name="SelInputRadio_4" value="9" ng-click="valorinputd = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_39">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_40" name="SelInputRadio_4" value="10" ng-click="valorinputd = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_40">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputd"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Allow for</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_5.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_5.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_41" name="SelInputRadio_5" value="1" ng-click="valorinpute = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_41">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_42" name="SelInputRadio_5" value="2" ng-click="valorinpute = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_42">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_43" name="SelInputRadio_5" value="3" ng-click="valorinpute = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_43">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_44" name="SelInputRadio_5" value="4" ng-click="valorinpute = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_44">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_45" name="SelInputRadio_5" value="5" ng-click="valorinpute = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_45">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_46" name="SelInputRadio_5" value="6" ng-click="valorinpute = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_46">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_47" name="SelInputRadio_5" value="7" ng-click="valorinpute = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_47">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_48" name="SelInputRadio_5" value="8" ng-click="valorinpute = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_48">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_49" name="SelInputRadio_5" value="9" ng-click="valorinpute = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_49">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_50" name="SelInputRadio_5" value="10" ng-click="valorinpute = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_50">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinpute"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Appeal to</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_6.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_6.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_51" name="SelInputRadio_6" value="1" ng-click="valorinputf = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_51">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_52" name="SelInputRadio_6" value="2" ng-click="valorinputf = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_52">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_53" name="SelInputRadio_6" value="3" ng-click="valorinputf = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_53">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_54" name="SelInputRadio_6" value="4" ng-click="valorinputf = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_54">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_55" name="SelInputRadio_6" value="5" ng-click="valorinputf = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_55">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_56" name="SelInputRadio_6" value="6" ng-click="valorinputf = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_56">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_57" name="SelInputRadio_6" value="7" ng-click="valorinputf = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_57">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_58" name="SelInputRadio_6" value="8" ng-click="valorinputf = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_58">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_59" name="SelInputRadio_6" value="9" ng-click="valorinputf = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_59">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_60" name="SelInputRadio_6" value="10" ng-click="valorinputf = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_60">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputf"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Apply for</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_7.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_7.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_61" name="SelInputRadio_7" value="1" ng-click="valorinputg = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_61">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_62" name="SelInputRadio_7" value="2" ng-click="valorinputg = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_62">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_63" name="SelInputRadio_7" value="3" ng-click="valorinputg = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_63">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_64" name="SelInputRadio_7" value="4" ng-click="valorinputg = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_64">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_65" name="SelInputRadio_7" value="5" ng-click="valorinputg = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_65">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_66" name="SelInputRadio_7" value="6" ng-click="valorinputg = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_66">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_67" name="SelInputRadio_7" value="7" ng-click="valorinputg = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_67">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_68" name="SelInputRadio_7" value="8" ng-click="valorinputg = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_68">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_69" name="SelInputRadio_7" value="9" ng-click="valorinputg = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_69">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_70" name="SelInputRadio_7" value="10" ng-click="valorinputg = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_70">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputg"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Back away</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_8.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_8.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_71" name="SelInputRadio_8" value="1" ng-click="valorinputh = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_71">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_72" name="SelInputRadio_8" value="2" ng-click="valorinputh = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_72">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_73" name="SelInputRadio_8" value="3" ng-click="valorinputh = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_73">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_74" name="SelInputRadio_8" value="4" ng-click="valorinputh = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_74">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_75" name="SelInputRadio_8" value="5" ng-click="valorinputh = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_75">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_76" name="SelInputRadio_8" value="6" ng-click="valorinputh = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_76">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_77" name="SelInputRadio_8" value="7" ng-click="valorinputh = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_77">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_78" name="SelInputRadio_8" value="8" ng-click="valorinputh = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_78">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_79" name="SelInputRadio_8" value="9" ng-click="valorinputh = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_79">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_80" name="SelInputRadio_8" value="10" ng-click="valorinputh = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_80">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputh"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Back down</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_9.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_9.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_81" name="SelInputRadio_9" value="1" ng-click="valorinputi = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_81">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_82" name="SelInputRadio_9" value="2" ng-click="valorinputi = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_82">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_83" name="SelInputRadio_9" value="3" ng-click="valorinputi = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_83">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_84" name="SelInputRadio_9" value="4" ng-click="valorinputi = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_84">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_85" name="SelInputRadio_9" value="5" ng-click="valorinputi = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_85">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_86" name="SelInputRadio_9" value="6" ng-click="valorinputi = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_86">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_87" name="SelInputRadio_9" value="7" ng-click="valorinputi = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_87">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_88" name="SelInputRadio_9" value="8" ng-click="valorinputi = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_88">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_89" name="SelInputRadio_9" value="9" ng-click="valorinputi = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_89">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_90" name="SelInputRadio_9" value="10" ng-click="valorinputi = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_90">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputi"/>
                </div>
              </div>
            </div>
            <div class="c-flickity--cell">
              <div class="col xs12 sm6 md4">
                <div class="c-card-phrasalVerbs">
                  <div class="c-card-phrasalVerbs--header">
                    <div class="c-card-phrasalVerbs--header-title">Back up</div>
                    <button class="c-card-phrasalVerbs--header-audio c-btn-Icon u-bgIconListen u-bgColor_1" ng-audio="unit_1/module_2/assets/audios/act_1_10.mp3"></button>
                  </div>
                  <div class="c-card-phrasalVerbs--body"><img class="c-card-phrasalVerbs--body-image" src="unit_1/module_2/assets/images/act_1_10.gif" alt="" srcset=""/></div>
                </div>
              </div>
              <div class="col xs12 sm6 md7 offset-md1 mt10-xs">
                <div class="w100" layout="grid" grid-columns-repeat="180" grid-gap="0.5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_91" name="SelInputRadio_10" value="1" ng-click="valorinputj = 1"/>
                  <label class="c-CheckSelected" for="inputRadio_91">To take into consideration.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_92" name="SelInputRadio_10" value="2" ng-click="valorinputj = 2"/>
                  <label class="c-CheckSelected" for="inputRadio_92">Make sense.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_93" name="SelInputRadio_10" value="3" ng-click="valorinputj = 3"/>
                  <label class="c-CheckSelected" for="inputRadio_93">To plead.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_94" name="SelInputRadio_10" value="4" ng-click="valorinputj = 4"/>
                  <label class="c-CheckSelected" for="inputRadio_94">To retreat in fear or displeasure.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_95" name="SelInputRadio_10" value="5" ng-click="valorinputj = 5"/>
                  <label class="c-CheckSelected" for="inputRadio_95">To have the same opinion as someone else.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_96" name="SelInputRadio_10" value="6" ng-click="valorinputj = 6"/>
                  <label class="c-CheckSelected" for="inputRadio_96">To support.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_97" name="SelInputRadio_10" value="7" ng-click="valorinputj = 7"/>
                  <label class="c-CheckSelected" for="inputRadio_97">Withdraw or concede defeat.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_98" name="SelInputRadio_10" value="8" ng-click="valorinputj = 8"/>
                  <label class="c-CheckSelected" for="inputRadio_98">To give a reason or explanation.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_99" name="SelInputRadio_10" value="9" ng-click="valorinputj = 9"/>
                  <label class="c-CheckSelected" for="inputRadio_99">Recommend not to do something.</label>
                  <input class="c-inputRadio" type="radio" id="inputRadio_100" name="SelInputRadio_10" value="10" ng-click="valorinputj = 10"/>
                  <label class="c-CheckSelected" for="inputRadio_100">Make a formal request.</label>
                  <input class="js-select" type="hidden" ng-model="valorinputj"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <h5 class="ta-c">Fill in the blank space with one of the correct phrasal verbs from the table below.</h5>
      <div class="c-cardGreen">
        <div class="c-cardGreenContent flex align-items-center justify-center"><span>account for | back up | agree with | apply for | allow for | advises against | add up</span></div>
      </div>
      <div class="row-flex align-items-center">
        <div class="col xs12 md6">
          <p class="lh25">Athletes today need to be very careful with their diet. Athletes need to 
            <input class="c-input js-escribir" name="setInput1" type="text"/> their coaches on the correct dietary supplements that will  
            <input class="c-input js-escribir" name="setInput2" type="text"/> for maximum result of their training. Athletes and coaches need to be careful not to violate the rules when it comes to the use of substances that could potentially enhance their performance unfairly. The world anti-doping agency or WADA, as it is more popularly known, request that athletes  
            <input class="c-input js-escribir" name="setInput3" type="text"/> any performance-enhancing substances that are found in their urine samples. WADA  
            <input class="c-input js-escribir" name="setInput4" type="text"/>the use of dietary supplements that have not been cleared by a doctor. Therefore, if an athlete tests positive for a banned substance their excuse must  
            <input class="c-input js-escribir" name="setInput5" type="text"/> . Athletes can 
            <input class="c-input js-escribir" name="setInput6" type="text"/> medical exemptions but must have evidence to 
            <input class="c-input js-escribir" name="setInput7" type="text"/> their claim
          </p>
        </div>
        <div class="col xs12 md6"><img class="u-responsive-img" src="unit_1/module_2/assets/images/act_1_11.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>flickitySlide('c-flickity', 'c-flickity--cell', 'c-flickity-controlsSlides', 'c-flickity-button', 'c-flickity-button--previous', 'c-flickity-button--next', 500);</script>