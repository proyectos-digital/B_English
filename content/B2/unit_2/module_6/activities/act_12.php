
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>Complete the sentences by choosing a verb from the box and writing it in the correct form. Use the pictures as cues.</h5>
      <div class="row-flex mt40 ">
        <div class="col-flex-sm12 col-flex-md4 col-center padding20">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent flex align-items-center justify-center ">
              <p>Paint | Sit | Chase | Break | Drink</p>
            </div>
          </div>
          <div class="col xs12 sm6 col-center"><img class="u-responsive-img " src="unit_2/module_6/assets/images/act_12_1.png" alt=""/></div>
          <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 1. </strong>This is a woman <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> water.</p>
        </div>
        <div class="col-flex-sm12 col-flex-md4 col-center padding20">
          <div class="col xs12 sm6 col-center"><img class="u-responsive-img  mt30" src="unit_2/module_6/assets/images/act_12_2.png" alt=""/></div>
          <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 2. </strong>This is a picture <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> by Van Gogh.</p>
          <div class="col xs12 sm6 col-center"><img class="u-responsive-img " src="unit_2/module_6/assets/images/act_12_3.png" alt=""/></div>
          <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 3. </strong>This is a man <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> by a dog.</p>
        </div>
        <div class="col-flex-sm12 col-flex-md4 col-center padding20">
          <div class="col xs12 sm6 col-center"><img class="u-responsive-img  mt30" src="unit_2/module_6/assets/images/act_12_4.png" alt=""/></div>
          <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 4. </strong>I didn’t talk much to the man <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> next to me on the plane.</p>
          <div class="col xs12 sm6 col-center"><img class="u-responsive-img " src="unit_2/module_6/assets/images/act_12_5.png" alt=""/></div>
          <p class="mt20 centrado"> <strong class="u-textColor_4-dark"> 5. </strong>The <span class="c-textField">
              <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> window hasn’t been repaired.    </p>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>