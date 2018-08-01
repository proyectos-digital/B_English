
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a self_8">
    <section class="template-content">
      <div class="col-flex-sm12 col-flex-md12 col-center mt50-md mt30-sm">
        <h5>I can express certainty, probability, and doubt.</h5>
        <p>How certain are you? Read the following passages. Based on the evidence provided, you have to decide if these things are possible and/or real.</p>
        <p>Tick in the box of the case you think is possible.</p>
        <table class="c-table-estilo_tres mt20">
          <thead>  
            <tr>
              <th class="showTo-md sm1"> </th>
              <th class="xs7 sm8">CASE</th>
              <th class="xs5 sm3">POSSIBLE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="showTo-md ta-c"><strong>1</strong></td>
              <td class="ta-c">Scientists have identified that honey was used in medicine in ancient Egypt. They even say that some diseases may have been cured with honey. They even found some traces of honey in mommies.</td>
              <td class="ta-c"> 
                <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox margin0" for="inputRadio_1"></label>
              </td>
            </tr>
            <tr>
              <td class="showTo-md ta-c"><strong>2</strong></td>
              <td class="ta-c">Some of the Nazca stones found in Peru may have been organized by unidentified flying objects. This is what the president of the UFO/OVNI organization declared yesterday in a press conference in Peru.</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox margin0" for="inputRadio_2"></label>
              </td>
            </tr>
            <tr>
              <td class="showTo-md ta-c"><strong>3</strong></td>
              <td class="ta-c">Some archeologists suggest that the Sacred City in Sierra Nevada was abandoned due to a disease that attacked the aborigines. They have found viruses in most of the skeletons found in the area</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox margin0" for="inputRadio_3"></label>
              </td>
            </tr>
            <tr>
              <td class="showTo-md ta-c"><strong>4</strong></td>
              <td class="ta-c">A chemical company argues that a cream initially created to cure scars might have rejuvenated the skin in some patients. They haven’t got the license from INVIMA put they say that the cream is miraculously effective.</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_4" value="4"/>
                <label class="c-Checkbox margin0" for="inputRadio_4"></label>
              </td>
            </tr>
            <tr>
              <td class="showTo-md ta-c"><strong>5</strong></td>
              <td class="ta-c">Many people think that drinking pineapple in the mornings may have been responsible for curing some diseases such as cancer in some terminal patients in the area of Corozal, Sucre.</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_5" value="5"/>
                <label class="c-Checkbox margin0" for="inputRadio_5"></label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMulti()"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>