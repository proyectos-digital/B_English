
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md pl10 pr10">
          <h5>According to the previous text answer the following questions:</h5>
          <div class="row">
            <p class="mt30 w95"><strong>1. </strong>The main characters of the legend are:</p>
            <div class="row-flex mt20-md">
              <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
              <label class="c-Checkbox" for="inputRadio_1"><span> india Francisca.</span></label>
              <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
              <label class="c-Checkbox" for="inputRadio_2"><span> Don Garcia Gutierrez de Mendoza.</span></label>
              <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
              <label class="c-Checkbox" for="inputRadio_3"><span> The native people of Valledupar. </span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30 w95"><strong>2. </strong>Who triggered the Tupe rebellion?</p>
            <div class="row-flex mt20-md">
              <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
              <label class="c-Checkbox" for="inputRadio_4"><span> Tupe Antoñuelo.</span></label>
              <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
              <label class="c-Checkbox" for="inputRadio_5"><span> Don Garcia Gutierrez de Mendoza´s wife.</span></label>
              <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
              <label class="c-Checkbox" for="inputRadio_6"><span> The Guaricha.</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30 w95"><strong>3. </strong>Who led the Tupe rebellion?</p>
            <div class="row-flex mt20-md">
              <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
              <label class="c-Checkbox" for="inputRadio_7"><span> Tupe Antoñuelo.</span></label>
              <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
              <label class="c-Checkbox" for="inputRadio_8"><span> India Francisca.</span></label>
              <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
              <label class="c-Checkbox" for="inputRadio_9"><span> Tupe Blanco.</span></label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md pl10 pr10">
          <div class="row">
            <p class="mt30 w95"><strong>4. </strong>Who were the natives afraid of?</p>
            <div class="row-flex mt20-md">
              <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_4" value="1"/>
              <label class="c-Checkbox" for="inputRadio_10"><span> Tupe Blanco.</span></label>
              <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_4" value="2"/>
              <label class="c-Checkbox" for="inputRadio_11"><span> Don Garcia Gutierrez de Mendoza.</span></label>
              <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_4" value="3"/>
              <label class="c-Checkbox" for="inputRadio_12"><span> The virgin.</span></label>
            </div>
          </div>
          <div class="row">
            <p class="mt30 w95"><strong>5. </strong>Who won in the end?</p>
            <div class="row-flex mt20-md">
              <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_5" value="1"/>
              <label class="c-Checkbox" for="inputRadio_13"><span> The natives.</span></label>
              <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_5" value="2"/>
              <label class="c-Checkbox" for="inputRadio_14"><span> The Spanish.</span></label>
              <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_5" value="3"/>
              <label class="c-Checkbox" for="inputRadio_15"><span> No one.</span></label>
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