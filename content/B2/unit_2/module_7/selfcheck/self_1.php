
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="row">
        <table class="c-table-SelfCheck mt20">
          <thead>  
            <tr>
              <th class="w5"> </th>
              <th class="w30">LANGUAGE</th>
              <th class="w15"> </th>
              <th class="w15"> </th>
              <th class="w15"> </th>
              <th class="w15"> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ta-c"><strong>1</strong></td>
              <td class=" ta-c">Identify and use reported speech.</td>
              <td class="ta-c"> 
                <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox" for="inputRadio_1">Jane asked us to close the door.</label>
              </td>
              <td class="ta-c"> 
                <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox" for="inputRadio_2">Jane said to close the door.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox" for="inputRadio_3">“Close the door, please.”</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_1" value="4"/>
                <label class="c-Checkbox" for="inputRadio_4">Jane asked us not to close the door.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>2</strong></td>
              <td class="ta-c">Identify and use collocations with go and get.</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox" for="inputRadio_5">Get cleaned up.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox" for="inputRadio_6">Go mad.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox" for="inputRadio_7">Get angry.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_2" value="4"/>
                <label class="c-Checkbox" for="inputRadio_8">Don’t go.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>3</strong></td>
              <td class="ta-c">Identify and use linking words.</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox" for="inputRadio_9">Although.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox" for="inputRadio_10">Even though.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox" for="inputRadio_11">Must.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_3" value="4"/>
                <label class="c-Checkbox" for="inputRadio_12">Despite.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>4</strong></td>
              <td class="ta-c">Identify and use verbs with prepositions followed by gerunds.</td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_4" value="1"/>
                <label class="c-Checkbox" for="inputRadio_13">Planning on going.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_4" value="2"/>
                <label class="c-Checkbox" for="inputRadio_14">Planning on making.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_4" value="3"/>
                <label class="c-Checkbox" for="inputRadio_15">Planning on go.</label>
              </td>
              <td class="ta-c">
                <input class="c-inputRadio" id="inputRadio_16" type="radio" name="selInputRadio_4" value="4"/>
                <label class="c-Checkbox" for="inputRadio_16">Planning on having.</label>
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