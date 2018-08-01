
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-sm10 col-flex-md6 col-center mt10-sm">
          <h5><strong class="u-textColor_4">1. </strong>  Write an appropriate echo question for each statement.</h5>
          <div class="row mb30 ta-c showTo-md"><img class="c-figure w70 mt30" src="unit_1/module_2/assets/images/act_11a.png" alt=""/></div>
          <div class="row-flex">
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong> I have a terrible backache. 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>The project wasn’t good enough.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-sm10 col-flex-md6 col-center mt10-sm">
          <div class="row-flex">
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong> She isn’t going to watch this movie. 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>Graciela hasn’t been to Popayan yet.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>Mike didn’t enter the competition.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 6. </strong>We haven’t read the report yet.
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20 w100">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 7. </strong>My cousin works for a car company. 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..."/></span></div>
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