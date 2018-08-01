
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_2">
  <aside class="template-asideRight o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex s-actividad u-animationFadeDown">
        <div class="row align-items-center">
          <div class="row">
            <h5>Read the study tip below. Click on the icon to hear it.</h5>
          </div>
          <div class="row">
            <div class="col-center col xs12 md7 ta-c mt50 mb50"><img class="u-responsive-img m-a" src="unit_2/module_7/assets/images/act_17.png" alt="act_17"/></div>
            <div class="col-center col xs12 md8 ta-c">
              <div class="c-cardBlue ">
                <div class="c-cardBlueContent ta-j lh-20"> 
                  <p>One of the best ways to make learning memorable, that is, easy to remember is to make connections between the new learning and something you already knew or have firsthand experience of. <br/> <br/> When learning something new, think of something you can relate to the new ideas or concepts to something that comes to your mind from your own experiences or your previous knowledge. These connections will help you remember the new information better and in the long term.</p>
                </div>
              </div>
              <button class="c-btn-Icon u-bgIconListen centrado" ng-audio="unit_2/module_7/assets/audios/act_17.mp3"></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>

<div class="c-noticeAside" id="notice">
  <article class="c-noticeAside-body" ng-include="'unit_2/module_7/activities/act_16_notice_'+ idNotice +'.php'"></article>
  <footer class="c-noticeAside-footer">
    <button class="c-btn-IconAction u-bgIconClose closeNotice"> </button>
  </footer>
</div>