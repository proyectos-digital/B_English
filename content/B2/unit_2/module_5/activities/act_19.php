
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
          <h5><strong class="u-textColor_4">1. </strong> Read and Listen to the following groups of words:</h5>
        </div>
        <div class="row-flex"> 
          <div class="col col-flex-sm10 col-flex-md5 col-center"> 
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_2/module_5/assets/videos/act_19.mp4" type="video/mp4"/>Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="col col-flex-xs12 col-flex-sm11 col-flex-md7 col-center mt30-xs mt5-md">
            <div class="row-flex"> 
              <div class="col col-flex-sm5 col-flex-md5 col-flex-lg7 col-center mt30-xs mt5-md">
                <div class="c-cardListen" style="background-image: url('unit_2/module_5/assets/images/act_19_{{listenImage}}.png');">
                  <div class="c-cardListen--word">{{ listenWord_a }}</div>
                </div>
              </div>
              <div class="col col-flex-sm7 col-flex-md7 col-flex-lg5 col-center mt30-xs mt5-md">
                <div class="row-flex">
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_1" ng-audio="unit_2/module_5/assets/audios/act_19_1.mp3" ng-click="listenWord_a='Sting'; listenImage=1"><span>Sting</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_2" ng-audio="unit_2/module_5/assets/audios/act_19_2.mp3" ng-click="listenWord_a='Ring'; listenImage=2"><span>Ring</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_3" ng-audio="unit_2/module_5/assets/audios/act_19_3.mp3" ng-click="listenWord_a='Spring'; listenImage=3"><span>Spring</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_4" ng-audio="unit_2/module_5/assets/audios/act_19_4.mp3" ng-click="listenWord_a='Wing'; listenImage=4"><span>Wing </span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_5" ng-audio="unit_2/module_5/assets/audios/act_19_5.mp3" ng-click="listenWord_a='Tongue'; listenImage=5"><span>Tongue</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_6" ng-audio="unit_2/module_5/assets/audios/act_19_6.mp3" ng-click="listenWord_a='King'; listenImage=6"><span>King</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_7" ng-audio="unit_2/module_5/assets/audios/act_19_7.mp3" ng-click="listenWord_a='Sing'; listenImage=7"><span>Sing</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_8" ng-audio="unit_2/module_5/assets/audios/act_19_8.mp3" ng-click="listenWord_a='String'; listenImage=8"><span>String </span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_9" ng-audio="unit_2/module_5/assets/audios/act_19_9.mp3" ng-click="listenWord_a='Swing'; listenImage=9"><span>Swing </span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_10" ng-audio="unit_2/module_5/assets/audios/act_19_10.mp3" ng-click="listenWord_a='Thing'; listenImage=10"><span>Thing</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_11" ng-audio="unit_2/module_5/assets/audios/act_19_11.mp3" ng-click="listenWord_a='Fang'; listenImage=11"><span>Fang</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_12" ng-audio="unit_2/module_5/assets/audios/act_19_12.mp3" ng-click="listenWord_a='Hang'; listenImage=12"><span>Hang</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_13" ng-audio="unit_2/module_5/assets/audios/act_19_13.mp3" ng-click="listenWord_a='Bang'; listenImage=13"><span>Bang</span></label>
                  </div>
                  <div class="col md6 sm4 xs6 mt10">
                    <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_1" value="1"/>
                    <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_14" ng-audio="unit_2/module_5/assets/audios/act_19_14.mp3" ng-click="listenWord_a='Ting'; listenImage=14"><span>Ting</span></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row u-animationFadeDown" ng-show="s_actividad == 2">
        <div class="row-flex">
          <div class="col col-flex-sm12 col-flex-md4 col-center">
            <div class="row">
              <h5>Pronouncing ING</h5>
              <h6>Listen to the following verbs in -ING form:</h6>
            </div>
            <div class="row-flex justify-around mt30">
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_15" ng-audio="unit_2/module_5/assets/audios/act_19_15.mp3"><span>Doing </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_16" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_16" ng-audio="unit_2/module_5/assets/audios/act_19_16.mp3"><span>Putting </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_17" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_17" ng-audio="unit_2/module_5/assets/audios/act_19_17.mp3"><span>Staying </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_18" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_18" ng-audio="unit_2/module_5/assets/audios/act_19_18.mp3"><span>Asking</span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_19" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_19" ng-audio="unit_2/module_5/assets/audios/act_19_19.mp3"><span>Letting   </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_20" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_20" ng-audio="unit_2/module_5/assets/audios/act_19_20.mp3"><span>Getting</span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_21" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_21" ng-audio="unit_2/module_5/assets/audios/act_19_21.mp3"><span>Crying </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_22" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_22" ng-audio="unit_2/module_5/assets/audios/act_19_22.mp3"><span>Working</span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_23" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_23" ng-audio="unit_2/module_5/assets/audios/act_19_23.mp3"><span>Voting </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_24" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_24" ng-audio="unit_2/module_5/assets/audios/act_19_24.mp3"><span>Playing</span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_25" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_25" ng-audio="unit_2/module_5/assets/audios/act_19_25.mp3"><span>Trying </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_26" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_26" ng-audio="unit_2/module_5/assets/audios/act_19_26.mp3"><span>Running</span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_27" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_27" ng-audio="unit_2/module_5/assets/audios/act_19_27.mp3"><span>Thinking </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_28" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_28" ng-audio="unit_2/module_5/assets/audios/act_19_28.mp3"><span>Referring</span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_29" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_29" ng-audio="unit_2/module_5/assets/audios/act_19_29.mp3"><span>Telling </span></label>
              </div>
              <div class="col md6 sm4 xs6 mt10">
                <input class="c-inputRadio" type="radio" id="inputRadio_30" name="SelInputRadio_1" value="1"/>
                <label class="c-CheckIconSelected u-bgIconPlay w90" for="inputRadio_30" ng-audio="unit_2/module_5/assets/audios/act_19_30.mp3"><span>Going</span></label>
              </div>
            </div>
          </div>
          <div class="col col-flex-sm12 col-flex-md6 col-center">
            <div class="row">
              <h6>The -ING ending is a nasal sound. Native speakers pronounce it in a relaxed way. Don’t exaggerate.</h6>
              <p class="ta-c mt20"><strong class="u-textColor_4-dark">[ŋ]</strong></p>
              <p class="mt20"><strong class="u-textColor_4-dark">A.</strong> What are you doing?</p>
              <p><strong class="u-textColor_4-dark">B.</strong> I am going to school.</p>
              <p class="mt40"><strong class="u-textColor_4-dark">A.</strong> Are you working in the school?</p>
              <p><strong class="u-textColor_4-dark">B.</strong> No, I am playing in the school orchestra.</p>
              <p class="mt40"><strong class="u-textColor_4-dark">A.</strong> What are you playing?</p>
              <p><strong class="u-textColor_4-dark">B.</strong> I am playing the trombone.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row-flex u-animationFadeDown" ng-show="s_actividad == 3">
        <div class="row-flex ">
          <h5>You will listen to 8 phrases, circle yes if you hear /m/ and no if you don ́t.</h5>
        </div>
        <div class="row mt40-md">
          <div class="col-flex-xs10 col-flex-sm9 col-flex-md5 col-center">
            <div class="row-flex justify-between">
              
              
              <div class="col-flex-xs7 col-flex-sm5 col-center">
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">1. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_1" name="selectionGrupo_1" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection_1">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_2" name="selectionGrupo_1" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection_2">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">2. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_3" name="selectionGrupo_2" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection_3">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_4" name="selectionGrupo_2" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection_4">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">3. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_5" name="selectionGrupo_3" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection_5">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_6" name="selectionGrupo_3" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection_6">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">4. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_7" name="selectionGrupo_4" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection_7">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection_8" name="selectionGrupo_4" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection_8">NO</label>
                </div>
              </div>
              
              <div class="col-flex-xs7 col-flex-sm5 col-center offset-md1">
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">5. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection_9" name="selectionGrupo_5" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection_9">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection10" name="selectionGrupo_5" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection10">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">6. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection11" name="selectionGrupo_6" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection11">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection12" name="selectionGrupo_6" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection12">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">7. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection13" name="selectionGrupo_7" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection13">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection14" name="selectionGrupo_7" value="2"/>
                  <label class="c-CheckSelected" for="inputSelection14">NO</label>
                </div>
                <div class="row-flex justify-between mb10"><strong class="u-textColor_4">8. 
                    <button class="c-btn-Icon u-bgIconListen"></button></strong>
                  <input class="c-inputRadio" type="radio" id="inputSelection15" name="selectionGrupo_8" value="1"/>
                  <label class="c-CheckSelected" for="inputSelection15">YES</label>
                  <input class="c-inputRadio" type="radio" id="inputSelection16" name="selectionGrupo_8" value="2"/>
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
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()" ng-show="s_actividad == 3"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()" ng-show="s_actividad == 3"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<script>speechRecognition();</script>