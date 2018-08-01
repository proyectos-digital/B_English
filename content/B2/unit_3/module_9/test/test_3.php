
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md5 col-center"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/test_3_1.png" alt="" srcset=""/></div>
        <div class="col-flex-sm12 col-flex-md7 col-center"> 
          <div class="row">
            <p><strong class="u-textColor_4-dark">1.</strong> I can lend you the money (<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_1">unless</label></span>/ <span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_2">as long as</label></span>) you promise to pay it back.</p>
            <p><strong class="u-textColor_4-dark">2.</strong> I'm going camping (<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_3">unless</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_4">providing</label></span>) it rains.</p>
            <p><strong class="u-textColor_4-dark">3.</strong> (<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_5">Unless</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_6">Providing</label></span>) they are with an adult, children are not allowed to this movie.</p>
            <p><strong class="u-textColor_4-dark">4.</strong> She runs (<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_7">as</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_8">like</label></span>) a gazelle!</p>
            <p><strong class="u-textColor_4-dark">5.</strong> I hope to be recognized (<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_9">like</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_10">as</label></span>) a good worker.</p>
            <p><strong class="u-textColor_4-dark">6.</strong> We're late for the concert! You'll have to drive (<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_11">as</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_12">like</label></span>) a Formula 1 pilot.</p>
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