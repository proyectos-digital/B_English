
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col xs12 md6">
            <div class="col-center col xs12 sm10 md8 lg11 lh-20 ta-l">    
              <p class="mb30"><strong class="u-textColor_4-dark">1</strong> I agree with
                <select class="c-select c-textField" name="act_7_1">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">design</option>
                  <option value="2">work</option>
                  <option value="3">play</option>
                  <option value="4">win</option>
                  <option value="5">make</option>
                </select><span> darts with you in the competition.</span>
              </p>
              <p class="mb30"><strong class="u-textColor_4-dark">2</strong> I wanted to congratulate you on
                <select class="c-select c-textField" name="act_7_2">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">design</option>
                  <option value="2">work</option>
                  <option value="3">play</option>
                  <option value="4">win</option>
                  <option value="5">make                                </option>
                </select><span>such a good speech.</span>
              </p>
              <p class="mb30"><strong class="u-textColor_4-dark">3</strong> The firm specialized in
                <select class="c-select c-textField" name="act_7_3">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">design</option>
                  <option value="2">work</option>
                  <option value="3">play</option>
                  <option value="4">win</option>
                  <option value="5">make </option>
                </select><span>websites for universities such as UNAD.</span>
              </p>
              <p class="mb30"><strong class="u-textColor_4-dark">4</strong> You must get used to
                <select class="c-select c-textField" name="act_7_4">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">design</option>
                  <option value="2">work</option>
                  <option value="3">play</option>
                  <option value="4">win</option>
                  <option value="5">make </option>
                </select><span>long hours when you study online. </span>
              </p>
              <p class="mb30"><strong class="u-textColor_4-dark">5</strong> He doesn’t rely on
                <select class="c-select c-textField" name="act_7_5">
                  <option value="" disabled="disabled" selected="selected"> </option>
                  <option value="1">design</option>
                  <option value="2">work </option>
                  <option value="3">play</option>
                  <option value="4">win</option>
                  <option value="5">make </option>
                </select><span>in the casino.</span>
              </p>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30 showTo-md"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/self_5.png" alt="act_13"/></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()">     </button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="selectOption()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside " id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/self_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>