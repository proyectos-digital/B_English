
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">1.</strong> Which word goes in the blank? </p>
              <p>Taylor has a new cat,<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span>is twice as big as his old one.</p>
              <div class="row-flex mt20"><span class="c-textField ml10 ">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_1" ng-click="txtcaptura_a='that'"><span>that</span></label></span><span class="c-textField ml10 ">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_2" ng-click="txtcaptura_a='which'"><span>which</span></label></span><span class="c-textField ml10 ">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_1" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_3" ng-click="txtcaptura_a='who'"><span>who</span></label></span></div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">2.</strong> Which sentence is correct?</p>
              <div class="row-flex flex-column mt20"><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_4"><span>The new Cali stadium opened last week, which can hold over 100,000 people.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_2" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_5"><span>The new Cali stadium, which can hold over 100,000 people, opened last week.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_2" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_6"><span>The new Cali stadium can hold over 100,000 people opened last week.</span></label></span></div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">3.</strong> "The apple tree, which is at the bottom of the garden, needs to be cut down". This sentence implies that:</p>
              <div class="row-flex flex-column mt20"><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_3" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_7"><span>There are several apple trees in the garden.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_3" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_8"><span>There are several apple trees at the bottom of the garden.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_3" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_9"><span>There is one apple tree in the garden.</span></label></span></div>
            </div>
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">4.</strong> Fill in the blank. We walked as far as the waterfall,<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span>we stopped for a picnic.</p>
              <div class="row-flex mt20"><span class="c-textField ml10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="selInputRadio_4" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_10" ng-click="txtcaptura_b='that'"><span>that</span></label></span><span class="c-textField ml10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="selInputRadio_4" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_11" ng-click="txtcaptura_b='where'"><span>where</span></label></span><span class="c-textField ml10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="selInputRadio_4" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_12" ng-click="txtcaptura_b='which'"><span>which</span></label></span></div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center"> 
            <div class="row mt20">
              <p><strong class="u-textColor_4-dark">5.</strong> Which is the right way to rewrite these sentences?</p>
              <p>Sincelejo is the capital of Sucre. My aunt lives there.</p>
              <div class="row-flex flex-column mt20"> <span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="selInputRadio_5" value="1"/>
                  <label class="c-Checkbox" for="inputRadio_13"><span>My aunt lives in Sincelejo, which is the capital of Sucre.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="selInputRadio_5" value="2"/>
                  <label class="c-Checkbox" for="inputRadio_14"><span>The capital of Sucre, which my aunt lives, is Sincelejo.</span></label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_15" name="selInputRadio_5" value="3"/>
                  <label class="c-Checkbox" for="inputRadio_15"><span>Sincelejo, which is the capital of Sucre, lives my aunt.</span></label></span></div>
            </div>
            <div class="row ta-c mt30"><img class="u-responsive-img w70" src="./unit_3/module_9/assets/images/self_5_1.png" alt="" srcset=""/></div>
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