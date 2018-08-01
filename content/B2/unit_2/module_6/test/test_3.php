
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="mb20 row-flex mt20 xs12">
              <div class="col-flex">
                <p><strong class="u-textColor_4-dark">• </strong> Water is cold, but ice is colder.</p>
                <p class="row c-textField">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/>
                </p>
              </div>
            </div>
            <div class="mb20 row-flex mt20 xs12">
              <div class="col-flex">
                <p><strong class="u-textColor_4-dark">• </strong> My sister really wants to go to the movies tonight. She offered to pay for me.</p>
                <p class="row c-textField">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/>
                </p>
              </div>
            </div>
            <div class="mb20 row-flex mt20 xs12">
              <div class="col-flex">
                <p><strong class="u-textColor_4-dark">• </strong> We all laughed at the joke. My grumpy brother was smiling.  </p>
                <p class="c-textField row">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <div class="mb20 row-flex mt20 xs12">
              <div class="col-flex">
                <p><strong class="u-textColor_4-dark">• </strong> We should leave now. We aren´t supposed to be here.</p>
                <p class="c-textField row">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/>
                </p>
              </div>
            </div>
            <div class="mb20 row-flex mt20 xs12">
              <div class="col-flex">
                <p><strong class="u-textColor_4-dark">• </strong> I am not good at cooking. I can´t make toast.</p>
                <p class="c-textField row">
                  <input class="c-input js-escribir w100" type="text" placeholder="Text here..."/>
                </p>
              </div>
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