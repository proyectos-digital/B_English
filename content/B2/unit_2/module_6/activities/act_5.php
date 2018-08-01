
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5>How probable is this? Write 3, 2, or 1 depending on the possibility for this to happen.</h5>
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md ta-c"><img class="u-responsive-img m-a" src="unit_2/module_6/assets/images/act_5.png" alt=""/>
          <p class="mt30 c-blue-text1">3 = This will happen.</p>
          <p class="mt30 c-blue-text1">2 = This may happen.</p>
          <p class="mt30 c-blue-text1">1 = This won’t happen.</p>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>Scientists will find life on other planets.  <span class="c-textField">
                  <input class=" min-w100 ta-c c-input js-escribir" type="number" min="1" max="3" placeholder="Number here..." maxlength="1"/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>People will live in cities under the ocean.  <span class="c-textField">
                  <input class=" min-w100 ta-c c-input js-escribir" type="number" min="1" max="3" placeholder="Number here..." maxlength="1"/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>Schools will disappear, and everyone will learn at home with the Internet.  <span class="c-textField">
                  <input class=" min-w100 ta-c c-input js-escribir" type="number" min="1" max="3" placeholder="Number here..." maxlength="1"/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>International borders and passports won’t exist; we will all be citizens of the world.  <span class="c-textField">
                  <input class=" min-w100 ta-c c-input js-escribir" type="number" min="1" max="3" placeholder="Number here..." maxlength="1"/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>People will drive cars at age 10 and above.  <span class="c-textField">
                  <input class=" min-w100 ta-c c-input js-escribir" type="number" min="1" max="3" placeholder="Number here..." maxlength="1"/></span> </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark">• </strong>Our food will be made into pills – we won’t spend time cooking food.  <span class="c-textField">
                  <input class=" min-w100 ta-c c-input js-escribir" type="number" min="1" max="3" placeholder="Number here..." maxlength="1"/></span> </div>
            </div>
          </div>
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