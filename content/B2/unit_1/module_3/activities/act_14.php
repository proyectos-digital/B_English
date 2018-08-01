
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Read about the Titanic. </h5>
        <h6>Decide which sentences are correct or incorrect</h6>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center showTo-md">
            <div class="row mt50"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/act_14.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt50">
              <p>  <strong class="u-textColor_4-dark">1.</strong> There can't have been a big crowd present when the ship was finally launched.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">NOT CORRECT</label></span></div>
              <p class="mt20">  <strong class="u-textColor_4-dark">2.</strong> The ship's owners must have been very proud to see the Titanic in the water for the first time.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">NOT CORRECT</label></span></div>
              <p class="mt20">  <strong class="u-textColor_4-dark">3.</strong> The Titanic could have been a very luxurious ship on the inside.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">NOT CORRECT</label></span></div>
              <p class="mt20">  <strong class="u-textColor_4-dark">4.</strong> The Titanic's passengers can’t have been very excited to climb aboard the ship.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">NOT CORRECT</label></span></div>
              <p class="mt20">  <strong class="u-textColor_4-dark">5.</strong> It must have been going very fast when it was near the iceberg.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">NOT CORRECT</label></span></div>
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