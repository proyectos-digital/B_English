
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex mt100-xs mt10-md mt10-sm">
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row mb30 ta-c showTo-md"><img class="u-responsive-img w80 m-a" src="unit_1/module_2/assets/images/act_8_1.png" alt=""/></div>
        </div>
        <div class="col-flex-xs12 col-flex-md6 col-center mt10-sm mt100-md">
          <div class="row-flex">
            <h5><strong class="u-textColor_4">1. </strong>  Now answer the questions. Write complete sentences.</h5>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 1. </strong> How long will Gina and Leyla have been working for other people by the time they start their own company? 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuario"/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 2. </strong>What do they think they will have gained in 3 years’ time? 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariob"/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 3. </strong>What will Gina will have been working as for more than 5 years?
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuarioc"/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 4. </strong>What position has Leyla been holding for over 3 years at her current job? 
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuariod"/></span></div>
              </div>
            </div>
            <div class="mb20 row-flex mt20">
              <div class="col-flex"><strong class="u-textColor_4-dark"> 5. </strong>What will they have raised by the time they both quit their current jobs?  
                <div><span class="c-textField row">
                    <input class="c-input js-escribir row" type="text" placeholder="Text here..." ng-model="textousuarioe"/></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside is-visible" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_1/module_2/activities/act_8_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>