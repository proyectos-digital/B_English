
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md6 col-center">
          <div class="row-flex flex-column"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_10_1.png" alt="" srcset=""/><img class="u-responsive-img centrado mt20" src="./unit_3/module_9/assets/images/act_10_2.png" alt="" srcset=""/></div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 col-center"> 
          <h6>Choose the right word to complete the sentences.</h6>
          <div class="row mt30">
            <p> <strong class="u-textColor_4-dark">1.</strong> This exercise is <span class="c-textField ml10 mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_1" name="tfInputRadio_1" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_1">Like</label></span><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_2" name="tfInputRadio_1" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_2">As</label></span>a personal lesson in grammar.</p>
          </div>
          <div class="row mt20">
            <p> <strong class="u-textColor_4-dark">2.</strong> He is acting<span class="c-textField ml10 mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_3" name="tfInputRadio_2" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_3">Like</label></span><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_4" name="tfInputRadio_2" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_4">As</label></span>the manager while the real manager is on holidays.</p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">3.</strong> He smokes<span class="c-textField ml10 mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_5" name="tfInputRadio_3" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_5">Like</label></span><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_6" name="tfInputRadio_3" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_6">As</label></span>a chimney.</p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">4.</strong> I work<span class="c-textField ml10 mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_7" name="tfInputRadio_4" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_7">Like</label></span><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_8" name="tfInputRadio_4" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_8">As</label></span>a teacher for students who are learning to practice French.</p>
          </div>
          <div class="row mt20">
            <p><strong class="u-textColor_4-dark">5.</strong> The bread tastes<span class="c-textField ml10 mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_9" name="tfInputRadio_5" value="1"/>
                <label class="c-CheckSelected" for="inputRadio_9">Like</label></span><span class="c-textField mr10">
                <input class="c-inputRadio" type="radio" id="inputRadio_10" name="tfInputRadio_5" value="2"/>
                <label class="c-CheckSelected" for="inputRadio_10">As</label></span>it was made three weeks ago. Are you sure it is from today?</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1">
      <button class="c-btn-IconAction u-bgIconInfoActivity is-active openNotice" ng-click="idNotice = 2"></button>
    </button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_3/module_9/activities/act_10_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>