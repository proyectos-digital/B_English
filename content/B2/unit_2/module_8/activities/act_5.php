
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>Which of the statements is correct when talking about the past?</span></span></li>
            </ol>
            <div class="row-flex mt20">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_1" ng-click="txtcaptura_a='In the past, I would be a piano teacher.'">In the past, I would be a piano teacher.</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_2" ng-click="txtcaptura_a='In the past, I would call my mother on weekends.'">In the past, I would call my mother on weekends.</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span><span>have a fancy sports car when I was younger.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_4" ng-click="txtcaptura_b='would'">would</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_5" ng-click="txtcaptura_b='used to'">used to</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>He</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span><span>be a psychologist, but now he is retired.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_7" ng-click="txtcaptura_c='would'">would</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_8" ng-click="txtcaptura_c='used to'">used to</label>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>In the past, she</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span><span>take the garbage outside every week. Now, her husband does it for her.</span></span></li>
            </ol>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_10" ng-click="txtcaptura_d='would'">would</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_11" ng-click="txtcaptura_d='will'">will</label>
            </div>
          </div>
          <div class="row mb20">
            <ol class="c-listDefault">
              <li class="u-textColor_4"><span class="u-textColor_1-dark"><span>I remember when my brother</span><span class="c-textField">
                    <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span><span>buy me a new video game for every one of my birthdays.</span></span></li>
            </ol>
            <div class="row-flex justify-around">
              <input class="c-inputRadio" type="radio" id="inputRadio_13" name="SelInputRadio_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_13" ng-click="txtcaptura_e='would'">would</label>
              <input class="c-inputRadio" type="radio" id="inputRadio_14" name="SelInputRadio_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="inputRadio_14" ng-click="txtcaptura_e=' used'">used</label>
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