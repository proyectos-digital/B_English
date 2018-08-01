
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">                 
      <div class="row row-flex mt30">
        <div class="col xs12 md6">
          <h5>You have 40 minutes for this task.</h5>
          <p class="u-textColor_2">Global warming is one of the most serious issues that the world is facing today. What are the causes of global warming and what measures can governments and individuals take to tackle the issue?</p>
          <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.<br/> <strong>Minimum 250 words</strong>.</p>
          <div class="c-wrapTextarea ">
            <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
          </div>
        </div>
        <div class="col xs12 md6"><img class="u-responsive-img" src="unit_1/module_1/assets/images/test_4_1.png" alt=""/></div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>