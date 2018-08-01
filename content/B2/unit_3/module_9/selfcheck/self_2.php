
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">1.</strong> Which word completes this sentence? </p>
              <p class="u-txtSpace">The mountain  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span>we climbed yesterday was the highest mountain in Britain!</p>
              <div class="row-flex flex-column mt20"><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_1" ng-click="txtcaptura_a='which'"><span>which</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_2" ng-click="txtcaptura_a='where'"><span>where</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_1" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_3" ng-click="txtcaptura_a='what'"><span>what</span></label></span></div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">2.</strong>  In which sentence can we omit "who"?</p>
              <div class="row-flex flex-column mt20"><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_4"><span>The man who I saw on the bus is my neighbor.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_2" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_5"><span>The man who lives next to me is nearly 80.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_2" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_6"><span>The man who cleans my windows has gone to the hospital.</span></label></span></div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">3.</strong> In which sentence can you NOT omit "that"?</p>
              <div class="row-flex flex-column mt20"><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_3" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_7"><span>The movie that we saw yesterday was great.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_3" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_8"><span>I've lost the magazine that I was reading.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_3" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_9"><span>A drill is a machine that makes holes.</span></label></span></div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md5 col-center"> 
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">4.</strong> What word CAN NOT go in the space?</p>
              <p class="u-txtSpace">Julie looked after the injured bird<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span>she found in the garden.</p>
              <div class="row-flex flex-column mt20"><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="selInputRadio_4" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_10" ng-click="txtcaptura_b='no word is needed here.'"><span>no word is needed here.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="selInputRadio_4" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_11" ng-click="txtcaptura_b='that'"><span> that</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="selInputRadio_4" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_12" ng-click="txtcaptura_b='who'"><span>who</span></label></span></div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">5.</strong> What word CAN NOT go in the space? </p>
              <p>
                 Last week I bought a watch<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span>half price.</p>
            </div>
            <div class="row-flex flex-column mt20"><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="selInputRadio_5" value="1"/>
                <label class="c-Checkbox" for="inputRadio_13" ng-click="txtcaptura_c='that'"><span>that</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="selInputRadio_5" value="2"/>
                <label class="c-Checkbox" for="inputRadio_14" ng-click="txtcaptura_c='no word is needed here'"><span>no word is needed here</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="selInputRadio_5" value="3"/>
                <label class="c-Checkbox" for="inputRadio_15" ng-click="txtcaptura_c='which'"><span>which</span></label></span></div>
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