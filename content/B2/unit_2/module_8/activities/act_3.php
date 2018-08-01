
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content u-animationFadeDown">
      <div class="row-flex">
        <div class="col-flex-xs10 col-flex-md5 col-center mt10-sm mt20-md m-a">
          <div class="row mb30 ta-c showTo-md f-l w80 ml15 mt15 m-a"><img class="u-responsive-img" src="unit_2/module_8/assets/images/act_3.png" alt=""/></div>
          <audio class="row" controls="controls">
            <source src="unit_2/module_8/assets/audios/act_3.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col-flex-xs10 col-flex-md5 col-center mt10-sm mt20-md m-a">
          <table class="c-table-estilo_tres mt20">
            <thead>  
              <tr>
                <th class="w60"> </th>
                <th class="w20">Still do today</th>
                <th class="w20">Don’t do today</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ta-c padding10">Grow corn</td>
                <td class="ta-c padding10"> 
                  <input class="c-inputRadio ml10" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_1"></label>
                </td>
                <td class="ta-c padding10"> 
                  <input class="c-inputRadio ml10" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_2"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-c padding10">Use oxen</td>
                <td class="ta-c padding10"> 
                  <input class="c-inputRadio ml10" id="inputRadio_3" type="radio" name="selInputRadio_2" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_3"></label>
                </td>
                <td class="ta-c padding10">
                  <input class="c-inputRadio ml10" id="inputRadio_4" type="radio" name="selInputRadio_2" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_4"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-c padding10">Live in houses made of bahareque.</td>
                <td class="ta-c padding10"> 
                  <input class="c-inputRadio ml10" id="inputRadio_5" type="radio" name="selInputRadio_3" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_5"> </label>
                </td>
                <td class="ta-c padding10">
                  <input class="c-inputRadio ml10" id="inputRadio_6" type="radio" name="selInputRadio_3" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_6"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-c padding10">Ride horses</td>
                <td class="ta-c padding10"> 
                  <input class="c-inputRadio ml10" id="inputRadio_7" type="radio" name="selInputRadio_4" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_7"></label>
                </td>
                <td class="ta-c padding10">
                  <input class="c-inputRadio ml10" id="inputRadio_8" type="radio" name="selInputRadio_4" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_8"> </label>
                </td>
              </tr>
              <tr>
                <td class="ta-c padding10">Wear shirts, jeans and sometimes boots</td>
                <td class="ta-c padding10"> 
                  <input class="c-inputRadio ml10" id="inputRadio_9" type="radio" name="selInputRadio_5" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_9"></label>
                </td>
                <td class="ta-c padding10">
                  <input class="c-inputRadio ml10" id="inputRadio_10" type="radio" name="selInputRadio_5" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_10"></label>
                </td>
              </tr>
              <tr>
                <td class="ta-c padding10">Go to “coleos”</td>
                <td class="ta-c padding10">
                  <input class="c-inputRadio ml10" id="inputRadio_11" type="radio" name="selInputRadio_6" value="1"/>
                  <label class="c-Checkbox ml10" for="inputRadio_11"></label>
                </td>
                <td class="ta-c padding10">
                  <input class="c-inputRadio ml10" id="inputRadio_12" type="radio" name="selInputRadio_6" value="2"/>
                  <label class="c-Checkbox ml10" for="inputRadio_12"></label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item"> 
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>