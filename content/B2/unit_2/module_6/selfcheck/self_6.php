
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt30-md mt10-sm">
        <div class="col-flex-md4 showTo-md col-center"><img class="u-responsive-img" src="unit_2/module_6/assets/images/self_6.png" alt="image self 6" srcset=""/></div>
        <div class="col-flex-md8 col-flex-sm10 col-flex-xs12 col-center">
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>Do you know the girl  <strong class="ml5 mr5">(talk)  </strong><span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span>to Pedro? </div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>The money<strong class="ml5 mr5">(steal) </strong><span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span>in the robbery was never found.</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>Who was that man<strong class="ml5 mr5">(stand)</strong><span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span>outside?</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>Most of the products made in this factory are <strong class="ml5 mr5">(export)</strong><span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span></div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>When I arrived there was a big red car<strong class="ml5 mr5"> (park) </strong><span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span>outside the house.</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>What is the name of that music<span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_f"/></span><strong class="ml5 mr5"> (play) </strong>?</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>Look at those kids<span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_g"/></span><strong class="ml5 mr5"> (ride) </strong>their bikes!</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>The people<span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_h"/></span><strong class="ml5 mr5"> (photograph) </strong>in this picture don’t look very young…</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>The couple<span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_i"/></span><strong class="ml5 mr5"> (invite) </strong>to the reception were excellent hosts!</div>
          <div class="mb20 row-flex"><strong class="u-textColor_4-dark">•  </strong>One of the umbrellas<span class="c-textField">
              <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_j"/></span><strong class="ml5 mr5"> (find) </strong>in the library was mine!</div>
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