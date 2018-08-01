
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row mt40 ">
        <h5><strong class="u-textColor_4">1. </strong> According to the previous text answer the following questions:</h5>
        <div class="row-flex justify-center">
          <div class="xs12 md6 padding20 mt10-xs">
            <h6 class="mt30 w95"><strong>1. </strong>What is a good title for this conversation?</h6>
            <div class="row-flex justify-evenly flex-column mt20-md">
              <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
              <label class="c-Checkbox" for="inputRadio_1"><span class="ta-c"> 1. Taxis in Colombia   </span></label>
              <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
              <label class="c-Checkbox" for="inputRadio_2"><span class="ta-c"> 2. Comparing taxi and Uber services in Colombia.</span></label>
              <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
              <label class="c-Checkbox" for="inputRadio_3"><span class="ta-c"> 3. Andrea’s party. </span></label>
            </div>
            <h6 class="mt30 w95"><strong>2. </strong> Riley wants to take a taxi because...</h6>
            <div class="row-flex justify-evenly flex-column mt20-md">
              <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
              <label class="c-Checkbox" for="inputRadio_4"><span class="ta-c"> 1. He does not know how to drive a car  </span></label>
              <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
              <label class="c-Checkbox" for="inputRadio_5"><span class="ta-c"> 2. He is getting a ride with Nacho who knows how to get to the party. </span></label>
              <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
              <label class="c-Checkbox" for="inputRadio_6"><span class="ta-c"> 3. He knows the consequences of drinking and driving in Colombia.</span></label>
            </div>
          </div>
          <div class="xs12 md6 padding20 mt10-xs">
            <h6 class="mt30 w95"><strong>3. </strong>If it were up to Riley how would they get to the party?</h6>
            <div class="row-flex justify-around flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
              <label class="c-Checkbox" for="inputRadio_7"><span class="ta-c"> 1. Taxi. </span></label>
              <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
              <label class="c-Checkbox" for="inputRadio_8"><span class="ta-c"> 2. Uber.</span></label>
              <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
              <label class="c-Checkbox" for="inputRadio_9"><span class="ta-c"> 3.  drive themselves.</span></label>
            </div>
            <h6 class="mt30 w95"><strong>4. </strong>If it were up to Nacho how would they get to the party?</h6>
            <div class="row-flex justify-around mt20-md">
              <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_4" value="1"/>
              <label class="c-Checkbox" for="inputRadio_10"><span class="ta-c"> 1. Taxi. </span></label>
              <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_4" value="2"/>
              <label class="c-Checkbox" for="inputRadio_11"><span class="ta-c"> 2. Uber.  </span></label>
              <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_4" value="3"/>
              <label class="c-Checkbox" for="inputRadio_12"><span class="ta-c"> 3. drive themselves.</span></label>
            </div>
            <h6 class="mt30 w95"><strong>5. </strong>Where do Nacho and Riley live?</h6>
            <div class="row-flex justify-around flex-wrap mt20-md">
              <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_5" value="1"/>
              <label class="c-Checkbox" for="inputRadio_13"><span class="ta-c"> 1. Bogota.	</span></label>
              <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_5" value="2"/>
              <label class="c-Checkbox" for="inputRadio_14"><span class="ta-c"> 2. Chia.</span></label>
              <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_5" value="3"/>
              <label class="c-Checkbox" for="inputRadio_15"><span class="ta-c"> 3. Zipaquira.</span></label>
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