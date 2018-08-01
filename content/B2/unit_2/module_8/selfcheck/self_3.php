
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt20-md">
          <div class="row offset-md1 ">
            <div class="mb20 row-flex">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong> I’m tired of listening to his complaints.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex flex"><strong class="u-textColor_4-dark"> 2. </strong> She told me she was grateful for have been taken into account.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong> We’ve been planning on to take this vacation for months!</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"> <strong class="u-textColor_4-dark"> 4. </strong>We’ve just come back from watching a very good movie.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"> <strong class="u-textColor_4-dark"> 5. </strong> The man was accused of robbing the blueprints.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label></span></div>
            </div>
            <div class="mb20 row-flex">
              <div class="col-flex"> <strong class="u-textColor_4-dark"> 6. </strong> You must carry on work hard.</div>
              <div class="col-flex-xs5"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">INCORRECT</label></span></div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md ta-c showTo-md"><img class="u-responsive-img" src="unit_2/module_8/assets/images/self_3.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>