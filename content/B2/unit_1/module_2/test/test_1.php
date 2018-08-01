
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md4  col-center mt10-xs showTo-md"><img class="u-responsive-img m-a" src="unit_1/module_2/assets/images/test_1a.png" alt=""/></div>
        <div class="col-flex-sm12 col-flex-md8  col-center mt30-sm mt50-md mt30-xs">
          <div class="row offset-md1 ">
            <div class="mb20 row-flex">
              <div class="col-flex"><strong class="u-textColor_4-dark mr5"> 1.</strong>A new computer will be bought by Mike.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex flex"><strong class="u-textColor_4-dark mr5"> 2.</strong>A technician will installing the new air conditioning system.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"><strong class="u-textColor_4-dark mr5"> 3.</strong>The museum will be visited by thousands of tourists.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"><strong class="u-textColor_4-dark mr5"> 4.</strong>The play will not be show in this theater.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"><strong class="u-textColor_4-dark mr5"> 5.</strong>New employers won´t be hire by the company.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label></span></div>
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