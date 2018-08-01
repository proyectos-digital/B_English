
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <p>Select the right word to complete the sentences about global warming.</p>
        <div class="row-flex">
          <div class="col-flex-sm12 col-flex-md4 col-center showTo-md">
            <div class="row mt60"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/sel_7.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md8 col-center">
            <div class="row mt30">
              <p><strong class="u-textColor_4-dark">1.</strong> Polar ice seems<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">to be</label></span><span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">being</label></span>melting faster than ever before.</p>
            </div>
            <div class="row mt10">
              <p><strong class="u-textColor_4-dark">2.</strong> People don’t mind<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">to use</label></span><span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">using</label></span>alternative energy sources to heat homes.</p>
            </div>
            <div class="row mt10">
              <p> <strong class="u-textColor_4-dark">3.</strong>  People want<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">to explore</label></span><span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">exploring</label></span>cleaner energy sources.</p>
            </div>
            <div class="row mt10">
              <p><strong class="u-textColor_4-dark">4.</strong>  People are promising<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">to buy</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">buying</label></span>more fuel-efficient cars.</p>
            </div>
            <div class="row mt10">
              <p> <strong class="u-textColor_4-dark">5.</strong> People are demanding<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">to have</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">having</label></span>higher standards set for acceptable air pollution levels.</p>
            </div>
            <div class="row mt10">
              <p><strong class="u-textColor_4-dark">6.</strong> People appreciate<span class="c-textField ml5 mr5">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">to keep</label></span><span class="c-textField ml5 mr5"> 
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">keeping</label></span>water supplies clean.</p>
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