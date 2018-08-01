
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm mt20-md">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img w60 m-a" src="unit_1/module_4/assets/images/self_3_1.png" alt=""/></div>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent padding20">
              <p class="ta-j">Our dog is part of our family. It was born in Soacha five years ago. It was named King by my sister, because it is full of energy. A few weeks after it was born, it was vaccinated against rabbis and other diseases. Since it needs a lot of exercise, it is taken for long walks every day for an hour. At the beginning we had some difficulties with the food. The dog got really sick and it was prescribed some medicine. Now it is fed with special dog food and it is really well. It is really nice to have a dog like King at home!</p>
            </div>
          </div>
        </div>
        <div class="col-flex-xs12 col-flex-md5 offset-md1 col-center mt10-sm mt20-md">
          <div class="row-flex">
            <p>• Read the following sentences and change them to the active voice as in the example:</p>
            <p><strong>For example:</strong></p>
            <table class="c-table-default">
              <tbody>
                <tr>
                  <td>The dog was named King.</td>
                  <td>My sister named the dog “King”.</td>
                </tr>
              </tbody>
            </table>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark "> 1. </strong>It was vaccinated against rabbis and other diseases. </div><span class="c-textField w100 row flex"><span class="ml20 mt10 pb10 mr10">The doctor</span>
                <input class="c-input js-escribir w70" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>It is taken for long walks every day for an hour. </div><span class="c-textField w100 row flex"> <span class="ml20 mt10 pb10 mr10">My sister</span>
                <input class="c-input js-escribir w70" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>It was prescribed some medicine.</div><span class="c-textField w100 row flex"> <span class="ml20 mt10 pb10 mr10">The veterinary </span>
                <input class="c-input js-escribir w70" type="text" placeholder="Text here..."/></span>
            </div>
            <div class="mb20 row mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>It is fed with special dog food. </div><span class="c-textField w100 row flex"> <span class="ml20 mt10 pb10 mr10">We </span>
                <input class="c-input js-escribir w70" type="text" placeholder="Text here..."/></span>
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