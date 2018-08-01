
<!-- ============================== templateContainer-->
<header class="template-header" ng-controller="CtrlHeader" ng-include="'../ngMaster/header.php'"></header>

<section class="template-wrapper">
  <aside class="template-asideLeft o-aside-Item"></aside>
  
  <div class="template-section m-a">
    <section class="template-content">
      <div class="col-flex-sm12 col-flex-md12 col-center mt50-md mt30-sm">
        <h5>Mark the option that does not belong in each group.</h5>
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
              <td class="ta-c padding10">Identify the difference between the future perfect and the future perfect continuous.</td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio ml10" id="inputRadio_1" type="radio" name="selInputRadio_1" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_1">By this time next year, her baby Will have turned 1 year old.</label>
              </td>
              <td class="ta-c padding10"> 
                <input class="c-inputRadio ml10" id="inputRadio_2" type="radio" name="selInputRadio_1" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_2">This building will have been going through renovations for 2 years by the end of the summer.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_3" type="radio" name="selInputRadio_1" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_3">I will be very happy if you can come to our anniversary celebration.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>2</strong></td>
              <td class="ta-c padding10">Identify and ask echo questions.</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_4" type="radio" name="selInputRadio_2" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_4">We use echo question to express surprise.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_5" type="radio" name="selInputRadio_2" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_5">We use echo questions to ask about personal information.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_6" type="radio" name="selInputRadio_2" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_6">We use echo questions to express interest.</label>
              </td>
            </tr>
            <tr>
              <td class="ta-c"><strong>3</strong></td>
              <td class="ta-c padding10">Understand the active and passive future.</td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_7" type="radio" name="selInputRadio_3" value="1"/>
                <label class="c-Checkbox ml10" for="inputRadio_7">I will be helped by her.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_8" type="radio" name="selInputRadio_3" value="2"/>
                <label class="c-Checkbox ml10" for="inputRadio_8">They will go hiking on their next vacation.</label>
              </td>
              <td class="ta-c padding10">
                <input class="c-inputRadio ml10" id="inputRadio_9" type="radio" name="selInputRadio_3" value="3"/>
                <label class="c-Checkbox ml10" for="inputRadio_9">An email will be written by the manager.</label>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  
  <aside class="template-asideRight o-aside-Item">
    <button class="c-btn-IconAction u-bgIconRefresh" ng-click="reloadClassMultiple()"></button>
    <button class="c-btn-IconAction u-bgIconCheck" ng-click="seleccionMultiSelf(2)"></button>
  </aside>
</section>       

<footer class="template-footer" ng-controller="CtrlFooter" ng-include="'../ngMaster/footer.php'"></footer>