
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row-flex">
        <div class="col-flex-sm12 col-flex-md5 col-center mt30-md mt30-sm"><img class="u-responsive-img w90 showTo-md  mt30" src="unit_2/module_8/assets/images/act_16a.png" alt=""/>
          <audio class="row mt30" controls="controls">
            <source src="unit_2/module_8/assets/audios/act_16.mp3" type="audio/mpeg"/>Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col-flex-sm12 col-flex-md5 col-center mt30-md mt30-sm">
          <table class="c-table row" data-ejercicio="table-truefalse">
            <thead>
              <tr>
                <th> </th>
                <th>true</th>
                <th>false</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1. There were a couple of windows at the end of the kitchen.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_1" name="selInputRadio_1" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_1"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_2" name="selInputRadio_1" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_2"></label></span></td>
              </tr>
              <tr>
                <td>2. There´s another apartment across the courtyard.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_3" name="selInputRadio_2" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_3"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_4" name="selInputRadio_2" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_4"></label></span></td>
              </tr>
              <tr>
                <td>3. Mrs. Bell lives in the apartment across the courtyard.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_5" name="selInputRadio_3" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_5"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_6" name="selInputRadio_3" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_6"></label></span></td>
              </tr>
              <tr>
                <td>4. The boy likes Mrs.’s Bells cookies.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_7" name="selInputRadio_4" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_7"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_8" name="selInputRadio_4" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_8"></label></span></td>
              </tr>
              <tr>
                <td>5. Mrs. Bell lives alone.</td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_9" name="selInputRadio_5" value="1"/>
                    <label class="c-CheckTrue" for="inputRadio_9"></label></span></td>
                <td><span>
                    <input class="c-inputRadio" type="radio" id="inputRadio_10" name="selInputRadio_5" value="2"/>
                    <label class="c-CheckFalse" for="inputRadio_10"></label></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconListen"></button>
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>