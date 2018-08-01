
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">                 
      <div class="row row-flex mt30">
        <p> What is your opinion? <strong>Some people think that instead of preventing climate change, we need to find a way to live with it. To what extent do you agree or disagree?</strong> Minimum 200 words.</p>
        <div class="row">
          <div class="col xs12 md6"><img class="u-responsive-img" src="unit_1/module_1/assets/images/test_4_1.png" alt=""/></div>
          <div class="col xs12 md6">
            <div class="c-wrapTextarea ">
              <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>