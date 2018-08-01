
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_14">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content flex row-flex align-items-center ">
      <div class="col xs12 md6">
        <div class="row mt30">
          <p>When thinking about what you will be doing in the future there are intentions and definite plans.</p>
          <p><strong>An intention is when you want to do something but have not taken any steps to accomplish it.</strong></p>
          <p>May wants to meet with an app designer to discuss designing an app for her company but she has made no definite plans.</p>
          <p><strong class="u-textColor_4">•</strong> May: <strong> I am going to</strong>  meet with an app designer to discuss the app design.</p>
          <p>After arranging the meeting, May then says.</p>
          <p><strong class="u-textColor_4">•</strong> May: <strong>I am meeting</strong>  with an app designer next to discuss the app design.</p>
        </div>
      </div>
      <div class="col xs12 md6">
        <h6><strong class="u-textColor_4">1.</strong> Which of these are defnite plans and which are only intentions?</h6>
        <div class="row mt20 flex align-items-center">
          <p class="col xs6"><strong class="u-textColor_4">•</strong> We are playing football at 9:00 AM on Sunday.</p>
          <div class="col xs6">
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="act_14_1" value="1"/>
            <label class="c-CheckSelected" for="inputRadio_1">Definite plan</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="act_14_1" value="2"/>
            <label class="c-CheckSelected" for="inputRadio_2">Intention</label>
          </div>
        </div>
        <div class="row mt20 flex align-items-center">
          <p class="col xs6"><strong class="u-textColor_4">•</strong> We are going to play football on Sunday.</p>
          <div class="col xs6">
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="act_14_2" value="1"/>
            <label class="c-CheckSelected" for="inputRadio_3">Definite plan</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="act_14_2" value="2"/>
            <label class="c-CheckSelected" for="inputRadio_4">Intention</label>
          </div>
        </div>
        <div class="row mt20 flex align-items-center">
          <p class="col xs6"><strong class="u-textColor_4">•</strong> Frank is completing the office design next week.</p>
          <div class="col xs6">
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="act_14_3" value="1"/>
            <label class="c-CheckSelected" for="inputRadio_5">Definite plan</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="act_14_3" value="2"/>
            <label class="c-CheckSelected" for="inputRadio_6">Intention</label>
          </div>
        </div>
        <div class="row mt20 flex align-items-center">
          <p class="col xs6"><strong class="u-textColor_4">•</strong> Suzanne is going to visit us in December.</p>
          <div class="col xs6">
            <input class="c-inputRadio" type="radio" id="inputRadio_7" name="act_14_4" value="1"/>
            <label class="c-CheckSelected" for="inputRadio_7">Definite plan</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_8" name="act_14_4" value="2"/>
            <label class="c-CheckSelected" for="inputRadio_8">Intention</label>
          </div>
        </div>
        <div class="row mt20 flex align-items-center">
          <p class="col xs6"><strong class="u-textColor_4">•</strong> Suzanne is visiting us in December.</p>
          <div class="col xs6">
            <input class="c-inputRadio" type="radio" id="inputRadio_9" name="act_14_5" value="1"/>
            <label class="c-CheckSelected" for="inputRadio_9">Definite plan</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_10" name="act_14_5" value="2"/>
            <label class="c-CheckSelected" for="inputRadio_10">Intention</label>
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