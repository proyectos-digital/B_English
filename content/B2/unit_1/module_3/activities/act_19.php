
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper" ng-init="listenImage = 1; s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a act_19">
    <section class="template-content">
      <div class="row u-animationFadeDown" ng-show="s_actividad == 1">
        <div class="row-flex">
          <div class="col col-flex-sm5 col-center"> 
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_1/module_3/assets/videos/act_19.mp4" type="video/mp4"/>Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <h5>Read and Listen to the following groups of words:</h5>
        <div class="row-flex text-align-center">
          <div class="col col-flex-sm10 col-flex-md6 col-flex-lg5 col-center mt30-xs mt5-md">
            <div class="c-cardListen" style="background-image: url('unit_1/module_3/assets/images/act_19_{{listenImage}}.png');">
              <div class="c-cardListen--word">{{ listenWord_a }}</div>
            </div>
          </div>
          <div class="col col-flex-sm12 col-flex-md6 col-flex-lg7 col-center mt30-xs mt5-md">
            <div class="row-flex">
              <div class="col col-flex-sm10 md6 lg5 mt20-xs mt5-md col-center">
                <div Class="col xs12">
                  <h6>N</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_1" ng-audio="unit_1/module_3/assets/audios/act_19_1.mp3" ng-click="listenWord_a='Needle'; listenImage=2"><span>Needle</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_2" ng-audio="unit_1/module_3/assets/audios/act_19_2.mp3" ng-click="listenWord_a='Napkin'; listenImage=3"><span>Napkin</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_3" ng-audio="unit_1/module_3/assets/audios/act_19_3.mp3" ng-click="listenWord_a='Neighbors'; listenImage=4"><span>Neighbors</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_4" ng-audio="unit_1/module_3/assets/audios/act_19_4.mp3" ng-click="listenWord_a='Night'; listenImage=5"><span>Night</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_5" ng-audio="unit_1/module_3/assets/audios/act_19_5.mp3" ng-click="listenWord_a='Nectarine'; listenImage=6"><span>Nectarine</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_6" ng-audio="unit_1/module_3/assets/audios/act_19_6.mp3" ng-click="listenWord_a='Enough'; listenImage=7"><span>Enough</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_7" ng-audio="unit_1/module_3/assets/audios/act_19_7.mp3" ng-click="listenWord_a='Open'; listenImage=8"><span>Open</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_8" ng-audio="unit_1/module_3/assets/audios/act_19_8.mp3" ng-click="listenWord_a='Soon'; listenImage=9"><span>Soon</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_9" ng-audio="unit_1/module_3/assets/audios/act_19_9.mp3" ng-click="listenWord_a='Nurse'; listenImage=10"><span>Nurse</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_10" ng-audio="unit_1/module_3/assets/audios/act_19_10.mp3" ng-click="listenWord_a='Nail'; listenImage=11"><span>Nail</span></label>
                </div>
                <div Class="col xs12 mt10-xs mt40-sm">
                  <h6>Gn</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_11" ng-audio="unit_1/module_3/assets/audios/act_19_11.mp3" ng-click="listenWord_a='Gnome'; listenImage=12"><span>Gnome</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_12" ng-audio="unit_1/module_3/assets/audios/act_19_12.mp3" ng-click="listenWord_a='Gnat'; listenImage=13"><span>Gnat</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_13" ng-audio="unit_1/module_3/assets/audios/act_19_13.mp3" ng-click="listenWord_a='Sign'; listenImage=14"><span>Sign</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_14" ng-audio="unit_1/module_3/assets/audios/act_19_14.mp3" ng-click="listenWord_a='Design'; listenImage=15"><span>Design</span></label>
                </div>
              </div>
              
              <div class="col col-flex-sm10 md6 lg5 mt20-xs mt5-md col-center">
                <div Class="col xs12">
                  <h6>Nn</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_15" ng-audio="unit_1/module_3/assets/audios/act_19_15.mp3" ng-click="listenWord_a='Penny'; listenImage=16"><span>Penny</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_16" ng-audio="unit_1/module_3/assets/audios/act_19_16.mp3" ng-click="listenWord_a='Funnel'; listenImage=17"><span>Funnel</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_17" ng-audio="unit_1/module_3/assets/audios/act_19_17.mp3" ng-click="listenWord_a='Bunny'; listenImage=18"><span>Bunny</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_18" ng-audio="unit_1/module_3/assets/audios/act_19_18.mp3" ng-click="listenWord_a='Funny'; listenImage=19"><span>Funny</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_19" ng-audio="unit_1/module_3/assets/audios/act_19_19.mp3" ng-click="listenWord_a='Dinner'; listenImage=20"><span>Dinner</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_20" ng-audio="unit_1/module_3/assets/audios/act_19_20.mp3" ng-click="listenWord_a='Tennis'; listenImage=21"><span>Tennis</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_21" ng-audio="unit_1/module_3/assets/audios/act_19_21.mp3" ng-click="listenWord_a='Sunny'; listenImage=22"><span>Sunny</span></label>
                </div>
                <div Class="col xs12 mt20-xs mt40-sm">
                  <h6>Kn</h6>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_22" ng-audio="unit_1/module_3/assets/audios/act_19_22.mp3" ng-click="listenWord_a='Amnesia'; listenImage=23"><span>Knife</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_23" ng-audio="unit_1/module_3/assets/audios/act_19_23.mp3" ng-click="listenWord_a='Knee'; listenImage=24"><span>Knee</span></label>
                </div>
                <div class="col md12 sm4 xs6 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_1" value="1"/>
                  <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_24" ng-audio="unit_1/module_3/assets/audios/act_19_24.mp3" ng-click="listenWord_a='Know'; listenImage=25"><span>Know</span></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row-flex u-animationFadeDown" ng-show="s_actividad == 3">
        <div class="row-flex ">
          <h5>Now you will listen to 8 phrases, circle yes if you hear /n/ and no if you don't.</h5>
        </div>
        <div class="row mt40-md">
          <div class="col-flex-xs10 col-flex-sm9 col-flex-md5 col-center">
            <div class="row-flex justify-between">
              
              
              <div class="col-flex-xs7 col-flex-sm5 col-center">
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">1. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_1" name="selectionGrupo_a"/>
                  <label class="c-CheckSelected" for="inputSelection_1">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_2" name="selectionGrupo_a"/>
                  <label class="c-CheckSelected" for="inputSelection_2">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">2. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_3" name="selectionGrupo_b"/>
                  <label class="c-CheckSelected" for="inputSelection_3">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_4" name="selectionGrupo_b"/>
                  <label class="c-CheckSelected" for="inputSelection_4">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">3. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_5" name="selectionGrupo_c"/>
                  <label class="c-CheckSelected" for="inputSelection_5">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_6" name="selectionGrupo_c"/>
                  <label class="c-CheckSelected" for="inputSelection_6">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">4. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_7" name="selectionGrupo_d"/>
                  <label class="c-CheckSelected" for="inputSelection_7">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_8" name="selectionGrupo_d"/>
                  <label class="c-CheckSelected" for="inputSelection_8">NO</label>
                </div>
              </div>
              
              <div class="col-flex-xs7 col-flex-sm5 col-center offset-md1">
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">5. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_9" name="selectionGrupo_e"/>
                  <label class="c-CheckSelected" for="inputSelection_9">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection10" name="selectionGrupo_e"/>
                  <label class="c-CheckSelected" for="inputSelection10">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">6. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection11" name="selectionGrupo_f"/>
                  <label class="c-CheckSelected" for="inputSelection11">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection12" name="selectionGrupo_f"/>
                  <label class="c-CheckSelected" for="inputSelection12">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">7. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection13" name="selectionGrupo_g"/>
                  <label class="c-CheckSelected" for="inputSelection13">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection14" name="selectionGrupo_g"/>
                  <label class="c-CheckSelected" for="inputSelection14">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">8. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection15" name="selectionGrupo_h"/>
                  <label class="c-CheckSelected" for="inputSelection15">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection16" name="selectionGrupo_h"/>
                  <label class="c-CheckSelected" for="inputSelection16">NO</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>speechRecognition();</script>