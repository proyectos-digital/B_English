
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item" ng-init="s_actividad = 1">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 col-center mt50-md mt30-sm ta-j">
          <p>Thirty years ago, Robert Zemeckis had the premier of his film “Back to the Future” starring MichaelFox. This is very interesting because in the second version of this film, the characters are taken 30 years later, that is October 2015. Here are some of the predictions they made in 1985 and what really happened in 2015.</p>
          <p>Jules Verne did something similar: In his futuristic books, he described machines that were created later on. Here is a list: Submarines, the space shuttle, and airplanes. Imagine that you are Jules Verne. Write one prediction about any of these machines. Send your prediction to your teacher: </p><img class="u-responsive-img w90 mt20 mb20 m-a showTo-md" src="unit_1/module_2/assets/images/self_6b.png" alt=""/>
        </div>
        <div class="col-flex-sm12 col-flex-md6 offset-md1 col-center mt50-md mt30-sm">
          <table class="c-table-estilo_tres m-a">
            <thead>  
              <tr>
                <th>What they said in 1985: “In 2015…”</th>
                <th>What we say today</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ancho200 ta-c">Cars will fly over the cities.</td>
                <td class="ancho200 ta-c">We have some prototypes of cars that fly but they have not been approved.</td>
              </tr>
              <tr>
                <td class="ancho200 ta-c">There will be a skateboard that will fly.</td>
                <td class="ancho200 ta-c">Some scientists have developed a skateboard that can “float” over a magnetic field.</td>
              </tr>
              <tr>
                <td class="ancho200 ta-c padding10">Shoes and jackets will adjust automatically.</td>
                <td class="ancho200 ta-c padding10">Both products have been developed by Nike but the shoes and the jacket don’t accommodate to people’s bodies automatically.</td>
              </tr>
              <tr>
                <td class="ancho200 ta-c padding10">There will be special glasses to see data and access computers.</td>
                <td class="ancho200 ta-c padding10">These glasses are already in the market. You can access information from your own computer or mobile.</td>
              </tr>
              <tr>
                <td class="ancho200 ta-c padding10">People will have video calls.</td>
                <td class="ancho200 ta-c padding10">This has been used for some time. Skype and FaceTime are two examples.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2" ng-init="ContadorPalabras(200)">
      <div class="row-flex">
        <div class="col-flex-sm6 col-flex-md4 col-center mt50-md mt30-sm ta-j"><img class="u-responsive-img w90 m-a" src="unit_1/module_2/assets/images/self_10.png" alt=""/></div>
        <div class="col-flex-sm12 xs12 col-flex-md7 offset-md1 col-center mt50-md mt30-sm">
          <div class="row-flex">
            <h6><strong class="u-textColor_4">2. </strong> Jules Verne did something similar: In his futuristic books, he described machines that were created later on. Here is a list: Submarines, the space shuttle, and airplanes. Imagine that you are Jules Verne; write one prediction about any of these machines. <strong>Write 200 words</strong><br/>Send your prediction to your teacher:</h6>
            <div class="c-wrapTextarea ">
              <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
              <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()" ng-show="s_actividad == 2"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>