
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
              <td class="ta-c padding10">Identify and use relative clauses with whose, whom and where.</td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio ml10" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_1">Whose house I visited, this is the man.</label>
              </td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio ml10" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_2">This is the man whose his house I visited.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_3">This is the man whose house I visited.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_4" type="radio" name="selInputRadio_1" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_4">This is the man he whose house I visited.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>2</strong></td>
              <td class="ta-c padding10">Identify and use collocations with come and keep.</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_5" type="radio" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_5">Keep a promise.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_6" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_6">Keep a meal.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_7" type="radio" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_7">Keep a joke.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_8" type="radio" name="selInputRadio_2" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_8">Keep a speech.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>3</strong></td>
              <td class="ta-c padding10">Identify and use formal and informal registers.</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_9" type="radio" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_9">Where is more formal than when.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_10" type="radio" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_10">Whom is more formal than who.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_11" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_11">That is more formal than who.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_12" type="radio" name="selInputRadio_3" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_12">Whose is more formal than that.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>4</strong></td>
              <td class="ta-c padding10">Take initiative in interaction and encourage contributions from others.</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_13" type="radio" name="selInputRadio_4" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_13">OK.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_14" type="radio" name="selInputRadio_4" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_14">Sorry.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_15" type="radio" name="selInputRadio_4" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_15">Goodbye.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_16" type="radio" name="selInputRadio_4" value="4"/>
                <label class="c-Checkbox ml10" for="inputRadio_16">Really?</label>
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