
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row-flex justify-between">
        <div class="xs12 md6 pr5">
          <h6>Read the following news article:</h6>
          <h6>Naked tourist upsets Cartagena</h6>
          <h6>written by Adriaan Alsema October 31, 2017</h6>
          <p class="ta-j">
            An allegedly drunken tourist has upset authorities in Cartagena after mounting a statue of one of Colombia’s most famous sculptors naked.
            The incident happened early Sunday morning on the colonial city’s Santo Domingo plaza, located in the heart of the city’s tourist district.
            A local tourism operator took photos of the naked man sitting on Fat Gertrudis, a statue donated in 2000 by sculptor Fernando Botero.
            The theme of incest in Colombia has been epitomized by the country’s Nobel Prize winner in his globally renowned masterpiece.
            <img class="u-responsive-img w40 mr10 mb10 mt10" align="left" src="unit_2/module_5/assets/images/col_5_1.png" alt="myColombia"/>                    
            
          </p>
          <p class="ta-j">There were four people, two men and two women. They were drunk and, probably because they did not see the police, one of them did not mind undressing and climbing the “fat lady”. I shouted: “Get off! Show some respect!” but he ignored it. I immediately called the police, but when they arrived the people had already left.</p>
          <h6 class="ta-r">Tourism worker Carlos Arteaga</h6>
          <hr class="mt30"/>
          <p class="ta-j">Police commander General Humberto Poveda told local media officers were trying to locate the tourist and could expel him and ban his return for 10 years for the act of indecency. <br/>Cartagena’s interim mayor called on locals to report misbehaving tourists.</p>
        </div>
        <div class="xs12 md6 pl5">
          <p class="ta-j">We do not want a predatory tourism that threatens the heritage of Cartagena and serves as a bad example for more vandalism. The call is to report so that the police authorities take immediate action and this type of tourists think twice before disrespecting the citizens’ environment.</p>
          <h6 class="ta-r">Interim Mayor Jhony Ordosgoitia</h6>
          <hr class="mt30"/>
          <p class="ta-j">The mayor stressed that “most tourists fortunately are decent” and warned he would talk to both tourism and police authorities to prevent incidents like the one on Sunday. Local shopkeepers have said that the square has been without police at night after a local government order to increase police presence around the Plaza de los Coches, which has seen an explosion of tourism.</p>
          <div class="col-center">
            <h6>Now give your opinion about the actions of the tourists and how it makes you feel. </h6>
            <div class="c-wrapTextarea">
              <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>