
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper self_5">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row row-flex mt30">
        <p>The table below shows <strong>the cinema viewing statistics by country origin and genre (in millions)</strong>. Summarize the information by selecting and reporting the main ideas and make comparisons where relevant. Minimum 150 words.</p>
        <table class="c-table-estilo_tres m-a">
          <thead>
            <tr>
              <th class="w15 u-bgColor_white"></th>
              <th class="w15">Action</th>
              <th class="w15">Romance</th>
              <th class="w15">Comedy</th>
              <th class="w15">Horror</th>
              <th class="w15">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="u-bgColor_4-dark u-textWhite">India</th>
              <td class="ta-c">8</td>
              <td class="ta-c">7,5</td>
              <td class="ta-c">6,5</td>
              <td class="ta-c">2,5</td>
              <td class="ta-c">24,5</td>
            </tr>
            <tr>
              <th class="u-bgColor_4-dark u-textWhite">Ireland</th>
              <td class="ta-c">7,6</td>
              <td class="ta-c">3,8</td>
              <td class="ta-c">5,5</td>
              <td class="ta-c">6,4</td>
              <td class="ta-c">23,3</td>
            </tr>
            <tr>
              <th class="u-bgColor_4-dark u-textWhite">New Zealand</th>
              <td class="ta-c">7,2</td>
              <td class="ta-c">4,5</td>
              <td class="ta-c">3,9</td>
              <td class="ta-c">4,7</td>
              <td class="ta-c">20,3</td>
            </tr>
            <tr>
              <th class="u-bgColor_4-dark u-textWhite">Japan</th>
              <td class="ta-c">7,1</td>
              <td class="ta-c">4,5</td>
              <td class="ta-c">3,9</td>
              <td class="ta-c">4,7</td>
              <td class="ta-c">20,3</td>
            </tr>
            <tr>
              <th class="u-bgColor_4-dark u-textWhite">Total</th>
              <td class="ta-c">29,9</td>
              <td class="ta-c">20,3</td>
              <td class="ta-c">19,9</td>
              <td class="ta-c">15,8</td>
              <td></td>
            </tr>
          </tbody>
        </table>
        <div class="c-wrapTextarea " ng-init="ContadorPalabras(150)">
          <textarea class="campo c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
          <div class="c-wrapTextarea__counter"><span id="contador">0 </span><span ng-bind="limitePalabras"></span><span id="alertamensaje"></span></div>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconUpload" ng-click="enviarTexto()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>