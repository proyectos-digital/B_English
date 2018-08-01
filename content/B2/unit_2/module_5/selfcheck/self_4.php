
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="c-cardGreen mt40">
              <div class="c-cardGreenContent"> 
                <p class="ta-c">Juan Miguel was absent from the office for a few days due to a medical condition. When he went back to the office, many people were complaining about him.</p>
              </div>
            </div>
            <div class="row">
              <p class="ta-c"><strong class="u-textColor_4-dark">1.</strong><strong> PERSON: </strong>You didn’t tell us that you were not coming last week!</p>
              <p class="ta-c">  <strong>JUAN MIGUEL: </strong>As a matter of fact</p>
              <div class="row-flex mt20">
                <input class="c-inputRadio" type="radio" id="SelectRadio_1" name="selection_1" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_1">I talked to the doctor</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_2" name="selection_1" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_2">I called Human Resources</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_3" name="selection_1" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_3">I don't have your number</label>
              </div>
            </div>
            <div class="row mt30">
              <p class="ta-c"><strong class="u-textColor_4-dark">2.</strong><strong> PERSON: </strong>Ok, I understand. But you forgot to leave the keys of your office!</p>
              <p class="ta-c"><strong>JUAN MIGUEL: </strong>Sorry about that but, as a matter of fact,</p>
              <div class="row-flex mt20">
                <input class="c-inputRadio" type="radio" id="SelectRadio_4" name="selection_2" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_4">my boss has a copy of the keys</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_5" name="selection_2" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_5">my desk is my desk</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_6" name="selection_2" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_6">the office is locked</label>
              </div>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row">
              <p class="ta-c"> <strong class="u-textColor_4-dark">3.</strong><strong> PERSON: </strong>And what about the things that were urgent? We didn’t know anything!</p>
              <p class="ta-c"><strong>JUAN MIGUEL: </strong>As a matter of fact, when I talked with Human Resources about my condition,</p>
              <div class="row-flex mt20">
                <input class="c-inputRadio" type="radio" id="SelectRadio_7" name="selection_3" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_7">I told them I was sick</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_8" name="selection_3" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_8">I asked them about the urgent things</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_9" name="selection_3" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_9">I told them what was pending</label>
              </div>
            </div>
            <div class="row mt30">
              <p class="ta-c"> <strong class="u-textColor_4-dark">4.</strong><strong> PERSON: </strong>Well. They never said anything! But told us that you were going to arrive yesterday!</p>
              <p class="ta-c"><strong>JUAN MIGUEL: </strong>I know. That was the initial plan. As I matter of fact,</p>
              <div class="row-flex mt20">
                <input class="c-inputRadio" type="radio" id="SelectRadio_10" name="selection_4" value="1"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_10">the doctor gave me one more day</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_11" name="selection_4" value="2"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_11">the doctor arrived yesterday</label>
                <input class="c-inputRadio" type="radio" id="SelectRadio_12" name="selection_4" value="3"/>
                <label class="c-CheckSelected col-flex ml10 mr10" for="SelectRadio_12">the doctor was interested in my case</label>
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