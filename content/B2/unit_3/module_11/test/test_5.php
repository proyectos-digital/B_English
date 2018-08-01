
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper test_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-xs12 col-flex-md7 col-center md ta-j padding20">
          <audio class="row mt20" controls="controls">
            <source src="unit_3/module_11/assets/audios/test_5.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center md ta-j padding20">
          <div class="row mt20">
            <div class="col-flex mt30"><strong class="u-textColor_4-dark"> 1. </strong>Where does the conversation take place?</div>
            <div class="mb20 row row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_1" ng-click="txtcaptura_a='down'">At a restaurant.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_2" ng-click="txtcaptura_a='up'">At school.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_1" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_3" ng-click="txtcaptura_a='up'">In an office.</label>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>What is the relationship between the speakers?</div>
            </div>
            <div class="mb20 row row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_4" ng-click="txtcaptura_a='down'">Family.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_5" ng-click="txtcaptura_a='up'">Co-workers.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_2" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_6" ng-click="txtcaptura_a='up'">Friends.</label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center md ta-j padding20">
          <div class="row mt20">
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>What is happening today at 3 o´clock?</div>
            </div>
            <div class="mb20 row row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_7" ng-click="txtcaptura_a='down'">A meeting with the boss.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_8" ng-click="txtcaptura_a='up'">A focus group.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_3" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_9" ng-click="txtcaptura_a='up'">A business lunch.</label>
            </div>
            <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>What does the woman think happen today?</div>
            <div class="mb20 row row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_10" ng-click="txtcaptura_a='down'">A meeting with the boss.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_11" ng-click="txtcaptura_a='up'">A focus group.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_4" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_12" ng-click="txtcaptura_a='up'">A business lunch.</label>
            </div>
            <div class="mb20 row-flex mt40">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>What happens tomorrow?</div>
            </div>
            <div class="mb20 row row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_13" ng-click="txtcaptura_a='down'">A meeting with the boss.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_14" ng-click="txtcaptura_a='up'">A focus group.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_15" name="SelInputRadio_5" value="3"/>
              <label class="c-CheckSelected" for="inputRadio_15" ng-click="txtcaptura_a='up'">A business lunch.</label>
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