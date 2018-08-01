
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h6>Which sentence is correct?</h6>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="row-flex flex-column mt40">
              <p><strong class="u-textColor_4-dark">1.</strong></p><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox" for="inputRadio_1"><span>I will be here as long as he will be here.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox" for="inputRadio_2"><span>I will be here as long as he is here.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox" for="inputRadio_3"><span>I will be here as long as he will here. </span></label></span>
            </div>
            <div class="row-flex flex-column mt40">
              <p><strong class="u-textColor_4-dark">3.</strong></p><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox" for="inputRadio_4"><span>Providing you are have a good credit score, you can borrow the money.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox" for="inputRadio_5"><span>Providing you have a good credit score, you can borrow the money.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox" for="inputRadio_6"><span>Providing you will have a good credit score, you can borrow the money.</span></label></span>
            </div>
            <div class="row-flex flex-column mt40">
              <p><strong class="u-textColor_4-dark">5.</strong> What's another way to say "You can join us if you contribute."?</p><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox" for="inputRadio_7"><span>Provided you join us, you can contribute.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox" for="inputRadio_8"><span>You can join us provided you contribute.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox" for="inputRadio_9"><span>You can join us provided you will contribute.</span></label></span>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md5 col-center"> 
            <div class="row-flex flex-column mt40">
              <p><strong class="u-textColor_4-dark">2.</strong></p><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="selInputRadio_4" value="1"/>
                <label class="c-Checkbox" for="inputRadio_10"><span>I'll come to the "Subienda Festival" provided you're there.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="selInputRadio_4" value="2"/>
                <label class="c-Checkbox" for="inputRadio_11"><span>I'll come to the "Subienda Festival" provided you'll there.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="selInputRadio_4" value="3"/>
                <label class="c-Checkbox" for="inputRadio_12"><span>I'll come to the "Subienda Festival" provided you'll be there.</span></label></span>
            </div>
            <div class="row-flex flex-column mt40">
              <p><strong class="u-textColor_4-dark">4.</strong></p><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="selInputRadio_5" value="1"/>
                <label class="c-Checkbox" for="inputRadio_13"><span>You can take the day off as long as you promise to come in early on Monday.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="selInputRadio_5" value="2"/>
                <label class="c-Checkbox" for="inputRadio_14"><span>You can take the day off as long as early on Monday.</span></label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="selInputRadio_5" value="3"/>
                <label class="c-Checkbox" for="inputRadio_15"><span>You can take the day off as long as you will promise to come in early on Monday.</span></label></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_18_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>