
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <h5><strong class="u-textColor_4">1. </strong> Read the study tip below. </h5>
        <p>Click on the icon to hear it.</p>
        <div class="row-flex align-items-center">
          <div class="col-flex-sm12 col-flex-md6 col-center">
            <div class="row mt20">
              <button class="c-btn-Icon u-bgIconListen centrado mt30" ng-audio="unit_2/module_5/assets/audios/act_17.mp3"></button><img class="u-responsive-img centrado mt30" src="./unit_2/module_5/assets/images/act_17.png" alt="" srcset=""/>
            </div>
          </div>
          <div class="col-flex-sm12 col-flex-md6 col-center"> 
            <div class="mt20">
              <p><strong class="u-textColor_4-dark">New vocabulary can be learned by identifying contextual clues. </strong></p>
              <p><strong class="u-textColor_4-dark">Look for these clues while reading:</strong></p>
              <ul class="c-listDefault mt30">
                <li class="u-textColor_4"> <strong class="u-textColor_1-dark">Types of words: </strong><span class="u-textColor_1-dark"> identify verbs, nouns, adverbs, and adjectives. Nouns provide insights into verbs. Verbs offer clues about a noun’s meaning. Verbs and nouns also provide insights into other words within the sentence.</span></li>
                <li class="u-textColor_4"><strong class="u-textColor_1-dark">Surrounding words:</strong><span class="u-textColor_1-dark">  words surrounding unfamiliar terms provide indications about their meaning.</span></li>
                <li class="u-textColor_4"><strong class="u-textColor_1-dark">Verb Tenses: </strong><span class="u-textColor_1-dark"> they indicate whether an event is currently taking place, happened in the past or will take place in the future.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>       
  
  <aside class="template-asideRight o-aside-Item"></aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>
