
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt30-md mt10-sm">
        <div class="col-flex-md4 showTo-md col-center"><img class="u-responsive-img" src="unit_2/module_6/assets/images/self_5.png" alt="image self 6" srcset=""/></div>
        <div class="col-flex-md8 col-flex-sm10 col-flex-xs12 col-center">
          <div class="mb20 row-flex">
            <div class="col-flex">
              <p><strong class="u-textColor_4-dark"> 1. </strong>The second attempt proved <strong>even </strong> more successful than the first.</p>
            </div>
            <div class="col-flex-xs5"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_1">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_2">INCORRECT</label></span></div>
          </div>
          <div class="mb20 row-flex">
            <div class="col-flex flex">
              <p><strong class="u-textColor_4-dark"> 2. </strong>You can do this <strong>even so </strong> there has been an acquittal in the criminal court.</p>
            </div>
            <div class="col-flex-xs5"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_2" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_5">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_2" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_6">INCORRECT</label></span></div>
          </div>
          <div class="mb20 row-flex">
            <div class="col-flex">
              <p><strong class="u-textColor_4-dark"> 3. </strong><strong>Even though </strong> the price of gas is starting to come down, many people are choosing to take the bus or the train instead.</p>
            </div>
            <div class="col-flex-xs5"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_3" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_3">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_3" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_4">INCORRECT</label></span></div>
          </div>
          <div class="mb20 row-flex">
            <div class="col-flex"> 
              <p><strong class="u-textColor_4-dark"> 4. </strong>The Oscar-winning actress says she is determined to become a mother <strong>even if </strong> she cannot conceive naturally.</p>
            </div>
            <div class="col-flex-xs5"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_7">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_8">INCORRECT</label></span></div>
          </div>
          <div class="mb20 row-flex">
            <div class="col-flex"> 
              <p><strong class="u-textColor_4-dark"> 5. </strong>They’re very good friends <strong>even if </strong> there are many differences between them.</p>
            </div>
            <div class="col-flex-xs5"><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_9">CORRECT</label></span><span class="c-textField">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_10">INCORRECT</label></span></div>
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