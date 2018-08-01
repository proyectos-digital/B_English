
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt10-xs mt30-md mt10-sm">
        <div class="col-flex-md7 col-flex-sm10 col-flex-xs12 col-center">
          <div class="mb20 row-flex">
            <p class="ta-j"><strong class="u-textColor_4-dark">• </strong> When I was younger, I <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_a"/></span> have a very hard time making new friends.</p>
          </div>
          <div class="mb20 row-flex">
            <p class="ta-j"><strong class="u-textColor_4-dark">• </strong> Before we had children, <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_b"/></span> go on vacation at least once a year.</p>
          </div>
          <div class="mb20 row-flex">
            <p class="ta-j"><strong class="u-textColor_4-dark">• </strong> When I started working, <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_c"/></span> have a motorcycle. I now own a car.</p>
          </div>
          <div class="mb20 row-flex">
            <p class="ta-j"><strong class="u-textColor_4-dark">• </strong> There <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_d"/></span> many parks in the city. But it´s now grown so much and they´ve constructed buildings in what used to be parks before.</p>
          </div>
          <div class="mb20 row-flex">
            <p class="ta-j"><strong class="u-textColor_4-dark">• </strong> My brother and I went hiking for the first time last year. It was great. Every day we <span class="c-textField">
                <input class="c-input ta-c js-escribir" type="text" placeholder="Text here..." ng-model="txtcaptura_e"/></span> get up early to climb new pikes.</p>
          </div>
        </div>
        <div class="col-flex-md4 col-flex-sm10 col-flex-xs12 col-center ta-c showTo-md"><img class="u-responsive-img" src="unit_2/module_8/assets/images/self_2.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>