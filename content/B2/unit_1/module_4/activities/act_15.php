
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5><strong class="u-textColor_4">1. </strong> Read and listen to the stories about two mysterious places in the world. Complete the sentences.</h5>
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 col-center mt30-md mt30-sm">
          <div class=" row ta-c mb30 showTo-md"><img class="u-responsive-img w60" src="unit_1/module_4/assets/images/act_15a.png" alt=""/></div>
          <h5>Machu Picchu</h5>
          <p class="ta-j line-h1">Five hundred years ago, Machu Picchu was a vibrant city high on a mountaintop in Peru. Archaeologists think it <strong>(1)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by the Incas around 1460 C.E. Then, in the early 1500s, Machu Picchu  <strong>(2)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span>.</strong>Thick jungle plants covered the city. It <strong>(3)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>for hundreds of years. The city  <strong>(4)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>in 1911 by the explorer Hiram Bingham. But why did the Incas leave the city? Was there a war or some terrible disease? No one knows. The full story of Machu Picchu remains a mystery.</p>
        </div>
        <div class="col-flex-sm12 col-flex-md5 offset-md1 col-center mt30-md mt30-sm">
          <div class=" row ta-c mb30 showTo-md"><img class="u-responsive-img w60" src="unit_1/module_4/assets/images/act_15b.png" alt=""/></div>
          <h5>Altamira Cave</h5>
          <p class="ta-j line-h1">In 1875, animal bones and ancient black-wall paintings <strong>(5)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by a Spanish nobleman named Marcelino de Sautuola in Altamira Cave in Spain. Years later in 1879, he returned with his twelve-year-old daughter Maria. She noticed colorful paintings of bulls and other animals on the ceiling. Human handprints <strong>(6)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>on the walls of the cave. Today archaeologists think the paintings and prints <strong>(7)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>by hunters who lived about 16,000 years ago. But no one is sure exactly why they<strong>(8)  <span class="c-textField">
                <input class="c-input js-escribir" type="text" placeholder="Text here..."/></span></strong>there.</p>
        </div>
        <div class="col-flex-sm8 col-flex-md6 col-center mt30-md mt30-sm">
          <audio class="centrado" src="unit_1/module_4/assets/audios/act_15.mp3" preload="auto" controls="controls">
            <p>Tu navegador no implementa el elemento audio.</p>
          </audio>
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