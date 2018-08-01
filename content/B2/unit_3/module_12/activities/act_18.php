
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center mt50-xs mt100-md">
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">1.</span></strong><span> The sun is shining, the sky is blue! What </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/></span><span>  ! </span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1" ng-click="txtcaptura_a='a beautiful day'">a beautiful day</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2" ng-click="txtcaptura_a='beautiful day'">beautiful day</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">2.</span></strong><span> I heard you lost your dog! How</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/></span><span>  !</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3" ng-click="txtcaptura_b='a great idea'">awfully</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_b='great idea'">awful</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">3.</span></strong><span> Using a recycled bag for your groceries! What</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/></span><span> !</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5" ng-click="txtcaptura_c='a terrible storm'">a great idea</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6" ng-click="txtcaptura_c='terrible'">great idea</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">4.</span></strong><span> It is raining cats and dogs and there are floods all over! How</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/></span><span>  !</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7" ng-click="txtcaptura_d='a terrible storm'">a terrible storm</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8" ng-click="txtcaptura_d='terrible'">terrible                               </label>
              </div>
            </p>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm11 col-flex-md6 col-center pr10 pl10">
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">5.</span></strong><span> First, there was a storm, Then there was a blackout. What </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_e"/></span><span> !</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_5" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9" ng-click="txtcaptura_e='a night'">a night</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_5" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10" ng-click="txtcaptura_e='night'">night</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">6.</span></strong><span> You have been waiting for hours here! How</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_f"/></span><span>  you are!</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_6" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11" ng-click="txtcaptura_f='patient person'">patient person</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_6" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12" ng-click="txtcaptura_f='patient'">patient</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">7.</span></strong><span> The ballet “Romeo and Juliet” was superb! What</span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_g"/></span><span> it was to attend that performance!</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_7" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13" ng-click="txtcaptura_g='amazing experience'">amazing experience</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_7" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14" ng-click="txtcaptura_g='an amazing experience'">an amazing experience</label>
              </div>
            </p>
          </div>
          <div class="row mb50">
            <p> <strong><span class="u-textColor_4-dark">8.</span></strong><span> Forty people died in the plane crash. How </span><span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_h"/></span><span> !</span>
              <div class="row-flex">
                <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_8" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15" ng-click="txtcaptura_h='a tragic event'">a tragic event</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_16" name="selection_8" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_16" ng-click="txtcaptura_h='tragic'">tragic</label>
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