
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex col-center align-items-center">
        <div class="row col xs12 md10 col-center">
          <div class="c-cardGreen">
            <div class="c-cardGreenContent ta-c">
              <p class="lh30">When trying to understand a text, it is always a good idea to ask yourself a few questions, which will help you with comprehension and understanding of the context. Here are some examples of comprehension questions you can ask:  <br/><br/> What point is the writer making? <br/><br/> Why is this detail relevant? <br/><br/> Is the author trying to answer a particular question? <br/><br/> What can I learn from this text?</p>
            </div>
          </div>
          <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_3/module_12/assets/audios/act_17_1.mp3"></button>
        </div>
      </div>
    </section>
  </div>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_12/activities/act_15_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>