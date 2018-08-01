
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_9.png" alt="" srcset=""/></div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <h6>Decide if the following sentences are correct or incorrect. For those that are incorrect, write the correct form in the space provided.</h6>
          <div class="row mt50">
            <p><strong class="u-textColor_4-dark">1.</strong> The man angry is my boss. </p>
            <div>
              <input class="c-input js-escribir row" type="text"/>
            </div>
            <div class="row-flex justify-center"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label>
                <input class="js-select" type="hidden" ng-model="valorinputa"/></span></div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">2.</strong> This is the book James wrote. </p>
            <div>
              <input class="c-input js-escribir row" type="text"/>
            </div>
            <div class="row-flex justify-center"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label>
                <input class="js-select" type="hidden" ng-model="valorinputb"/></span></div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">3.</strong> The bag lying on the floor is hers. </p>
            <div>
              <input class="c-input js-escribir row" type="text"/>
            </div>
            <div class="row-flex justify-center"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label>
                <input class="js-select" type="hidden" ng-model="valorinputc"/></span></div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">4.</strong> The man a doctor is very famous. </p>
            <div>
              <input class="c-input js-escribir row" type="text"/>
            </div>
            <div class="row-flex justify-center"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label>
                <input class="js-select" type="hidden" ng-model="valorinputd"/></span></div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">5.</strong> The person you see there is not my friend.</p>
            <div>
              <input class="c-input js-escribir row" type="text"/>
            </div>
            <div class="row-flex justify-center"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label>
                <input class="js-select" type="hidden" ng-model="valorinpute"/></span></div>
          </div>
          <div class="row mt30">
            <p><strong class="u-textColor_4-dark">6.</strong> This is the place I will be living in. </p>
            <div>
              <input class="c-input js-escribir row" type="text"/>
            </div>
            <div class="row-flex justify-center"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_11">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_12">INCORRECT</label>
                <input class="js-select" type="hidden" ng-model="valorinputf"/></span></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadEscribSelect()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="CompTxt_SelectMult()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
