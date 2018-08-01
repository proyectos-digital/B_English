
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h6>Decide if the words in bold can be omitted or not.</h6>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center showTo-md"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_15.png" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md7 col-center mt30"> 
            <div class="row-flex justify-end">  
              <p><strong class="u-textColor_4-dark">Can be omitted?</strong></p>
            </div>
            <div class="row-flex justify-between mt30">
              <p><strong class="u-textColor_4-dark">1.</strong>   He gave me the letter, <strong>which was in a yellow envelope.</strong></p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_1">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_2">No</label></span></div>
            </div>
            <div class="row-flex justify-between mt20">
              <p> <strong class="u-textColor_4-dark">2.</strong> He gave me the letter <strong>that was in a blue envelope.</strong></p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_3">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_4">No</label></span></div>
            </div>
            <div class="row-flex justify-between mt20">
              <p><strong class="u-textColor_4-dark">3.</strong> Mrs. Jackson, <strong>who is very intelligent, </strong>lives on the corner.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_5">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_6">No</label></span></div>
            </div>
            <div class="row-flex justify-between mt20">
              <p><strong class="u-textColor_4-dark">4.</strong> The document <strong>that I need </strong>has "important" written at the top.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_7">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_8">No</label></span></div>
            </div>
            <div class="row-flex justify-between mt20">
              <p><strong class="u-textColor_4-dark">5.</strong> John's mother, who lives in Scotland, has 6 grandchildren.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_9">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_10">No</label></span></div>
            </div>
            <div class="row-flex justify-between mt20">
              <p class="w70"><strong class="u-textColor_4-dark">6.</strong> Frank Zappa, <strong>who was one of the most creative artists in rock'n roll</strong>, came from California.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_11" name="tfInputRadio_6" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_11">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_12" name="tfInputRadio_6" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_12">No</label></span></div>
            </div>
            <div class="row-flex justify-between mt20">
              <p class="w70"><strong class="u-textColor_4-dark">7.</strong> She always had wanted to go to Cauca <strong>where she could speak </strong>her native tongue.</p>
              <div class="row-flex justify-center"><span class="c-textField mr10">
                  <input class="c-inputRadio" type="radio" id="inputRadio_13" name="tfInputRadio_7" value="1"/>
                  <label class="c-CheckSelected" for="inputRadio_13">Yes</label></span><span class="c-textField">
                  <input class="c-inputRadio" type="radio" id="inputRadio_14" name="tfInputRadio_7" value="2"/>
                  <label class="c-CheckSelected" for="inputRadio_14">No</label></span></div>
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