
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper act_10">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <h5 class="mb20">Read the following text and complete the table.</h5>
      <div class="row-flex mt10-xs mt10-md">
        <div class="col-flex-xs12 col-flex-md9 col-center showTo-md "><img class="u-responsive-img ancho220 ml20 mr20" src="unit_2/module_8/assets/images/act_10a.png" alt=""/><img class="u-responsive-img ancho220 ml20 mr20" src="unit_2/module_8/assets/images/act_10b.png" alt=""/><img class="u-responsive-img ancho220 ml20 mr20" src="unit_2/module_8/assets/images/act_10c.png" alt=""/></div>
        <div class="col-flex-xs12 col-flex-md12 col-center mt10-sm">
          <div class="row-flex mt10-xs mt10-md">
            <div class="col-flex-xs12 col-flex-md7 col-center mt10-sm padding10">
              <div class="c-cardGreen">
                <div class="c-cardGreenContent ta-c ">
                  <p>Iceland is a Nordic island country between the North Atlantic and the Arctic Ocean. The capital and largest city is Reykjavík. The settlement of Iceland began in 874 CE when the Norwegian Ingólfr Arnarson became the first permanent settler on the island. In the following centuries, Scandinavians settled Iceland. From 1262 to 1918, Iceland was ruled by Norway and later Denmark. The country became independent in 1918 and a republic in 1944.</p>
                  <p>Until the 20th century, Iceland relied largely on fishing and agriculture. After World War II, Iceland became one of the wealthiest and most developed nations in the world. In 1994, Iceland became party to the European Economic Area, which supported diversification into economic and financial services. Icelandic culture is founded upon the nation’s Scandinavian heritage. Most Icelanders are descendants of Germanic and Gaelic settlers. Icelandic, a North Germanic language, is descended from Old Norse and is closely related to Faroese and West Norwegian dialects.</p>
                  <p>The country’s cultural heritage includes traditional Icelandic cuisine, Icelandic literature and medieval sagas. Iceland has the smallest population of any NATO member and is the only one with no standing army, its lightly armed coast guard being in charge of defense.</p>
                </div>
              </div>
            </div>
            <div class="col-flex-xs12 col-flex-md5 col-center mt10-sm padding10">
              <div class="c-blue-text1">Before reading the text I thought…</div><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuario"/></span>
              <div class="c-blue-text1">While reading the text I thought…</div><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuariob"/></span>
              <div class="c-blue-text1">Then I thought…</div><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuarioc"/></span>
              <div class="c-blue-text1">After reading the text I think…</div><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuariod"/></span>
              <div class="c-blue-text1">Now I know that…</div><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuarioe"/></span>
              <div class="c-blue-text1">I would like to learn more about…</div><span class="c-textField mt10 mb10">
                <input class="c-input js-escribir" type="text" placeholder="Text here..." ng-model="textousuariof"/></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClass()"></button>
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTextoMultiple()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>