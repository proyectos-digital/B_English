
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row mt20">
        <div class="row-flex mt30">
          <div class="col-flex-sm12 col-flex-md11 col-center"> 
            <p>I really need to <strong>(1)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_1">take</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_2">make</label></span>a break. I am going to go for a walk and then<strong> (2)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_3">take</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_4">make</label></span>a seat and continue with my review. I have<strong> (3)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_5">taken</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_6">made</label></span>a big effort to understand the exercises because tomorrow I need to<strong> (4)</strong><span class="c-textField ml10 mr10 mb10"> 
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_7">take</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_8">make</label></span>an exam. I am sure I have<strong> (5)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_9">taken</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_10">made</label></span>lots of progress because now I can <strong>(6)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_11">take</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_12">make</label></span>a difference between right and wrong sentences. When I<strong> (7)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_13">took</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_14">made</label></span>a look at my notes, I realized I had<strong> (8)</strong><span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_15" name="tfInputRadio_8" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_15">taken</label></span>/<span class="c-textField ml10 mr10 mb10">
                <input class="c-inputRadio" type="radio" id="inputRadio_16" name="tfInputRadio_8" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_16">made</label></span>many mistakes in the quizzes but I have learned from those mistakes!</p>
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