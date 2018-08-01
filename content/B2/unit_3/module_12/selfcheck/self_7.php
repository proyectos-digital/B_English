
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50"> <strong><span class="u-textColor_4-dark">1.</span></strong>
            <p class="ml20"><span class="u-textColor_2"><strong>A: </strong></span> I arrived on time for the concert! I drove at 180 Km/hour!</p>
            <p class="ml20"><span class="u-textColor_5"><strong>B: </strong></span> In your dreams!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">I believe you</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">I don’t believe you</label>
            </div>
          </div>
          <div class="row mb50"><strong><span class="u-textColor_4-dark">2.</span></strong>
            <p class="ml20"><span class="u-textColor_2"><strong>A: </strong></span> I have a terrible pain in the chest!</p>
            <p class="ml20"><span class="u-textColor_5"><strong>B: </strong></span> That’s serious!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">I believe you</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">I don’t believe you</label>
            </div>
          </div>
          <div class="row mb50"><strong><span class="u-textColor_4-dark">3.</span></strong>
            <p class="ml20"><span class="u-textColor_2"><strong>A: </strong></span> Guess who is here! Alfredo! He arrived yesterday.</p>
            <p class="ml20"><span class="u-textColor_5"><strong>B: </strong></span> Really? Super!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">I believe you</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">I don’t believe you                         </label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50"><strong><span class="u-textColor_4-dark">4.</span></strong>
            <p class="ml20"><span class="u-textColor_2"><strong>A: </strong></span> I bought a new car.</p>
            <p class="ml20"><span class="u-textColor_5"><strong>B: </strong></span> You must be kidding me!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13">I believe you</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14">I don’t believe you</label>
            </div>
          </div>
          <div class="row mb50"><strong><span class="u-textColor_4-dark">5.</span></strong>
            <p class="ml20"><span class="u-textColor_2"><strong>A: </strong></span> Hey! I am a millionaire! I won the lotto!</p>
            <p class="ml20"><span class="u-textColor_5"><strong>B: </strong></span> Sure! And I am Leonardo Dicaprio!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15">I believe you</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_16">I don’t believe you</label>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_1/activities/act_6_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>