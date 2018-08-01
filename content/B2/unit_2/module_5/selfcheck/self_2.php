
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md4 col-center showTo-md">
            <div class="row mt20"><img class="u-responsive-img u-f-l" src="./unit_2/module_5/assets/images/sel_2_1.png" alt="" srcset=""/><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/sel_2_2.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md7 offset-md1 col-center"> 
            <div class="row">
              <p class="u-txtSpace">I work as an office assistant in Ecopetrol. I had two intense days at the office between Tuesday and Wednesday last week. I went home after working for almost 12 hours a day. I<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(work)</strong> so hard that I didn’t want to go out. My boss had given us lots of fast food while we were working. I <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(eat) </strong> so much that I didn’t want to have dinner. I went to bed around 7:00 pm. The next day, when my friend Catalina called me, I<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(sleep)</strong> for ten hours! We have been friends with Catalina for a long time. When we met, I<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span><strong>(work)</strong> in this company for six months!</p>
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
