
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row-flex align-items-center">
          <div class="col-center col xs12 md6 lh30 ta-j"><span> Last week, I went to the tutorial service at the closest UNAD office in Palmira. When I got there, the tutor asked me if he </span><strong><span class="u-textColor_4-dark">(1)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">can</option>
              <option value="2">could</option>
            </select><span> help me. I answered I </span><strong><span class="u-textColor_4-dark">(2)</span></strong>
            <select class="c-select" name="act_12_3">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">can’t</option>
              <option value="2">couldn’t</option>
            </select><span> understand irregular verbs. He told me I  </span><strong><span class="u-textColor_4-dark">(3)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">should</option>
              <option value="2">will</option>
            </select><span> review some grammar exercises and asked me to write examples of those verbs. He said I  </span><strong><span class="u-textColor_4-dark">(4)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">had to</option>
              <option value="2">have</option>
            </select><span> use verbs in sentences related with my real life. I asked him if I </span><strong><span class="u-textColor_4-dark">(5)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">could</option>
              <option value="2">will</option>
            </select><span> learn better by translating the sentences and he said that I   </span><strong><span class="u-textColor_4-dark">(6)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">shouldn’t</option>
              <option value="2">must </option>
            </select><span> translate because that    </span><strong><span class="u-textColor_4-dark">(7)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">could</option>
              <option value="2">shouldn’t </option>
            </select><span> delay my learning.</span><br/><span>Finally, I thanked him and asked if he </span><strong><span class="u-textColor_4-dark">(8)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">could</option>
              <option value="2">will </option>
            </select><span> have a cup of coffee with me. He didn’t accept because he was busy but he said that next time, we </span><strong><span class="u-textColor_4-dark">(9)</span></strong>
            <select class="c-select" name="act_12_2">
              <option value="" disabled="disabled" selected="selected"> </option>
              <option value="1">could</option>
              <option value="2">must</option>
            </select><span> have the coffee at the university.</span>
          </div>
          <div class="col-center col xs12 md6 ta-c"><img class="u-responsive-img" src="unit_3/module_12/assets/images/self_3_1.png" alt=""/></div>
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