
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 mt50-md mt30-sm">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent padding20">Thank you for buying your vacation package with us! Our package holiday is in the beautiful city of Cali. You will be met at the airport by our representative and taken to your hotel in a luxury town car. Your luggage will be taken to your room for you, so you don´t have to worry about carrying heavy suitcases. You are invited to the welcome cocktail at the hotel´s bar the day of your arrival. We also suggest you try the hotel´s restaurant, which is well known in the city for its fine menu and service. All our meals are prepared with the finest ingredients and by the best chefs in the region.</div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 mt50-md mt30-sm">
          <div class="row mb20">
            <h5><strong class="u-textColor_4">1. </strong> Now complete the statements.</h5>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong>You will be met <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> by  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>. </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>You will be taken <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> in <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>. </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>Your luggage will be taken  <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>Your meals will be prepared <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>.</div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>You are invited <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>.</div>
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