
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md3 mt50-md mt30-sm">
          <div class="row mb30 ta-c"><img class="u-responsive-img xs10 mb20 showTo-md" src="unit_1/module_2/assets/images/self_3.png" alt=""/>
            <button class="c-btn-Icon u-bgIconListen col-flex-sm3 col-flex-md9 mt10" ng-audio="unit_1/module_2/assets/audios/self_3_1.mp3"><span>Question 1</span></button>
            <button class="c-btn-Icon u-bgIconListen col-flex-sm3 col-flex-md9 mt10" ng-audio="unit_1/module_2/assets/audios/self_3_2.mp3"><span>Question 2</span></button>
            <button class="c-btn-Icon u-bgIconListen col-flex-sm3 col-flex-md9 mt10" ng-audio="unit_1/module_2/assets/audios/self_3_3.mp3"><span>Question 3</span></button>
            <button class="c-btn-Icon u-bgIconListen col-flex-sm3 col-flex-md9 mt10" ng-audio="unit_1/module_2/assets/audios/self_3_4.mp3"><span>Question 4</span></button>
            <button class="c-btn-Icon u-bgIconListen col-flex-sm3 col-flex-md9 mt10" ng-audio="unit_1/module_2/assets/audios/self_3_5.mp3"><span>Question 5</span></button>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md9 mt50-md mt30-sm">
          <div class="row-flex">
            <h5>Questions </h5>
            <div class="row row-flex mb30">
              <div class="col-flex-xs10 col-flex-sm5 col-center">
                <div class="row">
                  <p><strong class="u-textColor_4-dark"> A. </strong>His name is Takashiwa.<br/><strong class="u-textColor_4-dark"> B. </strong>
                    <input class="c-input js-escribir " type="text" readonly="readonly" ng-model="ngText_1"/>
                  </p>
                </div>
              </div>
              <div class="col-flex-xs10 col-flex-sm7 col-center">
                <div class="row-flex mt10">
                  <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                  <label class="c-Checkbox ml5" for="inputRadio_1" ng-click="ngText_1='Question 1'">1.</label>
                  <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                  <label class="c-Checkbox ml5" for="inputRadio_2" ng-click="ngText_1='Question 2'">2.</label>
                  <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                  <label class="c-Checkbox ml5" for="inputRadio_3" ng-click="ngText_1='Question 3'">3.</label>
                  <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_1" value="4"/>
                  <label class="c-Checkbox ml5" for="inputRadio_4" ng-click="ngText_1='Question 4'">4.</label>
                  <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_1" value="5"/>
                  <label class="c-Checkbox ml5" for="inputRadio_5" ng-click="ngText_1='Question 5'">5.</label>
                </div>
              </div>
            </div>
            <div class="row row-flex mb30">
              <div class="col-flex-xs10 col-flex-sm5 col-center">
                <div class="row">
                  <p><strong class="u-textColor_4-dark"> A. </strong>Peter’s giving up his job.<br/><strong class="u-textColor_4-dark"> B. </strong>
                    <input class="c-input js-escribir " type="text" readonly="readonly" ng-model="ngText_2"/>
                  </p>
                </div>
              </div>
              <div class="col-flex-xs10 col-flex-sm7 col-center">
                <div class="row row-flex mt10">
                  <input class="c-inputRadio ml10" id="inputRadio_6" type="radio" name="selInputRadio_2" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_6" ng-click="ngText_2='Question 1'">1.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_7" type="radio" name="selInputRadio_2" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_7" ng-click="ngText_2='Question 2'">2.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_8" type="radio" name="selInputRadio_2" value="3"/>
                  <label class="c-Checkbox ml10" for="inputRadio_8" ng-click="ngText_2='Question 3'">3.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_9" type="radio" name="selInputRadio_2" value="4"/>
                  <label class="c-Checkbox ml10" for="inputRadio_9" ng-click="ngText_2='Question 4'">4.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_10" type="radio" name="selInputRadio_2" value="5"/>
                  <label class="c-Checkbox ml10" for="inputRadio_10" ng-click="ngText_2='Question 5'">5.</label>
                </div>
              </div>
            </div>
            <div class="row row-flex mb30">
              <div class="col-flex-xs10 col-flex-sm5 col-center">
                <p><strong class="u-textColor_4-dark"> A. </strong>I’m planning on buying a new racing bike.<br/><strong class="u-textColor_4-dark"> B. </strong>
                  <input class="c-input js-escribir " type="text" readonly="readonly" ng-model="ngText_3"/>
                </p>
              </div>
              <div class="col-flex-xs10 col-flex-sm7 col-center">
                <div class="row row-flex mt10">
                  <input class="c-inputRadio ml10" id="inputRadio_11" type="radio" name="selInputRadio_3" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_11" ng-click="ngText_3='Question 1'">1.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_12" type="radio" name="selInputRadio_3" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_12" ng-click="ngText_3='Question 2'">2.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_13" type="radio" name="selInputRadio_3" value="3"/>
                  <label class="c-Checkbox ml10" for="inputRadio_13" ng-click="ngText_3='Question 3'">3.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_14" type="radio" name="selInputRadio_3" value="4"/>
                  <label class="c-Checkbox ml10" for="inputRadio_14" ng-click="ngText_3='Question 4'">4.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_15" type="radio" name="selInputRadio_3" value="5"/>
                  <label class="c-Checkbox ml10" for="inputRadio_15" ng-click="ngText_3='Question 5'">5.</label>
                </div>
              </div>
            </div>
            <div class="row row-flex mb30">
              <div class="col-flex-xs10 col-flex-sm5 col-center">
                <p><strong class="u-textColor_4-dark"> A. </strong>Samuel can play the saxophone.<br/><strong class="u-textColor_4-dark"> B. </strong>
                  <input class="c-input js-escribir " type="text" readonly="readonly" ng-model="ngText_4"/>
                </p>
              </div>
              <div class="col-flex-xs10 col-flex-sm7 col-center">
                <div class="row row-flex mt10">
                  <input class="c-inputRadio ml10" id="inputRadio_16" type="radio" name="selInputRadio_4" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_16" ng-click="ngText_4='Question 1'">1.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_17" type="radio" name="selInputRadio_4" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_17" ng-click="ngText_4='Question 2'">2.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_18" type="radio" name="selInputRadio_4" value="3"/>
                  <label class="c-Checkbox ml10" for="inputRadio_18" ng-click="ngText_4='Question 3'">3.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_19" type="radio" name="selInputRadio_4" value="4"/>
                  <label class="c-Checkbox ml10" for="inputRadio_19" ng-click="ngText_4='Question 4'">4.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_20" type="radio" name="selInputRadio_4" value="5"/>
                  <label class="c-Checkbox ml10" for="inputRadio_20" ng-click="ngText_4='Question 5'">5.</label>
                </div>
              </div>
            </div>
            <div class="row row-flex mb30">
              <div class="col-flex-xs10 col-flex-sm5 col-center">
                <p><strong class="u-textColor_4-dark"> A. </strong>I’ll be waiting for you next to that tree.<br/><strong class="u-textColor_4-dark"> B. </strong>
                  <input class="c-input js-escribir " type="text" readonly="readonly" ng-model="ngText_5"/>
                </p>
              </div>
              <div class="col-flex-xs10 col-flex-sm7 col-center">
                <div class="row row-flex mt10">
                  <input class="c-inputRadio ml10" id="inputRadio_21" type="radio" name="selInputRadio_5" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_21" ng-click="ngText_5='Question 1'">1.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_22" type="radio" name="selInputRadio_5" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_22" ng-click="ngText_5='Question 2'">2.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_23" type="radio" name="selInputRadio_5" value="3"/>
                  <label class="c-Checkbox ml10" for="inputRadio_23" ng-click="ngText_5='Question 3'">3.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_24" type="radio" name="selInputRadio_5" value="4"/>
                  <label class="c-Checkbox ml10" for="inputRadio_24" ng-click="ngText_5='Question 4'">4.</label>
                  <input class="c-inputRadio ml10" id="inputRadio_25" type="radio" name="selInputRadio_5" value="5"/>
                  <label class="c-Checkbox ml10" for="inputRadio_25" ng-click="ngText_5='Question 5'">5.</label>
                </div>
              </div>
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