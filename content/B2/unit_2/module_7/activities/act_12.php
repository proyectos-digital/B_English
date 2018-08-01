
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="row">                  
            <h5>Read and choose the right word to complete the story.</h5>
          </div>
          <div class="col xs12 md6">
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_12.png" alt="act_12"/></div>
            <div class="col-center col xs12 md11 lh-20 ta-j"><span>There are three separate sources of hazards related to the use of nuclear reactors to supply us with   energy. Firstly, the radioactive material must travel from its place of manufacture to the power station in containers that are not solidly built, </span><strong><span class="u-textColor_4-dark">(1)</span></strong>
              <select class="c-select" name="act_12_1">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">despite</option>
                <option value="2">although</option>
                <option value="3">even though</option>
              </select><span> everything they say about them being perfectly safe. Unfortunately, the two normal methods of transport, road or rail, both involve</span>
            </div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 md11 lh-20 ta-j"><span>contact with the general public, because the routes are bound to pass near, or even through, highly populated areas. </span><br/><br/><br/><span>Secondly, there is the problem of waste. The waste that all nuclear power stations produce will, in most cases, remain radioactive for thousands of years and cannot be deactivated, so they must be stored. </span><strong><span class="u-textColor_4-dark">(2)</span></strong>
              <select class="c-select" name="act_12_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">despite</option>
                <option value="2">although</option>
                <option value="3">in spite of</option>
              </select><span> they are buried under the ground, dropped into disused mineshafts or sunk in the sea, the waste is still dangerous. These methods don’t solve the problem, they merely store it, and an earthquake could crack open the containers like nuts. </span><br/><br/><br/><strong><span class="u-textColor_4-dark">(3)</span></strong>
              <select class="c-select" name="act_12_3">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">Even though</option>
                <option value="2">despite</option>
                <option value="3">in spite of</option>
              </select><span> there is the risk of accidental exposure due to a leak or an explosion at a power station, we don’t hear much about the conditions of power plants. But </span><strong><span class="u-textColor_4-dark">(4)</span></strong>
              <select class="c-select" name="act_12_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">in spite of</option>
                <option value="2">even though</option>
                <option value="3">although</option>
              </select><span> all measures taken, we know of accidents that have happened in plants in different countries.</span>
            </div>
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

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_1_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>