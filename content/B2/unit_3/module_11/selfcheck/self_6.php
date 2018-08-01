
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt30-md mt10-sm">
        <div class="col-flex-md6 col-flex-sm10 col-flex-xs12 col-center padding20">
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">1</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_1" name="SelInputRadio_1" value="1"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_1">Require.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_2" name="SelInputRadio_1" value="2"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_2">Need.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">2</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_3" name="SelInputRadio_2" value="1"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_3">Please report to reception.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_4" name="SelInputRadio_2" value="2"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_4">Just go to reception.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">3</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_5" name="SelInputRadio_3" value="1"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_5">Can’t wait to see you.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_6" name="SelInputRadio_3" value="2"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_6">I’m looking forward to seeing you again soon.</label>
          </div>
        </div>
        <div class="col-flex-md6 col-flex-sm10 col-flex-xs12 col-center padding20">
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">4</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_7" name="SelInputRadio_4" value="1"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_7">Mike Peterson, the man who you talked to, is the manager.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_8" name="SelInputRadio_4" value="2"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_8">Mike Peterson, the man whom you talked to, is the manager.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">5</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_9" name="SelInputRadio_5" value="1"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_9">That’s the place that they told us to go to.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_10" name="SelInputRadio_5" value="2"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_10">That’s the place which they told us to go to.</label>
          </div>
          <div class="mb30 row-flex"><strong class="u-textColor_4-dark">6</strong>
            <input class="c-inputRadio" type="radio" id="inputRadio_11" name="SelInputRadio_6" value="1"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_11">The person you’re waiting for just left.</label>
            <input class="c-inputRadio" type="radio" id="inputRadio_12" name="SelInputRadio_6" value="2"/>
            <label class="c-CheckSelected row col-flex ml10 mr10 mt0" for="inputRadio_12">The person who you’re waiting for just left.</label>
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