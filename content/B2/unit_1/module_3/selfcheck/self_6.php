
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Listen to the dialogue and complete the missing words.</h5>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md5 col-center showTo-md">
            <div class="row"><img class="u-responsive-img centrado" src="./unit_1/module_3/assets/images/sel_6.png" alt="" srcset=""/></div>
          </div>
          <div class="col-flex-sm12 col-flex-md7 col-center"> 
            <button class="c-btn-Icon u-bgIconListen mt30" ng-audio="unit_1/module_3/assets/audios/sel_6.mp3"></button>
            <div class="row mt30">
              <p> <strong>Andrés: </strong>  I feel terrible! I forgot my mother’s birthday!</p>
              <p> <strong>Edna:	</strong> You <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>the date on your agenda.</p>
              <p><strong>Andrés:	</strong> Well, I know. But you<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span> me!</p>
              <p><strong>Edna:	</strong>I forgot, too. </p>
              <p><strong>Andrés:	</strong>I <span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>her a present.</p>
              <p><strong>Edna:</strong> And what happened with your brothers!</p>
              <p><strong>Andrés:	</strong>I know! They<span class="c-textField">
                  <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>me!</p>
              <p> <strong>Edna:	</strong>Well, let’s stop regretting. Let’s call her!</p>
              <p>  <strong>Andrés:	</strong>But it’s 10:00 PM.</p>
              <p><strong>Edna:	</strong>I am sure she will be happy to hear you!</p>
              <p><strong>Andrés:	</strong>Good idea. I will tell her we will take the present on Sunday.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="validarCompletartxt()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>