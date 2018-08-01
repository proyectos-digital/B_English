
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content"> 
      <div class="row">
        <h6 class="ta-c">Read the study tip below. Click on the icon to hear it.</h6>
        <div class="row-flex align-items-center mt60">
          <div class="col-flex-sm12 col-flex-md6 col-center pr20 pl20"><img class="u-responsive-img centrado" src="./unit_3/module_9/assets/images/act_17_1.jpg" alt="" srcset=""/></div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="c-cardGreen"> 
              <div class="c-cardGreenContent">
                <p>Keep your mind opened to new ideas when writing. Practice brainstorming, mapping and outlining. Put down thoughts that come to mind. They may be useful later. The more you write the more you generate new ideas.</p>
                <p>Your first draft does not have to be perfect. Put your thoughts on the paper, and then straighten them out grammatically. The creativity that comes from writing down thoughts as quickly as they come to you is valuable.</p>
              </div>
            </div>
            <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_3/module_9/assets/audios/act_17.mp3"></button>
          </div>
        </div>
      </div>
    </section>
  </div>                  
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>