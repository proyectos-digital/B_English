
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper col_1" ng-init="s_actividad = 1">
  <aside class="template-asideLeft o-aside-Item">
    <button class="c-btn-IconAction" data-activities-count="1" ng-click="s_actividad = 1" ng-class="(s_actividad == 1) ? 'is-active' : '';"></button>
    <button class="c-btn-IconAction" data-activities-count="2" ng-click="s_actividad = 2" ng-class="(s_actividad == 2) ? 'is-active' : '';"></button>
  </aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 1">
      <div class="row">
        <div class="col xs12 sm11 col-center">
          <h5>Watch the following video:</h5>
          <div class="row mt20 col-center">
            <div class="c-contVideo">
              <video class="u-responsive-video" controls="controls">
                <source src="unit_2/module_5/assets/videos/col_1_1.mp4" type="video/mp4"/>
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="template-content u-animationFadeDown" ng-show="s_actividad == 2">
      <div class="row">
        <div class="col xs12 sm8 col-center">
          <h5>What type of vacation do you like?</h5><span>Tick the vacation that you would enjoy the most. You can choose as many as you want. </span>
          <table class="c-table-estilo_tres mt30 ta-c m-a">
            <tbody>
              <tr>
                <td class="ta-l"><strong>Camping in the Amazon on the “Wild Amazon adventure”.</strong></td>
                <td class="w10">
                  <input class="c-inputCheckbox" type="checkbox" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                  <label class="c-Checkbox w100 min-h40 mt0" for="inputRadio_1"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-l"><strong>Extreme sports, paintball, rock climbing, rafting at “X-treme Adventures”.</strong></td>
                <td class="w10">
                  <input class="c-inputCheckbox" type="checkbox" id="inputRadio_2" name="selInputRadio_2" value="2"/>
                  <label class="c-Checkbox w100 min-h40 mt0" for="inputRadio_2"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-l"><strong>The beach bunny package, sun sand and sea at “ The Caribbean beach hotel”.</strong></td>
                <td class="w10">
                  <input class="c-inputCheckbox" type="checkbox" id="inputRadio_3" name="selInputRadio_3" value="3"/>
                  <label class="c-Checkbox w100 min-h40 mt0" for="inputRadio_3"></label>
                </td>
              </tr>
              <tr> 
                <td class="ta-l"><strong>Enjoy city tours, museums, fine dining, tickets to the latest plays and theatre events in “A vacation for the sophisticated”.</strong></td>
                <td class="w10">
                  <input class="c-inputCheckbox" type="checkbox" id="inputRadio_4" name="selInputRadio_4" value="4"/>
                  <label class="c-Checkbox w100 min-h40 mt0" for="inputRadio_4"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-l"><strong>Visiting family and friend outside the city, spending time with family and friends.</strong></td>
                <td class="w10">
                  <input class="c-inputCheckbox" type="checkbox" id="inputRadio_5" name="selInputRadio_5" value="5"/>
                  <label class="c-Checkbox w100 min-h40 mt0" for="inputRadio_5"></label>
                </td>
              </tr>
            </tbody>
          </table>
          <h5>Why did you choose that vacation and who would you go with? </h5>
          <div class="c-wrapTextarea mt30">
            <textarea class="c-textarea h200" placeholder="Write here..." ng-model="textousuario"></textarea>
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
