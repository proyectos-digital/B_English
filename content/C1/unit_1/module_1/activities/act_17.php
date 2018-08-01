
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_17">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="col xs12 md7 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent u-textColor_1-darker lh30">
              <h6 class="ta-c">There are two ways to use forget.</h6>
              <div class="col xs6">
                <h6 class="u-textWhite">1. I forgot to open the window.</h6><strong>Forget to (verb)<br/></strong>
                <p><span class="u-textColor_4-dark">• </span> In this form, nothing happened because we did not remember to do the action (open the window).</p>
              </div>
              <div class="col xs6">
                <h6 class="u-textWhite">2. I forgot opening the window.</h6><strong>Forget (verb) ing<br/></strong>
                <p><span class="u-textColor_4-dark">• </span> In this form, the action was done. The window was opened but I have no memory of it happening.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-flex">
        <h5><span class="u-textColor_4-dark">1.</span> Choose the correct option to fll the blank spaces in the sentences below. </h5>
      </div>
      <div class="row row-flex">
        <div class="col-flex-xs12 col-flex-md6 mt20 col-center">
          <div class="row md11 col-center mt30"><strong class="u-textColor_4-dark">• </strong><span>The car is in the garage but I</span>
            <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_a"/><span> it there.</span>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex justify-around">
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_1" value="1"/>
                  <label class="c-Checkbox " for="selInput_1" ng-click="txtcaptura_a = 'forget park.'"> forget park</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_2" value="2"/>
                  <label class="c-Checkbox " for="selInput_2" ng-click="txtcaptura_a = 'remind parking.'">remind parking</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_1" id="selInput_3" value="3"/>
                  <label class="c-Checkbox " for="selInput_3" ng-click="txtcaptura_a = 'forgot parking.'">forgot parking</label>
                </div>
              </li>
            </ul>
          </div>
          <div class="row md11 col-center mt30"><strong class="u-textColor_4-dark">• </strong><span>The car is not in the garage because I  </span>
            <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_b"/><span>  it there. </span>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex justify-around">
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_4" value="1"/>
                  <label class="c-Checkbox " for="selInput_4" ng-click="txtcaptura_b = 'forgot park.'">forgot park</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_5" value="2"/>
                  <label class="c-Checkbox " for="selInput_5" ng-click="txtcaptura_b = 'forgot to park'">forgot to park</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_2" id="selInput_6" value="3"/>
                  <label class="c-Checkbox " for="selInput_6" ng-click="txtcaptura_b = 'forgot to parking.'">forgot to parking</label>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 mt20 col-center">
          <div class="row md11 col-center mt30"><strong class="u-textColor_4-dark">• </strong><span>I </span>
            <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_c"/><span> my lunch with me to work and now I have nothing to eat.</span>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex justify-around">
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_7" value="1"/>
                  <label class="c-Checkbox " for="selInput_7" ng-click="txtcaptura_c = 'forgot to take. '">forgot to take</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_8" value="2"/>
                  <label class="c-Checkbox " for="selInput_8" ng-click="txtcaptura_c = 'forgot to taking.'">forgot to taking</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_3" id="selInput_9" value="3"/>
                  <label class="c-Checkbox " for="selInput_9" ng-click="txtcaptura_c = 'forget.'">forget</label>
                </div>
              </li>
            </ul>
          </div>
          <div class="row md11 col-center mt30"><strong class="u-textColor_4-dark">• </strong><span>I</span>
            <input class="c-input ta-c " type="text" disabled="disabled" placeholder="" ng-model="txtcaptura_d"/><span> my lunch with me to work. Now I have the lunch I took plus the one I bought. </span>
            <ul class="c-listDefault" style="list-style: none;">
              <li>
                <div class="row-flex justify-around">
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_10" value="1"/>
                  <label class="c-Checkbox " for="selInput_10" ng-click="txtcaptura_d = 'forgot taking.'">forgot taking</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_11" value="2"/>
                  <label class="c-Checkbox " for="selInput_11" ng-click="txtcaptura_d = 'forgot to taking.'">forgot to taking</label>
                  <input class="c-inputRadio" type="radio" name="sel_input_4" id="selInput_12" value="3"/>
                  <label class="c-Checkbox " for="selInput_12" ng-click="txtcaptura_d = 'forgot take.'">forgot take</label>
                </div>
              </li>
            </ul>
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