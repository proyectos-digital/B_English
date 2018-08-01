
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
            <div class="col x8 md10 col-center ta-c mt30 mb30"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/self_6.png" alt="act_12"/></div>
          </div>
          <div class="col xs12 md6">
            <div class="col-center col xs12 md11 lh-20 ta-j"><strong><span class="u-textColor_4-dark">(1)</span></strong>
              <select class="c-select" name="act_12_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">Even though</option>
                <option value="2">In spite of</option>
                <option value="3">Although</option>
              </select><span> all the limitations I had in my childhood in Siloé in Cali, I think I am an example of how people in my neighborhood can be successful.  </span><strong><span class="u-textColor_4-dark">(2)</span></strong>
              <select class="c-select" name="act_12_3">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">Although</option>
                <option value="2">In spite</option>
                <option value="3">Despite</option>
              </select><span> this is considered one of the most dangerous places in Cali, I had the opportunity to study in a public school in the area. My teacher of English taught me that  </span><strong><span class="u-textColor_4-dark">(3)</span></strong>
              <select class="c-select" name="act_12_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">In spite</option>
                <option value="2">Even though</option>
                <option value="3">Despite</option>
              </select><span> English was a difficult subject, I could be totally bilingual if I studied hard. That’s what I did  </span><strong><span class="u-textColor_4-dark">(4)</span></strong>
              <select class="c-select" name="act_12_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">Even though</option>
                <option value="2">Despite</option>
                <option value="3">In Spite of</option>
              </select><span> of he taught the class only in English, I could understand most of the things he said. I was able to finish all the levels </span><strong><span class="u-textColor_4-dark">(5)</span></strong>
              <select class="c-select" name="act_12_2">
                <option value="" disabled="disabled" selected="selected"> </option>
                <option value="1">Although</option>
                <option value="2">In Spite of</option>
                <option value="3">Despite</option>
              </select><span> I didn’t have the textbooks and I didn’t have the chance to practice with anybody.                        </span>
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