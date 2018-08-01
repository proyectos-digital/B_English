
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <p><strong class="u-textColor_4-dark">1.</strong> Erika can have missed the train.</p>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex"><span class="c-textField mr10">
              <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label></span></div>
        </div>
      </div>
      <div class="row-flex mt20">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <p><strong class="u-textColor_4-dark">2.</strong> Nico must have forget about the party.</p>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex"><span class="c-textField mr10">
              <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label></span></div>
        </div>
      </div>
      <div class="row-flex mt20">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <p><strong class="u-textColor_4-dark">3.</strong> She must have lost her keys.</p>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex"><span class="c-textField mr10">
              <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label></span></div>
        </div>
      </div>
      <div class="row-flex mt20">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <p><strong class="u-textColor_4-dark">4.</strong> We could have go somewhere else.</p>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex"><span class="c-textField mr10">
              <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label></span></div>
        </div>
      </div>
      <div class="row-flex mt20">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row">
            <p><strong class="u-textColor_4-dark">5.</strong> We should have took the train instead.</p>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex"><span class="c-textField mr10">
              <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
              <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
              <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
              <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label></span></div>
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
