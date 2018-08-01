
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <audio class="centrado" controls="controls" preload="true">
          <source src="unit_2/module_7/assets/audios/test_5.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
        </audio>
      </div>
      <div class="row-flex col-center mt30-xs mt50-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1. </span></strong><span>What natural disaster did the village suffer?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_1">A fire</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_2">A flood</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_3">A tornado</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2. </span></strong><span>Is this the first time the village suffers a flood?</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_4">Yes</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_5">No</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_6">I don´t know</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3. </span></strong><span>This is the worst flood the village has experienced so far.</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_7">Yes</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_8">No</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_9">I don´t know</label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md5 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4. </span></strong><span> What is the villagers’ main concern?  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_10">That they will suffer more floods.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_11">That they can´t take it anymore.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_12">What they are going to do to dry out their homes.</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5. </span></strong><span>What is the doctor recommending?  </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_13">That young children stay at home.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_14">Boiling water or drinking bottled water only.</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
                <label class="c-CheckSelected xs12 sm3 mt10" for="SelectRadio_15">That people should dry their homes.</label>
              </div>
            </p>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>