
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper" ng-init="listenImage = 1; s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="3" ng-click="s_actividad = 3" ng-class="(s_actividad == 3) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a act_19">
    <section class="template-content">
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row-flex ">
          <h5>Read and Listen to the following groups of words: • ending in “<span class="u-textColor_4">sion</span>”:</h5>
        </div>
        <div class="row-flex">
          <div class="col col-flex-sm10 col-flex-md5 col-center">  
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_1/assets/videos/act_19.mp4" type="video/mp4"/>Your browser does not support the video tag. 
              </video>
            </div>
          </div>
          <div class="col col-flex-xs12 col-flex-sm11 col-flex-md7 col-center mt30-xs mt5-md">
            <div class="row-flex">
              <div class="col col-flex-sm5 col-flex-md5 col-flex-lg7 col-center mt30-xs mt5-md">
                <div class="c-cardListen" style="background-image: url('unit_1/module_1/assets/images/act_19_{{listenImage}}.png');">
                  <div class="c-cardListen--word">{{ listenWord_a }}</div>
                </div>
              </div>
              <div class="col col-flex-sm7 col-flex-md7 col-flex-lg5 col-center mt30-xs mt5-md">
                <div class="row-flex">
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_1" ng-audio="unit_1/module_1/assets/audios/act_19_1.mp3" ng-click="listenWord_a='conclusion'; listenImage=1"><span>conclusion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_2" ng-audio="unit_1/module_1/assets/audios/act_19_2.mp3" ng-click="listenWord_a='confusion'; listenImage=2"><span>confusion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_3" ng-audio="unit_1/module_1/assets/audios/act_19_3.mp3" ng-click="listenWord_a='decision'; listenImage=3"><span>decision</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_4" ng-audio="unit_1/module_1/assets/audios/act_19_4.mp3" ng-click="listenWord_a='division'; listenImage=4"><span>division</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_5" ng-audio="unit_1/module_1/assets/audios/act_19_5.mp3" ng-click="listenWord_a='occasion'; listenImage=5"><span>occasion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_6" ng-audio="unit_1/module_1/assets/audios/act_19_6.mp3" ng-click="listenWord_a='television'; listenImage=6"><span>television</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_7" ng-audio="unit_1/module_1/assets/audios/act_19_7.mp3" ng-click="listenWord_a='vision'; listenImage=7"><span>vision</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_8" ng-audio="unit_1/module_1/assets/audios/act_19_8.mp3" ng-click="listenWord_a='collision'; listenImage=8"><span>collision</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_9" ng-audio="unit_1/module_1/assets/audios/act_19_9.mp3" ng-click="listenWord_a='exclusion'; listenImage=9"><span>exclusion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_10" ng-audio="unit_1/module_1/assets/audios/act_19_10.mp3" ng-click="listenWord_a='explosion'; listenImage=10"><span>explosion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_11" ng-audio="unit_1/module_1/assets/audios/act_19_11.mp3" ng-click="listenWord_a='fusion'; listenImage=11"><span>fusion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_12" ng-audio="unit_1/module_1/assets/audios/act_19_12.mp3" ng-click="listenWord_a='illusion'; listenImage=12"><span>illusion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_13" ng-audio="unit_1/module_1/assets/audios/act_19_13.mp3" ng-click="listenWord_a='inclusion'; listenImage=13"><span>inclusion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_14" ng-audio="unit_1/module_1/assets/audios/act_19_14.mp3" ng-click="listenWord_a='invasion'; listenImage=14"><span>invasion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_15" ng-audio="unit_1/module_1/assets/audios/act_19_15.mp3" ng-click="listenWord_a='lesion'; listenImage=15"><span>lesion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_16" ng-audio="unit_1/module_1/assets/audios/act_19_16.mp3" ng-click="listenWord_a='persuasion'; listenImage=16"><span>persuasion</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_17" ng-audio="unit_1/module_1/assets/audios/act_19_17.mp3" ng-click="listenWord_a='precision'; listenImage=17"><span>precision</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_18" ng-audio="unit_1/module_1/assets/audios/act_19_18.mp3" ng-click="listenWord_a='revision'; listenImage=18"><span>revision</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_19" ng-audio="unit_1/module_1/assets/audios/act_19_19.mp3" ng-click="listenWord_a='provision'; listenImage=19"><span>provision</span></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h5>Read and Listen to the following groups of words:</h5>
        <div class="row-flex">
          <div class="col col-flex-sm10 col-flex-md6 col-flex-lg5 col-center mt30-xs mt5-md">
            <div class="c-cardListen" style="background-image: url('unit_1/module_1/assets/images/act_19_{{listenImage}}.png');">
              <div class="c-cardListen--word">{{ listenWord_a }}</div>
            </div>
          </div>
          <div class="col col-flex-sm12 col-flex-md6 col-flex-lg7 col-center mt30-xs mt5-md">
            <div class="row-flex">
              <div class="col col-flex-sm10 md6 lg5 mt20-xs mt5-md col-center">
                <div Class="col xs12">
                  <h6>ending in "<strong class="u-textColor_4">eg</strong>"</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_21" ng-audio="unit_1/module_1/assets/audios/act_19_21.mp3" ng-click="listenWord_a='beige'; listenImage=2"><span>beige</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_22" ng-audio="unit_1/module_1/assets/audios/act_19_22.mp3" ng-click="listenWord_a='rouge'; listenImage=3"><span>rouge</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_23" ng-audio="unit_1/module_1/assets/audios/act_19_23.mp3" ng-click="listenWord_a='collage'; listenImage=4"><span>collage</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_24" ng-audio="unit_1/module_1/assets/audios/act_19_24.mp3" ng-click="listenWord_a='sabotage'; listenImage=5"><span>sabotage</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_25" ng-audio="unit_1/module_1/assets/audios/act_19_25.mp3" ng-click="listenWord_a='massage'; listenImage=6"><span>massage</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_26" ng-audio="unit_1/module_1/assets/audios/act_19_26.mp3" ng-click="listenWord_a='camouflage'; listenImage=7"><span>camouflage</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_27" ng-audio="unit_1/module_1/assets/audios/act_19_27.mp3" ng-click="listenWord_a='mirage'; listenImage=8"><span>mirage</span></label>
                </div>
                <div Class="col xs12 mt10-xs mt40-sm">
                  <h6>ending in "<strong class="u-textColor_4">sure</strong>"</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_28" ng-audio="unit_1/module_1/assets/audios/act_19_28.mp3" ng-click="listenWord_a='Exposure'; listenImage=9"><span>Exposure</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_29" ng-audio="unit_1/module_1/assets/audios/act_19_29.mp3" ng-click="listenWord_a='enclosure'; listenImage=10"><span>enclosure</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_30" ng-audio="unit_1/module_1/assets/audios/act_19_30.mp3" ng-click="listenWord_a='measure'; listenImage=12"><span>measure</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_31" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_31" ng-audio="unit_1/module_1/assets/audios/act_19_31.mp3" ng-click="listenWord_a='leisure'; listenImage=13"><span>leisure</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_32" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_32" ng-audio="unit_1/module_1/assets/audios/act_19_32.mp3" ng-click="listenWord_a='pleasure'; listenImage=14"><span>pleasure</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_33" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_33" ng-audio="unit_1/module_1/assets/audios/act_19_33.mp3" ng-click="listenWord_a='treasure'; listenImage=15"><span>treasure</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_34" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_34" ng-audio="unit_1/module_1/assets/audios/act_19_34.mp3" ng-click="listenWord_a='disclosure'; listenImage=16"><span>disclosure</span></label>
                </div>
              </div>
              
              <div class="col col-flex-sm10 md6 lg5 mt20-xs mt5-md col-center">
                <div Class="col xs12">
                  <h6>ending in "<strong class="u-textColor_4">sual</strong>"</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_35" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_35" ng-audio="unit_1/module_1/assets/audios/act_19_35.mp3" ng-click="listenWord_a='visual'; listenImage=17"><span>visual</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_36" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_36" ng-audio="unit_1/module_1/assets/audios/act_19_36.mp3" ng-click="listenWord_a='usual'; listenImage=18"><span>usual</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_37" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_37" ng-audio="unit_1/module_1/assets/audios/act_19_37.mp3" ng-click="listenWord_a='casual'; listenImage=19"><span>casual</span></label>
                </div>
                <div Class="col xs12 mt20-xs mt40-sm">
                  <h6>Other words with the same sound:</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_38" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_38" ng-audio="unit_1/module_1/assets/audios/act_19_38.mp3" ng-click="listenWord_a='Amnesia'; listenImage=20"><span>Amnesia</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_39" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_39" ng-audio="unit_1/module_1/assets/audios/act_19_39.mp3" ng-click="listenWord_a='genre'; listenImage=21"><span>genre</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_40" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_40" ng-audio="unit_1/module_1/assets/audios/act_19_40.mp3" ng-click="listenWord_a='luxurious'; listenImage=22"><span>luxurious</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_41" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_41" ng-audio="unit_1/module_1/assets/audios/act_19_41.mp3" ng-click="listenWord_a='Asia'; listenImage=23"><span>Asia</span></label>
                </div>
                <div Class="col xs12 mt20-xs mt40-sm">
                  <h6>Variant pronunciations in British and American English:</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_42" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_42" ng-audio="unit_1/module_1/assets/audios/act_19_42.mp3" ng-click="listenWord_a='anaesthesia'; listenImage=24"><span>anaesthesia</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_43" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_43" ng-audio="unit_1/module_1/assets/audios/act_19_43.mp3" ng-click="listenWord_a='Garage'; listenImage=25"><span>Garage</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_44" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_44" ng-audio="unit_1/module_1/assets/audios/act_19_44.mp3" ng-click="listenWord_a='massage'; listenImage=26"><span>massage</span></label>
                </div>
              </div>
              <div class="col col-flex-sm10 md6 lg5 col-center"></div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="row-flex u-animationFadeDown" ng-show="s_actividad == 3">
        <h5>Practice with the speech recognition:</h5>
        <div class="row-flex mt40-md">
          <div class="col-flex-12">
            <h6 class="offset-sm1 offset-md0">Select the word</h6>
          </div>
          <div class="col-flex-xs12 col-flex-sm10 col-flex-md5 col-center">
            <div class="row-flex justify-between">
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_1" name="recognitionGrupo_a" data-verb="television"/>
                <label class="c-CheckSelected w100" for="recognition_1" ng-click="recognitionTitle='television'">television</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_2" name="recognitionGrupo_a" data-verb="vision"/>
                <label class="c-CheckSelected w100" for="recognition_2" ng-click="recognitionTitle='vision'">vision</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_3" name="recognitionGrupo_a" data-verb="explosion"/>
                <label class="c-CheckSelected w100" for="recognition_3" ng-click="recognitionTitle='explosion'">explosion</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_4" name="recognitionGrupo_a" data-verb="fusion"/>
                <label class="c-CheckSelected w100" for="recognition_4" ng-click="recognitionTitle='fusion'">fusion</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_5" name="recognitionGrupo_a" data-verb="precision"/>
                <label class="c-CheckSelected w100" for="recognition_5" ng-click="recognitionTitle='precision'">precision</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_6" name="recognitionGrupo_a" data-verb="revision"/>
                <label class="c-CheckSelected w100" for="recognition_6" ng-click="recognitionTitle='revision'">revision</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_7" name="recognitionGrupo_a" data-verb="usual"/>
                <label class="c-CheckSelected w100" for="recognition_7" ng-click="recognitionTitle='usual'">usual</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_8" name="recognitionGrupo_a" data-verb="visual"/>
                <label class="c-CheckSelected w100" for="recognition_8" ng-click="recognitionTitle='visual'">visual</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_9" name="recognitionGrupo_a" data-verb="casual"/>
                <label class="c-CheckSelected w100" for="recognition_9" ng-click="recognitionTitle='casual'">casual</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_10" name="recognitionGrupo_a" data-verb="measure"/>
                <label class="c-CheckSelected w100" for="recognition_10" ng-click="recognitionTitle='measure'">measure</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_11" name="recognitionGrupo_a" data-verb="pleasure"/>
                <label class="c-CheckSelected w100" for="recognition_11" ng-click="recognitionTitle='pleasure'">pleasure</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_12" name="recognitionGrupo_a" data-verb="leisure"/>
                <label class="c-CheckSelected w100" for="recognition_12" ng-click="recognitionTitle='leisure'">leisure</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_13" name="recognitionGrupo_a" data-verb="belge"/>
                <label class="c-CheckSelected w100" for="recognition_13" ng-click="recognitionTitle='belge'">belge</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_14" name="recognitionGrupo_a" data-verb="collage"/>
                <label class="c-CheckSelected w100" for="recognition_14" ng-click="recognitionTitle='collage'">collage</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_15" name="recognitionGrupo_a" data-verb="amnesia"/>
                <label class="c-CheckSelected w100" for="recognition_15" ng-click="recognitionTitle='amnesia'">amnesia</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_16" name="recognitionGrupo_a" data-verb="genre"/>
                <label class="c-CheckSelected w100" for="recognition_16" ng-click="recognitionTitle='genre'">genre</label>
              </div>
              <div class="col xs4 sm3 md4 mb10">
                <input class="c-inputRadio c-recognitionWord" type="radio" id="recognition_17" name="recognitionGrupo_a" data-verb="Asia"/>
                <label class="c-CheckSelected w100" for="recognition_17" ng-click="recognitionTitle='Asia'">Asia</label>
              </div>
            </div>
          </div>
          <div class="col-flex-xs12 col-flex-sm10 col-flex-md6 col-center">
            <div class="c-recognition on-pause">
              <div class="c-recognitionTitle" ng-bind="recognitionTitle"></div>
              <textarea class="c-recognitionAnswer" id="recognitionSaveText" placeholder="........"></textarea>
            </div>
            <div class="row mt20 ta-c">
              <button class="c-btn-IconAction u-bgIconRecord c-recognitionRec"></button>
              <button class="c-btn-IconAction u-bgIconCheck c-recognitionCheck"></button>
              <button class="c-btn-IconAction u-bgIconRefresh recognitionReload u-animationFadeDown" ng-click="reloadClassMultiple()"></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>speechRecognition();</script>