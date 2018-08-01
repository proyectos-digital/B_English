
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_3">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 mt50-md mt30-sm">
          <div class="row mb30 ta-c showTo-md"><img class="c-figure w45 ml10 mb10" src="unit_1/module_2/assets/images/self_4.png" alt=""/><img class="c-figure w45 ml10 mb10" src="unit_1/module_2/assets/images/self_5.png" alt=""/><img class="c-figure w45 ml10 mb10" src="unit_1/module_2/assets/images/self_6.png" alt=""/><img class="c-figure w45 ml10 mb10" src="unit_1/module_2/assets/images/self_7.png" alt=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 mt30-md mt30-sm">
          <p class="mt30 row"><strong class="u-textColor_4">1. </strong>I crashed my father’s car yesterday!</p>
          <div class="row-flex justify-between mt10-md">
            <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
            <label class="c-Checkbox" for="inputRadio_1"><span> Your father’s car? That’s great!</span></label>
            <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
            <label class="c-Checkbox" for="inputRadio_2"><span> Your father’s car? That is terrible!</span></label>
            <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
            <label class="c-Checkbox" for="inputRadio_3"><span> Wow! Super!</span></label>
          </div>
          <p class="mt30 row"><strong class="u-textColor_4">2. </strong>I went to sleep at 3:00 AM!</p>
          <div class="row-flex justify-between mt10-md">
            <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
            <label class="c-Checkbox" for="inputRadio_4"><span> 3:00 AM? What happened?</span></label>
            <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
            <label class="c-Checkbox" for="inputRadio_5"><span> 3:00 AM is a good hour.</span></label>
            <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
            <label class="c-Checkbox" for="inputRadio_6"><span> Sleep well!</span></label>
          </div>
          <p class="mt30 row"><strong class="u-textColor_4">3. </strong>Everybody loves Michael Jackson!</p>
          <div class="row-flex justify-between mt10-md">
            <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
            <label class="c-Checkbox" for="inputRadio_7"><span> Everybody? Not me!</span></label>
            <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
            <label class="c-Checkbox" for="inputRadio_8"><span> Everybody likes music.</span></label>
            <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
            <label class="c-Checkbox" for="inputRadio_9"><span> Michael Jackson likes everybody.</span></label>
          </div>
          <p class="mt30 row"><strong class="u-textColor_4">4. </strong>This is incredible! I met Radamel Falcao yesterday!</p>
          <div class="row-flex justify-between mt10-md">
            <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_4" value="1"/>
            <label class="c-Checkbox" for="inputRadio_10"><span> Ok.</span></label>
            <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_4" value="2"/>
            <label class="c-Checkbox" for="inputRadio_11"><span> Falcao? Really?</span></label>
            <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_4" value="3"/>
            <label class="c-Checkbox" for="inputRadio_12"><span> Radamel Falcao plays football.</span></label>
          </div>
          <p class="mt30 row"><strong class="u-textColor_4">5. </strong>I broke my leg trying to learn how to roller-skate!</p>
          <div class="row-flex justify-between mt10-md">
            <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_5" value="1"/>
            <label class="c-Checkbox" for="inputRadio_13"><span> Your leg? Oh, no!</span></label>
            <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_5" value="2"/>
            <label class="c-Checkbox" for="inputRadio_14"><span> Roller-skating is my favorite sport.</span></label>
            <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_5" value="3"/>
            <label class="c-Checkbox" for="inputRadio_15"><span> Who roller-skates here?</span></label>
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