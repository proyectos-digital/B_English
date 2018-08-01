
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-top">
          <div class="row ta-c">                  
            <h5 class="row mb40">You are going out on a day trip and you’re taking some items with you. What might you need them for? Match the pictures with their possible use. I’m taking this item with me…                      </h5>
          </div>
          <div class="col xs6 md4 ta-c mt30"><img class="u-responsive-img mb20" src="unit_3/module_12/assets/images/act_8_1.png" alt="act_5"/>
            <select class="col xs10 col-center c-select" name="act_8_1">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">because if there’s a change I can get lost.</option>
              <option value="2">because it could be very sunny.</option>
              <option value="3">because it could rain in the afternoon.</option>
              <option value="4">because I might get hungry.</option>
              <option value="5">in case I need to make a phone call.</option>
              <option value="6">because I might want to take some photos.</option>
            </select>
          </div>
          <div class="col xs6 md4 ta-c mt30"><img class="u-responsive-img mb20" src="unit_3/module_12/assets/images/act_8_2.png" alt="act_5"/>
            <select class="col xs10 col-center c-select" name="act_8_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">because if there’s a change I can get lost.</option>
              <option value="2">because it could be very sunny.</option>
              <option value="3">because it could rain in the afternoon.</option>
              <option value="4">because I might get hungry.</option>
              <option value="5">in case I need to make a phone call.</option>
              <option value="6">because I might want to take some photos.</option>
            </select>
          </div>
          <div class="col xs6 md4 ta-c mt30"><img class="u-responsive-img mb20" src="unit_3/module_12/assets/images/act_8_3.png" alt="act_5"/>
            <select class="col xs10 col-center c-select" name="act_8_3">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">because if there’s a change I can get lost.</option>
              <option value="2">because it could be very sunny.</option>
              <option value="3">because it could rain in the afternoon.</option>
              <option value="4">because I might get hungry.</option>
              <option value="5">in case I need to make a phone call.</option>
              <option value="6">because I might want to take some photos.</option>
            </select>
          </div>
          <div class="col xs6 md4 ta-c mt30"><img class="u-responsive-img mb20" src="unit_3/module_12/assets/images/act_8_4.png" alt="act_5"/>
            <select class="col xs10 col-center c-select" name="act_8_4">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">because if there’s a change I can get lost.</option>
              <option value="2">because it could be very sunny.</option>
              <option value="3">because it could rain in the afternoon.</option>
              <option value="4">because I might get hungry.</option>
              <option value="5">in case I need to make a phone call.</option>
              <option value="6">because I might want to take some photos.</option>
            </select>
          </div>
          <div class="col xs6 md4 ta-c mt30"><img class="u-responsive-img mb20" src="unit_3/module_12/assets/images/act_8_5.png" alt="act_5"/>
            <select class="col xs10 col-center c-select" name="act_8_5">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">because if there’s a change I can get lost.</option>
              <option value="2">because it could be very sunny.</option>
              <option value="3">because it could rain in the afternoon.</option>
              <option value="4">because I might get hungry.</option>
              <option value="5">in case I need to make a phone call.</option>
              <option value="6">because I might want to take some photos.</option>
            </select>
          </div>
          <div class="col xs6 md4 ta-c mt30"><img class="u-responsive-img mb20" src="unit_3/module_12/assets/images/act_8_6.png" alt="act_6"/>
            <select class="col xs10 col-center c-select" name="act_8_6">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">because if there’s a change I can get lost.</option>
              <option value="2">because it could be very sunny.</option>
              <option value="3">because it could rain in the afternoon.</option>
              <option value="4">because I might get hungry.</option>
              <option value="5">in case I need to make a phone call.</option>
              <option value="6">because I might want to take some photos.</option>
            </select>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadSelectOption()">       </button>
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