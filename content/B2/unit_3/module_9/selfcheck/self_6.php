
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex mt30 align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center p10"><img class="u-responsive-img centrado w70" src="./unit_3/module_9/assets/images/self_6_1.png" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md7 col-center"> 
            <div class="row">
              <p class="u-txtSpace"></p>
              <p></p>
              <h5>Choose the option that best completes the sentences.</h5>
              <p><strong>Employee:</strong> I would like to talk about my holidays for this year. Could I have them in December?</p>
              <p><strong>Employer:</strong> That's a possibility<strong> (1)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">provided </label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">unless</label></span>too many people decide to take them in December, too.</p>
              <p><strong>Employee: </strong>But<strong> (2)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">if</label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">provided</label></span>you know I am asking first, could I have the priority?</p>
              <p><strong>Employer:</strong>  Hmmm, the problem is that you have been working here for 7 months. That’s why I say that<strong> (3)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">unless</label></span>/<span class="c-textField ml10 mr10 mb10 mt10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">providing</label></span>other people with more years in the company don’t ask for the same dates, that will be ok.</p>
              <p><strong>Employee:</strong> I understand but what<strong> (4)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">if</label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">provided</label></span>they decide at the last moment?</p>
              <p><strong>Employer:</strong> Good point. I will tell them that<strong> (5)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">unless</label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">provided</label></span>they inform me before November 15, I cannot guarantee holidays in December.</p>
              <p><strong>Employee:</strong> I think that's fair. But, then,<strong> (6)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">if</label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">unless</label></span>they decide they really want their holiday in December, could I take them in January?</p>
              <p><strong>Employer:</strong> Sure,<strong> (7)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_13">providing</label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_14">unless</label></span>we have enough people to cover for the job. You need to understand that by law, you can only take your holidays<strong> (8)</strong><span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_15" name="tfInputRadio_8" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_15">provided</label></span>/<span class="c-textField ml10 mr10 mb10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_16" name="tfInputRadio_8" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_16">unless</label></span>you have a year in the company.</p>
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