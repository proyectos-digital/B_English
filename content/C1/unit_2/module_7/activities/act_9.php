
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_7" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <p>Sometimes you will have to sympathize with a person who has experienced pain or grief for the loss of someone dear to them. These are some of the phrases that you can use to express condolence in English.</p>
      <h6>Listen to the expressions and repeat them.</h6>
      <div class="row mt30">
        <div class="col xs12 md6">
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_1.mp3"></button><span class="ml10">I am deeply sorry to hear about the death of...</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_2.mp3"></button><span class="ml10">I am really sorry to hear about the death of...</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_3.mp3"></button><span class="ml10">I was heartbroken by the sad news.</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_4.mp3"></button><span class="ml10">Words can't express the sadness I feel about...</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_5.mp3"></button><span class="ml10">Words fall short of expressing my sadness.</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_6.mp3"></button><span class="ml10">Let me express my sorrow for the loss of...</span>
          </div>
        </div>
        <div class="col xs12 md6">
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_7.mp3"></button><span class="ml10">Please accept our heartfelt condolences.</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_8.mp3"></button><span class="ml10">We will never forget...</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_9.mp3"></button><span class="ml10">We will always remember...</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_10.mp3"></button><span class="ml10">We will sadly miss...</span>
          </div>
          <div class="row-flex align-items-center mt20">
            <button class="c-btn-IconAction u-bgIconListen" ng-audio="unit_2/module_7/assets/audios/act_9_11.mp3"></button><span class="ml10">Sorry, I am at a loss for words to express my sadness.</span>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-show="s_actividad == 2"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-show="s_actividad == 2"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>