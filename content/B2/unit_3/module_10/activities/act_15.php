
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item">
    
    
  </aside>
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row">
          <h5>Decide when the speakers agree, when they disagree or when they give a neutral opinion.</h5>
          <div class="col-center col xs12 md7">
            <div class="c-cardGreen">
              <div class="c-cardGreenContent">
                <p>Marco was driving his car on the Caracas Avenue in Bogotá. At the corner of Caracas and 19th, he crashed against a red car. A person in the red car has a minor wound.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mb50"> 
            <p><strong><span class="u-textColor_4-dark">1.</span></strong> <strong><span class="u-textColor_2">A</span></strong>: I don’t think we need to go to the hospital.  </p>
            <p><strong><span class="u-textColor_5 ml20">B</span></strong>: In my very personal view, I think we should call the doctor.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1" ng-click="txtcaptura_e='in'">Agree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2" ng-click="txtcaptura_e='to'">Disagree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3" ng-click="txtcaptura_e='on'">Neutral position</label>
            </div>
            <div class="row mb50"> </div>
            <p><strong><span class="u-textColor_4-dark">2.</span></strong> <strong><span class="u-textColor_2">A</span></strong>: Calling the police is the only thing I can think of.  </p>
            <p><strong><span class="u-textColor_5 ml20">B</span></strong>: I tend to think that we are making the right decision.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4" ng-click="txtcaptura_e='in'">Agree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5" ng-click="txtcaptura_e='to'">Disagree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6" ng-click="txtcaptura_e='on'">Neutral position</label>
            </div>
            <div class="row mb50"> </div>
            <p><strong><span class="u-textColor_4-dark">3.</span></strong> <strong><span class="u-textColor_2">A</span></strong>: How about just taking the car to the garage and have it fixed there? </p>
            <p><strong><span class="u-textColor_5 ml20">B</span></strong>:  I honestly feel that this is not going to work.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7" ng-click="txtcaptura_e='in'">Agree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8" ng-click="txtcaptura_e='to'">Disagree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9" ng-click="txtcaptura_e='on'">Neutral position</label>
            </div>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row mb50"> 
            <p><strong><span class="u-textColor_4-dark">4.</span></strong> <strong><span class="u-textColor_2">A</span></strong>: Fixing the car should be around US500! </p>
            <p><strong><span class="u-textColor_5 ml20">B</span></strong>:  As I see it, we need to bring in an expert.</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10" ng-click="txtcaptura_e='in'">Agree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11" ng-click="txtcaptura_e='to'">Disagree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12" ng-click="txtcaptura_e='on'">Neutral position</label>
            </div>
            <div class="row mb50"> </div>
            <p><strong><span class="u-textColor_4-dark">5.</span></strong> <strong><span class="u-textColor_2">A</span></strong>: The red car should have stopped! </p>
            <p><strong><span class="u-textColor_5 ml20">B</span></strong>: My opinion is that the red car driver is right. The traffic light was red for you!</p>
            <div class="row-flex">
              <input class="c-inputRadio" type="radio" id="SelectRadio_13" name="selection_5" value="1"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_13" ng-click="txtcaptura_e='in'">Agree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_14" name="selection_5" value="2"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_14" ng-click="txtcaptura_e='to'">Disagree</label>
              <input class="c-inputRadio" type="radio" id="SelectRadio_15" name="selection_5" value="3"/>
              <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_15" ng-click="txtcaptura_e='on'">Neutral position</label>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_10/activities/act_13_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>