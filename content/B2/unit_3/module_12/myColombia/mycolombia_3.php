
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <h5>According to the previous text answer the following questions:</h5>
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p>• What is an appropriate title for the conversation? </p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-Checkbox" for="SelectRadio_1">The optimist and the pessimist.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-Checkbox" for="SelectRadio_2">Transport in Bogota. </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
              <label class="c-Checkbox" for="SelectRadio_3">Colombia future hope versus reality.  </label>
            </div>
          </div>
          <div class="row mb50">
            <p>• What is James opinion on politicians? </p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-Checkbox" for="SelectRadio_4">He thinks they are hardworking people.  </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-Checkbox" for="SelectRadio_5">Does not trust them. </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
              <label class="c-Checkbox" for="SelectRadio_6">He believes they will serve Colombia well.   </label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Who thinks everything is going to be alright?</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-Checkbox checkbox-mini" for="SelectRadio_7">James.  </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-Checkbox checkbox-mini" for="SelectRadio_8">Francis.  </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
              <label class="c-Checkbox checkbox-mini" for="SelectRadio_9">Both.                     </label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p>• James thinks.</p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
              <label class="c-Checkbox" for="SelectRadio_10">Public transport is one of the major problems in Colombia. </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
              <label class="c-Checkbox" for="SelectRadio_11">Will be fixed by the politician with the new Transmilenio station. </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
              <label class="c-Checkbox" for="SelectRadio_12">Cartagena’s public transport system should be like Bogota. </label>
            </div>
          </div>
          <div class="row mb50">
            <p>• Colombia is one of the happiest places in the world because...</p>
            <div class="flex-column">
              <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
              <label class="c-Checkbox" for="SelectRadio_13">The transmilenio station will have shops, offices and apartment. </label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
              <label class="c-Checkbox" for="SelectRadio_14">They always plan for the future.</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
              <label class="c-Checkbox" for="SelectRadio_15">Everyone thinks the future will be great.</label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"> </button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>