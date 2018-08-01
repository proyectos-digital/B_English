
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex align-items-center">
        <div class="col-flex-sm12 col-flex-md5 col-center">
          <h6><strong class="u-textColor_4">1. </strong> Read and listen to the text about Jay White. Then complete the table by identifying the verb forms in the text and writing them in the correct column</h6>
          <button class="c-btn-Icon u-bgIconListen mt30 centrado" ng-audio="unit_2/module_5/assets/audios/act_14.mp3"></button>
          <div class="c-cardGreen">
            <div class="c-cardGreenContent">
              <p>
                 Jay White has always wanted to be a writer. He wrote his first story when he was five and sent it into a competition - it won! After he had won the competition he started writing every day. His first book was published in 1979 when he was only 12. "I'd been writing for several years but I was still really excited when my first book came out."</p>
              <p>Since then he has written more than thirty books. Last year he entered another competition. He chose to enter a book he had written when he was only nine. Why did he choose this particular book? "I'd been thinking about this story for a long time. Although I was only nine when I wrote it, I thought it was one of the best stories I have ever created.”</p>
            </div>
          </div>
        </div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center"> 
          <div class="row"><img class="u-responsive-img centrado w80" src="./unit_2/module_5/assets/images/act_14_1.png" alt="" srcset=""/></div>
          <div class="row-flex justify-center mt30">
            <table class="c-table-estilo_uno centrado ta-c">
              <thead>
                <tr>
                  <th>Past Perfect</th>
                  <th>Past Perfect Continuous</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="w50"> <span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                  <td class="w50"> <span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td> <span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                  <td> <span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                </tr>
                <tr>
                  <td> <span class="c-textField">
                      <input class="c-input js-escribir h30" type="text" placeholder="Text here..."/></span></td>
                  <td> </td>
                </tr>
              </tbody>
            </table>
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
