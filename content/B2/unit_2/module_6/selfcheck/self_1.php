
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="col-flex-sm12 col-flex-md12 col-center mt50-md mt30-sm">
        <table class="c-table-SelfCheck mt20">
          <thead>  
            <tr>
              <th class="w5"> </th>
              <th class="w35">LANGUAGE</th>
              <th class="w20"> </th>
              <th class="w20"> </th>
              <th class="w20"> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="ta-c"><strong>1</strong></td>
              <td class="ta-c padding10">Identify and use phrasal verbs</td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox" for="inputRadio_1">Grow up</label>
              </td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox" for="inputRadio_2">Pick up</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox" for="inputRadio_3">Have to</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_4" type="radio" name="selInputRadio_1" value="4"/>
                <label class="c-Checkbox" for="inputRadio_4">Give up</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>2</strong></td>
              <td class="ta-c padding10">Express certainty, probability and doubt</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_5" type="radio" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox" for="inputRadio_5">This can’t be happening.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_6" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox" for="inputRadio_6">She might arrive late.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_7" type="radio" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox" for="inputRadio_7">You should not forget your materials</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_8" type="radio" name="selInputRadio_2" value="4"/>
                <label class="c-Checkbox" for="inputRadio_8">There could be life in other planets.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>3</strong></td>
              <td class="ta-c padding10">Identify and use “even”</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_9" type="radio" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox" for="inputRadio_9">Doubt</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_10" type="radio" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox" for="inputRadio_10">Comparisons</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_11" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox" for="inputRadio_11">Flat</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_12" type="radio" name="selInputRadio_3" value="4"/>
                <label class="c-Checkbox" for="inputRadio_12">Surprise</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>4</strong></td>
              <td class="ta-c padding10">Identify and use ing/ed clauses</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_13" type="radio" name="selInputRadio_4" value="1"/>
                <label class="c-Checkbox" for="inputRadio_13">Houses surrounded by trees</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_14" type="radio" name="selInputRadio_4" value="2"/>
                <label class="c-Checkbox" for="inputRadio_14">Plants grew all over.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_15" type="radio" name="selInputRadio_4" value="3"/>
                <label class="c-Checkbox" for="inputRadio_15">Plants growing all over.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio" id="inputRadio_16" type="radio" name="selInputRadio_4" value="4"/>
                <label class="c-Checkbox" for="inputRadio_16">Houses surrounding by trees.</label>
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