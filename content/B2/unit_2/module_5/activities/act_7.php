
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a" ng-init="DragandDrop()">
    <section class="template-content">
      <div class="row">
        <h5> </h5>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center">
            <div class="c-cardGreen mt40">
              <div class="c-cardGreenContent"> 
                <p>
                   Juan Gossain is a journalist and writer from Cartagena.  
                  For many years he <strong>had been planning</strong> to write about current events. 
                  Prior to joining RCN, he <strong>had not been writing</strong> at all because he was working for Caracol. It took him around 20 years to do what he <strong>had planned</strong> for his life and now he writes very interesting articles about current events and culture in Colombia.
                </p>
              </div>
            </div>
            <div class="row"><img class="u-responsive-img centrado" src="./unit_2/module_5/assets/images/act_7.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
            <div class="row-flex justify-around">
              <div class="dragCont">
                <div class="drag">Had + subject + been + ing</div>
              </div>
              <div class="dragCont">
                <div class="drag">Had + been + ing</div>
              </div>
              <div class="dragCont">
                <div class="drag">Had + not + been + ing</div>
              </div>
            </div>
            <div class="row">
              <div class="row-flex justify-around  mt30">
                <div class="u-wordsComplete">Affirmative </div><span class="drop w60"></span>
              </div>
              <div class="row-flex justify-around mt30">
                <div class="u-wordsComplete">Negative</div><span class="drop w60"></span>
              </div>
              <div class="row-flex justify-around mt30">
                <div class="u-wordsComplete">Question</div><span class="drop w60"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction openNotice is-active u-bgIconAlert" ng-click="idNotice = 1"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadDragandDrop()"></button>
    <button class="c-btn-IconAction u-bgIconCheck"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_5/activities/act_7_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"></button>
  </footer>
</div>